<?php

switch ($q) {
    
    case "/ordenar":
        $template = "ordenar";
        break;
    
    case "/cart":
        $fn = $uri[1];
        switch ($fn) {
            case 'view':
            $template = "viewcart";
            break;
            case 'additem':
                $c = $uri[2];
                $categoria = $uri[3];
                $subcategoria = $uri[4];
                $producto_id = $uri[5];
                $color = strtolower($uri[6]);
                $talladet = $uri[7];
                $productoA = $Cart->addProduct($c, 1, true, $iva);
                $item = $Producto->getProducto($producto_id, $color, $talladet); //obtener los datos del producto a mostrar

                $_SESSION['showMessage'] = TRUE;
                $_SESSION['titulo'] = "<h5><center><b>Producto Agregado<b></center></h5>";
                $_SESSION['texto'] = "<h5>Producto: " . ucwords($item['producto']) . "<br>Marca:  " . ucwords($item['marca']) . "<br>Precio: MX$ " . dinero($item['precio_contado'] * (($iva / 100) + 1)) . " </h5><br><h5>TOTAL: MX$ " . dinero($Cart->cartTotal()) . "</h5><br><br><a href=/viewcart><b><font color=cyan><h5>Ver Carrito</h5></font></b></a> ";
                //$template="no";
                if ($categoria) {
                    $location = "Location: /producto/" . $item['categoria'] . "/" . $item['subcategoria'] . "/$producto_id/$color/$talladet";
                    // echo "<html><body><center>Agregando Producto</center><script>history.back();</script></body></html>";
                    // exit;
                } else
                    $location = "Location: /viewcart";

                break;
            case "additembycodebar":
                $codebar = $Data->string("codebar", "post");
                //$_POST['codebar'] en el config
                $_SESSION['showMessage'] = TRUE;
                $_SESSION['titulo'] = "<h5><center><b>Producto Agregado<b></center></h5>";
                $_SESSION['texto'] = "<h5>Producto: " . $productoA['producto'] . "<br><br>  <br>Precio: MX$  </h5><br><br> ";
                //$producto_id=$Productos->getCodebarbyPid($codebar);
                if ($codebar)
                    $Cart->addProduct($codebar, 1, true, $iva);
                $location = "Location: /" . $backpage;
                // $_SESSION['showMessage']="mess() ";

                break;
            case 'delitem':
                $c = $uri[2];
                $Cart->removeProduct($c, 1);
                echo $_SESSION['showMessage'] = TRUE;
                echo $_SESSION['titulo'] = "<h5><center><b><font color=red>Producto Eliminado</font><b></center></h5>";
                // $_SESSION['texto'] = "<h5>Producto: ".ucwords($item['producto'])."<br>Marca:  ".ucwords($item['marca'])."<br>Precio: MX$ ".dinero($item['precio_contado']*(($iva/100)+1))." </h5><br><h4>TOTAL: MX$ </h4><br><br><a href=/viewcart><b><font color=cyan><h5>Ver Carrito</h5></font></b></a> ";
                unset($_SESSION['texto']);
                $location = "Location: /viewcart" . $last;
                break;
            case 'clearitem':
                $c = $uri[2];
                $backpage = $uri[3];

                $Cart->removeProduct($c);
                echo $_SESSION['showMessage'] = TRUE;
                echo $_SESSION['titulo'] = "<h5><center><b><font color=red>Producto Eliminado</font><b></center></h5>";
                // $_SESSION['texto'] = "<h5>Producto: ".ucwords($item['producto'])."<br>Marca:  ".ucwords($item['marca'])."<br>Precio: MX$ ".dinero($item['precio_contado']*(($iva/100)+1))." </h5><br><h4>TOTAL: MX$ </h4><br><br><a href=/viewcart><b><font color=cyan><h5>Ver Carrito</h5></font></b></a> ";

                $location = "Location: /" . $backpage;
                break;
            case 'clearcart':
                $Cart->clearCart();
                $location = "Location: /viewcart" . $last;
                break;
            case 'grabarorden':
                $query = "SELECT cliente_id from cliente where email='$user_name' AND pass='" . sha1($user_pass) . "' limit 1";
                list($cid) = $Database->get_row($query);
                if ($cid)
                    $location = "Location: /ordenenviada?oid=000001";
                else
                    $location = "Location: /viewcart?m=2";
                break;
        }
        break;
}
