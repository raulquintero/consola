<?php
namespace App\Controller;

use App\Models\SolicitudEmpleo;
use Libs\Traits\Data;

class RecursosHumanosController {
		use Data;

	public static $settings;
	private  static $model;

	


	 public static function showSolicitudesEmpleo($page,$variables): array{

			self::$settings['page']=$page;
			self::$settings['sidebar']=TRUE;
			self::$settings['language']='es_ES';
			self::$settings['scrolling'] = "TRUE"; 
			self::$settings['layout'] = 'no-fixed';
			self::$settings['page_titulo'] = 'Contrataciones';
			self::$settings['tabla_titulo'] = 'Solicitudes de Empleo';


			self::$model = new SolicitudEmpleo;
		$models=self::$model->getSolicitudesEmpleo();

		 // var_dump($models);exit;
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		return self::$settings;
	}

	public static function getPerfilSolicitudEmpleo($page,$variables): array{

			self::$settings=[
				'page'=>$page,
				'sidebar'=>FALSE,
				'language'=>'es_ES',
				'scrolling' => "TRUE", 
				'layout' => 'no-fixed',
				'readonly'=>$readonly
			];

		self::$model = new SolicitudEmpleo;
		$models =self::$model->getSolicitudEmpleo($variables['id']);
		// echo "<pre>";
		//  var_dump($models['model']);
		// 	echo "</pre>";exit;
		switch ($variables['opcion']) {
			case 'nuevo': $readonly=' readonly disabled '; break;
			case 'editar': $readonly=NULL; break;
			case 'updatepersonal': 
				$models= self::$model->updateTableByPerson($variables['id'],"person");
				if (!$models['error'])
				header("location: /catalogo/solicitudempleo/".$variables['id']."/perfil");

				break;
			case 'updatelaboral': 
				$models= self::$model->updateTableByPerson($variables['id'],"solicitudempleo");
				if (!$models['error'])
				header("location: /catalogo/solicitudempleo/".$variables['id']."/perfil");

				break;
			case 'crear':  $readonly=NULL;$solicitudempleo['id']= self::$model->crearSolicitudEmpleoByPerson($variables['id']);
							if ($solicitudempleo['id'])
								header("location: /catalogo/solicitudempleo/".$solicitudempleo['id']."/perfil/editar");
			 break;
			
			default: $readonly = 'readonly disabled ';break;
		}

		// var_dump($models['model']);
		if (!$models['model']['person_id'])
			$page="error4042";
		
		//informacion de la forma	
		self::$settings['forma']=[
			'titulo'=> SOLICITUDEMPLEO.": ".$models['model']['solicitudempleo_id']
		];

		// $models = $result['models'];
		// $puestos = $result['puestos'];
		// $estudiosmax = $result['estudiosmax'];

		// var_dump($models['model']);exit;
		// self::$settings['page'] = $page;
		// self::$settings['variables'] = $variables;
		// self::$settings['model'] = $models;
		// self::$settings['puestos'] = $puestos;
		// self::$settings['estudiosmax'] = $estudiosmax;
		// self::$settings['readonly']=$readonly;
		// self::$settings['error'] = $models['error'];


		self::$settings['page'] = $page;
		self::$settings['variables'] = $variables;
		self::$settings['model'] = $models['model'];
		self::$settings['puestos'] = $models['puestos'];
		self::$settings['estudiosmax']=$models['estudiosmax'];
		self::$settings['readonly']=$readonly;
		self::$settings['error'] = $models['error'];

		return self::$settings;
	}





}
	