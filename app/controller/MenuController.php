<?php
namespace App\Controller;
use Core\Menu;
use Libs\Traits\{Data,Crypto64};

class MenuController {
use Data,Crypto64;
	public static $settings;
	private static $path = "/mantenimiento/menu";

	public static function update($page,$variables,$Menu): array{
	
		self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];		
		// var_dump($_POST);
		$menu_name 		= Data::string("menu_name","post");			
		$path_option 	= Data::string("path_option","post");
		$parent_id 		= Data::int("parent_id","post");       //$Menu->getParentId($variables['menu_id']);
		$parametros 	= Crypto64::encode($_POST["parametros"]);
		$menu_id 		= Data::int("menu_id","post");
		$position		= Data::int("position","post");
		
		$Menu->editCategory($parent_id,$menu_name,$path_option,$parametros,$menu_id,$position);

		if($parent_id)	self::$path.="/".$parent_id;



		header("location: ".self::$path);

		
		self::$settings['variables'] = $variables;
		return self::$settings;
	}

	public static function add($page,$variables,$Menu): array{
		
		self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];
		 //var_dump($_POST);
		$parent_id 		= Data::int("parent_id","post");
		$menu_name		= Data::string("menu_name","post");
		$path_option	= Data::string("path_option","post");
		$parametros		= Data::string("parametros","post");

		
		$Menu->insertCategory($parent_id,$menu_name,$path_option,$parametros);

			if($parent_id)	self::$path.="/".$parent_id;

			header("location: ".self::$path);

		self::$settings['variables'] = $variables;
		return self::$settings;
	}

	public static function delete($page,$variables,$Menu): array{
		
		self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];
		 //var_dump($variables);
		$menu_id = $variables['menu_id'];
		$parent_id= $variables['parent_id'];

		$Menu->deleteCategory($menu_id);



		if($parent_id)	self::$path.="/".$parent_id;

			header("location: ".self::$path);

			exit;
		self::$settings['variables'] = $variables;
		return self::$settings;
	}

	public static function restore($page,$variables,$Menu): array{
		


		self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

		 //var_dump($variables);
		$menu_id = $variables['menu_id'];
		$parent_id= $variables['parent_id'];

		$Menu->restoreCategory($menu_id);


		if($parent_id)	self::$path.="/".$parent_id;

			header("location: ".self::$path);

			exit;
		self::$settings['variables'] = $variables;
		return self::$settings;
	}


	public static function remove($page,$variables,$Menu): array{
		


		self::$settings=[
			'page'=>$page,
			'sidebar'=>TRUE,
			'language'=>'es_ES',
			'scrolling' => "TRUE", 
			'layout' => 'no-fixed'

			];

		 //var_dump($variables);
		$menu_id = $variables['menu_id'];
		$parent_id= $variables['parent_id'];

		$Menu->removeCategory($menu_id);


		if($parent_id)	self::$path.="/".$parent_id;

			header("location: ".self::$path);

			exit;
		self::$settings['variables'] = $variables;
		return self::$settings;
	}





}
