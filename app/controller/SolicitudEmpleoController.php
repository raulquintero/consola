<?php
namespace App\Controller;

use App\Models\SolicitudEmpleo;
use Libs\Traits\Data;

class SolicitudEmpleoController {
		use Data;

	public static $settings;
	private  static $model;


	public function getPerfilSolicitudEmpleoEvaluacion($page,$variables){

		self::$model = new SolicitudEmpleo;
		$contrato = self::$model->getContrato($variables['id']);
		// var_dump($contrato);exit;
		$pagina ['titulo'] = "Contrato de Trabajo (Indefinido)";
		$pagina ['subtitulo'] = "Contrato de Trabajo (Indefinido)";
		self::$settings['page']=$page;
		self::$settings['pagina'] = $pagina;
		self::$settings['page_title'] = "Contrato de Trabajo (Indefinido)";
		self::$settings['sidebar']=FALSE;
		self::$settings['language']='es_ES';
		self::$settings['scrolling'] = "TRUE"; 
		self::$settings['layout'] = 'no-fixed';

		self::$settings['variables'] = $variables;
		self::$settings['contrato'] = $contrato['contrato'];
		self::$settings['empresa'] =$contrato['empresa'];
		self::$settings['postulante'] =$contrato['postulante'];
	return self::$settings;

	}

	public static function solicitudEmpleoNueva($page,$variables){

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


	 public static function showSolicitudesEmpleo($page,$variables): array{

			self::$settings['page']=$page;
			self::$settings['sidebar']=FALSE;
			self::$settings['language']='es_ES';
			self::$settings['scrolling'] = "TRUE"; 
			self::$settings['layout'] = 'no-fixed';


			switch ($variables['tipo']) {
				case 'captura':	$tipo ="captura"; break;
				case 'entrevista':	$tipo ="entrevista"; break;
				case 'no_contratados': $tipo="no contratado"; break;
				case 'canceladas':	$tipo ="cancelada"; break;
				case 'pendientes':	$tipo ="pendiente"; break;
				
			}
			self::$model = new SolicitudEmpleo;
			$statusSE = self::$model->getStatusList();
			// echo "<pre>";
			// var_dump($statusSE[$tipo]);
			// echo $tipo;exit;
			// var_dump($statusSE[$variables['tipo']]['id']);
			 $models =   self::$model->getSolicitudesEmpleo("solicitudempleo_id,curp,concat(apellidop,' ',apellidom,' ',nombre) as postulante,estudiosmax,carrera,puesto,solicitudempleostatus,DATE_FORMAT(created_at, '%d-%m-%Y') as fecha,DATE_FORMAT(created_at, '%h:%i %p') as hora",$statusSE[$tipo]['solicitudempleostatus_id']);
			$variables['tipo']=$tipo;
			foreach ($statusSE as $status) {
			$opciones[]= ['opcion'=>$status['status'],'url'=>'/catalogo/solicitudesempleo/'.$status['status'] ];
			}

		self::$settings['page_titulo'] = 'Solicitudes de Empleo';
			if ($variables['tipo']) self::$settings['page_titulo'] .=' ['.ucwords($variables['tipo']).']';
		self::$settings['tabla_titulo'] = 'Solicitudes de Empleo';
		self::$settings['variables'] = $variables;
		self::$settings['models'] = $models;
		self::$settings['opciones'] = $opciones;

		return self::$settings;
	}

	public static function getPerfilSolicitudEmpleo($page,$variables,$status_id=1): array{

		
		self::$settings['sidebar'] 		= FALSE;
		self::$settings['language'] 	='es_ES';
		self::$settings['scrolling'] 	= "TRUE"; 
		self::$settings['layout'] 		= 'no-fixed';
		
		$pagina ['titulo'] = SOLICITUDEMPLEO." [".$variables['id']."]";
		$pagina ['subtitulo'] = SOLICITUDEMPLEO." [".$variables['id']."]";
		
		self::$model = new SolicitudEmpleo;
		$models =self::$model->getSolicitudEmpleo($variables['id']);
		$statusSE = self::$model->getStatusList();
		foreach ($statusSE as $status) {$opciones[]= ['opcion'=>$status['status'],'url'=>'/catalogo/solicitudesempleo/'.$status['status'] ];}

		
		switch ($variables['opcion']) {
			case 'nuevo': $readonly=NULL;
							$models['model']['curp'] = Data::string("curp","post");
							$models['error'] = self::$model->checkCurp($models['model']['curp']);
							if (count($models['error'])){
								$readonly ="readonly disabled";
							}else{
							$form['action'] = "/catalogo/solicitudempleo/0/perfil/crear";
							$form['method'] = "POST";
							}
							break;
			case 'editar': $readonly=NULL;
							$form['action'] = "/catalogo/solicitudempleo/".$variables['id']."/perfil/update";
							$form['method'] = "POST";
							break;
			case 'crear':  foreach($_POST as $key=>$value){ $form[$key] = Data::string($key,"post"); }
							$readonly=NULL;$solicitudempleo['id']= self::$model->createSolicitudEmpleo($form);;
							if ($solicitudempleo['id'])
								header("location: /catalogo/solicitudempleo/".$solicitudempleo['id']."/perfil/editar");
							else
								header("location: /catalogo/empleados/nuevo");
			 				break;
			case 'update': 
							$models= self::$model->updateTableByPerson($variables['id'],"solicitudempleo");
							if (!$models['error'])
							header("location: /catalogo/solicitudempleo/".$variables['id']."/perfil");
							break;
			case 'enviar_rh': 
							$models = self::$model->cambiarStatus($variables['opcion'],$variables['id']);
							header ("location: /catalogo/solicitudesempleo");
							break;
			case 'no_contratar':
							$models = self::$model->cambiarStatus($variables['opcion'],$variables['id']);
							header( "location: /catalogo/solicitudesempleo/no_contratados");
							break;
			case 'pendiente':
							$models = self::$model->cambiarStatus($variables['opcion'],$variables['id']);
							header( "location: /catalogo/solicitudesempleo/pendientes");
							break;
			// case 'updatepersonal': 
			// 				$models= self::$model->updateTableByPerson($variables['id'],"person");
			// 				if (!$models['error'])
			// 				header("location: /catalogo/solicitudempleo/".$variables['id']."/perfil");
			// 				break;

			default: $readonly = 'readonly disabled ';
							
							break;
		}

		// var_dump($models['model']);
		if (!$models['model']['curp'])
			$page="error4042";
		
	


		self::$settings['modo'] 		= 'new';
		self::$settings['movimiento']	= "nuevo";

		self::$settings['page'] 		= $page;
		self::$settings['pagina']		= $pagina;
		self::$settings['variables'] 	= $variables;
		self::$settings['form'] 		= $form;
		self::$settings['model'] 		= $models['model'];
		self::$settings['solicitudempleostatus'] 		= $models['solicitudempleostatus'];
		self::$settings['generos'] 		= $models['generos'];
		self::$settings['puestos'] 		= $models['puestos'];
		self::$settings['estudiosmax']	=$models['estudiosmax'];
		self::$settings['codigos']	=$models['codigos'];
		self::$settings['readonly']		=$readonly;
		self::$settings['error'] 		= $models['error'];

	return self::$settings;
	}


	

	public static function apishowSolicitudesEmpleo($page,$variables): array{
		
					
		
					switch ($variables['tipo']) {
						case 'captura':	$tipo ="captura"; break;
						case 'entrevista':	$tipo ="entrevista"; break;
						case 'no_contratados': $tipo="no contratado"; break;
						case 'canceladas':	$tipo ="cancelada"; break;
						case 'pendientes':	$tipo ="pendiente"; break;
						
					}
					self::$model = new SolicitudEmpleo;
					//$statusSE = self::$model->getStatusList();
					// echo "<pre>";
					// var_dump($statusSE[$tipo]);
					// echo $tipo;exit;
					// var_dump($statusSE[$variables['tipo']]['id']);
					 $models =   self::$model->getSolicitudesEmpleo("solicitudempleo_id,curp,concat(nombreapellidop,' ',apellidom,' ',nombre) as postulante,estudiosmax,carrera,puesto,solicitudempleostatus,DATE_FORMAT(created_at, '%d-%m-%Y') as fecha",0);
					// $variables['tipo']=$tipo;
					// foreach ($statusSE as $status) {
					// $opciones[]= ['opcion'=>$status['status'],'url'=>'/catalogo/solicitudesempleo/'.$status['status'] ];
					// }
		
				foreach ($models as $model){
						$line=NULL;
						foreach($model as $key=>$value)
							$line []=$model[$key];
						// $line= ltrim($line, ',');

						$line[]="<a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/".$model['solicitudempleo_id']."/perfil')\" class='btn' rel='tooltip' title='' data-original-title='View'><i class='fa fa-search'></i>".
						"<a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/".$model['solicitudempleo_id']."/perfil/editar')\" class='btn' rel='tooltip' title='' data-original-title='Edit'><i class='fa fa-edit'></i>";
						$block[aaData][]=$line;
					}
					// var_dump($block);

					echo json_encode($block);
					exit;
		
				return self::$settings;
			}
	

}
	