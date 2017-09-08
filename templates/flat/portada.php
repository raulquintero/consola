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
 	<meta property="og:site_name" content="Catalogo Ropa" />
 	<meta property="og:image" itemprop="image" content="http://catalogo.noip.us/img/portada.jpg" />
	<meta property="og:url" content="catalogo.noip.us" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Tienda de Ropa Bolsos y Accesorios" />
	<meta property="og:description" content="Ropa para Caballero y Dama." />
 

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



	<!-- Notify -->
	<link rel="stylesheet" href="/css/plugins/gritter/jquery.gritter.css">
	<!-- Bootbox -->
	<script src="/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Notify -->
	<script src="/js/plugins/gritter/jquery.gritter.min.js"></script>


	<!-- Theme framework -->
	<script src="/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/js/demonstration.min.js"></script>


	<link rel="stylesheet" type="text/css" href="/css/slider.css" media="all" />
    <!-- <link rel="stylesheet" type="text/css" href="demo.css" media="all" /> -->
 <!-- FlexSlider -->
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>

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


<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/local.css">

 <script type="text/javascript" charset="utf-8">
 
function mess(titulo, texto){
$.gritter.add({
       title: titulo,
       text: texto,
       sticky: false,
       time: '3000'
    });
}
</script>

</head>

<body data-layout="<?php echo $layout ?>"  class="<?php echo $theme?>" >
<?php echo "SEVER PRODUCTION"; ?>
<?php include DIR_TEMPLATES.'/navigation.php';?>
	
	<div class="container-fluid" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Codigo de producto...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
			<br>
<boton class="btn btn-green" style="width:100%">CATEGORIAS</boton>

		<div class="subnav ">

<?php 
$query="SELECT nombre from categoria where categoria_id='46'";
list($categoria)=$DatabaseStore->get_row($query);
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
$results = $DatabaseStore->get_results($query);

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
list($categoria)=$DatabaseStore->get_row($query);
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
$results = $DatabaseStore->get_results($query);

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
						<!-- <h1>Bievenidos</h1> -->
						<img class="publicidad " src="/img/banner-1.jpg" width="500">
						<!-- <img src="/img/banner-1.jpg" width=500 height=100> -->
					</div>
					<div class="pull-right">


						
						<div class="invoice-payment">
									

									<span>&nbsp;&nbsp;&nbsp;Bienvenidas</span>
									<ul>
										<li>
											<img src="/img/demo/paypal.png" alt="">
										</li>
										<li>
											<img src="/img/demo/visa.png" alt="">
										</li>
											<img src="/img/demo/mastercard.png" alt="">
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
						<div class="col-sm-9" >
							<div class="row">



    <div class="slider_container hidden-xs">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="/catalogo?cat=45&subcat=59"><img src="/images/levis.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <!-- <div class="caption_title_line"><h2> Page: $page Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div> -->
                </div>
	    	</li>
	    	<li>
	    		<a href="/catalogo?cat=45&subcat=117"><img src="http://fashionreverie.com/wp-content/uploads/2016/05/aeropostale_01.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <!-- <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div> -->
                </div>
	    	</li>
	    	<li>
	    		<a href="/catalogo?cat=46&subcat=92"><img src="http://www.onlybranddiscountstore.com/images/banner.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <!-- <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div> -->
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <!-- <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div> -->
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>

	<div class="visible-lg">   	
		<br><center>
		<img src="/img/banner5.jpg" width=620px >
		</center>
	</div>
						<div class="row">
							<div class="blog-list-post small">
								<div class="preview-img col-sm-3">
									<a href="/blog/post/show/1">
										<img src="/imgblog/picture1.jpg" alt="">
									</a>
								</div>
								<div class="post-content col-sm-9">
									<h4 class="post-title">
										<a href="blog/post/show/1">5 tipos de bolsos que toda mujer debe tener</a>
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
							<div class="blog-list-post small">
								<div class="preview-img col-sm-3">
									<a href="/blog/post/show/2">
										<img src="/imgblog/picture2.jpg" alt="">
									</a>
								</div>
								<div class="post-content col-sm-9">
									<h4 class="post-title">
										<a href="/blog/post/show/2">Consejos para lucir bien tus jeans</a>
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

						<div class="col-sm-3" styles="border: 1px solid red;">
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
						</div>
						 -->
					

						</div>













					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
