<?php
switch($q){

	case "/setmarca": 
		$marca=$uri[1]; $q=$uri[2]; $categoria=$uri[3]; $subcategoria=str_replace(" ", "-", $uri[4]);
			$_SESSION['marca']=$marca;
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/unsetmarca": 
		$q=$uri[1]; $categoria=$uri[2]; $subcategoria=str_replace("-", " ", $uri[3]);
			unset($_SESSION['marca']);
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/setcolor": 
		$color=$uri[1]; $q=$uri[2]; $categoria=$uri[3]; $subcategoria=str_replace(" ", "-", $uri[4]);
			$_SESSION['color']=$color; 
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/unsetcolor": 
		$q=$uri[1]; $categoria=$uri[2]; $subcategoria=str_replace(" ", "-", $uri[3]);
			unset($_SESSION['color']);
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/settalla": 
		$talla=$uri[1]; $q=$uri[2]; $categoria=$uri[3]; $subcategoria=str_replace(" ", "-", $uri[4]);
		 $_SESSION['talla']=$talla;
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/unsettalla": 
		$q=$uri[1]; $categoria=$uri[2]; $subcategoria=str_replace(" ", "-", $uri[3]);
			unset($_SESSION['talla']);
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	case "/unsetfiltros":
		$q=$uri[1]; $categoria=$uri[2]; $subcategoria=str_replace(" ", "-", $uri[3]);
			unset($_SESSION['color']);unset($_SESSION['talla']);unset($_SESSION['marca']);
			 $location="Location: /$q/$categoria/$subcategoria";
		break;
	
}