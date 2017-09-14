<?php
use Core\{Router,Database};
use App\Controller\{ConfiguracionController,CatalogoController,UsuarioController,GenericController,MenuController,FormaController};




// *****************  PAGINAS *****************



// if   ($v = Router::request('/agregar/usuario/nuevo','get',"co2"))         {$response = ($v['security']) ? UsuarioController::capturePerfil("perfilUsuario",$v):array('security'=>FALSE);}  
// elseif   ($v = Router::request('/configuracion/usuarios','get',"co2"))         {$response = ($v['security']) ? UsuarioController::showUsuarios("xusuarios",$v):array('security'=>FALSE);}  
// elseif   ($v = Router::request('/configuracion/usuario/{id}/perfil','get',"co1")){$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
// elseif   ($v = Router::request('/configuracion/usuario/{id}/perfil/{vista}','get',"co1")){$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
// elseif   ($v = Router::request('/configuracion/usuario_nuevo','get',"co2"))         {$response = ($v['security']) ? UsuarioController::createUSer("perfilUsuario",$v):array('security'=>FALSE);}  
// elseif  ($variables = Router::request('/forma/addcurp/{person}','get',"private"))  {$response = FormaController::showForma("formas/addcurp.form",$variables);}  

if   ($v = Router::request('/configuracion/roles','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRoles("xroles",$v):array('security'=>FALSE);}  
if   ($v = Router::request('/configuracion/roles/{id}/{vista}','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRol("privilegios",$v):array('security'=>FALSE);}  
if   ($v = Router::request('/configuracion/respaldos','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRespaldos("xdbBackups",$v):array('security'=>FALSE);}  
if   ($v = Router::request('/configuracion/dataBase/{opcion}','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRespaldos("xdbBackups",$v):array('security'=>FALSE);}  
if   ($v = Router::request('/configuracion/licencia','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showLicencia("licencia",$v):array('security'=>FALSE);}  




// //******************  FORMAS  *******************

if  ($variables = Router::request('/formas/hacerRespaldo','get',"private"))  {$response = FormaController::showForma("formas/hacerRespaldo.form",$variables);}  
if  ($variables = Router::request('/formas/dbRestaurar/{dbfile}','get',"private"))  {$response = FormaController::showForma("formas/dbRestaurar.form",$variables);}  


// if  ($variables = Router::request('/forma/agregarmenu/{menu_id}','get',"private"))  {$response = FormaController::showForma("formas/addcategory.form",$variables);}  
// if  ($variables = Router::request('/forma/editarmenu/{menu_id}','get',"private"))   {$response = FormaController::showForma("formas/editcategory.form",$variables);}  


// if  ($variables = Router::request('/mantenimiento/actualizarmenu/{menu_id}','get',"private"))  {$response = MenuController::update("xmenu",$variables,$Menu);}  
// if  ($variables = Router::request('/mantenimiento/agregarmenu','get',"private"))               {$response = MenuController::add("xmenu",$variables,$Menu);}  
// if  ($variables = Router::request('/mantenimiento/borrarmenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::delete("xmenu",$variables,$Menu);}  
// if  ($variables = Router::request('/mantenimiento/restaurarmenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::restore("xmenu",$variables,$Menu);}  
// if  ($variables = Router::request('/mantenimiento/removermenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::remove("xmenu",$variables,$Menu);}  

