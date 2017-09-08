<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use App\Models\Person;
use Exception;
class SolicitudEmpleo extends Person  {
	private $db;
	private $table="solicitudempleo";

	public function __construct(){
		// var_dump(DatabaseConfig::$default);exit;
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}

	public function cambiarStatus($opcion,$solicitudempleo_id){
		$isOk=FALSE;
		// var_dump($opcion);exit;
		switch ($opcion) {
			case 'enviar_rh': 		$status_id=2; break;
			case 'pendiente': 		$status_id=3; break;
			case 'no_contratar': 	$status_id=4; break;
			case 'cancelar': 		$status_id=6; break;


		}

		try{
		$stm = $this->pdo->prepare("update solicitudempleo set status_id=? where solicitudempleo_id= ? ");
		$stm->execute([$status_id,$solicitudempleo_id]);
		$isOk=TRUE;
		} catch(Exception $e){
			$result['error'] = "SolicitudEmpleo::cambiarStatus() - ".$e->getMessage();
		}
		
		return $isOk;

	}


	public function getContrato($solicitudempleo_id) : array{
		try {

			$stm = $this->pdo->prepare('select * from empresa where empresa_id=1 ');
			$stm->execute();
			$empresa = $stm->fetchAll();
            $empresa = json_decode(json_encode($empresa[0]), True);

			$stm = $this->pdo->prepare('select curp,concat(nombre," ",apellidop," ",apellidom) as fullname, domicilio from solicitudempleo where solicitudempleo_id= ? ');
			$stm->execute([$solicitudempleo_id]);
			$postulante = $stm->fetchAll();
            $postulante = json_decode(json_encode($postulante[0]), True);

			$stm = $this->pdo->prepare('select * from contrato where contrato_id=1 ');
			$stm->execute();
			$contrato = $stm->fetchAll();
            $contrato = json_decode(json_encode($contrato[0]), True);
            
		} catch(Exception $e){

			  echo $result['error'] = $e->getMessage(); 
			};

			$result['contrato']=$contrato;
			$result['empresa']= $empresa;
			$result['postulante']=$postulante;
			// var_dump($result);exit;
		return $result;

	}

	public function getStatusList() : array{
		try {

			$stm = $this->pdo->prepare('select * from solicitudempleostatus ');
			$stm->execute();

			$results = $stm->fetchAll();
            
            // var_dump($result);exit;
            $results = json_decode(json_encode($results), True);
            // echo "<pre>";
            // var_dump($results);
            // echo "</pre>";     
            foreach ($results as $key => $value) {
            	$result[$value['solicitudempleostatus']]=$value;
            	//$result[$key]=[$key=>$value];
            }
            // echo "<pre>";
            // var_dump($result);exit;
            // echo "</pre>";
            // $stm->debugDumpParams();exit;
            
		} catch(Exception $e){

			  $result['error'] = $e->getMessage(); 
			};


		return $result;

	}
	
	public function crearSolicitudEmpleo ($form){
		// static $result = 0;

		// echo $person_id;exit;
		try {

			$stm = $this->pdo->prepare('insert into '.$this->table.' (person_id,puesto_id) values(:person_id,:puesto_id)');
			$stm->execute(array(
				':person_id'=>$person_id,
				':puesto_id'=>2
				));
			// $result = $stm->fetchAll();
			$result = $this->pdo->lastInsertId();

            //$result = json_decode(json_encode($result), True);     

		} catch(Exception $e){

			  $result['error'] = $e->getMessage(); exit;
			}
		return $result;

	}
	public function checkCurp($curp) {
		try {

			
			$stm = $this->pdo->prepare('SELECT solicitudempleo_id from solicitudempleo where curp="'.$curp.'" AND status_id BETWEEN 1 AND 4');
			$stm->execute();
			$results = $stm->fetchAll();
            $results = json_decode(json_encode($results), True);     
             if (count($results)) { $result['error'][]= " Ya existe una solicitud Abierta.";}
            
            $stm = $this->pdo->prepare('SELECT empleado_id, concat( nombre," ",apellidop," ", apellidom) as fullname from empleado join person on person.person_id=empleado.person_id  where curp="'.$curp.'" AND activo=1 LIMIT 1');
			$stm->execute();
			$empleado = $stm->fetchAll();
            $empleado = json_decode(json_encode($empleado[0]), True);     
            if ($empleado) {$result['error'][]= " Ya existe un empleado activo [".$empleado['empleado_id']."-".ucwords($empleado['fullname'])."]";}
            

		} catch(Exception $e){

			$result['error'][] = "SolicitudEmpleo::checkCurp - ".$e->getMessage(); 
			};
             // $stm->debugDumpParams();exit;

			// var_dump(count($result));
             	return $result['error'];

	}

	public function getSolicitudesEmpleo($fields ="*",$status_id=0) : array{
		static $result = [];
		if (!$status_id) $status_condicion= NULL;
			else $status_condicion=' where T.status_id='.$status_id;		// echo $status_id;

		try {

			// $stm = $this->pdo->prepare('select '.$fields.' from '.$this->table.',puesto ,estudiosmax
			// 		where  puesto.puesto_id='.$this->table.'.puesto_id
			// 		AND estudiosmax.estudiosmax_id='.$this->table.'.estudiosmax_id AND '.$this->table.'.status_id='.$status_id);

			 

			$stm = $this->pdo->prepare('
				SELECT '.$fields.' 
				FROM  '.$this->table.' T  
				LEFT JOIN puesto P ON T.puesto_id=P.puesto_id
				LEFT JOIN solicitudempleostatus S on T.status_id=S.solicitudempleostatus_id
				LEFT JOIN estudiosmax E ON T.estudiosmax_id=E.estudiosmax_id
				'.$status_condicion
				);
			$stm->execute();
			$result = $stm->fetchAll();
            $result = json_decode(json_encode($result), True);     
			

		} catch(Exception $e){

			 $result['error'] = "SolicitudEmpleo::getSolicitudEmpleo - ".$e->getMessage(); 
			};
            //  $stm->debugDumpParams();exit;

		return $result;
	}
	


	public function getSolicitudEmpleo($id) : array{
		static $result = [];
		try {

			$stm =$this->pdo->prepare ('select * from solicitudempleostatus WHERE solicitudempleostatus_id between 1 AND 3');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['solicitudempleostatus']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from genero');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['generos']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from puesto');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['puestos']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from estudiosmax order by estudiosmax_id ASC');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['estudiosmax']= json_decode(json_encode($respuesta), True);
			
			// var_dump($result);
			// $stm->debugDumpParams();



			// $stm = $this->pdo->prepare('select * from '.$this->table.',puesto 
			// 	where '.$this->table.'.'.$this->table.'_id= ? aND puesto.puesto_id='.$this->table.'.puesto_id');


			///************************ CAMBIAR AQUI POR LEFT JOIN

			$stm = $this->pdo->prepare('select * 
				from '.$this->table.' 
				LEFT JOIN solicitudempleostatus SDS ON SDS.solicitudempleostatus_id='.$this->table.'.status_id 
				where '.$this->table.'.'.$this->table.'_id= ? ');
			$stm->execute([$id]);
			// echo "<BR><BR>";
			$results = $stm->fetchAll();
            $results = json_decode(json_encode($results	), True);    
            $result['model'] = $results[0]; 
			// var_dump($results);exit;
		   
			$stm = $this->pdo->prepare('SELECT * from codigo where cp = ? ');
			$stm->execute([$result['model']['cp']]);
			$results = $stm->fetchAll();
			$result ['codigos'] = json_decode(json_encode($results), True); 
			
			// echo "<pre>";
			// var_dump($result['model']['cp']);
			// var_dump($result['codigos']);	
			
		} catch(Exception $e){

			echo $result['error'] = "SolicitudEmpleo::getSolicitudEmpleo - ".$e->getMessage(); exit;
			}
			// $stm->debugDumpParams();exit;
			
			// var_dump($result['puesto']);exit;
		return $result;
	}

		public function getSolicitudEmpleoByCurp($curp) : array{
		static $result = [];
		try {

			$stm =$this->pdo->prepare ('select * from puesto');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['puestos']= json_decode(json_encode($respuesta),true);

			// var_dump($result['puestos']);
			$stm =$this->pdo->prepare ('select * from estudiosmax order by estudiosmax ASC');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['estudiosmax']= json_decode(json_encode($respuesta), True);

			$stm = $this->pdo->prepare('select * from '.$this->table.',estudiosmax,puesto 
				where curp= ?  AND estudiosmax.estudiosmax_id='.$this->table.'.estudiosmax_id 
				AND  '.$this->table.'.puesto_id=puesto.puesto_id ');
			$stm->execute([$curp]);

			$models= $stm->fetchAll();
			// var_dump($models[0]);
            $result ['model']= json_decode(json_encode($models[0]), True);   
            // var_dump($result['model']);
			// $stm->debugDumpParams();


		} catch(Exception $e){

			 echo $result['error'] = $e->getMessage();
			}
            // var_dump($result['model']);

		return $result;
	}



	public function createSolicitudEmpleo($form) : int{
		static $result = [];
		// echo "hola";
		//var_dump($form);

		foreach ($_POST as $key => $value) {
			$fields .=  ", ".$key;
			$values .=  ",:".strtolower($key) ;
		}
		$values =  substr($values,1);
		$fields = substr($fields,1);


		$this->pdo->beginTransaction();
		try {
				$form['puesto_id']="2";$form['turno_id']="1";$form['estatura']="170";$form['peso']="65";$form['peso']="0";
			
			$stm = $this->pdo->prepare('insert into '.$this->table.' ( '.$fields.') values ('.$values.')');

			foreach ($_POST as $key => $value) {
				// echo "<br>:$key - $value";
			$stm->bindParam(':'.$key, strtolower($value));
		}
			$stm->execute();
			$id = $this->pdo->lastInsertId();

			$this->pdo->commit();

			// $result = $stm->fetchAll();
            // $result = json_decode(json_encode($result), True);     
		} catch(Exception $e){

			$this->pdo->rollBack();
			 $result['error'] = $e->getMessage();
			// $stm->debugDumpParams();


			};

		return $id;
	}





}