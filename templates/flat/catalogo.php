
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />


	<!-- META TAGS FOR FACEBOOK -->
 	<meta property=\"og:site_name\" content=\"Catalogo Ropa\" />
 	<meta property=\"og:image\" itemprop=\"image\" content=\"http://catalogo.noip.us/categorias/".$cat_imagen.".jpg\" />
	<meta property=\"og:url\" content=\"catalogo.noip.us\" />
	<meta property=\"og:type\" content=\"website\" />
	<meta property=\"og:title\" content=\"Tienda de Ropa Bolsos y Accesorios\" />
	<meta property=\"og:description\" content=\"Ropa para Caballero y Dama.\" />
 
	<title><?php echo $empresa ?> - <?php echo ucwords($subcategoria) ?></title>


	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- chosen -->
	<link rel="stylesheet" href="/assets/css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/css/themes.css">

	<link rel="stylesheet" href="/assets/css/local.css">

	<!-- jQuery -->
	<script src="/assets/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="/assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="/assets/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- chosen -->
	<script src="/assets/js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="/assets/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/assets/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/assets/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/assets/img/apple-touch-icon-precomposed.png" />


</head>

<body data-layout="<?php echo $layout?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">


<?php include DIR_TEMPLATES.'navigation.php';?>



	<div class="container-fluid" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>

<!--
-------------------------------------------colores-->

<?php if ($subcategoria_id) {?>

<br>
<boton class="btn btn-green" style="width:100%">FILTRAR POR:</boton>

	<div class="subnav ">
		<div class="subnav-title">
			<a href="#" class='toggle-subnav'>
				<i class="fa fa-angle-down"></i>
				<span> COLOR </span>
			</a>
		</div>
			<ul class="subnav-menu">
	<?php 

		$colores= getColores(1,0,$categoria_id,$subcategoria_id);
		foreach ($colores as $color) {
			$color=strtolower($color);
			if ($color==$color['color'])
				$activo= " class='active'"; else $activo="";
			echo "
					<li $activo> 
					<a href=\"/setcolor/$color/$backpath\">".ucwords($color)."</a>
					</li>
				";
		}
	?>
		</ul>
	</div>

<!-- 
------------------------------------------------talla -->
	<div class="subnav ">
		<div class="subnav-title">
			<a href="#" class='toggle-subnav'>
				<i class="fa fa-angle-down"></i>
				<span> TALLAS </span>
			</a>
		</div>
			<ul class="subnav-menu">
	<?php 

		$tallas= getTallas(1,0,$categoria_id,$subcategoria_id);
		foreach ($tallas as $talla) {
			$talla=strtolower($talla);
			if ($talla==$color['talla'])
				$activo= " class='active'"; else $activo="";
			echo "
					<li $activo> 
					<a href=\"/settalla/$talla/$backpath\">".ucwords($talla)."</a>
					</li>
				";
		}
	?>
		</ul>
	</div>

<!-- 
------------------------------------------------marca -->
	<div class="subnav ">
		<div class="subnav-title">
			<a href="#" class='toggle-subnav'>
				<i class="fa fa-angle-down"></i>
				<span> MARCA </span>
			</a>
		</div>
			<ul class="subnav-menu">
	<?php 

		$marcas= getMarcas(1,0,$categoria_id,$subcategoria_id);
		foreach ($marcas as $marca) {
			$marca=strtolower($marca);
			if ($marca==$color['marca'])
				$activo= " class='active'"; else $activo="";
			echo "
					<li $activo> 
					<a href=\"/setmarca/$marca/$backpath\">".ucwords($marca)."</a>
					</li>
				";
		}
	?>
		</ul>
	</div>




<br>





<?php } ?>







	<!-- 		<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Colors</span>
					</a>
				</div>
				<div class="subnav-content">
					<ul class="colors small">
						<li class="red">
							<a href="#"></a>
						</li>
						<li class="blue">
							<a href="#"></a>
						</li>
						<li class="lightgrey">
							<a href="#"></a>
						</li>
						<li class="orange">
							<a href="#"></a>
						</li>
						<li class="pink">
							<a href="#"></a>
						</li>
						<li class="brown">
							<a href="#"></a>
						</li>
					</ul>
				</div>
			</div> -->
		<!-- 	<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Price range</span>
					</a>
				</div>
				<div class="subnav-content">
					<div class="slider" data-min="0" data-max="75" data-range="true" data-rangestart="15" data-rangestop="45">
						<div class="amount_min"></div>
						<div class="amount_max"></div>
						<div class="slide"></div>
					</div>
				</div>
			</div> -->


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
						
<?php echo  getPromociones(getProductosPopulares(1,7),$iva); ?>



						<li>
							<a href="#">
								<img src="/assets/img/demo/user-1.jpg" alt="">
								<div class="details">
									<div class="name">Simple jeans</div>
									<div class="price">
										<span class='cross'>$25.00</span>
										<span class='discount'>$10.00</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		<!-- 	<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Popular tags</span>
					</a>
				</div>
				<div class="subnav-content">
					<ul class="tags">
						<li>
							<a href="#" class='big-2'>test</a>
						</li>
						<li>
							<a href="#" class='big-1'>mac</a>
						</li>
						<li>
							<a href="#">imac</a>
						</li>
						<li>
							<a href="#" class='big-5'>shirt</a>
						</li>
						<li>
							<a href="#">jeans</a>
						</li>
						<li>
							<a href="#" class='big-1'>hat</a>
						</li>
						<li>
							<a href="#" class='big-3'>tight</a>
						</li>
						<li>
							<a href="#">notebook</a>
						</li>
						<li>
							<a href="#">phone</a>
						</li>
						<li>
							<a href="#" class='big-2'>cool</a>
						</li>
						<li>
							<a href="#">hip</a>
						</li>
						<li>
							<a href="#" class='big-4'>sexy</a>
						</li>
					</ul>
				</div>
			</div> -->
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					
<div class="pull-left">
						<h1>
							<?php if ($categoria) echo "". ucwords($categoria); ?>
							<?php if ($subcategoria) echo " - ". ucwords($subcategoria); ?>

						</h1>
						<?php 

						if ($page<2 && !$cat)
							echo "<img class='publicidad visible-xs' src=/images/levis_xs_banner.jpg width=896 >";
							
						 ?>
					</div>
					<div class="pull-right">
						<div class="invoice-payment">
									

									<span>&nbsp;&nbsp;&nbsp;Bienvenidas</span>
									<ul>
										<li>
											<img src="/assets/img/demo/paypal.png" alt="">
										</li>
										<li>
											<img src="/assets/img/demo/visa.png" alt="">
										</li>
											<img src="/assets/img/demo/mastercard.png" alt="">
										</li>
									</ul>
								</div>
					</div>






				<!-- 	<div class="pull-left">
						<h1>Shop list view</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
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
						</ul>
					</div> -->
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-shop-list.html">Shop list view</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-content">

								<!-- 
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<select name="sort" id="sort" class='chosen-select input-medium' data-placeholder="Sort by" data-nosearch="true">
													<option value=""></option>
													<option value="sort-1">Price</option>
													<option value="sort-2">Best seller</option>
													<option value="sort-3">Date added</option>
												</select>
											</div>
											<div class="btn-group">
												<a href="#" class="btn" rel="tooltip" title="Grid view">
													<i class="fa fa-th"></i>
												</a>
												<a href="#" class="btn" rel="tooltip" title="List view">
													<i class="fa fa-th-list"></i>
												</a>
											</div>
											<div class="btn-group">
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-toolbar">
											<div class="btn-group">
												<select name="cat" id="cat" class='chosen-select input-medium' data-placeholder="Show items">
													<option value=""></option>
													<option value="opt-1">10</option>
													<option value="opt-2">25</option>
													<option value="opt-3">50</option>
													<option value="opt-4">100</option>
													<option value="opt-5">all</option>
												</select>
											</div>

										</div>
									</div>
								</div>
								 -->
								<?php // $items=cuantosProductos($page,$n_items,$categoria_id,$subcategoria_id) ;
									 //$page_end=ceil($items/$n_items);?>
								<div class="highlight-toolbar hidden-print">
									<div class="pull-left">
										<!-- <strong><?php echo $items ?></strong> items. -->
<?php 		if ($_SESSION['color'] || $_SESSION['talla'] || $_SESSION['marca']){
				echo "Filtros:";
			 	if ($_SESSION['color']) echo " <span class=\"label label-info\"><a href=\"/unsetcolor/$backpath\">".$_SESSION['color']." <i class=\"fa fa-times\"></i></a></span>";
				if ($_SESSION['talla']) echo " <span class=\"label label-info\"><a href=\"/unsettalla/$backpath\">".$_SESSION['talla']." <i class=\"fa fa-times\"></i></a></span>";
				if ($_SESSION['marca']) echo " <span class=\"label label-info\"><a href=\"/unsetmarca/$backpath\">".$_SESSION['marca']." <i class=\"fa fa-times\"></i></a></span>";
				echo " <span classe=\"badge\">&nbsp;&nbsp;<a href=\"/unsetfiltros/$backpath\">Remover Filtros</a></span>";
			}
echo "<br><br>";

?>	
									</div>
									<div class="pull-right">
										<div class="btn-toolbar">
											<div class="btn-group">
												<?php if ($categoria) $backpath="catalogo/".$categoria;?>
												<?php if ($subcategoria) $backpath.="/".$subcategoria;
														$backpath=str_replace(" ", "-", $backpath);?>
												<?php if ($page<2) $disabled="disabled";?>
												<a  href="/<?= $backpath?>&page=<?php echo $page-1 ?>" class="btn btn-info <?php echo $disabled ?>" >
													<i class="fa fa-angle-left"></i>
												</a>
												<a href="" class='btn disabled'>Pag.
												<strong> <?= $page ?></strong> de
												<strong> <?= $page_end ?></strong>
												</a>
											<?php 
											if ($page>=$page_end) 
												$nextpage_disabled=" disabled "; else $nextpage_disabled ="";
											?>
												<a <?php echo $nextpage_disabled; ?>href="/<?= $backpath ?>/page/<?php echo $page+1 ?>" class="btn btn-info">
													<i class="fa fa-angle-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
								








<?php 

//$productos = getProductos($page,$n_items,$categoria_id,$subcategoria_id);

$rows = ceil($n_items/4);

for ($i=0; $i < $rows; $i++) {
$tabla.= <<<EOD
						<div class="row">
									<ul class="shop-items">
EOD;

	for ($j=0; $j < 4; $j++) { 
if (isset($productos[$i][$j]['producto'])){
			
			if (!$Asociado->getUsuarioId())
				$productos[$i][$j]['precio_contado']=0;
				else $productos[$i][$j]['precio_contado']=$productos[$i][$j]['precio_contado']+$productos[$i][$j]['precio_contado']*$iva/100;
            $nombre_archivo="/productos/".$productos[$i][$j]['producto_id']."-".$productos[$i][$j]['color_id']."p.jpg";
           
           	$image = __DIR__.'/productos/'.$nombre_archivo;  //images.itracki.com/2011/06/favicon.png';
			// if(file_exists($image)){
			// // Read image path, convert to base64 encoding
			// $imageData = base64_encode(file_get_contents($image));

			// // Format the image SRC:  data:{mime};base64,{data};
			// $src = 'data: '.mime_content_type($image).';base64,'.$imageData;
			// }
			// else $src="";
			// // Echo out a sample image
			// // echo '<img src="'.$src.'">';

			if (file_exists($nombre_archivo)){
				switch ($productos[$i][$j]['categoria_id']) {
					case '45':
						$boton_comprar = "<div class='hombre'> H </div>";
						break;
					case '46':
						$boton_comprar = "<div class='mujer'> M </div>";
						break;
					
					default:
						$boton_comprar="";
						break;
				}
			}
			if ($productos[$i][$j]['descuento'])
				$descuento = "<div id='circle' class='descuento '> -".$productos[$i][$j]['descuento']."% </div>";

			$tabla.= "
									<li class=\"col-sm-3\">
											<div class=\"product\">
											";
								if (!$categoria)		$tabla.=		$boton_comprar ;
			$tabla.= "
													$descuento
												<a href=\"/producto/$categoria/".str_replace(" ", "-", $subcategoria)."/".$productos[$i][$j]['producto_id']."/".strtolower(str_replace(" ", "-", $productos[$i][$j]['color']))."\">
													<img src='".$nombre_archivo."'>												
													
													<div class=\"details \">
														<div class=\"name\">";
								// if ($productos[$i][$j]['inventario']<3)
								// 	$tabla .= "	Quedan: ".$productos[$i][$j]['inventario']."<br>";
								//$productos[$i][$j]['categoria']." ".$productos[$i][$j]['inventario']."<br> ".
			$tabla .=ucwords($productos[$i][$j]['producto']);
			if ($productos[$i][$j]['marca_id'])
				$tabla.="<br> ".ucwords($productos[$i][$j]['marca']);
			$tabla.="<br> ".ucwords($productos[$i][$j]['color']);

			if ($productos[$i][$j]['precio_contado'])
			$tabla.="<center><div class=\"btn btn-primary price\" >MX$".dinero($productos[$i][$j]['precio_contado'])."</center>";



														
			$tabla.="											</div>
														
													

														<br>
													</div>

												</a>
												<div class=\"extended hidden-xs\">
													<ul class=\"colors small\">
															
													";
												

											 $tallas="SELECT talladet.talladet_id,talladet,inventariodet.cantidad,inventariodet.codigo from producto,talla,talladet,inventariodet 
											where producto.talla_id=talla.talla_id AND talla.talla_id=talladet.talla_id 
											AND inventariodet.color_id='".$productos[$i][$j]['color_id']."' AND inventariodet.talladet_id=talladet.talladet_id 
											 AND producto.producto_id='".$productos[$i][$j]['producto_id']."' order by talladet.orden";
											$tallas=$Database->get_results($tallas);
											$total_tallas=0;
											foreach ($tallas as $talla) {
												$total_tallas+=$talla['cantidad'];
												// $inventario="SELECT cantidad from inventariodet where producto_id=$pid AND talladet_id='".$talla['talladet_id']."'";
												// list($inventario) = $database->get_row($inventario);

												if ($tid==$talla['talladet_id']){
													$tallaactivo = "btn-primary";
													$codigo=$talla['codigo'];
													} else $tallaactivo="btn-info ";
												if (!$talla['cantidad'])  $tallaactivo=" disabled";

											$tabla.= "		<a  href=\"/producto/$categoria/".str_replace(" ", "-", $subcategoria)."/".$productos[$i][$j]['producto_id']."/".strtolower(str_replace(" ", "-", $productos[$i][$j]['color']))."/".strtolower($talla['talladet'])."\" class='btn btn-info $tallaactivo $tallainventario' >".strtoupper($talla['talladet'])."</a>
											 		";
											
											}


			$tabla.="							</ul>
													
												</div>
											</div>
											<!-- /.product -->
										</li>
";
	}
}

$tabla.= <<<EOD

									</ul>
								</div>

EOD;
}

echo $tabla;
?>





						
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group text">
												Showing
												<strong>1</strong>to
												<strong>10</strong>of 25 items
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-toolbar">
											<div class="btn-group">
												<a href="#" class="btn">
													<i class="fa fa-angle-left"></i>
												</a>
												<a href="#" class="btn">
													<i class="fa fa-angle-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
