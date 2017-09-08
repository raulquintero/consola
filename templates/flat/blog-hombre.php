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

<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>" onload="<?php echo $function ?>">



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


		<div class="subnav">
		<?php 
		$query="SELECT nombre from categoria where categoria_id='46'";
		list($categoria)=$Database->get_row($query);
		if ($categoria)
		{
		 ?>
			<div class="subnav-title">
				<a href="#" class='toggle-subnav'>
					<i class="fa fa-angle-down"></i>
					<span> <?php echo ucwords($categoria) ?> </span>
				</a>
			</div>
			<ul class="subnav-menu">

			<?php 
			}
			$query="SELECT subcategoria_id,subcategoria from subcategoria 
					where categoria_id='46' AND online=1 AND subcategoria<>'div' ORDER BY position";
			$results = $Database->get_results($query);
			foreach ($results as $result) {
				$subcategoria=str_replace(" ", "-", $result['subcategoria']);

				if ($subcat==$result['subcategoria_id'])
					$activo= " class='active'"; else $activo="";
				echo "
								<li $activo> 
								<a href=\"/catalogo/$categoria/$subcategoria\">".ucwords($result['subcategoria'])."</a>
								</li>
					";
			}
			 ?>
			</ul>
		</div>


		<div class="subnav ">
			<?php 
				$query="SELECT nombre from categoria where categoria_id='45'";
				list($categoria)=$Database->get_row($query);
				if ($categoria)
				{
			 ?>
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span> <?php echo ucwords($categoria) ?> </span>
					</a>
				</div>
				<ul class="subnav-menu">
					<?php 
					}
					$query="SELECT subcategoria_id,subcategoria from subcategoria 
							where categoria_id='45' AND online=1 AND subcategoria<>'div' ORDER BY position";
					$results = $Database->get_results($query);

					foreach ($results as $result) {
						$subcategoria=str_replace(" ", "-", $result['subcategoria']);

						if ($subcat==$result['subcategoria_id'])
							$activo= " class='active'"; else $activo="";
						echo "
										<li $activo> 
										<a href=\"/catalogo/$categoria/$subcategoria\">".ucwords($result['subcategoria'])."</a>
										</li>
							";
					}
					 ?>
				</ul>
		</div>





				
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Moda Hombre</h1>
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
							<a href="more-files.html">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">Blank page</a>
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
							<div class="blog-list-post small">
								<div class="preview-img col-sm-3">
									<a href="more-blog-post.html">
										<img src="https://si.wsj.net/public/resources/images/OD-BC223_SHORTS_P_20140509165121.jpg" alt="">
									</a>
								</div>
								<div class="post-content col-sm-9">
									<h4 class="post-title">
										<a href="#">Shorts Hombre para el verano</a>
									</h4>
									<div class="post-meta">
										<span class="date">
											<i class="fa fa-calendar"></i>July 5, 2013
										</span>
										<span class="comments">
											<i class="fa fa-comments"></i>
											<a href="#">5 comments</a>
										</span>
										<span class="tags">
											<i class="fa fa-tag"></i>
											<a href="#">ui</a>
											<a href="#">flat</a>
											<a href="#">clean</a>
										</span>
										<span class="author">
											<i class="fa fa-user"></i>
											<a href="#">eakroko</a>
										</span>
									</div>
									<div class="post-text">
										<p style="text-align: justify;">El verano debe ser la época del año más esperado por todos, y es que <strong>¿a quién no le gustan los días de vacaciones donde puedes salir y disfrutar con tus familiares y amigos?</strong> Es el tiempo donde más deberíamos relajarnos después de grandes jornadas de trabajo que hicimos y por ello es bueno para dejar el estrés de lado. Seguro piensas que todo es bueno en el verano, pues, no tanto y te diré porqué; si hay algo que molesta algunos en el verano es el excesivo calor, a ninguno nos gusta esa sensación de incomodidad que causa el sudor sobre nuestro cuerpo debido al imponente sol característico de esta época, a menos que estemos en la playa o en la piscina disfrutando de este.</p>
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
<!-- 
						<div class="blog-widget">
							<h4 class='blog-widget-title'>Recent posts</h4>
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
	-->
						</div> 
			
				
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
