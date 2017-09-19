<?php

use Core\{Router,Database};
use App\Controller\{ProductoController,FormaController};




if ($v = Router::request('/agregar/cliente/nuevo','get',"ca4"))         		{$response = ($v['security']) ? ClienteController::capturePerfil("perfilCliente",$v):array('security'=>FALSE);}  
if ($v = Router::request('/productos','get','ca2'))               				{$response = ($v['security']) ? ProductoController::showProductos("xproductos",$v):array('security'=>FALSE);}  
if ($v = Router::request('/productos/categorias','get',"ca3"))  				{$response = ($v['security']) ? ProductoController::showCategorias("xcategorias",$v):array('security'=>FALSE);} 
if ($v = Router::request('/productos/categorias/{cat_id}','get',"ca3"))  		{$response = ($v['security']) ? ProductoController::showCategorias("xcategorias",$v):array('security'=>FALSE);} 
if ($v = Router::request('/productos/proveedores','get',"ca3"))  			    {$response = ($v['security']) ? ProductoController::showProveedores("perfilCliente",$v):array('security'=>FALSE);} 
if ($v = Router::request('/productos/inventarios','get',"ca3"))  			    {$response = ($v['security']) ? ProductoController::showInventarios("perfilCliente",$v):array('security'=>FALSE);} 

if ($variables = Router::request('/formas/addcategoryproduct/{id}','get',"private"))  	{$response = FormaController::showForma("formas/addcategoryproduct.form",$variables);}  





// if ($v = Router::request('/configuracion/usuario_nuevo','get',"co2"))         				{$response = ($v['security']) ? UsuarioController::createUSer("perfilUsuario",$v):array('security'=>FALSE);}  
