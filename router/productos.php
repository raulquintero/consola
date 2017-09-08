<?php

switch ($q) {
    case "/productos":
        $tproducto=$uri[1];
        $tproducto= $Producto->getTproducto($tproducto);
        if($tproducto['tproducto_id']){
        $productos = $Producto->getProductos($tproducto['tproducto_id'],$tproducto['tabla']);
        $template="productos";
        }
        break;

    
}
