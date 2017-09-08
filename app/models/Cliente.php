<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use App\Models\Person;
use Exception;

class Cliente extends Person{
private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getClientes() : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from cliente,person where cliente.person_id=person.person_id ');
			$stm->execute();

			$result = $stm->fetchAll();
            
            $result = json_decode(json_encode($result), True);     

		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};

		return $result;
	}

	public function getPerfil($id) : array{
		static $result = [];
		try {
			$stm = $this->pdo->prepare('select * from cliente,person where  person.person_id= ? and cliente.person_id=person.person_id');
			$stm->execute([$id]);

			$result = $stm->fetchAll();
            $result = json_decode(json_encode($result), True);     
		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};
		return $result;
	}

	public function getClienteByCurp($curp) : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from cliente,person 
				where cliente.person_id=person.person_id AND  person.curp= ? ');
			$stm->execute([$curp]);

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
