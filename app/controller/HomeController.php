<?php
namespace App\Controller;


class HomeController {
	private static $settings;

	public static function homePage($page,$variables): array{

			self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

	return self::$settings;
	}

	public static function redirectPage($page) {

		header("location : /");
		exit;


	}
	
	

}