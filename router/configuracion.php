<?php
use Core\{Router,Database};
use App\Controller\{ConfiguracionController,CatalogoController,UsuarioController,GenericController,MenuController,FormaController};




// *****************  PAGINAS *****************



// if   ($v = Router::redirect('/agregar/usuario/nuevo','get',"co2"))         {$response = ($v['security']) ? UsuarioController::capturePerfil("perfilUsuario",$v):array('security'=>FALSE);}  
// elseif   ($v = Router::redirect('/configuracion/usuarios','get',"co2"))         {$response = ($v['security']) ? UsuarioController::showUsuarios("xusuarios",$v):array('security'=>FALSE);}  
// elseif   ($v = Router::redirect('/configuracion/usuario/{id}/perfil','get',"co1")){$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
// elseif   ($v = Router::redirect('/configuracion/usuario/{id}/perfil/{vista}','get',"co1")){$response = ($v['security']) ? UsuarioController::showPerfil("perfilUsuario",$v):array('security'=>FALSE);} 
// elseif   ($v = Router::redirect('/configuracion/usuario_nuevo','get',"co2"))         {$response = ($v['security']) ? UsuarioController::createUSer("perfilUsuario",$v):array('security'=>FALSE);}  
// elseif  ($variables = Router::redirect('/forma/addcurp/{person}','get',"private"))  {$response = FormaController::showForma("formas/addcurp.form",$variables);}  

if   ($v = Router::redirect('/configuracion/roles','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRoles("xroles",$v):array('security'=>FALSE);}  
if   ($v = Router::redirect('/configuracion/roles/{id}/{vista}','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRol("privilegios",$v):array('security'=>FALSE);}  
if   ($v = Router::redirect('/configuracion/respaldos','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRespaldos("xdbBackups",$v):array('security'=>FALSE);}  
if   ($v = Router::redirect('/configuracion/dataBase/{opcion}','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showRespaldos("xdbBackups",$v):array('security'=>FALSE);}  
if   ($v = Router::redirect('/configuracion/licencia','get',"co2"))         {$response = ($v['security']) ? ConfiguracionController::showLicencia("licencia",$v):array('security'=>FALSE);}  




// //******************  FORMAS  *******************

if  ($variables = Router::redirect('/formas/hacerRespaldo','get',"private"))  {$response = FormaController::showForma("formas/hacerRespaldo.form",$variables);}  
if  ($variables = Router::redirect('/formas/dbRestaurar/{dbfile}','get',"private"))  {$response = FormaController::showForma("formas/dbRestaurar.form",$variables);}  


// if  ($variables = Router::redirect('/forma/agregarmenu/{menu_id}','get',"private"))  {$response = FormaController::showForma("formas/addcategory.form",$variables);}  
// if  ($variables = Router::redirect('/forma/editarmenu/{menu_id}','get',"private"))   {$response = FormaController::showForma("formas/editcategory.form",$variables);}  


// if  ($variables = Router::redirect('/mantenimiento/actualizarmenu/{menu_id}','get',"private"))  {$response = MenuController::update("xmenu",$variables,$Menu);}  
// if  ($variables = Router::redirect('/mantenimiento/agregarmenu','get',"private"))               {$response = MenuController::add("xmenu",$variables,$Menu);}  
// if  ($variables = Router::redirect('/mantenimiento/borrarmenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::delete("xmenu",$variables,$Menu);}  
// if  ($variables = Router::redirect('/mantenimiento/restaurarmenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::restore("xmenu",$variables,$Menu);}  
// if  ($variables = Router::redirect('/mantenimiento/removermenu/{menu_id}/{parent_id}','get',"private"))               {$response = MenuController::remove("xmenu",$variables,$Menu);}  

