<?php
namespace App\Controller;

use App\Models\Usuario;
use Core\Login;
use Libs\Traits\Crypto64;
use Libs\Traits\Data;

class LoginController {
	use Crypto64,Data;

	public static $settings;
	private  static $model,$login;

	public static function logOut(){

			setcookie ('key',0);
			
			session_destroy();
			header ("location: /");

	}

    public static function showLoginPage($page,$variables): array{

        self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			

			];

	
        return self::$settings;

    }

	
	public static function checkEmail($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			];
	
			if (isset($variables['remember'])) {
				setcookie('usuario', $variables['user_name'],time() + (86400 * 30), "/"); // 86400 = 1 day
				setcookie('recordar', 1, time() + (86400 * 30), "/"); // 86400 = 1 day
				// echo "--True ".var_dump($_POST['remember'])."== ";
			} else{
				unset($_COOKIE['recordar']);
				unset($_COOKIE['usuario']);echo "false<br><br>";
				setcookie('recordar',NULL,-1,'/');
				setcookie('usuario',NULL,-1,'/');
			}
			// echo "<br>";
			// var_dump($_POST);echo "<br>";
			// var_dump($_COOKIE);
			// exit;
		
		self::$model = new Usuario;
		$models =self::$model->getLogin($variables['user_name']);
        $key = Crypto64::encode($models[0]['person_id']."-".$_COOKIE['PHPSESSID']);
		
		self::$settings['nombre'] = $models[0]['nombre'];
		self::$settings['key'] = $key;
		self::$settings['error'] = $models[0]['error'];
		
	
        if (!count($models)){
            $_SESSION['error']="Correo Invalido";
            header ("location: /");
            self::$settings['error'] = TRUE;
            self::$settings['page'] = "loginEmail";
        }
		return self::$settings;
	}

    public static function checkPassword($page,$variables){
		
		self::$login= new Login;
		$password = md5(Data::string('pass','post'));
		$result = self::$login->authenticate($variables['key'],$password);
		// echo "<br><br>$result b_switch";
		// var_dump($result);
		// echo "<br>";
		// var_dump($variables);
		//  echo $variables['key'] ."<br>";
		switch  ($result['activo']) {
			case NULL :echo "contrasena incorrecta";break;
			case '0' :echo "desactivado";	break;
			case '1' : //es verdad;
				$key = Crypto64::encode($result['person_id']."-".md5($password)."-".$_COOKIE['PHPSESSID'], time() + (86400 / 2)); 
				setcookie('key',$key);
				$location = $result['homepage'];
				// echo "<br>cookies: ";print_r($_COOKIE);
				break;
			case '2' :echo "suspendido";break;
			
			
		} 
		if ($location)
		header ("location: ".$location);

		setcookie('key', $variables['key'], time() + (86400 * 1), "/"); // 86400 = 1 day
        
		





    }
	

    public static function loginError($page,$variables){

      
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
            'error' => 'E-Mail Invalido'
			

			];

        return self::$settings;

    }



	   public static function lock($page,$variables){

      
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
            'error' => 'E-Mail Invalido'
			

			];

			setcookie("isLocked",TRUE);
			setcookie("url","/inicio");
        return self::$settings;

    }

	   public static function unlock($page,$variables){

      
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
            'error' => 'E-Mail Invalido'
			

			];

			setcookie("isLocked",FALSE);
			var_dump($_COOKIE);
			
			header ("location: ".$_COOKIE['lastpage']);
        return self::$settings;

	}

}