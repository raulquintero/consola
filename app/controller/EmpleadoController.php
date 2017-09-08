<?php
namespace App\Controller;

use App\Models\Empleado;
use Libs\Traits\Data;

class EmpleadoController {
		use Data;

	public static $settings;
	private  static $model;

	public static function solicitudNueva($page,$variables){

	// 	self::$settings=[
	// 		'page'=>$page,
	// 		'sidebar'=>TRUE,
	// 		'language'=>'es_ES',
	// 		'scrolling' => "TRUE", 
	// 		'layout' => 'no-fixed'

	// 		];

	// 	self::$settings['variables'] = $variables;
	// return self::$settings;






		// header('Content-Type: application/json');
		$r=array(
			'response'=> 'todo bien'
		);
		echo json_encode($r);
		exit;
	}


	 public static function showEmpleados($page,$variables): array{


		self::$model = new Empleado;
		$models =self::$model->getEmpleados();


		self::$settings['page']=$page;
		self::$settings['sidebar']=FALSE;
		self::$settings['language']='es_ES';
		self::$settings['scrolling']= "TRUE"; 
		self::$settings['layout']= 'no-fixed';

		// var_dump($usuario);
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		self::$settings['page_title'] = "empleados";
		self::$settings['page_subtitle'] = "empleados";

		return self::$settings;
	

	}

//********************************************

	public static function getPerfilEmpleado($page,$variables): array{

		self::$model = new Empleado;
		$models =self::$model->getEmpleado($variables['id']);
		$combos =self::$model->getCombosForm();

		switch ($variables['opcion']) {
			case 'nuevo':  $models = $model->crearEmpleado($variables,$variables['tabla']); $readonly=NULL;  break;
			case 'editar': $readonly=NULL; $form_action="/catalogo/empleados/".intval($models['model']['empleado_id'])."/perfil/update"; break;
			case 'update': $models= self::$model->updateTableByPerson($variables['id'],$variables['tabla']); if (!$models['error']) header("location: /catalogo/empleados/".$variables['id']."/perfil");

				break;
			
			default: $readonly = " readonly disabled ";$form_action="/catalogo/empleado/".$variables['id']."/perfil";' readonly disabled ' ;break;
		}

		if (!$models['model']['person_id'] && $variables['id'])
			$page="error4042";
		//informacion de la forma	
		

		//interface
		self::$settings['sidebar']			= FALSE;
		self::$settings['language']			= 'es_ES';
		self::$settings['scrolling'] 		= 'TRUE'; 
		self::$settings['layout'] 			= 'no-fixed';
		self::$settings['readonly'] 		= $readonly;
		self::$settings['page'] 			= $page;
		self::$settings['form_action'] 		= $form_action;
		self::$settings['variables'] 		= $variables;
		self::$settings['page_title'] 		= EMPLOYEE.": ".$models['model']['empleado_id'];
		self::$settings['page_subtitle'] 	= EMPLOYEE.": ".$models['model']['empleado_id'];
		self::$settings['page_parent'] 		= "empleados";
		self::$settings['page_parent_url'] 	= "/catalogo/empleados";

		// informacion del modelo);
		self::$settings['model'] 		= $models['model'];
		self::$settings['generos'] 		= $combos['generos'];
		self::$settings['puestos'] 		= $combos['puestos'];
		self::$settings['horarios'] 	= $combos['horarios'];
		self::$settings['estudiosmax']	= $combos['estudiosmax'];
		self::$settings['solicitudesempleo']	= $models['solicitudesempleo'];
		//errores de la base de datos
		self::$settings['error'] 		= $models['error'];

// var_dump(self::$settings);exit;

		return self::$settings;
	}

//*********************************************
	public static function createEmployee($user_id): array{

	

	foreach($_POST as $key=>$value){
		$value = Data::string($key,"post");
		$form[$key]=$value;
	}
	//var_dump($form);
	
		self::$model = new Empleado;
		$empleado_id = self::$model->createEmployee($form);

		if ($usuario_id)
			header ("location: /catalogo/empleado/$empleado_id/perfil");
		else
			header("location: /catalogo/empleados/nuevo");
	exit;
	}

	public static function capturePerfil($page,$variables): array{
			// var $person= NULL;
			$model['curp'] = Data::string("curp","post");


			$form_action="/catalogo/empleado/0/perfil";

			self::$model = new Empleado;
			$empleado=self::$model->getEmpleadoByCurp($model['curp']);
			if ($empleado['empleado_id'])
				header("location: /catalogo/empleados/".$empleado['empleado_id']."/perfil");

			$person = self::$model->getPersonByCurp($model['curp']);
			// var_dump(intval($person['model']['person_id']));exit;


			//if ($person['person_id']) 	$readonly="readonly";
			echo $form_action = "/catalogo/empleados/".intval($person['model']['person_id'])."/perfil/nuevo";


			self::$settings['model'] = $person['model'];
			self::$settings['generos'] = $person['generos'];
			self::$settings['readonly']=$readonly;


			self::$settings['page']				= $page;
			self::$settings['page_title']		= "empleados";
			self::$settings['page_subtitle']	= "empleado Nuevo";
			self::$settings['catalogo']			= "empleados";
			self::$settings['page_parent'] 		= "empleados";
			self::$settings['page_parent_url'] 	= "/catalogo/empleados";
			self::$settings['form_action'] 		= $form_action;

			self::$settings['sidebar']			= FALSE;
			self::$settings['language']			= 'es_ES';
			self::$settings['scrolling'] 		= "TRUE"; 
			self::$settings['layout'] 			= 'no-fixed';
			self::$settings['modo'] 			= 'new';
			self::$settings['readonly'] 		= $readonly;
			// self::$settings['form_action']	= $form_action;

	return self::$settings;
	
	 }

}
	