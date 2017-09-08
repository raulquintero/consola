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



	<!-- Notify -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/gritter/jquery.gritter.css">
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Notify -->
	<script src="/assets/flat/js/plugins/gritter/jquery.gritter.min.js"></script>


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

<script type="text/javascript">
function mess(){
$.gritter.add({
       title: 'Bienvenido!',
       text: 'Gracias por su preferencia<',
       sticky: false,
       time: '3000'
    });
}
</script>

</head>

<body data-layout="<?php echo $layout ?>"  class="<?php echo $theme?>" conload="mess()">

<?php include DIR_TEMPLATES.'/navigation.php';?>
	
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


		<div class="subnav ">

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
						<h1>Moda Mujer</h1>
					</div>
					<div class="pull-right">


						
						<div class="invoice-payment">
									

									<span>&nbsp;&nbsp;&nbsp;Bienvenidas</span>
									<ul>
										<li>
											<img src="/assets/flat/img/demo/paypal.png" alt="">
										</li>
										<li>
											<img src="/assets/flat/img/demo/visa.png" alt="">
										</li>
											<img src="/assets/flat/img/demo/mastercard.png" alt="">
										</li>
									</ul>
								</div>
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
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row" >
						<div class="col-sm-10" >
							<div class="row">
								<div class="blog-list-post">
									<div class="preview-img">
										<a href="/post/show/1">
											<img src="/assets/flat/imgblog/picture1.jpg" alt="" width="650">
										</a>
									</div>
									<div class="post-content">
										<h4 class="post-title">
											<a href="/post/show/1">5 tipos de bolsos que toda mujer debe tener</a>
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
											<p>El accesorio sin que la mayoría de las mujeres podemos vivir es un bolso, no dudo que la mayoría de las lectoras de este blog me secunden, 
												pero ¿tienes todos los bolsos necesarios para cualquier ocasión? Si bien es difícil encontrar un bolso que “vaya con todo”, logré reducir 
												las opciones a estos 5 tipos de bolsos que no deben faltar en tu colección para que estés lista para todo tipo de atuendos.</p>
											
										</div>
									</div>
								</div>

								<div class="blog-list-post">
									<div class="preview-img">
										<a href="/post/show/2">
											<img src="/assets/flat/imgblog/picture2.jpg" alt="" width="650">
										</a>
									</div>
									<div class="post-content">
										<h4 class="post-title">
											<a href="/post/show/2">Consejos para lucir bien tus jeans</a>
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
											<p>¿ A quién no le ha pasado que llega el día de compras al supermercado, o el día de recoger al sobrino del Kinder, o el día de visita a 
												la abuela donde de una u otra manera sabemos que nos encontraremos con el galán cajero, profesor o enfermero, respectivamente?</p>
											
										</div>
									</div>
								</div>



							</div>
						</div>

						<div class="col-sm-2" styles="border: 1px solid red;">
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
						</div> -->
						
					

						</div>













					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
