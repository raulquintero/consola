<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa?> - Productos</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="/css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="/css/plugins/chosen/chosen.css">
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
	<!-- New DataTables -->
	<script src="/js/plugins/moment/js/jquery.moment.min.js"></script>
	<script src="/js/plugins/moment/js/moment-range.min.js"></script>
	<script src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="/js/plugins/datatables/extensions/dataTables.colReorder.min.js"></script>
	<script src="/js/plugins/datatables/extensions/dataTables.colVis.min.js"></script>
	<script src="/js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!-- Chosen -->
	<script src="/js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
	<script src="/js/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script>
		$(document).ready(function () {
			$('input, textarea').placeholder();
		});
	</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-precomposed.png" />
        
        <script src="/assets/js/ajax.js"></script>
        
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
		<h1>Productos</h1>
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
			<a href="more-login.html">Productos [<?php echo $tproducto['tabla']?>]</a>
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


                                <a href="#modal-alert" data-toggle="modal" onclick='showModal("addcategory",<?php echo $menu_id ?>)'><button class="btn btn-success">Agregar Producto <i class="icon-plus icon-white"></i></button></a>
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
                                    <th>Id </th>
                                    <th>Productos</th>
                                    <th>Descripcion</th>
                                    <th>Tipo</th>
                                    <th>Categoria</th>
                                    <th colspan=2><span class='hidden-print'>Opciones</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($productos as $producto) {
//                                    print_r($producto);
                                    echo "<tr>";
                                   echo "<td>".$producto['producto_id']."</td><td>".$producto['producto']."</td><td>".$producto['descripcion']."</td><td>".$producto['tproducto']."</td><td>".$producto['categoria_id']."</td><td>".$producto['genero_id']."</td><td>".$producto['precio']."</td></tr>";
                                    echo "</tr>";
                                }
                                ?>
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

    
    
    
    
       <div id="modal-alert" class="modal fade">
        <div class="modal-dialog">
            <div  class="modal-content">
                <div id="modal-contenido">
                </div>
                <div class="modal-header">
                
            </div>
        </div>
    </div>
</body>

</html>
