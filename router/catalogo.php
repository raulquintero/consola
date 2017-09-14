<?php

use Core\{Router,Database};
use App\Controller\{CatalogoController,ClienteController,EmpleadoController,FormaController,SolicitudEmpleoController,UsuarioController,RecursosHumanosController};




if ($v = Router::request('/agregar/cliente/nuevo','get',"ca4"))         					{$response = ($v['security']) ? ClienteController::capturePerfil("perfilCliente",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/clientes','get','ca2'))               					{$response = ($v['security']) ? ClienteController::showClientes("xclientes",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/cliente/{id}/perfil','get',"ca3"))  					{$response = ($v['security']) ? ClienteController::getPerfilCliente("perfilCliente",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/cliente/{id}/perfil/{opcion}','get',"ca3"))  			{$response = ($v['security']) ? ClienteController::getPerfilCliente("perfilCliente",$v):array('security'=>FALSE);} 

if ($v = Router::request('/agregar/empleado/nuevo','get',"ca4"))         					{$response = ($v['security']) ? EmpleadoController::capturePerfil("perfilEmpleado",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/empleados','get','ca4'))              					{$response = ($v['security']) ? EmpleadoController::showEmpleados("xempleados",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/empleado/{id}/perfil','get',"ca3"))  					{$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/empleado/{id}/perfil/{opcion}','get',"ca4"))  		{$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/empleado/{id}/perfil/{opcion}/{tabla}','get',"ca4"))  {$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 

if ($v = Router::request('/agregar/solicitudempleo/nuevo','get',"ca4"))         			{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/solicitudempleo/crear','get',"ca4"))					{$response = ($v['security']) ? SolicitudEmpleoController::crearSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/solicitudesempleo','get','ca4'))              			{$response = ($v['security']) ? SolicitudEmpleoController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/solicitudesempleo/{tipo}','get','ca4'))              	{$response = ($v['security']) ? SolicitudEmpleoController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::request('/api/catalogo/solicitudesempleo/{tipo}','get','ca4'))            {$response = ($v['security']) ? SolicitudEmpleoController::apishowSolicitudesEmpleo("json",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/solicitudempleo/{id}/perfil','get',"ca3"))  			{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/solicitudempleo/{id}/perfil/{opcion}','get',"ca4"))	{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/solicitudempleo/{id}/evaluacion','get',"ca4"))	    	{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleoEvaluacion("perfilSolicitudEmpleoEvaluacion",$v):array('security'=>FALSE);} 

if ($v = Router::request('/agregar/usuario/nuevo','get',"co2"))         					{$response = ($v['security']) ? UsuarioController::capturePerfil("perfilUsuario",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/usuarios','get',"co2"))         						{$response = ($v['security']) ? UsuarioController::showUsuarios("xusuarios",$v):array('security'=>FALSE);}  
if ($v = Router::request('/catalogo/usuario/{id}/perfil','get',"co1"))						{$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
if ($v = Router::request('/catalogo/usuario/{id}/perfil/{vista}','get',"co1"))				{$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 


if ($v = Router::request('/recursoshumanos/contrataciones','get','ca4'))              		{$response = ($v['security']) ? RecursosHumanosController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::request('/recursoshumanos/solicitudempleo/{id}/contratar','get','ca4'))   {$response = ($v['security']) ? RecursosHumanosController::contratar("showContrato",$v):array('security'=>FALSE);}  
if ($v = Router::request('/recursoshumanos/promociones','get','ca4'))              		{$response = ($v['security']) ? EmpleadoController::showEmpleados("xempleados",$v):array('security'=>FALSE);}  



if ($variables = Router::request('/forma/addcurp/{person}','get',"private"))  				{$response = FormaController::showForma("formas/addcurp.form",$variables);}  





// if ($v = Router::request('/configuracion/usuario_nuevo','get',"co2"))         				{$response = ($v['security']) ? UsuarioController::createUSer("perfilUsuario",$v):array('security'=>FALSE);}  
