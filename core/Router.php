<?php
namespace Core;

use Libs\Traits\Crypto64;



//*********************Clase que procesa los uri y los separa en rutas y variables
// uso: 
//		if 	($variables = Router::request('/inicio/{day}/espanol/{nota}','[get|post]','[public|private]'))		{$response = HomeController::home("xusuarios",$variables);}


class Router{
	use Crypto64;
	private static $q;


	public static function request($route,$method,$security = "public") {
		$palabra = NULL;
		$flag = TRUE;
		$variables_temp = NULL;
	//  var_dump($_GET['q']);

		
		switch ($method) {

			// case 'get': if (!empty($_GET)) $request = "/".$_GET['q']; break;
			// case 'post':if (!empty($_POST))	$request = "/".$_POST['q']; break;
			// si es nulo se asigna la raiz por default
			case 'get': if(isset($_GET['q']))  $r_temp=$request = "/".$_GET['q'];else $r_temp=$request = "/";  break;
			case 'post':if(isset($_GET['q']))  $r_temp=$request = "/".$_POST['q'];else $r_temp=$request ="/"; break;
			
		};

		if (isset($_cookie['isLocked']))
		if ( strcmp($request,"/unlock")<>0 && $_COOKIE['isLocked']==TRUE)
			$request="/locked";


		if ($security<>"public"){
			$variables_temp['security']=TRUE;
			// if (self::getLoginData($_COOKIE['key'])) {$variables_temp ['security'] = TRUE;}
			if ($security=="ro7") $variables_temp ['security'] = FALSE;
		} else $variables_temp['security'] = TRUE;

// echo "variable_temp: ";var_dump($variables_temp);echo "<br>";
// echo "compare:";var_dump(strcmp($request,$route));echo " -- fin compare<br>";
		

		if (strcmp($request,$route)==0) {
			// var_dump($_COOKIE['lastpage']);echo "<br>:AUIIIII";exit;
			if ((strcmp($request,'/lock')<>0) && (strcmp($request,'/unlock')<>0) && (strcmp($request,'/locked')<>0)) {
				setcookie('lastpage',$request);}
			return $variables_temp;}
		
			// if (isset($request)){
			// 	$cuantos = strlen($request);
			// if ($request[$cuantos-1]=='/')
			// 	$request = substr($request, 0, -1);
			// }
			

// echo "<br>Cadenas a comparar: ".$route." ---> ".$request;
// echo "<BR>flag: ";var_dump($flag);echo "<BR>";
// echo "<BR>'security': ".var_dump($variables_temp['security']);echo "<BR>";
// return NULL;

			
			if (isset($request))
				self::$q =preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $request);
				else return false;
			//var_dump(self::$q);f
		
			$peticion =explode("/", $route);
			$arreglo = explode("/", $request);
//  echo "------<pre>";
// 	var_dump($request);
// 	var_dump($route);
//  			// unset($peticion[0]);
//  			 var_dump(($peticion));
//  			var_dump(($arreglo));
// echo "</pre>---";
//  echo ":: ".count($peticion)."---".count($arreglo);
// exit;
	if(count($peticion)==count($arreglo)){
			$cuantos =($peticion);
			$contador=-1;
			foreach ($peticion as $campo){
				//  echo "<br>campos ::: a comparar ::>$campo - ".$arreglo[$contador+1]."<br>"; 
				if(isset($campo[0])) // {echo "hola";var_dump($campo[0]); exit;}
				if (strcmp($campo,$arreglo[$contador+1])<>0 && $campo[0]<>"{"){
					$flag=FALSE;
				}
				$contador++;
			}
	//    echo "<br>BANDERA: ";var_dump($flag);echo "<br>";
//  exit;
			$contador=0;
			foreach ($peticion as $campo){
				if(isset($campo[0])) // {echo "hola";var_dump($campo[0]); exit;}
				if ($campo[0]=="{"){
					//echo "<br>campo ($contador): ".$campo;
					$nombre_variable=preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $campo);
					$variables_temp [$nombre_variable]= $arreglo[$contador];
					// echo "variables_temp:<br>";
					// var_dump($variables_temp);
				}
				$contador++;
			}
	}else  $flag=FALSE;
//echo "flag2: ";var_dump(flag2);
// echo "<br>arreglo: <br>";
// var_dump($arreglo);
// echo "<br>peticion: <br>";
// var_dump($peticion);
// echo "<br><br><br>";
// var_dump($variables_temp);
// echo "<br>flag: ";
// var_dump($flag);
// exit;
			
		
				
			if ($flag){
					setcookie('lastpage',$request);
				return $variables_temp; }
			else return false;

			
		

	}

	public static function getRoute(){
		return self::$q;
	}
	public static function decode(string $q): array{

		$uri = $this->uri("q", "get");
		$q = "/" . $uri[0];

	}

	public static function getLoginData($key){
		if (isset($_COOKIE['key']))
			return true;
			else return false;
	}
	
}




// if ($isSecure=='secure'){

		// 	$isLooged = $Login->isLogged();
		// 	$isAutorized = $Login-isAuhtorized();
		// 	if ($isLogged && $isAutorized){

		// 	}
		// }