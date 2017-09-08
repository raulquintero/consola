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
        
        
</head>

<body data-layout="<?php echo $layout ?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">

<?php include DIR_TEMPLATES.'navigation.php';?>

<div class="container-fluid  <?php echo $sidebar?> " id="content">

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
				<span>Filtrar por:</span>
			</a>
		</div>
		<ul class="subnav-menu">
			<li>	   
				<a href="#" onclick="gotoURL('/catalogo/solicitudesempleo/todas')" >Todos</a>
			</li>
			<li>
				<a href="#" onclick="gotoURL('/catalogo/solicitudesempleo/captura')">En Captura</a>
			</li>
			<li>
				<a href="#" onclick="gotoURL('/catalogo/solicitudesempleo/entrevista')">Entrevista</a>
			</li>
			<li>
				<a href="#" onclick="gotoURL('/catalogo/solicitudesempleo/no_contratados')">No Contratados</a>
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
					<?php echo ucwords($response['page_titulo']);?>
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
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					<?php echo ucwords($response['tabla_titulo']);?>
				</h3>
				<!-- <a href="#modal-alert" data-toggle="modal" onclick='showModal("addcurp","cliente")'>
                                    <button class="pull-right btn btn-blue">Agregar Cliente <i class="icon-plus icon-white"></i></button>
                                </a> -->
		<!-- <a href="agregar_cliente" class="pull-right btn btn-blue">+ Cliente Nuevo</a> -->
			</div>


                    <div class="box-content nopadding">
                        <div class="table-toolbar hidden-print">
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Opciones <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#modal-window" data-toggle="modal" onclick='showModal("addcurp","solicitudempleo")'>Nueva</a></li>


                                    
                                    
                                </ul>
                               
                            </div>
                        </div>
					<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroller dataTable-tools dataTable-colreorder  hover dataTable-column_filter " 
						data-column_filter_types="null,text,text,select,null,select,select,daterange,null" 
						data-column_filter_dateformat="dd-mm-yy" --data-ajax-source="/api/catalogo/solicitudesempleo/todas">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>CURP</th>
                                    <th>Postulante</th>
                                    <th class='hidden-350'>Estudios Max</th>
                                    <th class='hidden-350'>Carrera/Oficio</th>
                                    <th class='hidden-350'>Puesto</th>
                                    <th class='hidden-350'>Status</th>
                                    <th class='hidden-350'>Fecha de Captura</th>
                                    <th>Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
						
                                <?php

						if(!$response['models']['error'])
						foreach ($response['models'] as $model)  {
							    $model_nombre = $model['apellidop'] . " " . $model['apellidom'] . " " . $model['nombre'];
							    echo "<tr>"
							    . "<td>" . $model['solicitudempleo_id'] . "</td>"
							    . "<td><a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/" . $model['solicitudempleo_id'] . "/perfil')\">" . strtoupper($model['curp']) . "</a></td>"
							    . "<td><a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/" . $model['solicitudempleo_id'] . "/perfil')\">" . ucwords($model['postulante']) . "</a></td>"
							    . "<td>" . ucwords($model['estudiosmax']) . "</td>"
							    . "<td>" . ucwords($model['carrera']) . "</td>"
							    . "<td>" . ucwords($model['puesto']) . "</td>"
							    . "<td>" . ucwords($model['solicitudempleostatus']) . "</td>"
							    . "<td><a href=\"#\" class=\"btn\" rel=\"tooltip\" title=\"\" data-placement=\"bottom\" data-original-title=\"".$model['hora']." [18]\">" . ucwords($model['fecha']) . "</a>
							
							    </td>"
							    . "<td class='hidden-480 sorting_1'>
								<a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/".$model['solicitudempleo_id']."/perfil')\" class='btn' rel='tooltip' title='' data-original-title='View'>
								<i class='fa fa-search'></i>
							        <a href='#' onclick=\"gotoURL('/catalogo/solicitudempleo/".$model['solicitudempleo_id']."/perfil/editar')\" class='btn' rel='tooltip' title='' data-original-title='Edit'>
							                <i class='fa fa-edit'></i>
							        </a>
							        <!--<a href='#' class='btn' rel='tooltip' title='' data-original-title='Delete'><i class='fa fa-send'></i>Enviar</a>-->
							        </td>"
							    . "</tr>";
							}
	?>
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
