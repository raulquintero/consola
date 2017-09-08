<?php
namespace App\Controller;

use App\Models\Administracion;
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
}
