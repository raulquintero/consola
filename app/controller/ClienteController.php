<?php
namespace App\Controller;

use App\Models\Cliente;
use Libs\Traits\Data;

class ClienteController {
	use Data;
	
	public static $settings;
	private  static $model;

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

	public static function getPerfilCliente($page,$variables): array{

		
			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
			'readonly'=>'readonly'
			

			];

		self::$model = new Cliente;
		$models =self::$model->getPerfil($variables['id']);


		switch ($variables['opcion']) {
			case 'nuevo': $readonly=' readonly disabled '; break;
			case 'editar': echo $readonly=NULL;  break;
			case 'updatepersonal': 
				$models= self::$model->updateTableByPerson($variables['id'],"person");
				if ($models['error']){
					echo $models['error'];exit;
					}else
				header("location: /catalogo/cliente/".$variables['id']."/perfil");

				break;
			
			default: $readonly = ' readonly disabled ' ;break;
		}

		self::$settings['readonly'] = $readonly;
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models[0];
		self::$settings['error'] = $models['error'];
		return self::$settings;
	}


public static function capturePerfil($page,$variables): array{
			// var $person= NULL;
			$model['curp'] = Data::string("curp","post");

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed',
			'modo' => 'new',
			'readonly' => NULL

			];
			self::$settings['forma']['titulo']="Curp: ".$model['curp'];

			self::$model = new Cliente;
			$models=self::$model->getClienteByCurp($model['curp']);
			if(isset($models['model']['cliente_id'])){
				echo "herreee";
				self::$settings['model']= $models['model'];
				} else{
				// self::$settings['forma']['titulo'].=" [Ya existe]";
					echo "llla";
				$models=self::$model->getPersonByCurp($model['curp']);
				self::$settings['forma']['titulo'].=" [Nuevo]";
				self::$settings['model']=$models;
				// self::$settings['readonly']='readonly disabled';
			}
			// var_dump($models['model']);exit;


			// if (isset($person[0]['person_id'])) {
			// 	self::$settings['readonly']="readonly";
			// 	self::$settings['model'] = $person[0];
			// }


	return self::$settings;
	
	 }








}