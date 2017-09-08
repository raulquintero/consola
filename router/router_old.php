<?php
//inicializacion de variables
$template=FALSE;
$location = "";
$error = "";
//interface grafica
$sidebar = " nav-hidden ";
$scrolling = ""; // para deshabilitarlo en la pantalla del punto de venta
$layout = "no-fixed";


// SECCION PUBLICA DEL SITIO
require_once 'storeonline.php';
require_once 'blog.php';
switch ($q) {
    case "/":
        $layout="fixed";
        $sidebar="yes";
        $template = "more-pricing";
        break;
}
// SECCION PRIVADA DEL SITIO
//requiere estar logueado para accesar toda la aplicacion 
    //if (!$Login->isLogged() && $q != "/auth" && !$template) {$q = "/login.html";}
// si esta logueado se genera un nuevo token cada que solicita una pagina
    //$Login->newToken();


require_once 'api/api.php';
require_once 'cart.php';
require_once 'catalogos.php';
require_once 'filtros.php';
require_once 'formas.php';
require_once 'login.php';
require_once 'mantenimiento.php';
require_once 'pos.php';
require_once 'productos.php';

// 
switch ($q) {
    case "/tablas" :
        $template = "tablas";
        break;
    case "/inicio":
        $template = "tiles";
        break;
    case "/dashboard":
        //print_r($_SESSION); 
        $template = 'xdashboard';
        break;
    case "/calendario":
        $template = "calendario";
        break;
    case "/centro-de-mensajes":
        // $layout="";
        $template = "xMessageCenter";
        break;
    
    
    
    



    



    case "/edocuenta":
        $template = "edocuenta";
        break;
    case "/miperfil":
        $asociado = $Usuario->getUsuario();
        $template = "xmiperfil";
        //$layout="no";
        break;









    
}








if ($location)
    header($location);


// GEOLOCALIZACION 

// $pais = geoip_record_by_name('201.171.230.184');
// if ($record) {
//     $pais=strtolower($record['country_code']);
// } else $pais=0;



 
