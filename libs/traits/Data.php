<?php
namespace Libs\Traits;

trait Data {
    
//    private $value ="";
    
  
    
    public function string($name,$method){
        switch($method){
            case "get": 
                $value=self::limpiar($_GET[$name]);
                break;
            case "post": 
                $value = self::limpiar($_POST[$name]);
                break;
        }
        return $value;
    }
    
    public function int($name,$method){
        switch($method){
            case "get": 
                $value=intval(self::limpiar($_GET[$name]));
                break;
            case "post": 
               $value=intval(self::limpiar($_POST[$name]));
                break;
        }
        return $value;
    }
    
    public function uri($name,$method){
        switch($method){
            case "get": 
                $value=self::limpiar($_GET[$name]);
                break;
            case "post": 
                $value = self::limpiar($_POST[$name]);
                break;
        }
        $value = explode("/", $value);
        return $value;
    }
    
private function clear_url ($str){
    return preg_replace('/[^a-z-0-9.]/',"",$str);
}
protected function limpiar  ($str){
    return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $str);
}
    
    
    
    
}