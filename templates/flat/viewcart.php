<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa ?> - Carrito</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/css/themes.css">


	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Form -->
	<script src="/js/plugins/form/jquery.form.min.js"></script>



	<!-- Theme framework -->
	<script src="/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-precomposed.png" />





	<!-- Notify -->
	<link rel="stylesheet" href="/css/plugins/gritter/jquery.gritter.css">
	<!-- Bootbox -->
	<script src="/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Notify -->
	<script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

	<script src="/js/local.js"></script>


<script type="text/javascript">

<?php 
if($_SESSION['showMessage']) {
	echo "titulo='".$_SESSION['titulo'] ."';";
	echo "texto='".$_SESSION['texto'] ."';";
	$function = "mess(titulo,texto)"; 
	unset($_SESSION['showMessage']);
}
?>
</script>



</head>

<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>" onload="<?php echo $function ?>">


<?php include DIR_TEMPLATES.'navigation.php';?>
	





	<div class="container-fluid nav-hidden" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
			<!-- <div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Content</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li class='dropdown'>
						<a href="#" data-toggle="dropdown">Articles</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action #1</a>
							</li>
							<li>
								<a href="#">Antoher Link</a>
							</li>
							<li class='dropdown-submenu'>
								<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">This is level 3</a>
									</li>
									<li>
										<a href="#">Unlimited levels</a>
									</li>
									<li>
										<a href="#">Easy to use</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">News</a>
					</li>
					<li>
						<a href="#">Pages</a>
					</li>
					<li>
						<a href="#">Comments</a>
					</li>
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Plugins</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Cache manager</a>
					</li>
					<li class='dropdown'>
						<a href="#" data-toggle="dropdown">Import manager</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action #1</a>
							</li>
							<li>
								<a href="#">Antoher Link</a>
							</li>
							<li class='dropdown-submenu'>
								<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">This is level 3</a>
									</li>
									<li>
										<a href="#">Unlimited levels</a>
									</li>
									<li>
										<a href="#">Easy to use</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Contact form generator</a>
					</li>
					<li>
						<a href="#">SEO optimization</a>
					</li>
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Settings</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Theme settings</a>
					</li>
					<li class='dropdown'>
						<a href="#" data-toggle="dropdown">Page settings</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action #1</a>
							</li>
							<li>
								<a href="#">Antoher Link</a>
							</li>
							<li class='dropdown-submenu'>
								<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Go to level 3</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">This is level 3</a>
									</li>
									<li>
										<a href="#">Unlimited levels</a>
									</li>
									<li>
										<a href="#">Easy to use</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Security settings</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-right"></i>
						<span>Default hidden</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#">Menu</a>
					</li>
					<li class='dropdown'>
						<a href="#" data-toggle="dropdown">With submenu</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action #1</a>
							</li>
							<li>
								<a href="#">Antoher Link</a>
							</li>
							<li class='dropdown-submenu'>
								<a href="#" data-toggle="dropdown" class='dropdown-toggle'>More stuff</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">This is level 3</a>
									</li>
									<li>
										<a href="#">Easy to use</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Security settings</a>
					</li>
				</ul>
			</div> -->
		</div>
		


		<div id="main">
			<div class="container-fluid">
				<div class="page-header hidden-xs">
					<div class="pull-left">

							<h1><a href='#' onclick='javascript:history.go(-1)'><img src="/img/back.png" height=40></a>
								<a href='#' onclick='javascript:history.go(-1)'> Regresar</a></h1>
							<!-- <a href="#modal-1" role="button" class="btn notify" data-notify-title="<br>Item Agregado: 70009348 - $567.00 MX." data-notify-message=" ">Basic notification</a> -->
					</div>
					<div class="pull-right">

<?php 

if($item)
	echo "
					<ul class=\"stats\">
							<li class='satgreen'>
								<i class=\"fa fa-indent\"></i>
								<div class=\"details\">
									<span class=\"big\">$item</span>
									<span>Ultimo Item Agregado</span>
								</div>
							</li>
						
						</ul>
";
 ?>						
						
<?php if ($itema)
echo "	<br>
	<div class=\"alert alert-info alert-dismissable\">
											<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
											<strong>Item Agregado<br></strong>$item 
  										</div>
";
?>

					</div>
				</div>
				
				<div class="breadcrumbs hidden-xs">
					<ul>
						<li>
							<a href="/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<?php 
						echo"<li>
							<a href=\"#\">Carrito</a>
						</li>";
						
						?>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>






<?php 

if (!$Cart->CartCount())
{echo "	<br><br>
	<div class=\"alert alert-info alert-dismissable\">
											<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
											<i class=\"fa fa-shopping-cart\"></i> &nbsp;&nbsp;<strong>El Carrito de compras se encuentra vacio. <br></strong> 
  										</div>

<br><br><br><Br>

  	<div class=\"col-sm-12\">
										<h4>Productos mas populares</h4>
										<ul class=\"shop-items\">
									
";




$productos = getProductosPopulares(1,4);
// echo "cuantos:" .count($productos[0]);
// echo "<pre>";
// print_r($productos[0]);
// echo "</pre>";

foreach ($productos[0] as $producto) {


    $nombre_archivo="productos/".$producto['producto_id']."-".$producto['color_id']."p.jpg";
// echo print_r($producto);
// echo "<br>";

echo "	<li class=\"col-sm-3\">
			<div class=\"product\">
					<a href=\"/producto/".strtolower(str_replace(" ", "-", $producto['categoria']))."/".strtolower(str_replace(" ", "-", $producto['subcategoria']))."/".$producto['producto_id']."/".strtolower(str_replace(" ", "-", $producto['color']))."\">
			
					<img src=\"$nombre_archivo\" alt=\"\">
					<div class=\"details\">
						<div class=\"name\">
							".$producto['producto']."<br>
							".$producto['color']."
						</div>
						<div class=\"price\">
							MX $".dinero($producto['precio_contado']+($producto['precio_contado']*$iva/100))."
						</div>
					</div>
				</a>
			<!--	<div class=\"extended\">
				
					<div class=\"pull-right\">
						
						<a href=\"#\" rel=\"tooltip\" title=\"\" data-original-title=\"Add to whishlist\">
							<i class=\"fa fa-cloud\"></i>
						</a>
					</div>
				</div> -->
			</div>
			<!-- /.product -->
		</li>
	";										
								
}
									
echo "										</ul>
									</div>




";

}
?>


<?php 
if ($Cart->cartCount()) $ocultar=""; else $ocultar=" hidden ";
 ?>

<div class="row <?php echo $ocultar ?>">

<div class="col-sm-12">
<?php 




 ?>
	<div class="box box-color box-borderedno">
		<div class="box-title">
			<h3>
			<i class="fa fa-shopping-cart"></i>
			<span class='hidden-xs'>Contenido del Carrito de Compras </span> 
			</h3>
				<div class="actions">
				<a href="cart/clearcart" class='hidden-print'><button class='btn boton'  style="background: orange;">Vaciar Carrito</button></a>
				&nbsp;&nbsp;&nbsp;<a href="ordenar" class='hidden-print'><button class='btn boton' style="background: orange;">Ordenar</button></a>
				</div>
		</div>
		<div class="box-content nopadding">






<!-- 		<table class="table table-striped show-xs hidden-lg">
                          <thead>
                            <tr>
                              <th>Producto</th>
                              <th>Cantidad</th>
                              <th>Subtotal</th>
                            </tr>
                          </thead>
            <tbody>

 -->

<?php 

//$cart->viewCart();


// $productos = $cart->getCart();
// $total=0;
// $subtotal=0;
// foreach ($productos as $producto) {
//             $nombre_archivo=$producto['producto_id']."-".$producto['color_id']."p.jpg";
    

// 	$precio = $producto['precio_contado'] * 1.16 - ($precio * $producto['discount']/100);
// 	$subtotal = dinero($precio * $producto['qanty']);// * (($producto['discount']/100)-100);
// 	echo "<tr>";
// 	echo "<td>".$producto['codigo']."" ;
// 	echo "<br>".strtoupper($producto['producto'])."" ;
// 	echo "<br>".strtoupper($producto['color'])."" ;
// 	echo "<br>".strtoupper($producto['talladet'])."" ;
// 	if ($producto['discount'])
// 		echo "<br>Desc: ".$producto['discount']." %";
// 	echo "</td>";
// 	echo "<td align=center><a class='hidden-print' href='/cart?c=".$producto['codigo']."&fn=additem&backpage=viewcart'><i class=\"glyphicon-circle_plus\"></i></a> 
// 			&nbsp;&nbsp;".$producto['qanty']." &nbsp;&nbsp;<a class='hidden-print' href='/cart?c=".$producto['codigo']."&fn=delitem&backpage=viewcart'><i class=\"glyphicon-circle_minus\"></i></a>";
// 			if (!file_exists("/productos/$nombre_archivo")) echo "<br><br><img class='hidden-print' height=40 src='/productos/$nombre_archivo'>";
// 	echo " </td>" ;
// 	echo "<td align=right>$ ". dinero($subtotal) ."<br><br><a class='hidden-print' href='/cart?c=".$producto['codigo']."&fn=clearitem&backpage=viewcart'><i class=\"fa fa-times\"></a></i></td>" ;
// 	echo "</tr>";
// 	$total+=$subtotal;
// }
// 	// echo "<tr><td colspan=1></td><td align=right>SubTotal</td><td align=right>$ ".dinero($total)."<br><img src='//img/noimage.png' width=60 height=1></td></tr></tr>";
// 	// echo "<tr><td colspan=1></td><td align=right>Descuento</td><td align=right>$ ".dinero(0)."<br><img src='//img/noimage.png' width=60 height=1></td></tr></tr>";
// 	echo "<tr><td colspan=1></td><td align=right><b>Total</b></td><td align=right><b>$ ".dinero($total)."</b><br><img src='//img/noimage.png' width=60 height=1></td></tr></tr>";

 ?>


<!-- 
            </tbody>
    	</table>
 -->




<!----------------------------------------------------------------------------------------------------- -->








			<!-- <hidden-xs hidden-md hidden-sm"> -->


		<table class="table table-striped table-user" >   
                          <thead>
                            <tr>
                              <th class='hidden-768'>Codigo</th>
                              <th class='hidden-768'>Imagen</th>
                              <th>Producto</th>
                              <th class='hidden-768'>Color/Estilo Talla</th>
                              <th>Cant.</th>
                              <th>Precio Unit.</th>
                              <th class='hidden-768'>Desc</th>
                              <th>SubTotal</th>
                              <th class='hidden-768'><span class="hidden-print">Opciones</span></th>
                            </tr>
                          </thead>
            <tbody>



<?php 

//$cart->viewCart();


$productos = $Cart->getCart();
$total=0;
$subtotal=0;
foreach ($productos as $producto) {
            $nombre_archivo=$producto['producto_id']."-".$producto['color_id']."p.jpg";

    $descuento = $producto['discount'] /100;
    $precio = ($producto['precio_contado'] * 1.16);
	$precio_descuento = ($producto['precio_contado'] * 1.16) - (($producto['precio_contado']*1.16)*($descuento));
	$subtotal = dinero($precio_descuento * $producto['qanty']);
	echo "<tr>";
	echo "<td class=visible-xs '>".$producto['codigo']."" ;
	echo "<br><b>".strtoupper($producto['producto'])."</b>" ;
	echo "<br>".strtoupper($producto['color'])."" ;
	echo "<br>".strtoupper($producto['talladet'])."" ;
	if ($producto['discount'])
		echo "<br>Desc: ".$producto['discount']." %";
	echo "</td>";
	
	echo "<td class='hidden-768'>".$producto['codigo']."</td>" ;
	echo "<td class='hidden-768'> <img src='/productos/".$nombre_archivo."' height=40></td>" ;
	echo "<td class='hidden-768'>".strtoupper($producto['producto'])."</td>" ;
	echo "<td class='hidden-768'>".strtoupper($producto['color'])."" ;
	echo "<br>".strtoupper($producto['talladet'])."</td>" ;
	echo "<td><a class='hidden-print' href='/cart/additem/".$producto['codigo']."'><i class=\"glyphicon-circle_plus\"></i></a> 
			&nbsp;&nbsp;".$producto['qanty']." &nbsp;&nbsp;<a class='hidden-print' href='/cart/delitem/".$producto['codigo']."'><i class=\"glyphicon-circle_minus\"></i></a> 
			<img src='//img/noimage.png' width=45 height=1>" ;
			if (!file_exists("/productos/$nombre_archivo")) echo "<br><br><img class='hidden-print hidden-lg hidden-md' height=40 src='/productos/$nombre_archivo'>";
			echo "</td>";
	if (!$producto['discount']) 
		echo "<td align=right>".dinero($producto['precio_contado']*1.16)."</td>" ;
	else
		echo "<td align=right ><s><font color=gray>".dinero($producto['precio_contado']*1.16)."</font></s><br>".dinero($precio_descuento)."</td>" ;
	echo "<td class='hidden-768'>".$producto['discount']." %</td>";
	// echo "<td align=right>". dinero($subtotal) ."</td>" ;
	echo "<td align=right>$ ". dinero($subtotal) ."<br><br><a class='hidden-print hidden-md hidden-lg' href='/cart?c=".$producto['codigo']."&fn=clearitem&backpage=viewcart'><i class=\"fa fa-times\"></a></i></td>" ;

	echo "<td align=center  class='hidden-768'><a class='hidden-print' href='/cart/clearitem/".$producto['codigo']."/viewcart'><button href='#' class=\"btn btn-success\">Quitar <!--i class=\"icon-plus icon-white\"></i--></button></a></td>";
	echo "</tr>";
	$total+=$subtotal;
}

	echo "<tr>
			<td colspan=4 class='hidden-768'></td>
			<td colspan=2 class='visible-460'></td>

			<td colspan=1 align=right class='total'><b>Total (MX)</b></td>
			<td class='total'><b>$ ".dinero($total)."</b><imge src='//img/noimage.png' width=60 height=1></td></tr>";
 ?>



            </tbody>
    	</table>






		</div>
	</div>
</div>







</div>
	

				


	


 			</div>
 		</div>



































	</div>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-38620714-4']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
	</script>
</body>

</html>
