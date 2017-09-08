<?php
namespace App\Controller;


class FormaController {

	private static $settings;

	public static function showForma($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>FALSE,
			'language'=>'es_ES'
			];



			
				
			self::$settings['variables'] = $variables;

		return self::$settings;
	}
}
