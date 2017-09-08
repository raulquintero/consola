<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Respaldo {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getRespaldos() : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from respaldo inner join  empresa on respaldo.empresa_id=empresa.empresa_id');
			$stm->execute();

			$result = $stm->fetchAll();
            
            $result = json_decode(json_encode($result), True);     

		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};

		return $result;
	}

	










	

}
