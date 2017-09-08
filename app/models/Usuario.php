<?php
namespace App\Models;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;
class Usuario {
	private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
	}


	public function getUsuarios() : array{
		static $result = [];
		try {

			$stm = $this->pdo->prepare('select * from usuario,person,puesto where usuario.person_id=person.person_id   AND usuario.puesto_id=puesto.puesto_id ');
			$stm->execute();

			$result = $stm->fetchAll();
            
            $result = json_decode(json_encode($result), True);     

            
		} catch(Exception $e){

			 $result['error'] = $e->getMessage();
			};

		return $result;
	}
	/////////////////////////////////////////**************************************//////////////////////////////////////
public function getPerfil($id) : array{
		static $result = [];

		try {

			$stm = $this->pdo->prepare('select * from usuario,person,puesto where usuario.person_id=person.person_id 
				and usuario_id= ? AND usuario.puesto_id=puesto.puesto_id ');
			$stm->execute([$id]);

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

		// $stm->debugDumpParams();echo "<br><br>";

		
		return $result;
	}
public function createUser($form) : int{
		static $result = [];
		// echo "hola";
		// var_dump($form);

		$this->pdo->beginTransaction();
		try {
			$password='1';$activo='1';$rol_id='2';$template='flat';$theme='grey';$portada_id='0';$homepage='/agenda';

			$stm = $this->pdo->prepare('insert into person (curp,nombre,apellidop,apellidom,fecha_nac) values (:curp,:nombre,:apellidop,:apellidom,:fecha_nac)');
			$stm->bindParam(':curp', $form['curp']);
			$stm->bindParam(':nombre', $form['nombre']);
			$stm->bindParam(':apellidop', $form['apellidop']);
			$stm->bindParam(':apellidom', $form['apellidom']);
			$stm->bindParam(':fecha_nac', $form['fecha_nac']);
			$stm->execute();
			$person_id = $this->pdo->lastInsertId();
echo "<br> ID: ".$person_id;
			$stm = $this->pdo->prepare('insert into usuario ( person_id, password, activo, rol_id, template, theme, portada_id, homepage) 
													 values (:person_id,:password,:activo,:rol_id,:template,:theme,:portada_id,:homepage)');
			$stm->bindParam(':person_id', $person_id);
			$stm->bindParam(':password', $password);
			$stm->bindParam(':activo', $activo);
			$stm->bindParam(':rol_id', $rol_id);
			$stm->bindParam(':template', $template);
			$stm->bindParam(':theme', $theme);
			$stm->bindParam(':portada_id', $portada_id);
			$stm->bindParam(':homepage', $homepage);
			$stm->execute();
			$usuario_id = $this->pdo->lastInsertId();

			$this->pdo->commit();

			// $result = $stm->fetchAll();
            // $result = json_decode(json_encode($result), True);     
		} catch(Exception $e){

			$this->pdo->rollBack();
			 echo $result['error'] = $e->getMessage();
			};


			echo "<br>return<br>";
		return $usuario_id;
	}

}