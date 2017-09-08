<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

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
 
	<title><?php echo $empresa ?></title>


	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/flat/css/themes.css">


	<!-- jQuery -->
	<script src="/assets/flat/js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="/assets/flat/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/flat/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/assets/flat/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<!-- Form -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>

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

</head>

<body data-layout="<?php echo $layout ?>"  class="<?php echo $theme?>">

<?php include DIR_TEMPLATES.'/navigation.php';?>	<div id="navigation">
		
	</div>
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
			<div class="subnav">
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
			</div>
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>5 tipos de bolsos que toda mujer debe tener</h1>
					</div>
					<div class="pull-right">
						
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">Blog</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">5 tipos de bolsos que toda mujer debe tener</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10">
						<div class="row">
							<div class="blog-list-post">
								<div class="preview-img">
									<a href="more-blog-post.html">
										<img src="/assets/flat/imgblog/picture1.jpg" alt="" width="800">
									</a>
								</div>
								<div class="post-content">
									<h4 class="post-title">
										<a href="#">5 tipos de bolsos que toda mujer debe tener</a>
									</h4>
									<div class="post-meta">
										<span class="date">
											<i class="fa fa-calendar"></i>5 de Julio, 2016
										</span>
									
									</div>
									<div class="post-text">
										<p>El accesorio sin que la mayoría de las mujeres podemos vivir es un bolso, no dudo que la mayoría de las lectoras de este blog me secunden, 
											pero ¿tienes todos los bolsos necesarios para cualquier ocasión? Si bien es difícil encontrar un bolso que “vaya con todo”, logré reducir las 
											opciones a estos 5 tipos de bolsos que no deben faltar en tu colección para que estés lista para todo tipo de atuendos.</p>

											<p><img class="aligncenter size-full wp-image-14147" alt="5 tipos de bolsos que toda mujer debe tener" src="http://fashionblogmexico.com/wp-content/uploads/2014/04/tipos-de-bolsos-de-mujer.png" width="550" height="404" srcset="http://fashionblogmexico.com/wp-content/uploads/2014/04/tipos-de-bolsos-de-mujer.png 550w, http://fashionblogmexico.com/wp-content/uploads/2014/04/tipos-de-bolsos-de-mujer-548x403.png 548w" sizes="(max-width: 550px) 100vw, 550px" /></p>
<h3>1. Bolso estructurado:</h3>
<p>Los bolsos estructurados aportan formalidad a cualquier atuendo, es un bolso que puede elevar un <em>look</em> casual para hacerlo más <em>chic</em>, son muy versátiles por lo que puedes combinarlos hasta con un atuendo semiformal si lo requieres. Suelen ser de tamaño mediado para llevar tus cosas de uso diario.</p>
<h3>2. Clutch:</h3>
<p>Estos pequeños sobres o bolsos rectangulares sin correa son perfectos para una salida formal, un <em>cocktail party</em> o para cuando quieres agregar un elemento interesante o que resalte a tu atuendo. A mi me gusta utilizarlos para agregar un poco de color cuando uso prendas blanco y negro, o cuando quiero agregar un elemento con lentejuelas o textura a un atuendo con jeans.</p>


<?php

echo"<font color=blue>Publicidad</font>
	<div class=\"col-sm-12\" style=\"border:1px solid gray\">
										<h4>Productos vistos recientemente</h4>
										<ul class=\"shop-items\">
";

$productos = getProductosPopulares(1,4);

foreach ($productos[0] as $producto) {


    $nombre_archivo=$producto['producto_id']."-".$producto['color_id']."p.jpg";
// echo print_r($producto);
// echo "<br>";

echo "	<li class=\"col-sm-2\">
			<div class=\"product\">
					<a href=\"/producto/".strtolower(str_replace(" ", "-", $producto['categoria']))."/".strtolower(str_replace(" ", "-", $producto['subcategoria']))."/".$producto['producto_id']."/".strtolower(str_replace(" ", "-", $producto['color']))."\">
			
					<img src=\"/productos/$nombre_archivo\" alt=\"\">
					<div class=\"details\">
						<div class=\"name\">
							".$producto['producto']."
						</div>
						<div class=\"price\">
							$".dinero($producto['precio_contado']+($producto['precio_contado']*$iva/100))."
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


?>
<p> &nbsp;</p>
<h3>3. Bolso mini con correa larga:</h3>
<p>Mejor conocido en inglés como &#8220;<em>crossbody bag</em>&#8221; es un bolso que gracias a su correa larga te permite usarlo atravesado sobre tu cuerpo, son muy prácticos para andar de turista o cuando no tienes que llevar tantas cosas contigo. <a title="Tendencia: Mini bolsos con correa cruzada" href="http://fashionblogmexico.com/tendencia-mini-bolsos-con-correa-cruzada/">Chécate este post</a> para descubrir cómo llevarlos.</p>
<h3>4. Bolso negro clásico</h3>
<p>El negro es mi color neutro favorito, por lo que siempre recomiendo tener una bolso negro de uso diario para cuando no te sientas tan creativa o no tengas mucho tiempo de pensar en qué ponerte, es un clásico que nunca falla, así como el<em> <a title="Historia del LBD" href="http://fashionblogmexico.com/little-black-dress/">little black dress</a>;</em> mi sugerencia es que lo adquieras en la forma que más te convenga según tus necesidades del día a día, a mi me gustan de tamaño mediado, con asas y correa a la vez para poder colgarlo o llevarlo de la mano.</p>
<h3>5. Bolso &#8220;shopper&#8221; o &#8220;tote&#8221;</h3>
<p>Si eres de las que cargan hasta la plancha del pelo &#8220;por si acaso&#8221;, este tipo de bolsa será tu mejor aliada, suelen ser muy espaciosas y con correas gruesas para cargar el gran peso del bolso. Si sueles viajar mucho es súper conveniente para llevar contigo un cambio de ropa y hasta tu computadora, son mis favoritas para subir al avión conmigo.</p>

									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-sm-2">

<div class="blog-widget">
			<h4 class='blog-widget-title'>Recien Vistos</h4>



			<!-- <ul class="blog-widget-recent-posts"> -->
				<div class="subnav-content">
					<ul class="bestseller">
					

<?php echo  getPromociones(getProductosPopulares(1,7),$iva); ?>

						
						
					</ul>
				</div>
			</div>



						<div class="blog-widget">
							<h4 class='blog-widget-title'>Related posts</h4>
							<ul class="blog-widget-recent-posts">
								<li>
									<a href="more-blog-post.html">
										Lorem ipsum Ex proident
										<span class="details">
											<span class="date">
												<i class="fa fa-calendar"></i>July 5, 2013</span>
											<span class="tags">
												<i class="fa fa-tag"></i>lorem,ipsum</span>
										</span>
									</a>
								</li>
								<li>
									<a href="more-blog-post.html">
										Incididunt nisi nostrud
										<span class="details">
											<span class="date">
												<i class="fa fa-calendar"></i>July 4, 2013</span>
											<span class="tags">
												<i class="fa fa-tag"></i>ui,css</span>
										</span>
									</a>
								</li>
								<li>
									<a href="more-blog-post.html">
										Ex dolore ut laborum
										<span class="details">
											<span class="date">
												<i class="fa fa-calendar"></i>July 3, 2013</span>
											<span class="tags">
												<i class="fa fa-tag"></i>html5,flat</span>
										</span>
									</a>
								</li>
								<li>
									<a href="more-blog-post.html">
										Do sunt nisi dolore velit
										<span class="details">
											<span class="date">
												<i class="fa fa-calendar"></i>July 1, 2013</span>
											<span class="tags">
												<i class="fa fa-tag"></i>metro,clean</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
						
						
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
