<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Person {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}



public function getCombosForm() : array{

			$stm =$this->pdo->prepare ('select * from genero');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['generos']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from puesto');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['puestos']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from estudiosmax order by estudiosmax ASC');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['estudiosmax']= json_decode(json_encode($respuesta), True);

			$stm =$this->pdo->prepare ('select * from horario');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['horarios']= json_decode(json_encode($respuesta),true);


			return $result;
			
}
public function getPersonByCurp($curp) : array{
		static $result = [];
			$result = ['curp'=>$curp];
		try {

			$stm =$this->pdo->prepare ('select * from genero');
			$stm ->execute();
			$respuesta = $stm->fetchAll();
			$result ['generos']= json_decode(json_encode($respuesta),true);


			$stm = $this->pdo->prepare("select * from person where curp= ? limit 1 ");
			$stm->execute([$curp]);
			if ($stm->rowCount()) {
				$results= $stm->fetchAll();
				$results = json_decode(json_encode($results), True);     
				$result['model'] = $results[0];
			}
			// var_dump($result);exit;
		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};

		return $result;
	}




public function updateTableByPerson($id,$table){

		foreach ($_POST as $key => $value) {
			$campos .=  ", ".$key."=:".$key ;
			$valores [":".$key]=  strtolower($value);
		}
		$campos = substr($campos,1);
		// var_dump($valores);exit;
		 try {

			$stm = $this->pdo->prepare("update ".$table." set  $campos , updated_at=NOW() where ".$table."_id='".$id."' ");
			$stm->execute($valores);
		} catch(Exception $e){
			$result['error'] = $e->getMessage();
		}
		// $stm->debugDumpParams();
		// echo "<br>";
		// exit;
		return $result;


	}





}