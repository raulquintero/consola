<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title><?php echo $response['pagina']['titulo']?></title>

       <!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- PageGuide -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/pageguide/pageguide.css">
	<!-- Fullcalendar -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="/assets/flat/css/plugins/fullcalendar/fullcalendar.print.css" media="print">
	<!-- Tagsinput -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/tagsinput/jquery.tagsinput.css">
	<!-- chosen -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/chosen/chosen.css">
	<!-- multi select -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/multiselect/multi-select.css">
	<!-- timepicker -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- colorpicker -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/colorpicker/colorpicker.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/datepicker/datepicker.css">
	<!-- Daterangepicker -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/daterangepicker/daterangepicker.css">
	<!-- Plupload -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/plupload/jquery.plupload.queue.css">
	<!-- select2 -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/select2/select2.css">
	<!-- icheck -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/icheck/all.css">
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
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Masked inputs -->
	<script src="/assets/flat/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	<!-- TagsInput -->
	<script src="/assets/flat/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<!-- Datepicker -->
	<script src="/assets/flat/js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Daterangepicker -->
	<script src="/assets/flat/js/plugins/daterangepicker/moment.min.js"></script>
	<script src="/assets/flat/js/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Timepicker -->
	<script src="/assets/flat/js/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<!-- Colorpicker -->
	<script src="/assets/flat/js/plugins/colorpicker/bootstrap-colorpicker.js"></script>
	<!-- Chosen -->
	<script src="/assets/flat/js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- MultiSelect -->
	<script src="/assets/flat/js/plugins/multiselect/jquery.multi-select.js"></script>
	<!-- CKEditor -->
	<script src="/assets/flat/js/plugins/ckeditor/ckeditor.js"></script>
	<!-- PLUpload -->
	<script src="/assets/flat/js/plugins/plupload/plupload.full.min.js"></script>
	<script src="/assets/flat/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
	<!-- Custom file upload -->
	<script src="/assets/flat/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="/assets/flat/js/plugins/mockjax/jquery.mockjax.js"></script>
	<!-- select2 -->
	<script src="/assets/flat/js/plugins/select2/select2.min.js"></script>
	
	<!-- complexify -->
	<script src="/assets/flat/js/plugins/complexify/jquery.complexify-banlist.min.js"></script>
	<script src="/assets/flat/js/plugins/complexify/jquery.complexify.min.js"></script>
	<!-- Mockjax -->
	<script src="/assets/flat/js/plugins/mockjax/jquery.mockjax.js"></script>
    <!-- Validation -->
    <script src="/assets/flat/js/plugins/validation/jquery.validate.min.js"></script>
    <script src="/assets/flat/js/plugins/validation/additional-methods.min.js"></script>
    <!-- Form -->
    <script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>


    <!-- Theme framework -->
    <script src="/assets/flat/js/eakroko.min.js"></script>
    <!-- Theme scripts -->
    <script src="/assets/flat/js/application.min.js"></script>
    <!-- Just for demonstration -->
    <script src="/assets/flat/js/demonstration.min.js"></script>

    <script src="/assets/js/ajax.js"></script>
    <script src="/assets/js/curp.js"></script>

        <!--[if lte IE 9]>
                <script src="/assets/flat//assets/flat/js/plugins/placeholder/jquery.placeholder.min.js"></script>
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

    </head>

    <body data-layout="<?php echo $layout ?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">


        <?php include DIR_TEMPLATES . 'navigation.php'; ?>

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
                            <span>Catalogos</span>
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
                            <a href="/catalogo/clientes">Clientes</a>
                        </li>
                        <li>
                            <a href="/catalogo/empleados">Empleados</a>
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
<?php 
$solicitudempleo_num= $response['model']['solicitudempleo_id'];
$solicitudempleo_nombre= strtoupper($response['model']['nombre'].' '.$response['model']['apellidop'].' '.$response['model']['apellidom']);

?>
            <div id="main">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="pull-left">
                            <h1><?php echo ucwords($response['pagina']['subtitulo'])?></h1>
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
                                <a href="/catalogo/solicitudesempleo">Evaluacion Final</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#"><?php echo ucwords($response['model']['nombre'].' '.$response['model']['apellidop'].' '.$response['model']['apellidom']) ?></a>
                            </li>

                        </ul>
                        <div class="close-bread">
                            <a href="#">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                        <?php
                            if (count($response['error'])){ 
                            echo "<div class=\"alert alert-danger alert-dismissable\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                            <strong>Aviso! </strong>"; 
                            foreach ($response['error'] as $error) {
                                echo "<br>".$error; 
                            }
                            echo "</div>";
                        }
                        ?>
                        <?php 
                            switch ($response['model']['status']) {
                                case '1': $color = " green "; break; 
                                case '2': $color = " orange "; break; 
                            }
                             ?>		
        

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box box-color boox-bordered <?php echo $color ?>">
                                <div class="box-title hidden-print">
                                    <h3>
                                        <i class="fa fa-user"></i>
                                        <?php echo ucwords($response['contrato']['contrato'])?> 

                                    </h3>
                                    <div class="btn-group pull-right hidden-print">
                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Mas Opciones <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="/catalogo/solicitudempleo/<?=$response['model']['solicitudempleo_id']?>/perfil/contratar" data-toggle="modal" onclick='confirm("Seguro?)'>Contratar</a></li>
                                            <?php if ($response['model']['solicitudempleo_id'] && $response['variables']['opcion']<>"editar") {?>
                                            <li><a href="/catalogo/solicitudempleo/<?=$response['model']['solicitudempleo_id']?>/perfil/editar" data-toggle="modal" onclick='showModal("addcurp","catalogo/empleado")'>Editar</a></li>
                                            <li><a href="/catalogo/solicitudempleo/<?=$response['model']['solicitudempleo_id']?>/evaluacion" data-toggle="modal" onclick='showModal("addcurp","catalogo/empleado")'>Evaluacion Final</a></li>
                                        <?php } else if($respnse['model']['person_id']){?>
                                            <li><a href="/catalogo/solicitudempleo/<?=$response['model']['person_id']?>/perfil/crear" data-toggle="modal" onclick='showModal("addcurp","empleado")'>Crear Solicitud</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box-content nopadding" style="text-align: justify;text-justify: inter-word;">
                                    <?php 
                                    $contenido=str_replace("%fullname%","<b>".ucwords($response['postulante']['fullname'])."</b>",$response['contrato']['detalle']);
                                    $contenido=str_replace("%empresa%","<b>".ucwords($response['empresa']['empresa'])."</b>",$contenido);
                                    echo "<p>".$contenido."</p>" ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">

// $(document).ready(function(){
// 	var form = $("#formulario");
// 	form.submit(function(){

// 		$.ajax({

// 			type: 'POST',
// 			url: form.attr("action"),
//             async:'true',
// 			data: form.serialize(),
// 			success:  function(data){
// 				alert(data.response);

// 			}

// 		});
// 		return false;
		
// 		})

// 	})




</script>

    </body>

</html>
