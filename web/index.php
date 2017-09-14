<?php

include '../config/config.php';

//$_SESSION['token']="";
	if ( file_exists(DIR_TEMPLATES.$response['page'].'.php') && $response['page']!="no" && !is_null($response['page'])){

		require_once DIR_TEMPLATES.$response['page'].'.php';
		
	}
	else {
            // if ($response['page'] !="no")
				$response['page'] = "{archivo}"; 
            if ($response['security'])
                require_once  DIR_TEMPLATES."error4042.php";
            	else
                require_once  DIR_TEMPLATES."restricted_page.php";
            
            }



 

if (ENVIRONMENT=="DEV")
echo "
<script> 
// document.getElementById('server').innerHTML += '<hr style=\"width:100%; height:4px; padding:0; margin:0 ;background: yellow\">';
</script>";


if ($response['page']<>"loginEmail" && $response['page']<>"loginPassword" && $response['page']<>'bloqueado' AND !$noDebug) {


echo "<pre>";
echo "<b>cookie</b><br>";
var_dump($_COOKIE);
echo "<b>post</b><br>";
var_dump($_POST);
echo "<b>get</b><br>";
var_dump($_GET['q']);

echo "<b>variables</b><br>";            
var_dump($variables);
echo "<b>response</b><br>";
var_dump($response);

var_dump(DIR_TEMPLATES.$response['page'].'.php');
echo "<br><b>v: </b>";
var_dump($response['nombre']);

echo "</pre>";

}