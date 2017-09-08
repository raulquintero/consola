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
						<h1>Consejos para lucir bien tus jeans</h1>
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
							<a href="more-blank.html">Consejos para lucir bien tus jeans</a>
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
										<img src="/imgblog/picture2.jpg" alt="" width="800">
									</a>
								</div>
								<div class="post-content">
									<h4 class="post-title">
										<a href="#">Consejos para lucir bien tus jeans</a>
									</h4>
									<div class="post-meta">
										<span class="date">
											<i class="fa fa-calendar"></i>5 de Julio, 2016
										</span>
										<!-- <span class="comments">
											<i class="fa fa-comments"></i>
											<a href="#">5 comments</a>
										</span> -->
										
									<!-- 	<span class="author">
											<i class="fa fa-user"></i>
											<a href="#">eakroko</a>
										</span> -->
									</div>
									<div class="post-text">
										<img src="http://img.mujeractiva.com/lineabajo.png">
										<p>¿ A quién no le ha pasado que llega el día de compras al supermercado, o el día de recoger al 
										sobrino del Kinder, o el día de visita a la abuela donde de una u otra manera sabemos que nos encontraremos 
										con el galán cajero, profesor o enfermero, respectivamente?</p>
										<p>Por obvias razones (no falta alarmarse) no podemos llegar a la cita luciendo fabulosas (con vestidos de 
											chifon o faldas con vuelo) así que optamos por la mejor manera de <strong>lucir &#8220;prominentemente&#8221; 
											hermosas</strong>: unos jeans ajustados y una camiseta.</p><p>Quierase o no, los hombres son muy visuales y por 
											lo general (especialmente los latinoamericanos) tienen una exquisita filiación por los traseros contorneados y firmes. 
											Es ahí cuando <strong>elegir un buen jean</strong> es un DEBER de toda mujer y, por qué no decirlo, una herramiento de 
											seducción fulminante.</p><p><strong>1º)</strong> En las tiendas y en tu armario encontrarás probablemente infinidad de 
											colores. Desde el blanco champagne hasta el verde limón. Si bien podrías utilizar cualquier excentricidad (créanme he 
											visto hasta jeans violetas con rayas naranjas) <strong>lo mejor es que te decidas por un color básico siempre</strong>. 
											Son mucho más fácilmente combinables y definitivamente lucen bien en cualquier ocasion: cita, reunión para un café, ir 
											al mercado, etc. Si eres delgada, un jean blanco hará que luzcas mucho más contorneada y si eres algo mas gruesita un 
											jean oscuro te quitará uno kilos de material no grato.</p><p><strong>2º)</strong> Los jeans ajustados hacen lucir a tu 
											trasero mas grande de lo que realmente es. Sin embargo, existen algunas mujeres que no tienen &#8220;nada&#8221; de &#8220;nada&#8221;. 
											Si tu eres una de esas feminas tristonas con un trasero mínimo., no te obsesiones, <strong>un jean con bolsillos traseros grandes puede 
											hacer maravillas por ti y por tu <em>derriere</em></strong>.</p><p style="text-align: center">
											<img src="http://img.webdelamoda.com.s3.amazonaws.com/wp-content/uploads/2008/06/bolsillos.jpg" alt="bolsillos.jpg" /></p>
											<p>3º) <strong>Los jeans acampanados solo lucen bien en las chicas con piernas largas</strong>. Estilizan la figura y dan la impresión 
												de solidez, incluso si tu cuerpo no está tan fitness como desearías.</p><p style="text-align: center">
											<img src="http://img.webdelamoda.com.s3.amazonaws.com/wp-content/uploads/2008/06/jeancampana.jpg" alt="jeancampana.jpg" /></p>
											<p>4º) Hay una nueva tendencia por usar jeans al tobillo. Digamos que, en lo personal, yo no abusaría de ellos. Pueden llegar a 
											cansar la vista por lo dificil de su combinación con los cuerpos. Si eres alta, pueden hacer lucir a tus piernas demasiado 
											delgadas y si eres baja, olvídate, te verás como un pequeño tamalito. Sin embargo, creo que <strong>una buena idea que puede 
											remediar el problema de los jeans al tobillo es usarlos siempre con tacos altos</strong> y de preferencia de un color que haga 
											match con el de tu jean. Si tu jean es negro prueba usando unos tacones rojos o si es blanco, prueba usando unos tacones negros.</p>
											<p style="text-align: center"><img src="http://img.webdelamoda.com.s3.amazonaws.com/wp-content/uploads/2008/06/capris.jpg" alt="capris.jpg" /></p>
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
