<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>
					<?php echo ucwords($response['page_titulo']);?>
	</title>

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
	<script src="/js/plugins/placeholder/jquery.placeholder.min.js"></script>
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

         <script src="/assets/js/ajax.js"></script>
         <script src="/assets/js/curp.js"></script>
        
        <style type="text/css">
        
.toggle {
  background-color: #34495e;
  border-radius: 60px;
  color: white;
  height: 29px;
  margin: 0 12px 12px 0;
  overflow: hidden;
  *zoom: 1;
  display: inline-block;
  zoom: 1;
  *display: inline;
  -webkit-transition: 0.25s;
  -moz-transition: 0.25s;
  -o-transition: 0.25s;
  transition: 0.25s;
  -webkit-backface-visibility: hidden; }
  .toggle:before, .toggle:after {
    display: table;
    content: ""; }
  .toggle:after {
    clear: both; }
  .toggle.toggle-off {
    background-color: #cbd2d8; }
    .toggle.toggle-off .toggle-radio {
      background-image: url("/assets/flat/images/toggle/icon-off.png");
      background-position: 0 0;
      color: white;
      left: 0;
      margin-left: 0.5px;
      margin-right: -13px;
      z-index: 1; }
      .toggle.toggle-off .toggle-radio:first-child {
        left: -120%; }
  .toggle .toggle-radio {
    background: url("/assets/flat/images/toggle/icon-on.png") right top no-repeat;
    color: #1abc9c;
    display: block;
    font-weight: 700;
    height: 21px;
    left: 120%;
    margin-left: -13px;
    padding: 5px 32px 3px;
    position: relative;
    text-align: center;
    z-index: 2;
    -webkit-transition: 0.25s;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden; }
    .toggle .toggle-radio:first-child {
      margin-bottom: -29px;
      left: 0; }
  .toggle input {
    display: none;
    position: absolute;
    outline: none !important;
    display: block\9;
    opacity: 0.01;
    filter: alpha(opacity=1);
    zoom: 1; }
  .toggle.toggle-icon {
    border-radius: 6px 7px 7px 6px; }
    .toggle.toggle-icon.toggle-off {
      border-radius: 7px 6px 6px 7px; }
      .toggle.toggle-icon.toggle-off .toggle-radio {
        background-image: url("/assets/flat/images/toggle/block-off.png");
        background-position: 0 0; }
    .toggle.toggle-icon .toggle-radio {
      background-image: url("/assets/flat/images/toggle/block-on.png");
      background-position: 62px 0;
      border-radius: 6px;
      min-width: 27px;
      text-align: right; }
      .toggle.toggle-icon .toggle-radio:first-child {
        text-align: left; }


        </style>
</head>

<body data-layout="<?php echo $layout ?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">

<?php include DIR_TEMPLATES.'navigation.php';?>

<div class="container-fluid  <?php echo $sidebar?>" id="content">
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
		<h1>
					<?php echo ucwords($response['page_titulo']);?>
		</h1>
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
			<a href="#">
					<?php echo ucwords($response['page_subtitulo']);?>
			</a>
		</li>
	
	</ul>
	<div class="close-bread">
		<a href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
</div>
    
    
    
    
    
    
                        <?php
                        	if ($response['error']){ 
                        	echo "<div class=\"alert alert-danger alert-dismissable\">
											<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
											<strong>Aviso!</strong>"; 
                        	echo $response['error']; 
							echo "</div>";
						}
                        ?>
    
<div class="row">
					<div class="col-sm-12">
						<div class="box box-color box-bordered green">
							<div class="box-title">
								<h3>
									<i class="fa fa-th"></i>Licencia Activa
								</h3>
							</div>
							<div class="box-content">
								<form action="#" method="get" class='form-vertical'>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												  <div class="toggle">
                  <label class="toggle-radio" for="toggleOption2">ON</label>
                  <input type="radio" name="toggleOptions" id="toggleOption1" value="option1">
                  <label class="toggle-radio" for="toggleOption1">OFF</label>
                  <input type="radio" name="toggleOptions" id="toggleOption2" value="option2" checked="checked">
                </div>
												<label for="textfield" class="control-label">Empresa</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['empresa']) ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">RFC</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['rfc']) ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Domicilio</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['domicilio']) ?>">
												</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Colonia</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['colonia']) ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Ciudad</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['ciudad']) ?>">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Estado</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['estado']) ?>">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Pais</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['pais']) ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Contacto</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['contacto']) ?>">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Tel. Movil</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['telmovil']) ?>">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Tel. Oficina</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control" value="<?php echo ucwords($response['model']['teloficina']) ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Tipo Licencia</label>
												<input type="text" name="textfield" id="textfield" placeholder="Basica" class="form-control" value="<?php echo ucwords($response['model']['licencia']) ?>">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Expira</label>
												<input type="text" name="textfield" id="textfield" placeholder="2020-02-02" class="form-control" value="<?php echo ucwords($response['model']['expira']) ?>">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Url</label>
												<input type="text" name="textfield" id="textfield" placeholder="http://www.cibercomm.com" class="form-control" value="<?php echo $response['model']['url'] ?>">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label">AutoRenovacion</label>
												<input type="text" name="textfield" id="textfield" placeholder="No" class="form-control" value="<?php echo ucwords($response['model']['autorenovacion']) ?>">
											</div>
										</div>
									</div>
								
									
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


</body>

</html>
