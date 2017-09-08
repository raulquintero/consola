<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Administracion {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}



public function getContratos($zip) : array{

        // var_dump($zip);
			$stm =$this->pdo->prepare ('select * from codigo where cp = ? ');
			$stm ->execute([$zip]);
            $respuesta = $stm->fetchAll();
                        // $stm->debugDumpParams();exit;

			$result ['codigo']= json_decode(json_encode($respuesta), True);


			return $result;
			
}



}