<?php
namespace App\Controller;


class RecepcionController {

	private static $settings;

	public static function inicio($page,$variables): array{

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
