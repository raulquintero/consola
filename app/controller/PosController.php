<?php
namespace App\Controller;


class PosController {

	private static $settings;

	public static function pos($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];
		return self::$settings;
	}
}
