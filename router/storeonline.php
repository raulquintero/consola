<?php
switch ($q) {
    case '/store':
         $op1 = "/".$uri[1];
        
        switch ($op1) {
            case "/catalogo":
                 $categoria = $uri[2];
                $subcategoria = str_replace("-", " ", $uri[3]);
                $page = intval($uri[4]) + 1;

                if ($subcategoria) {
                    $sql = "SELECT categoria.categoria_id,subcategoria.subcategoria_id from categoria,subcategoria 
					where categoria.categoria_id=subcategoria.categoria_id AND nombre='$categoria' 
						AND subcategoria='$subcategoria'";
                    list($categoria_id, $subcategoria_id) = $Database->get_row($sql);
                    if ($subcategoria_id) {
                        //paginado
                        $items = cuantosProductos($page, $n_items, $categoria_id, $subcategoria_id);
                        $page_end = ceil($items / $n_items);
                        //obtener productos a mostrar en pagina
                        $productos = getProductos($page, $n_items, $categoria_id, $subcategoria_id);
                        // unset($_SESSION['color']);unset($_SESSION['talla']);unset($_SESSION['marca']);
                    }
                }
                       $template = "catalogo";
                break;
            case "/producto":
                $categoria = $uri[1];
                $subcategoria = str_replace("-", " ", $uri[2]);
                $producto_id = $uri[3];
                $color = $uri[4];
                $talla_sel = strtolower($uri[5]);
                $item = $Producto->getProducto($producto_id, $color, $talla); //obtener los datos del producto a mostrar
                $item['talladet'] = $talla_sel;
                if (strtolower($item['categoria']) == strtolower($categoria) && strtolower($item['subcategoria']) == strtolower($subcategoria)) {
                }
                    $template = "producto";
                break;
        }


        break;
}
