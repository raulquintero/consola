<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - New dataTables</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/chosen/chosen.css">
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
	<!-- New DataTables -->
	<script src="/assets/flat/js/plugins/momentjs/jquery.moment.min.js"></script>
	<script src="/assets/flat/js/plugins/momentjs/moment-range.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!-- Chosen -->
	<script src="/assets/flat/js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="/assets/flat/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/assets/flat/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/assets/flat/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
	<script src="/assets/flat/js/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script>
		$(document).ready(function () {
			$('input, textarea').placeholder();
		});
	</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/flat/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/assets/flat/img/apple-touch-icon-precomposed.png" />

</head>

<body data-layout="<?php echo $layout?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">


<?php include DIR_TEMPLATES.'navigation.php';?>

	<?php if(!$response['sidebar']) $sidebar = "nav-hidden"; else $sidebar=""?>
	<div class="container-fluid <?php echo $sidebar?>" id="content">
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
		<h1>Environment</h1>
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
			<a href="tables-advanced.html">Advanced tables</a>
		</li>
	</ul>
	<div class="close-bread">
		<a href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
</div>


<?php
		if (!function_exists('mcrypt_encrypt')){
			echo "<br><div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>Missing Library!</strong> Mcrypt is Missing.</div>";
		}

?>


<div class="row">
	<div class="col-sm-12">
		<div class="box">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					Cliente
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable" data-nosearch data-nopagination data-noinfo>
					<thead>
					<tr>
						<th>Environment</th>
						<th>Nombre PC</th>
						<th class='hidden-350'>Hostname</th>
						<th class='hidden-1024'>IP Address</th>
						<th class='hidden-480'>Key</th>
					</tr>
					</thead>
					<tbody>
					
					<tr>
						<td>Remote Computer</td>
						<td><?php echo gethostname();?></td>
						<td class='hidden-350'><?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']);?></td>
						<td class='hidden-1024'><?php echo gethostbyname($_SERVER['REMOTE_ADDR']);?></td>
						<td class='hidden-480'><?php echo @getenv("HTTP_X_FORWARDED_FOR");?></td>
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
					Environment Vars
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable" data-nosearch data-nopagination data-noinfo>
					<thead>
					<tr>
						<th>Environment</th>
						<th>Valor</th>
						<th class='hidden-350'>Tipo</th>
						<th class='hidden-1024'>Longitud</th>
						<th class='hidden-480'>origen</th>
					</tr>
					</thead>
					<tbody>
					
					<tr>
						<td>ENVIRONMENT</td>
						<td><?php echo ENVIRONMENT;?></td>
						<td class='hidden-350'>String</td>
						<td class='hidden-1024'><?php echo strlen(ENVIRONMENT);?></td>
						<td class='hidden-480'>environment.php</td>
					</tr>
					<tr>
						<td>$empresa</td>
						<td><?php echo $empresa; ?></td>
						<td class='hidden-350'>String</td>
						<td class='hidden-1024'><?php echo strlen($empresa)?></td>
						<td class='hidden-480'>config.php</td>
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
					Constants
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable" data-nosearch data-nopagination data-noinfo>
					<thead>
					<tr>
						<th>Environment</th>
						<th>Valor</th>
						<th class='hidden-350'>Tipo</th>
						<th class='hidden-1024'>Longitud</th>
						<th class='hidden-480'>origen</th>
					</tr>
					</thead>
				<tbody>
					<tr>
						<td>DIR_TEMPLATES</td>
						<td><?php echo DIR_TEMPLATES; ?></td>
						<td class='hidden-350'>String</td>
						<td class='hidden-1024'><?php echo strlen(DIR_TEMPLATES)?></td>
						<td class='hidden-480'>config.php</td>
					</tr>
					<tr>
						<td>DIR_BASE</td>
						<td><?php echo DIR_BASE; ?></td>
						<td class='hidden-350'>String</td>
						<td class='hidden-1024'><?php echo strlen(DIR_BASE)?></td>
						<td class='hidden-480'>config.php</td>
					</tr>
					<tr>
						<td>DIR_SOURCE</td>
						<td><?php echo DIR_SOURCE; ?></td>
						<td class='hidden-350'>String</td>
						<td class='hidden-1024'><?php echo strlen(DIR_SOURCE)?></td>
						<td class='hidden-480'>config.php</td>
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
					Database Master
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable" data-nosearch data-nopagination data-noinfo>
					<thead>
					<tr>
						<th>Host</th>
						<th>Name</th>
						<th class='hidden-350'>Usuario</th>
						<th class='hidden-1024'>Password</th>
						<th class='hidden-480'>origen</th>
					</tr>
					</thead>
					<tbody>
					
					<tr>
						<td><?php echo DB_HOST?></td>
						<td><?php echo DB_NAME?></td>
						<td class='hidden-350'><?php echo DB_USER?></td>
						<td class='hidden-1024'><?php echo DB_PASS?></td>
						<td class='hidden-480'>database.php</td>
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
					Modulos
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable" data-nosearch data-nopagination data-noinfo>
					<thead>
					<tr>
						<th>Modulo</th>
						<th>Requerido</th>
						<th class='hidden-1024'>Cargado</th>
						<th class='hidden-480'>Opciones</th>
					</tr>
					</thead>
					<tbody>
<?php
if (extension_loaded('gd') && function_exists('gd_info')) {
    $gdIsInstalled = "SI";
} else {
    $gdIsInstalled = "NO";
}					
?>					
					<tr>
						<td>GD</td>
						<td>SI</td>
						<td class='hidden-350'><?php echo $gdIsInstalled?></td>
						<td class='hidden-480'>php.ini</td>
					</tr>
<?php
if(function_exists('mcrypt_encrypt')) {
    $mcryptIsInstalled = "SI";
} else {
    $mcryptIsInstalled = "NO";
}					
?>					
					<tr>
						<td>Mcrypt</td>
						<td>SI</td>
						<td class='hidden-350'><?php echo $mcryptIsInstalled?></td>
						<td class='hidden-480'>php.ini</td>
					</tr>
					
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<div class="row">
	<div class="col-sm-12">
		<div class="box box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					Table with tools (excel export etc.)
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-bordered dataTable dataTable-tools">
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
					</tr>
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered green">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					Column reorder
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-colreorder">
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
					</tr>
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered red">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					Hide/show columns
				</h3>
			</div>
			<div class="box-content nopadding">
				<table class="table table-hover table-nomargin table-striped table-bordered dataTable dataTable-colvis">
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
					</tr>
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
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td class='hidden-350'>Windows Mobile 6</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td class='hidden-350'>PSP</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td class='hidden-350'>-</td>
						<td class='hidden-1024'>-</td>
						<td class='hidden-480'>U</td>
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
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-38620714-4']);
	_gaq.push(['_trackPageview']);

	(function () {
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
