<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa?> - Precios</title>

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
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="/assets/flat/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/assets/flat/js/plugins/validation/additional-methods.min.js"></script>

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

        <style>
            .jumbotron {
    position: relative;
    background: #000 url("/assets/flat/img/softdev.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
    color:white;
    /*opacity: .7;*/
}
        </style>
</head>

<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>">
	<?php include DIR_TEMPLATES.'navigation.php';?>

	<?php if(!$response['sidebar']) $sidebar = "nav-hidden"; else $sidebar=""?>
	<div class="container-fluid <?php echo $sidebar?>" id="content">
            <div id="left">
			<!--<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
			-->
                    
                    <div class="blog-widget">
			<h4 class='blog-widget-title'>Equipo POS</h4>



			<!-- <ul class="blog-widget-recent-posts"> -->
				<div class="subnav-content">
					<ul class="bestseller">


	<li >
					<a href="/producto/hombre/shorts/466/camuflaje">
					<img src="http://www.xibergy.com/images/DTL-GD4330-BK.jpg" alt="">
						<div class="details">
							<div class="name">
								Monitor Touch
								
							</div>
							<div class="price">
								MX $ 300.00
							</div>
						</div>
					</a>
					
				<!-- /.product -->
			</li>
			<li >
					<a href="/store/catalogo/producto/hombre/carteras/469/dockers">
						<img src="http://www.xibergy.com/images/DTL-GD4330-BK.jpg" alt="">
						<div class="details">
							<div class="name">
								Codigo de Barras
								
							</div>
							<div class="price">
								MX $ 250.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/hombre/pantalon/113/gris">
						<img src="https://www.vendhq.com/images/hardware/Dymo_450_Turbo.jpg" alt="">
						<div class="details">
							<div class="name">
								Impresora Eti...
								
							</div>
							<div class="price">
								MX $ 450.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/mujer/tenis/468/guinda">
						<img src="http://www.internationalpointofsale.com/images/bigger_images/NCR-Silver-bigger.jpg" alt="">
						<div class="details">
							<div class="name">
								POS Completo
								
							</div>
							<div class="price">
								MX $ 550.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/hombre/pantalon/113/gris">
						<img src="https://www.vendhq.com/images/hardware/Dymo_450_Turbo.jpg" alt="">
						<div class="details">
							<div class="name">
								Impresora Eti...
								
							</div>
							<div class="price">
								MX $ 450.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/mujer/tenis/468/guinda">
						<img src="http://www.internationalpointofsale.com/images/bigger_images/NCR-Silver-bigger.jpg" alt="">
						<div class="details">
							<div class="name">
								POS Completo
								
							</div>
							<div class="price">
								MX $ 550.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/hombre/pantalon/113/gris">
						<img src="https://www.vendhq.com/images/hardware/Dymo_450_Turbo.jpg" alt="">
						<div class="details">
							<div class="name">
								Impresora Eti...
								
							</div>
							<div class="price">
								MX $ 450.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>
			<li >
					<a href="/producto/mujer/tenis/468/guinda">
						<img src="http://www.internationalpointofsale.com/images/bigger_images/NCR-Silver-bigger.jpg" alt="">
						<div class="details">
							<div class="name">
								POS Completo
								
							</div>
							<div class="price">
								MX $ 550.00
							</div>
						</div>
					</a>
				
				<!-- /.product -->
			</li>                        
                        
                        
						
						
					</ul>
				</div>
			</div>



		
		</div>
		<div id="main">
			<div class="container-fluid">
<!--				<div class="page-header">
					<div class="pull-left">
						<h1>MarketPro</h1>
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
					</div>
				</div>-->
<!--				<div class="breadcrumbs">
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
				</div>-->
                                             
				<div class="row">
					<div class="col-sm-12">
                                            <br>
  <div class="jumbotron">
    <h1>MarketPRO</h1> 
    <p>Software administrativo para pymes basado en la nube  .</p> 
  </div>
  <!--<p>Permitanos ayudarle a crecer</p>--> 
        
                                            
                                            
						<div class="box">
							<div class="box-title">
								<h3>
						
￼
			<i class="fa fa-bars"></i>
									Planes de Servicio
								</h3>
							</div>
							<div class="box-content">
								<div class="row">
									<div class="pricing-tables">
										<ul class="pricing col-sm-3">
											<li class="head">
												<div class="name">Gratis</div>
												<div class="price">
													$0
													<span>per month</span>
												</div>
											</li>
											<li>1 User</li>
											<li>1 Store</li>
											<li>Unlimited Traffic</li>
											<li>Punto de Venta.</li>
											<li>Inventarios</li>
											<li>Administracion y Finanzas</li>
											<li>Reportes</li>
											<li>
												<i class="fa fa-check"></i>Free setup</li>
											<li>
												<i class="fa fa-check"></i>30 Day free trial</li>
											<li class="button">
												<a href="#" class="btn btn-grey-4">Sign up</a>
												<div class="help-text">Free for 30days</div>
											</li>
										</ul>
										<ul class="pricing green col-sm-3">
											<li class="head">
												<div class="name">Mediano</div>
												<div class="price">
													$300
													<span>per month</span>
												</div>
											</li>
											<li>5 User</li>
											<li>1 Store</li>
											<li>Unlimited Traffic</li>
											<li>Punto de Venta</li>
											<li>Inventarios</li>
											<li>Administracion y Finanzas</li>
											<li>Reportes</li>
											<li>
												<i class="fa fa-check"></i>Free setup</li>
											<li>
												<i class="fa fa-check"></i>30 Day free trial</li>
											<li class="button">
												<a href="#" class="btn btn-green">Sign up</a>
											</li>
										</ul>
										<ul class="pricing blue highlighted col-sm-3">
											<li class="head">
												<div class="name">Profesional</div>
												<div class="price">
													$600
													<span>per month</span>
												</div>
												<div class="info">Most popular plan</div>
											</li>
											<li>30 User</li>
											<li>3 Stores</li>
											<li>Unlimited Traffic</li>
											<li>Punto de Venta</li>
											<li>Inventarios</li>
											<li>Amdinistracion y Finanzas</li>
											<li>Reportes</li>
											<li>
												<i class="fa fa-check"></i>Free setup</li>
											<li>
												<i class="fa fa-check"></i>30 Day free trial</li>
											<li class="button">
												<a href="#" class="btn btn-blue">Sign up</a>
												<div class="help-text">Best value</div>
											</li>
										</ul>
										<ul class="pricing red col-sm-3">
											<li class="head">
												<div class="name">Power pack</div>
												<div class="price">
													$990
													<span>per month</span>
												</div>
											</li>
											<li>Multi User</li>
											<li>10  Store</li>
											<li>Unlimited Traffic</li>
											<li>Pnto de Venta</li>
											<li>Inventarios</li>
											<li>Administracion y Finanzas</li>
											<li>Todos los Modulos</li>
											<li>
												<i class="fa fa-check"></i>Free setup</li>
											<li>
												<i class="fa fa-check"></i>30 Day free trial</li>
											<li class="button">
												<a href="#" class="btn btn-red">Sign up</a>
											</li>
										</ul>
									</div>
								</div>
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
