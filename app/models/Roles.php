<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;

class Roles {
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getRoles() : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from rol ');
			$stm->execute();

			$result = $stm->fetchAll();
            
            $result = json_decode(json_encode($result), True);     

		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};

		return $result;
	}

	public function getRolPrivilegios() : array{
		static $result = [];
		try {
			$stm = $this->pdo->prepare('select * from privilegio_usuario,privilegio where privilegio_usuario.privilegio_id=privilegio.privilegio_id');
			$stm->execute();

			$result = $stm->fetchAll();
            $result = json_decode(json_encode($result), True);     
		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};
		return $result;
	}











		public function getLogin($email) : array{
		static $result = [];
		try {
			$stm = $this->pdo->prepare("select concat(nombre,' ',apellidop) as nombre, person_id  from person where email= ? ");
			$stm->execute([$email]);
			$result = $stm->fetchAll();
           $result = json_decode(json_encode($result), True);     

		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};
		return $result;
	}

}
