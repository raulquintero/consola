<?php
namespace App\Controller;

use App\Models\Producto;
use Libs\Traits\Data;

class ProductoController {
    use Data;
    
    public static $settings;
    private  static $model;


    public static function showCategorias($page,$variables): array{

        self::$model = new Producto;
		$models =self::$model->getCategorias(intval($variables['cat_id']));
        

        $pagina ['titulo'] = "categorias";
        $pagina ['subtitulo'] = "categorias";
        $pagina ['tbltitulo'] = "categorias";
        self::$settings['page']=$page;
       
        self::$settings['sidebar']=FALSE;
        self::$settings['language']='es_ES';
        self::$settings['scrolling' ]= "TRUE"; 
        self::$settings['layout' ]= 'no-fixed';

        self::$settings['pagina']=$pagina;
        self::$settings['models']=$models;
            
        return self::$settings;
        }
        
	public static function showProductos($page,$variables): array{



			self::$settings['page']=$page;
			self::$settings['sidebar']=TRUE;
			self::$settings['language']='es_ES';
			self::$settings['scrolling' ]= "TRUE"; 
			self::$settings['layout' ]= 'no-fixed';

	return self::$settings;
	}


	
	

}