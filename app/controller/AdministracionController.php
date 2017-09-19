<?php
namespace App\Controller;

use App\Models\Administracion;
use App\Models\Producto;
use Libs\Traits\Data;

class AdministracionController {
		use Data;

	public static $settings;
	private  static $model;

    public function showContratos($page,$variables){
        
        self::$model = new Administracion;
        $contrato = self::$model->getContratos($variables['id']);
        // var_dump($contrato);exit;
        $pagina ['titulo'] = "Administracion de Contratos";
        $pagina ['subtitulo'] = "Contratos";
        $pagina ['tbltitulo'] = "Listado de Contratos";
        self::$settings['page']=$page;
        self::$settings['pagina'] = $pagina;
        self::$settings['sidebar']=TRUE;
        self::$settings['language']='es_ES';
        self::$settings['scrolling'] = "TRUE"; 
        self::$settings['layout'] = 'no-fixed';

        self::$settings['variables'] = $variables;
        self::$settings['contrato'] = $contrato['contrato'];
        self::$settings['empresa'] =$contrato['empresa'];
        self::$settings['postulante'] =$contrato['postulante'];
    return self::$settings;

    }

    public function showCategorias($page,$variables){
        
        self::$model = new Producto;
        $models = self::$model->getCategorias(intval($variables['id']));
        // var_dump($models);exit;
        $pagina ['titulo'] = "categoria de Productos";
        $pagina ['subtitulo'] = "Categorias de Productos";
        $pagina ['tbltitulo'] = "categorias";
        self::$settings['page']=$page;
        self::$settings['pagina'] = $pagina;
        self::$settings['sidebar']=FALSE;
        self::$settings['language']='es_ES';
        self::$settings['scrolling'] = "TRUE"; 
        self::$settings['layout'] = 'no-fixed';

        self::$settings['variables'] = $variables;
        self::$settings['models'] = $models;
    return self::$settings;

    }

}
