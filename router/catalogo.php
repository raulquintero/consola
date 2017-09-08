<?php

use Core\{Router,Database};
use App\Controller\{CatalogoController,ClienteController,EmpleadoController,FormaController,SolicitudEmpleoController,UsuarioController,RecursosHumanosController};




if ($v = Router::redirect('/agregar/cliente/nuevo','get',"ca4"))         					{$response = ($v['security']) ? ClienteController::capturePerfil("perfilCliente",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/clientes','get','ca2'))               					{$response = ($v['security']) ? ClienteController::showClientes("xclientes",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/cliente/{id}/perfil','get',"ca3"))  					{$response = ($v['security']) ? ClienteController::getPerfilCliente("perfilCliente",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/cliente/{id}/perfil/{opcion}','get',"ca3"))  			{$response = ($v['security']) ? ClienteController::getPerfilCliente("perfilCliente",$v):array('security'=>FALSE);} 

if ($v = Router::redirect('/agregar/empleado/nuevo','get',"ca4"))         					{$response = ($v['security']) ? EmpleadoController::capturePerfil("perfilEmpleado",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/empleados','get','ca4'))              					{$response = ($v['security']) ? EmpleadoController::showEmpleados("xempleados",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/empleados/{id}/perfil','get',"ca3"))  					{$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/empleados/{id}/perfil/{opcion}','get',"ca4"))  		{$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/empleados/{id}/perfil/{opcion}/{tabla}','get',"ca4"))  {$response = ($v['security']) ? EmpleadoController::getPerfilEmpleado("perfilEmpleado",$v):array('security'=>FALSE);} 

if ($v = Router::redirect('/agregar/solicitudempleo/nuevo','get',"ca4"))         			{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/solicitudempleo/crear','get',"ca4"))					{$response = ($v['security']) ? SolicitudEmpleoController::crearSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/solicitudesempleo','get','ca4'))              			{$response = ($v['security']) ? SolicitudEmpleoController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/solicitudesempleo/{tipo}','get','ca4'))              	{$response = ($v['security']) ? SolicitudEmpleoController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/api/catalogo/solicitudesempleo/{tipo}','get','ca4'))            {$response = ($v['security']) ? SolicitudEmpleoController::apishowSolicitudesEmpleo("json",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/solicitudempleo/{id}/perfil','get',"ca3"))  			{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/solicitudempleo/{id}/perfil/{opcion}','get',"ca4"))	{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleo("perfilSolicitudEmpleo",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/solicitudempleo/{id}/evaluacion','get',"ca4"))	    	{$response = ($v['security']) ? SolicitudEmpleoController::getPerfilSolicitudEmpleoEvaluacion("perfilSolicitudEmpleoEvaluacion",$v):array('security'=>FALSE);} 

if ($v = Router::redirect('/agregar/usuario/nuevo','get',"co2"))         					{$response = ($v['security']) ? UsuarioController::capturePerfil("perfilUsuario",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/usuarios','get',"co2"))         						{$response = ($v['security']) ? UsuarioController::showUsuarios("xusuarios",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/catalogo/usuario/{id}/perfil','get',"co1"))						{$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
if ($v = Router::redirect('/catalogo/usuario/{id}/perfil/{vista}','get',"co1"))				{$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 


if ($v = Router::redirect('/recursoshumanos/contrataciones','get','ca4'))              		{$response = ($v['security']) ? RecursosHumanosController::showSolicitudesEmpleo("xsolicitudesempleo",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/recursoshumanos/solicitudempleo/{id}/contratar','get','ca4'))   {$response = ($v['security']) ? RecursosHumanosController::contratar("showContrato",$v):array('security'=>FALSE);}  
if ($v = Router::redirect('/recursoshumanos/promociones','get','ca4'))              		{$response = ($v['security']) ? EmpleadoController::showEmpleados("xempleados",$v):array('security'=>FALSE);}  



if ($variables = Router::redirect('/forma/addcurp/{person}','get',"private"))  				{$response = FormaController::showForma("formas/addcurp.form",$variables);}  





// if ($v = Router::redirect('/configuracion/usuario_nuevo','get',"co2"))         				{$response = ($v['security']) ? UsuarioController::createUSer("perfilUsuario",$v):array('security'=>FALSE);}  
