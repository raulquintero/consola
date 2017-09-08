<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa?> - Modulos</title>

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
	<script src="/assets/flat/js/plugins/moment/assets/flat/js/jquery.moment.min.js"></script>
	<script src="/assets/flat/js/plugins/moment/assets/flat/js/moment-range.min.js"></script>
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
        
        <script src="/assets/assets/flat/js/ajax.js"></script>
        
<script type="text/javascript">
$(document).ready(function() {
 $('#tblclientes').dataTable( {
    paging: false
} );
} );

</script>
</head>

<body data-layout="<?php echo $layout ?>" class="<?php echo $theme ?>">

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
				<span>Modulos</span>
			</a>
		</div>
		<ul class="subnav-menu">
			
			<li>
				<a href="#">Activados</a>
			</li>
			<li>
				<a href="#">Disponibles</a>
			</li>
			
		</ul>
	</div>
	<div class="subnav">
		<div class="subnav-title">
			<a href="#" class='toggle-subnav'>
				<i class="fa fa-angle-down"></i>
				<span>Idiomas</span>
			</a>
		</div>
		<ul class="subnav-menu">
			<li>
				<a href="#">Espanol</a>
			</li>
			<li>
				<a href="#">Ingles</a>
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
		<h1>Modulos del Sistema</h1>
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
			<a href="/mantenimiento/menu">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		
	</ul>
	<div class="close-bread">
		<a href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
</div>
    

        

<div class="row-fluid">
  <div class="span3" id="sidebar">

    <?php 
      echo "                    <ul class=\"nav nav-list bs-docs-sidenav nav-collapse collapse\">";
      echo "<li class=\"active\"><a href=\"/mantenimiento?sub=menu\">Menu Principal $fn</a></li>";
      $Menu->showListCategory(0);

      echo "</ul>";
    ?>
		</div>
                  


                 <div class="span12" id="content">

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                           <br><br>



                            <div class="block-content collapse in">
                            	
                                <div class="span12">
                                    <div class="table-toolbar hidden-print">
                                        <div class="btn-group ">
                                            <a href="#modal-alert" data-toggle="modal" onclick='showModal("addcategory",<?php echo $menu_id ?>)'>
                                                <button class="btn btn-success">Agregar Modulo <i class="icon-plus icon-white"></i></button>
                                            </a>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Print</a></li>
                                                <li><a href="#">Save as PDF</a></li>
                                                <li><a href="#">Export to Excel</a></li>
                                            </ul>
                                        </div>
                                    </div>
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Menu_id </th>
						                  <th>Modulo</th>
						                  <th>Ruta</th>
                              			  <th>Status</th>
                                          <th>Privilegio_id</th>
						                  <th colspan=2><span class='hidden-print'>Opciones</span></th>
						                </tr>
						              </thead>
						              <tbody>
                                	<?php $Menu->showCategory($menu_id);?>

						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 </div>









 








</div>


    

</div>
</div>
</div>

    
    
    

    <div id="modal-alert" class="modal fade">
        <div class="modal-dialog">
            <div  class="modal-content">
                <div id="modal-contenido">
                </div>
                <div class="modal-header">

                </div>
            </div>
        </div>
    </div>
</body>

</html>
