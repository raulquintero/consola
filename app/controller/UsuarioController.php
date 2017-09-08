<?php
namespace App\Controller;

use App\Models\Usuario;
use Libs\Traits\Data;

class UsuarioController {
	use Data;
	public static $settings;
	private  static $model;

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

    public static function showPerfil($page,$variables): array{

			if (strcmp($variables['vista'],"editar"))
					{$modo="edit";$readonly="readonly";}
					else {$modo="view";$readonly="";}

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
			'modo' => $modo,
			'readonly' => $readonly
			

			];

		self::$model = new Usuario;
		$models =self::$model->getPerfil($variables['id']);

		// var_dump($models);
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models[0];
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}
	 	public static function editPerfil($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
			'modo' => 'edit'

			];

		self::$model = new Usuario;
		$models =self::$model->getPerfil($variables['id']);

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models[0];
		self::$settings['error'] = $models['error'];


	return self::$settings;
	
	}

 	public static function capturePerfil($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
			'modo' => 'new',
			'readonly' => ''

			];
			$model['curp'] = Data::string("curp","post");
			self::$settings['model'] = $model;


	return self::$settings;
	
	 }

	public static function showUserPrivilegios($user_id): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			

			];

		self::$model = new Usuario;
		$models =self::$model->getUserPrivilegios();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models; //validar 
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}

	public static function createUser($user_id){

	

	foreach($_POST as $key=>$value){
		$value = Data::string($key,"post");
		$form[$key]=$value;
	}
	var_dump($form);
	
	self::$model = new Usuario;
		$usuario_id = self::$model->createUser($form);

		if ($usuario_id)
		header ("location: /configuracion/usuario/$usuario_id/perfil");
		else
			header("location: /configuracion/usuarios/nuevo");
	
	}




}