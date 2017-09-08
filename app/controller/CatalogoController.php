<?php
namespace App\Controller;
use App\Models\{Cliente,Empleado,Usuario};


class CatalogoController {

	private static $settings;
	public static $model;

	public static function showClientes($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];


			self::$model = new Cliente;
		$models =self::$model->getClientes();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}

	public static function showEmpleados($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];


			self::$model = new Empleado;
		$models =self::$model->getEmpleados();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}

	public static function showUsuarios($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];


			self::$model = new Usuario;
		$models =self::$model->getUsuarios();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}

	public static function showTiendas($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];


			self::$model = new Cliente;
		$models =self::$model->getClientes();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}

}
