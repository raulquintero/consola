<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Basic tables</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body data-layout="<?php echo $layout ?>" <?php echo $layout_topbar ?>  class="<?php echo $theme ?>">

		
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
						<h1>Estado de Cuenta</h1>
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
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Tables</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="tables-basic.html">Basic tables</a>
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
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Basic table
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Colored table (with pagination)
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
								<div class="table-pagination">
									<a href="#" class='disabled'>First</a>
									<a href="#" class='disabled'>Previous</a>
									<span>
										<a href="#" class='active'>1</a>
										<a href="#">2</a>
										<a href="#">3</a>
									</span>
									<a href="#">Next</a>
									<a href="#">Last</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Bordered table
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-bordered">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Colored header
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-colored-header">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Striped table
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-striped">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-table"></i>
									Condensed table
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-condensed">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
