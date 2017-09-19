<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Producto {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getCategorias($id=0) : array{
        try {

        $stm =$this->pdo->prepare ('SELECT * FROM `categoria` where parent_id= ? ');
        $stm ->execute([$id]);

        $respuesta = $stm->fetchAll();
        $result = json_decode(json_encode($respuesta),true);

        
        // echo "<pre>";var_dump($result);exit;
    } catch(Exception $e){

        $result['error'] = $e->getMessage();
    };

    return $result;
        
}

	public function getProductos($id) : array{
			try {

			$stm =$this->pdo->prepare ('SELECT * 
				FROM `empresa` E 
				left outer join empresalicencia EL on E.empresa_id=EL.empresa_id 
					AND E.empresa_id= ?
				left outer join licencia on EL.licencia_id=licencia.licencia_id
				ORDER BY expira DESC
				limit 1
				');
			$stm ->execute();

			$respuesta = $stm->fetchAll();
			$result ['licencia']= json_decode(json_encode($respuesta[0]),true);

			
			// var_dump($result);exit;
		} catch(Exception $e){

			$result['error'] = $e->getMessage();
		};

		return $result;
			
	}






}