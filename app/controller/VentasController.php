<?php
namespace App\Controller;


class VentasController {

	private static $settings;

	public static function clientes($template,$variables): array{

			self::$settings=[
			'template'=>$template,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];
		return self::$settings;
	}
}
