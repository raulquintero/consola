<?php
namespace App\Controller;

use App\Models\{Roles,Licencia,Respaldo};

class ConfiguracionController {

	public static $settings;
	private  static $model;

	

	public static function showRoles($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			

			];

		self::$model = new Roles;
		$models =self::$model->getRoles();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models; //validar 
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}
	
	public static function showRespaldos($page,$variables): array{
		
		self::$model = new Respaldo;
		$models =self::$model->getRespaldos();
	
		self::$settings['page']=$page;
		self::$settings['page_title']		= "Respaldo BD";
		self::$settings['page_subtitle']	= "Respaldos DB";
		self::$settings['table_title']		= "respaldos";
		self::$settings['page_parent'] 		= "resplados";
		self::$settings['page_parent_url'] 	= "/catalogo/empleados";
		self::$settings['sidebar']=FALSE;
		self::$settings['language']='es_ES';
		self::$settings['scrolling'] = "TRUE"; 
		self::$settings['layout'] = 'no-fixed';
		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models; //validar 
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}
			

	public static function showRol($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			

			];

		self::$model = new Roles;
		$models =self::$model->getRolPrivilegios();

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models; //validar 
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}

	public static function showLicencia($page,$variables){



		self::$model = new Licencia;
		$model =self::$model->getLicencia(1);
			// var_dump($model['licencia'][0]);

		self::$settings['page']=$page;
		self::$settings['sidebar']=FALSE;
		self::$settings['language']='es_ES';
		self::$settings['scrolling'] = "TRUE"; 
		self::$settings['layout'] = 'no-fixed';
		self::$settings['model'] = $model['licencia'];
		self::$settings['title'] = "licenciamiento";
		self::$settings['page_titulo'] = "licenciamiento";
		self::$settings['page_subtitulo'] = "licenciamiento";
		return self::$settings;
	}




















	public static function getPerfilUsuario($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'
			

			];

		self::$model = new Cliente;
		$models =self::$model->getPerfil($variables['id']);

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models[0]; //validar 
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}
	



}

