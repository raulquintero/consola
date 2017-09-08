<?php
namespace App\Controller;


class MantenimientoController {

	private static $settings;

	public static function menu($page,$variables): array{


			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];


			 if (!isset($variables['menu_id'])) 
			 	{$variables ['menu_id'] = 0; unset($variables[0]);}

			
				
			self::$settings['variables'] = $variables;

		return self::$settings;
	}


	public static function environment($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];
		return self::$settings;
	}


	
	// public static function showpage($page,$variables): array{

	// 		self::$settings=[
	// 		'page'=>$page,
	// 		'sidebar'=>FLASE,
	// 		'language'=>'es_ES',
	// 		'scrolling' => "TRUE", 
	// 		'layout' => 'no-fixed'

	// 		];


	// 		 if (!isset($variables['menu_id'])) 
	// 		 	{$variables ['menu_id'] = 0; unset($variables[0]);}

			
				
	// 		self::$settings['variables'] = $variables;

	// 	return self::$settings;
	// }


}
