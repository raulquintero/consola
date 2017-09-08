<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use App\Models\Person;
use Exception;
use Libs\Traits\Data;

class Empleado extends Person  {
	use Data;
	private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getEmpleados() : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select empleado_id,nombre,apellidop,apellidom,puesto,sucursal 
				from empleado
				inner join person on empleado.person_id=person.person_id
				inner join puesto on empleado.puesto_id=puesto.puesto_id
				inner join sucursal on sucursal.sucursal_id=empleado.sucursal_id');
			$stm->execute();

			$result = $stm->fetchAll();
            
            $result = json_decode(json_encode($result), True);     

            
		} catch(Exception $e){

			 $result['error'] = "Empleado::getEmpleados - ".$e->getMessage();
			};

		return $result;
	}

	public function getEmpleado($id) : array{
		static $result = [];
		try {

		
			// var_dump($result['puestos']);
			$stm =$this->pdo->prepare ('select solicitudempleo_id,created_at from solicitudempleo where empleado_id=? order by created_at ASC');
			$stm ->execute([$id]);
			$respuesta = $stm->fetchAll();
			$fechas= json_decode(json_encode($respuesta), True);
			foreach ($fechas as $fecha) {
				$values = explode(" ", $fecha['created_at']);
				$result['solicitudesempleo'][]=[
					'solicitudempleo_id'=>$fecha['solicitudempleo_id'],
					'created_at'=>$values[0]
					];
			}

			$stm = $this->pdo->prepare('select * from empleado,person,puesto,estudiosmax 
				where empleado.person_id=person.person_id AND  empleado.empleado_id= ? 
				AND puesto.puesto_id=empleado.puesto_id AND estudiosmax.estudiosmax_id=empleado.estudiosmax_id');
			$stm->execute([$id]);
			$results = $stm->fetchAll();
            $results = json_decode(json_encode($results	), True);    
            $result['model'] = $results[0]; 
            
		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};
		return $result;
	}

		public function getEmpleadoByCurp($curp){
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from empleado,person 
				where empleado.person_id=person.person_id AND  person.curp= ? ');
			$stm->execute([$curp]);

			$result = $stm->fetchAll();
            $result = json_decode(json_encode($result), True);   
            $result=$result[0];  

		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};
		return $result;
	}

	// public function getPersonByCurp($curp) : array{
	// 	static $result = [];
	// 		$result = ['curp'=>$curp];
	// 	try {

	// 		$stm = $this->pdo->prepare("select * from person where curp= ? limit 1 ");
	// 		$stm->execute([$curp]);
	// 		if ($stm->rowCount()) {
	// 			$result = $stm->fetchAll();
	// 			$result = json_decode(json_encode($result), True);     
	// 		}
	// 	} catch(Exception $e){

	// 		 $result['error'] = $e->getMessage();
	// 		};
	// 	return $result;
	// }


	public function createEmployee($form) : int{
		static $result = [];
		// echo "hola";
		//var_dump($form);

		$this->pdo->beginTransaction();
		try {
				$form['puesto_id']="2";$form['turno_id']="1";$form['estatura']="170";$form['peso']="65";$form['peso']="0";
			$stm = $this->pdo->prepare('insert into person (curp,nombre,apellidop,apellidom,fecha_nac) values (:curp,:nombre,:apellidop,:apellidom,:fecha_nac)');
			$stm->bindParam(':curp', $form['curp']);
			$stm->bindParam(':nombre', $form['nombre']);
			$stm->bindParam(':apellidop', $form['apellidop']);
			$stm->bindParam(':apellidom', $form['apellidom']);
			$stm->bindParam(':fecha_nac', $form['fecha_nac']);
			$stm->execute();
			$person_id = $this->pdo->lastInsertId();
			echo "<br> ID: ".$person_id;
			$stm = $this->pdo->prepare('insert into empleado ( person_id,nss,afore,rfc,licencia_tipo,licencia_numero,puesto_id,turno_id,sueldo,estatura,peso) 
													 values (:person_id,:nss,:afore,:rfc,:licencia_tipo,:licencia_numero,:puesto_id,:turno_id,:sueldo,:estatura,:peso)');
			$stm->bindParam(':person_id', $person_id);
			$stm->bindParam(':nss', $form['nss']);
			$stm->bindParam(':afore', $form['afore']);
			$stm->bindParam(':rfc', $form['rfc']);
			$stm->bindParam(':licencia_tipo', $form['licencia_tipo']);
			$stm->bindParam(':licencia_numero', $form['licencia_numero']);
			$stm->bindParam(':puesto_id', $form['puesto_id']);
			$stm->bindParam(':turno_id', $form['turno_id']);
			$stm->bindParam(':sueldo', $form['sueldo']);
			$stm->bindParam(':estatura', $form['estatura']);
			$stm->bindParam(':peso', $form['peso']);
			$stm->execute();
			$empleado_id = $this->pdo->lastInsertId();

			$this->pdo->commit();

			// $result = $stm->fetchAll();
            // $result = json_decode(json_encode($result), True);     
		} catch(Exception $e){

			$this->pdo->rollBack();
			 echo $result['error'] = $e->getMessage();
			};


			echo "<br>return<br>";
		return $empleado_id;
	}

}