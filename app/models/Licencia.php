<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Licencia {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$master);
	}



	public function getLicencia($id) : array{
			try {

			$stm =$this->pdo->prepare ('SELECT * 
				FROM `empresa` E 
				left outer join empresalicencia EL on E.empresa_id=EL.empresa_id 
					AND E.empresa_id= ?
				left outer join licencia on EL.licencia_id=licencia.licencia_id
				ORDER BY expira DESC
				limit 1
				');
			$stm ->execute(['1']);

			$respuesta = $stm->fetchAll();
			$result ['licencia']= json_decode(json_encode($respuesta[0]),true);

			
			// var_dump($result);exit;
		} catch(Exception $e){

			$result['error'] = $e->getMessage();
		};

		return $result;
			
	}






}