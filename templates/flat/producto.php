
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo ucwords($item['producto']) ?> - <?php echo $empresa ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- chosen -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/chosen/chosen.css">
	<!-- colorbox -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/colorbox/colorbox.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/flat/css/themes.css">

	<link rel="stylesheet" href="/assets/flat/css/local.css">


	<!-- jQuery -->
	<script src="/assets/flat/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="/assets/flat/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="/assets/flat/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/flat/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/assets/flat/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- chosen -->
	<script src="/assets/flat/js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- colorbox -->
	<script src="/assets/flat/js/plugins/colorbox/jquery.colorbox-min.js"></script>

	<!-- Theme framework -->
	<script src="/assets/flat/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/assets/flat/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/assets/flat/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="/assets/flat/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/flat/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/assets/flat/img/apple-touch-icon-precomposed.png" />



	<!-- Notify -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/gritter/jquery.gritter.css">
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Notify -->
	<script src="/assets/flat/js/plugins/gritter/jquery.gritter.min.js"></script>

	<script src="/assets/flat/js/local.js"></script>

<?php 
	// $total=dinero($Cart->cartTotal());
	// $query = "SELECT producto,precio_contado FROM producto WHERE producto_id=$producto_id ";
	// 	list($productoAdded,$precio_contado)=$Database->get_row($query);
	// $productoAdded=ucwords(str_replace("-"," ", $productoAdded));
	// $precio_contado=dinero($precio_contado*(($iva/100)+1));
?>

<script type="text/javascript">
titulo="<?php echo $_SESSION['titulo'] ?>";
texto="<?php echo $_SESSION['texto'] ?>";

</script>
<?php 
if($_SESSION['showMessage']) $function = "mess(titulo,texto)"; 
if (isset($_SESSION['showMessage']))
			unset($_SESSION['showMessage']);
?>



</head>
<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>" onload="<?php echo $function ?>">

	<?php include DIR_TEMPLATES.'navigation.php';?>

	<div class="container-fluid naveeee-hidden" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>


<br>
<boton class="btn btn-green" style="width:100%">Productos de Interes</boton>
			
			
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Recien Vistos</span>
					</a>
				</div>
				<div class="subnav-content">
					<ul class="bestseller">
						


<?php echo  getPromociones(getProductosPopulares(1,4),$iva);?>


					
					</ul>
				</div>
			</div>
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						

											
						<h1> <?php echo ucwords($item['producto'])?></h1>
						<?php 


						echo "<div class='  visible-xs center hidden-print'>
									<a href=\"whatsapp://send?text=$link\" 
										  data-action=\"share/whatsapp/share\" ><img 
										border=\"0\" src=\"/images/whatsapp-icon.png\" width=\"32px\" height=\"32px\"></a>
							";
						echo "
								<a href=\"http://www.facebook.com/sharer.php?u=$link\"><img 
										border=\"0\" src=\"/images/facebook.png\" width=\"32px\" height=\"32px\"></a></a>
								</div>";


						 ?>



					</div>
					<div class="pull-right">
						<!-- <img src="/assets/flat/img/banner-2.jpg" height="100"> -->
						<!-- <ul class="minitiles">
							<li class='grey'>
								<a href="#">
									<i class="fa fa-cogs"></i>
								</a>
							</li>
							<li class='lightgrey'>
								<a href="#">
									<i class="fa fa-globe"></i>
								</a>
							</li>
						</ul>
						<ul class="stats">
							<li class='satgreen'>
								<i class="fa fa-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>Balance</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul> -->
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#"><?php echo ucwords($item['categoria']) ?></a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#"><?php echo ucwords($item['subcategoria']) ?></a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<?php 
if ($item['color_id'])
{				
				$nombre_archivo=$item['producto_id']."-".$item['color_id']."p";
				 ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="box" >
							<div class="box-content">
								<div class="row">
									<div class="col-sm-5" style="border:1px solid #bbb;background:#eee"><br><center>
										<a href="/productos/<?php echo $nombre_archivo.".jpg" ?>" class='colorbox-image big hidden-print'>
											<img src="/productos/<?php echo $nombre_archivo.".jpg" ?>" alt="" >
										</a>
											<img class="visible-print" src="/productos/<?php echo $nombre_archivo.".jpg" ?>" alt="" width=300>
									</center>
										<!-- <div class="more-images hidden-print">
											<ul class="thumbnails">
												<li class="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo.".jpg" ?>" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo.".jpg" ?>" alt="">
													</a>
												</li>
												<?php if (file_exists("productos/".$nombre_archivo."2.jpg"))	{	 ?>
												<li class="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>2.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>2.jpg" alt="">
													</a>
												</li>
												<?php 	}	?>
												<?php if (file_exists("productos/".$nombre_archivo."3.jpg"))	{	 ?>
												<li class="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>3.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>3.jpg" alt="">
													</a>
												</li>
												<?php 	}	?>
												<?php if (file_exists("productos/".$nombre_archivo."4.jpg"))	{	 ?>
												<li class="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>4.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>4.jpg" alt="">
													</a>
												</li>
												<?php 	}	?>
											</ul>
										</div> --><br>
									</div><br class="visible-xs">
									<div class="col-sm-1" style="border:1px solid #bbb;background:#eee"><center>
										<div class="more-images hidden-print">
											<ul class="thumbnails">
												<li class3="col-sm-3" class="hidden-xs hidden-md">
													<a href="/productos/<?php echo $nombre_archivo.".jpg" ?>" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo.".jpg" ?>" alt="">
													</a><br>
												</li>
												<?php if (file_exists("productos/".$nombre_archivo."2.jpg"))	{	 ?>
												<li classe="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>2.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>2.jpg" alt="">
													</a><br>
												</li>
												<?php 	}	?>
												<?php if (file_exists("productos/".$nombre_archivo."3.jpg"))	{	 ?>
												<li classe="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>3.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>3.jpg" alt="">
													</a><br>
												</li>
												<?php 	}	?>
												<?php if (file_exists("productos/".$nombre_archivo."4.jpg"))	{	 ?>
												<li classe="col-sm-3">
													<a href="/productos/<?php echo $nombre_archivo?>4.jpg" class='colorbox-image'>
														<img src="/productos/<?php echo $nombre_archivo?>4.jpg" alt="">
													</a>
												</li>
												<?php 	}	?>
											</ul>
										</div></center>
									</div>
									<div class="col-sm-6" styles="border:1px solid #bbb;background:#fff">
									<div class="col-sm-7" ><center>
										<div class="product-details">
											<h4><?php echo ucwords($item['producto']) ?></h4>
												<?php echo ucwords($item['marca']) ?>
											<div class="price">
												MX$ <?php echo dinero($item['precio_contado']*(($iva/100)+1)) ?>
											</div>



											<!-- <div class="colors"> -->
											<div class="colores hidden-print">
												<div class="colores-title">
													<br>
													<a href="#" class='toggle-colores'>
														<span> Colores / Estilos </span>
													</a>
												</div>
												<ul class="colores-menu" classe="colors">
											
											<?php
											$backproducto=str_replace(" ", "-", "/".$q."/".$item['categoria']."/".$item['subcategoria']."/".$item['producto_id']);

											$colores="SELECT color_id,color from color where enabled=TRUE AND producto_id=$producto_id";
											$colores=$Database->get_results($colores);
											foreach ($colores as $color) {
											if ($item['color_id']==$color['color_id']) {
												$activo=" class='active' "; 
												$color_sel=$color['color'];
											}
												else $activo="";
											echo "	<li $activo>
														<a href=\"$backproducto/".
														strtolower(str_replace(" ", "-", $color['color']))."\" >".$color['color']." </a>
													</li>";
											}

											 ?>
													
												</ul>
											</div>


											
										
										<br><br>	

										</div>
									</center>
									</div>


									<br class="visible-xs">
									<div class="col-sm-5" >
										<div class="product-details">
										<div class="sizes hidden-print"><center>
												<h5>Tallas Disponibles </h5>

											<?php 
											$tallas="SELECT talladet.talladet_id,talladet,inventariodet.cantidad,inventariodet.codigo from producto,talla,talladet,inventariodet 
											where producto.talla_id=talla.talla_id AND talla.talla_id=talladet.talla_id 
											AND inventariodet.color_id='".$item['color_id']."' AND inventariodet.talladet_id=talladet.talladet_id 
											 AND producto.producto_id='$producto_id'";
											$tallas=$Database->get_results($tallas);
											$total_tallas=0;
											foreach ($tallas as $talla) {
												$total_tallas+=$talla['cantidad'];
												// $inventario="SELECT cantidad from inventariodet where producto_id=$pid AND talladet_id='".$talla['talladet_id']."'";
												// list($inventario) = $database->get_row($inventario);
												if ($talla_sel==strtolower($talla['talladet'])){
													// $talladet=$talla['talladet'];
													$tallaactivo = "btn-primary";
													$codigo=$talla['codigo'];
													} else $tallaactivo="btn-info ";
												if (!$talla['cantidad'])  $tallaactivo=" disabled";
													$link = str_replace(" ", "-", $backproducto."/".strtolower(str_replace(" ", "-", $item['color']))."/".$talla['talladet']);
											echo "	
														<a href=\"".$link."\" class='btn $tallaactivo $tallainventario' >".strtoupper($talla['talladet'])."</a>
													";
											}

											 ?>
											</center>	
											</div>	



											
											<div class="sizes hidden-print"><center>
												<h5><b>Codigo</b><?php 
												if (!$talla_sel)
													if ($total_tallas) echo "<br><br><font size=-2 color=red>Selecciona Talla</font>";
														else
															echo "<br><br><span class=\"label label-danger\">PRODUCTO AGOTADO</span>";
													else
														echo "<br><br> ".$codigo;
												 ?></h5>
												</center>
											</div>
											<div class="actions  hidden-print"><center>
												<!-- <a href="#" class="non">Agregar a Favoritos</a> -->

												<?php 


											if ($total_tallas)
												if ($codigo)
													echo "
												<!-- <a href=\"#\" class=\"non\">Add to whishlist</a> -->
												<a href=\"/cart/additem/$codigo/$categoria/$subcategoria/$producto_id/$color_sel/$talla_sel\" class=\"btn btn-large btn-primary \">Agregar <i class=\"glyphicon-shopping_cart\"></i> </a>
												";
												
												else
													echo "
												<a href=\"#\" class=\"btn btn-large btn-primary disabled\">Agregar</a>
												";
												 ?>
												<br><br>
											</center>
											</div>


										</div>
									</div>




									</div>

								

								</div>
							<!-- 	<div class="row margin-top">
									<div class="col-sm-12">
										<div class="infos">
											<ul class="tabs tabs-inline tabs-top">
												<li class='active'>
													<a href="#pro" data-toggle='tab'>Product</a>
												</li>
												<li>
													<a href="#info" data-toggle='tab'>Information</a>
												</li>
												<li>
													<a href="#rev" data-toggle='tab'>Reviews</a>
												</li>
											</ul>
											<div class="tab-content padding tab-content-inline tab-content-bottom">
												<div class="tab-pane active" id="pro">Lorem ipsum Sed eiusmod eiusmod eu dolore qui ut sit sit sint elit tempor irure. Lorem ipsum Irure veniam non ea aliqua laboris et voluptate. Lorem ipsum Amet enim nisi pariatur sit consequat occaecat non. Lorem ipsum Reprehenderit dolor aliquip
													nostrud sunt deserunt dolor ad veniam.</div>
												<div class="tab-pane" id="info">Lorem ipsum Dolore magna Duis quis tempor eiusmod ut. Lorem ipsum Non pariatur enim mollit minim aliquip adipisicing do fugiat sit enim veniam ea. Lorem ipsum Pariatur aliqua amet dolore cillum culpa minim. Lorem ipsum Laborum sed dolor adipisicing
													exercitation ea Excepteur sed dolore. Lorem ipsum Anim veniam id exercitation dolore incididunt aute nulla. Lorem ipsum Duis consectetur magna non nostrud laborum incididunt. Lorem ipsum Incididunt labore do non ut ut Excepteur. Lorem ipsum
													Ut enim ex dolore quis non deserunt.</div>
												<div class="tab-pane" id="rev">Lorem ipsum Veniam quis voluptate officia magna velit tempor exercitation elit nisi consequat officia in. Lorem ipsum Adipisicing ut voluptate aliqua elit reprehenderit incididunt aliquip sint quis. Lorem ipsum Commodo incididunt minim ex
													consequat irure sit reprehenderit exercitation et proident velit. Lorem ipsum Veniam qui nostrud in minim Excepteur mollit cupidatat cupidatat cillum dolor Excepteur adipisicing. Lorem ipsum Amet culpa consequat eu ex ut Excepteur amet. Lorem
													ipsum Dolore ut ut pariatur irure consequat in Excepteur quis laboris est minim. Lorem ipsum Do nisi quis est aliqua dolore adipisicing deserunt. Lorem ipsum Ut laboris minim Excepteur exercitation proident qui anim fugiat in non et deserunt.
													Lorem ipsum In magna dolore do pariatur nostrud dolore et ut.</div>
											</div>
										</div>
									</div>
								</div> -->
								









<?php 

} //fin del if si el producto no existe
else
{
	echo '<br>
		<div class="alert alert-danger alert-dismissable">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Producto no encontrado.- </strong> El producto no esta disponible o ya no existe. Intente con otro producto.
										</div>
	';
}





?>






							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	




</body>

</html>
