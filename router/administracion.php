<?php
use Core\{Router,Database};
use App\Controller\{AdministracionController,GenericController,FormaController};




// *****************  PAGINAS *****************



// if   ($v = Router::request('/configuracion/usuarios','get',"co2"))         {$response = ($v['security']) ? UsuarioController::showUsuarios("xusuarios",$v):array('security'=>FALSE);}  

if 	($v = Router::request('/administracion/dashboard','get','ro3'))		{$response = ($v['security']) ? GenericController::showPage("xdashboard",$v):array('security'=>FALSE);} 
if   ($v = Router::request('/administracion/contratos','get',"ad2"))               {$response = ($v['security']) ? AdministracionController::showContratos("xcontratos",$v):array('security'=>FALSE);}  



// //******************  FORMAS  *******************

// if  ($variables = Router::request('/formas/hacerRespaldo','get',"private"))  {$response = FormaController::showForma("formas/hacerRespaldo.form",$variables);}  
// if  ($variables = Router::request('/formas/dbRestaurar','get',"private"))  {$response = FormaController::showForma("formas/dbRestaurar.form",$variables);}  
