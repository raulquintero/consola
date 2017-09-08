<?php

switch ($q) {
    case "/api":
        $fn = $uri[1];
        $categoria = $uri[2];
        $subcategoria = str_replace("-", " ", $uri[3]);
        $page = $uri[4] + 1;
        $sql = "SELECT categoria.categoria_id,subcategoria.subcategoria_id from categoria,subcategoria 
                            where categoria.categoria_id=subcategoria.categoria_id AND nombre='$categoria' 
                                    AND subcategoria='$subcategoria'";
        list($categoria_id, $subcategoria_id) = $Database->get_row($sql);
        switch ($fn) {
            case 'catalogo':
                $productos = getProductos($page, $n_items, $categoria_id, $subcategoria_id);
                echo json_encode($productos);
                exit;
                break;
            case 'producto':
                $producto_id = $uri[4];
                $color = $uri[5];
                $talla_sel = strtolower($uri[6]);
                //obtener los datos del producto a mostrar
                $item = $Producto->getProducto($producto_id, $color, $talla_sel);
                if (!$item['producto']) {
                    echo "No se encontro el producto";
                    exit;
                }
                $item['talladet'] = $talla_sel;
                echo json_encode($item);
                exit;
                break;
        }
        break;
}
