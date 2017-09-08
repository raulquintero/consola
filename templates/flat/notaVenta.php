<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Invoice</title>

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
	<!-- imagesLoaded -->
	<script src="/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="/js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/js/plugins/validation/additional-methods.min.js"></script>

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

<body data-layout="<?php echo $layouta ?>"  class="<?php echo $themew?> theme-grey" conload="mess()">

<?php include DIR_TEMPLATES.'/navigation.php';?>

	
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
				<div class="page-header hidden-print">
					<div class="pull-left">
						<h1>Ventas</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#">
									<i class="fa fa-print"></i>
								</a>
							</li>
						
						</ul>
						
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-unvoice.html">Invoice</a>
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
							<div class="box-title hidden-print">
								<h3>
									<i class="fa fa-money"></i>
									Nota de Venta
								</h3>
							</div>
							<div class="box-content">
								<div class="invoice-info visible-print">
									<h2><?php echo $empresa ?></h2>
										<center>
											
											Nota de Venta: 0000-0001
											<br>Fecha: 08/07/2016 14:35:00
										</center>
								</div>
								<div class="invoice-info hidden-print">
									<div class="invoice-name">
										<?php echo $empresa ?>
									</div>
									<div class="invoice-from ">
										<span>From</span>
										<strong>Company Name</strong>
										<address>
											Street Address
											<br>City, ST ZIP Code
											<br>
											<abbr title="Phone">Phone:</abbr>(125) 358123-581
											<br>
											<abbr title="Fax">Fax:</abbr>(125) 251656-222
										</address>
									</div>
									<div class="invoice-to">
										<span>Cliente</span>
										<strong>Max Mustermann</strong>
										<address>
											Street Address
											<br>City, ST ZIP Code
											<br>
											<abbr title="Phone">Phone:</abbr>(125) 358123-581
											<br>
											<abbr title="Fax">Fax:</abbr>(125) 251656-222
										</address>
									</div>
									<div class="invoice-infos">
										<table>
											<tr>
												<th>Date:</th>
												<td>Aug 06, 2012</td>
											</tr>
											<tr>
												<th>Invoice #:</th>
												<td>0001752188s</td>
											</tr>
											<tr>
												<th>Product:</th>
												<td>Service Hotline</td>
											</tr>
										</table>
									</div>
								</div>
								<table class="table table-striped table-invoice">
									<thead>
										<tr>
											<th>Item</th>
											<th>Price</th>
											<th>Qty</th>
											<th class='tr'>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class='name'>Lorem ipsum in eu quis</td>
											<td class='price'>$30.00</td>
											<td class='qty'>3</td>
											<td class='total'>$90.00</td>
										</tr>
										<tr>
											<td class='name'>Lorem ipsum in eu quis</td>
											<td class='price'>$30.00</td>
											<td class='qty'>3</td>
											<td class='total'>$90.00</td>
										</tr>
										<tr>
											<td class='name'>Lorem ipsum in eu quis</td>
											<td class='price'>$30.00</td>
											<td class='qty'>3</td>
											<td class='total'>$90.00</td>
										</tr>
										<tr>
											<td class='name'>Lorem ipsum in eu quis</td>
											<td class='price'>$30.00</td>
											<td class='qty'>3</td>
											<td class='total'>$90.00</td>
										</tr>
										<tr>
											<td class='name'>Lorem ipsum in eu quis</td>
											<td class='price'>$30.00</td>
											<td class='qty'>3</td>
											<td class='total'>$90.00</td>
										</tr>
										<tr>
											<td colspan="2"></td>
											<td colspan="2"class='taxes'>
												<p>
													<span class="light">Subtotal</span>
													<span>$450.00</span>
												</p>
												<p>
													<span class="light">Tax(10%)</span>
													<span>$45.00</span>
												</p>
												<p>
													<span class="light">Total</span>
													<span class="totalprice">
														$495.00
													</span>
												</p>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="invoice-payment">
									<span>Payment methods</span>
									<ul>
										<li>
											<img src="/img/demo/paypal.png" alt="">
										</li>
										<li>
											<img src="/img/demo/visa.png" alt="">
										</li>
										<li>
											<img src="/img/demo/directd.png" alt="">
										</li>
										<li>
											<img src="/img/demo/mastercard.png" alt="">
										</li>
									</ul>
								</div>

								<div class="invoice-info visible-print">
										<center>
											Raul Alberto Quintero Cifuentes								
											<br>RFC: QUCR750708-PM7
											<br>Av. Presa Lopez Zamora #1501
											<br>Tel: 566.6666
											<br>info@tiendasalberto.com
											<br>
										</center>
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
