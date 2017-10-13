<?php

use Core\{Router};
use App\Controller\{LoginController,HomeController,RecepcionController,CatalogoController,MantenimientoController,UsuarioController,
						PosController,GenericController,FormaController};

$v = NULL;
$response = array('template'=>"flate",'language'=>'es_ES','security'=>TRUE);
 // var_dump(Router::getRoute());
 

// if 	($v = Router::request('/request','get','public'))						{$response = ($v['security']) ? HomeController::homePage("loginEmail",$v):array('security'=>TRUE);} 




 if 	($v = Router::request('/','get','public'))								{$response = ($v['security']) ? LoginController::showLoginPage("loginEmail",$v):array('security'=>TRUE);} 

if 	($v = Router::request('/login','get','public'))								{$response = ($v['security']) ? LoginController::checkEmail("loginPassword",$v):array('security'=>TRUE);} 
if 	($v = Router::request('/login/{user_name}/{remember}','get','public'))		{$response = ($v['security']) ? LoginController::checkEmail("formas/frm_password",$v):array('security'=>TRUE);} 
if 	($v = Router::request('/logout','get','public'))							{$response = ($v['security']) ? LoginController::logOut("none",$v):array('security'=>TRUE);} 
if 	($v = Router::request('/lg/error','get','public'))							{$response = ($v['security']) ? LoginController::LoginError("loginEmail",$v):array('security'=>TRUE);} 
if 	($v = Router::request('/login/{key}','get','public'))						{$response = ($v['security']) ? LoginController::checkPassword("checkPassword",$v):array('security'=>FALSE);} 

if 	($v = Router::request('/lock','get','public'))								{$response = ($v['security']) ? LoginController::lock("bloqueado",$v):array('security'=>FALSE);} 
if 	($v = Router::request('/unlock','get','public'))							{$response = ($v['security']) ? LoginController::unlock("checkPassword",$v):array('security'=>FALSE);} 


if 	($v = Router::request('/locked','get','ro1'))								{$response = ($v['security']) ? GenericController::showData("bloqueado",$v):array('security'=>FALSE);} 
if 	($v = Router::request('/pos','get','ro2'))									{$response = ($v['security']) ? PosController::pos("xpos",$v):array('security'=>FALSE);}  

if 	($v = Router::request('api/inicio/ordenes_nuevas','get','ro0'))				{$response = ($v['security']) ? HomeController::ordenesNuevas("api",$v):array('security'=>FALSE);}  


if 	($v = Router::request('/inicio','get','ro4'))								{$response = ($v['security']) ? RecepcionController::inicio("tiles",$v):array('security'=>FALSE);}  



if 	($v = Router::request('/agenda','get','ro6'))								{$response = ($v['security']) ? RecepcionController::inicio("calendario",$v):array('security'=>FALSE);}  
if 	($v = Router::request('/recepcion/captura/persona','get','ro6'))			{$response = ($v['security']) ? RecepcionController::inicio("capturaPersona",$v):array('security'=>FALSE);}  
if 	($v = Router::request('/curp/obtener','get','ro7'))							{$response = ($v['security']) ? RecepcionController::inicio("obtenercurp",$v):array('security'=>FALSE);}  
if 	($v = Router::request('/textEditor','get','ro2'))							{$response = ($v['security']) ? RecepcionController::inicio("textEditor",$v):array('security'=>FALSE);}  

if 	($v = Router::request('/mensajes','get','ro2'))								{$response = ($v['security']) ? GenericController::showData("xMessageCenter",$v):array('security'=>FALSE);}  

if 	($v = Router::request('/forma/codigo_postal/{zip}/{colonia_id}','get','ro2'))			{$response = ($v['security']) ? GenericController::frm_codigoPostal("formas/getCodigoPostal",$v):array('security'=>FALSE);}  




require_once DIR_BASE.'/router/administracion.php';
require_once DIR_BASE.'/router/configuracion.php';
require_once DIR_BASE.'/router/catalogo.php';
require_once DIR_BASE.'/router/mantenimiento.php';
require_once DIR_BASE.'/router/pos.php';
require_once DIR_BASE.'/router/blog.php';
require_once DIR_BASE.'/router/productos.php';
















//inicializacion de v
// $template=array('security'=>FALSE);
$location = "";
$error = "";
//interface grafica
if ($response['sidebar']) $sidebar="nosidebar"; else $sidebar = " nav-hidden ";
// $scrolling = ""; // para deshabilitarlo en la pantalla del punto de venta
// $layout = "no-fixed";


// echo var_dump($response['page']);