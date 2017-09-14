<?php
use Core\{Router,Database};
use App\Controller\{MantenimientoController,GenericController,MenuController,FormaController};




// *****************  PAGINAS *****************

if   ($variables = Router::request('/mantenimiento/environment','get',"ma1"))     {$response = GenericController::showPage("environment",$variables);}  
elseif   ($variables = Router::request('/mantenimiento/modulos','get',"ma2"))         {$response = GenericController::getData("xclientes",$variables);}  
elseif   ($variables = Router::request('/mantenimiento/menu','get',"ma4"))            {$response = MantenimientoController::menu("xmenu",$variables);}  
elseif   ($v = Router::request('/mantenimiento/menu/{menu_id}','get',"ma5"))  {$response = MantenimientoController::menu("xmenu",$v);}  




//******************  FORMAS  *******************

elseif  ($variables = Router::request('/forma/agregarmenu/{menu_id}','get',"ma6"))  {$response = FormaController::showForma("formas/addcategory.form",$variables);}  
elseif  ($v = Router::request('/forma/editarmenu/{menu_id}','get',"ma7"))   {$response =($v['security']) ? FormaController::showForma("formas/editcategory.form",$v):array('security'=>FALSE)  ;}  


elseif  ($variables = Router::request('/mantenimiento/actualizarmenu/{menu_id}','get',"ma8"))  {$response = MenuController::update("xmenu",$variables,$Menu);}  
elseif  ($variables = Router::request('/mantenimiento/agregarmenu','get',"ma9"))               {$response = MenuController::add("xmenu",$variables,$Menu);}  
elseif  ($variables = Router::request('/mantenimiento/borrarmenu/{menu_id}/{parent_id}','get',"ma10"))               {$response = MenuController::delete("xmenu",$variables,$Menu);}  
elseif  ($variables = Router::request('/mantenimiento/restaurarmenu/{menu_id}/{parent_id}','get',"ma11"))               {$response = MenuController::restore("xmenu",$variables,$Menu);}  
elseif  ($variables = Router::request('/mantenimiento/removermenu/{menu_id}/{parent_id}','get',"ma12"))               {$response = MenuController::remove("xmenu",$variables,$Menu);}  









//old style

// switch ($q) {

//     case "/mantenimiento":
//         $fn = $uri[1];
//         $menu_id = intval ($uri[2]);
//         switch ($fn) {
//             case "menu":
//                 $template = "xmenu";
//                 break;
//             case "actualizarmenu":
// //                print_r($_POST);
//                 $menu_id=limpiar($_POST['menu_id']);
//                 $parent_id=limpiar($_POST['parent_id']);
//                 $menu_name=limpiar($_POST['menu_name']);
//                 $path_option=limpiar($_POST['path_option']);
//                 $position=limpiar($_POST['position']);
//         	$Menu->editCategory($parent_id,$menu_name,$path_option,$menu_id,$position);

//                 header("Location: /mantenimiento/menu/$parent_id");
//                 exit;
//                 break;
//             case "agregarmenu":
//                 $parent_id=limpiar($_POST['parent_id']);
//                 $menu_name=limpiar($_POST['menu_name']);
//                 $path_option=limpiar($_POST['path_option']);
//         	$Menu->insertCategory($parent_id,$menu_name,$path_option);

//                 header("Location: /mantenimiento/menu/$parent_id");
//                 exit;
//                 break;
//             case "borrarmenu":
// //                print_r($_POST);
//                 $menu_id=$uri[2];
//                 $parent_id=$uri[3];
//         	$Menu->deleteCategory($menu_id);

//                 header("Location: /mantenimiento/menu/$parent_id");
//                 exit;
//                 break;
//             case "removermenu":
// //                print_r($_POST);
//                 $menu_id=$uri[2];
//                 $parent_id=$uri[3];
//             $Menu->removeCategory($menu_id);

//                 header("Location: /mantenimiento/menu/$parent_id");
//                 exit;
//                 break;
//             case "environment":
// //               
//                 $page = "blog-hombre";
//                 break;
//                 exit;
//                 break;
//         }

//         break;
// }
