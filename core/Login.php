<?php
namespace Core;
use App\Config\DatabaseConfig;
use Core\Database;
use Exception;
use Libs\Traits\Crypto64;


class Login {
    use Crypto64;
    private $db;

	public function __construct(){
		$this->pdo = Database::getConnection(DatabaseConfig::$default);
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

    public function authenticate($key,$password) {
		static $result = [];
        $person_id = $this->getUsername($key);
        //echo $key;
		try {
			$stm = $this->pdo->prepare("SELECT activo,homepage FROM usuario WHERE password = ? AND person_id= ?   ");
            //echo "<br>".$stm->queryString;
            //  echo "<br>".$person_id;
            //   echo "<br>".$password;
            // echo "<br";
			$stm->execute([$password,$person_id]);
			$result = $stm->fetchAll();
           $result = json_decode(json_encode($result), True); 
           $result['activo']=$result[0]['activo'];
           $result['homepage']=$result[0]['homepage'];
           unset($result[0]);    
           $result['person_id']=$person_id;
           $result['password']=$password;
        //     echo "resultado: ";
            // var_dump($result);
            
		} catch(Exception $e){

			echo  $result['error'] = $e->getMessage();

			}
		return $result;
	}

    public function getUsername($key){
    //echo $key;
        $key = Crypto64::decode($key);
		list($person_id,$otherthing) = explode("-",$key);
        return $person_id;
		
    }


}
