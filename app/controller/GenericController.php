<?php
namespace App\Controller;

use App\Models\{Empleado,Generic};

class GenericController {
		private  static $model;

	public static $settings;

	
	public static function frm_codigoPostal($page,$variables){


		// var_dump($page);
		self::$model = new Generic;
		$codigos= self::$model->decodeZIP($variables[zip]);

		self::$settings['page'] = $page;
		self::$settings['variables'] = $variables;
		self::$settings['codigos'] = $codigos['codigo'];

	return self::$settings;

	}
	
	public static function getData($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

		self::$model = new Empleado;
		$models =self::$model->listar();

		// var_dump($empleados);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}


	public static function showPage($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

		self::$settings['variables'] = $variables;
		return self::$settings;
	}


	public static function showData($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

		self::$settings['variables'] = $variables;
		return self::$settings;
	}



}

