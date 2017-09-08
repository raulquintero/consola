<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Wizard</title>

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
	<!-- Masked inputs -->
	<script src="/assets/flat/js/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>
	<!-- icheck -->
	<script src="/assets/flat/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Chosen -->
	<script src="/assets/flat/js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- Validation -->
	<script src="/assets/flat/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/assets/flat/js/plugins/validation/additional-methods.min.js"></script>
	<!-- Form -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>
	<!-- Wizard -->
	<script src="/assets/flat/js/plugins/wizard/jquery.form.wizard.min.js"></script>
	<script src="/assets/flat/js/plugins/mockjax/jquery.mockjax.js"></script>

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

</head>


 <body data-layout="<?php echo $layout ?>" <?php echo $layout_topbar ?>  class="<?php echo $theme ?>">


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
						<h1>Empleado Nuevo</h1>
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
							<a href="forms-basic.html">Empleados</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="forms-wizard.html">Nuevo</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div id="mensaje"></div>
				<div class="row">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-magic"></i>
									Curp: <b><?php echo strtoupper($response['model']['curp'])?></b>
								</h3>
							</div>
							<div class="box-content">
								<form action="/catalogo/empleado_nuevo" method="POST" class='form-horizontal form-wizard' id="formulario">
									<div class="step" id="firstStep">
										<ul class="wizard-steps steps-4">
											<li class='active'>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="step-forms">
											
                                            <div class="form-group">
                                                <label for="nombre" class="control-label col-sm-2">Nombre:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="nombre" name="nombre" class='form-control' value="<?php echo strtoupper($response['model']['nombre']) ?>" da data-rule-required="true" data-rule-required="true">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="apellidop" class="control-label col-sm-2 ">Apellido P:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="apellidop" name="apellidop" class='form-control' value="<?php echo strtoupper($response['model']['apellidop']) ?>" data-rule-required="true" data-rule-required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="apellidom" class="control-label col-sm-2 ">Apellido M:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="apellidom" name="apellidom" class='form-control' value="<?php echo strtoupper($response['model']['apellidom']) ?>" data-rule-required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
											<label for="text" class="control-label col-sm-2">Genero</label>
											<div class="col-sm-10">
												<select name="genero" id="genero" name="genero"  data-rule-required="true">
													<option value="">-- Seleccione --</option>
													<option value="1">Mujero</option>
													<option value="2">Hombre</option>
												</select>
											</div>
										</div>
                                            <div class="form-group">
                                                <label for="email" class="control-label col-sm-2 ">Email:</label>
                                                <div class="col-sm-10">
                                                	<input type="text" name="email" id="email" value="<?php echo $response['model']['email'] ?>" class="form-control valid" data-rule-email="true" data-rule-required="true" aria-required="true" aria-invalid="false" aria-describedby="emailfield-error">	
                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="telmovil" class="control-label col-sm-2 ">Tel Movil:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="telmovil" name="telmovil" class='form-control mask_phone' value="<?php echo strtoupper($response['model']['casa']) ?>" data-rule-required="true">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="telcasa" class="control-label col-sm-2 ">Tel Casa:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" id="telcasa" name="telcasa" class='form-control mask_phone' value="<?php echo strtoupper($response['model']['casa']) ?>" data-rule-required="false">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label for="domicilio" class="control-label col-sm-2 ">Domicilio:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="domicilio" class='form-control' value="<?php echo strtoupper($response['model']['domicilio']) ?>" data-rule-required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="colonia_id" class="control-label col-sm-2 ">Colonia</label>
                                                <div class="col-sm-10">
                                                    <select name="colonia_id" id="colonia_id" class="form-control" data-rule-required="true">
                                                        <option value="1">Abasolo</option>
                                                        <option value="2">Option-2</option>
                                                        <option value="3">Option-3</option>
                                                        <option value="4">Option-4</option>
                                                        <option value="5">Option-5</option>
                                                        <option value="6">Option-6</option>
                                                        <option value="7">Option-7</option>
                                                        <option value="8">Option-8</option>
                                                        <option value="9">Option-9</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label for="cp" class="control-label col-sm-2 ">Codigo Postal:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="cp" class='form-control' value="<?php echo strtoupper($response['model']['cp']) ?>" data-rule-required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha_nac" class="control-label col-sm-2 ">Fecha de Nacimiento</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="fecha_nac" id="fecha_nac" class="form-control mask_date"  value="<?php echo $response['model']['fecha_nac'] ?>" data-rule-required="true">
                                                    <span class="help-block">Format: AAAA/MM/DD</span>
    	                                        </div>
	                                        </div>


										</div>
									</div>
									<div class="step" id="secondStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">

													</span>
													<span class="description">
														Datos Generales
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Datos Laborales
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														informacion Adicional
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
									
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Contratacion</label>
											<div class="col-sm-2">
												<select name="gend" id="gend" data-rule-required="true">
													<option value="">-- Seleccione --</option>
													<option value="2">Nueva</option>
													<option value="2">Reingreso</option>
												</select>
											</div>
										</div>
									
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-2 ">NSS:</label>
                                            <div class="col-sm-10">
                                            
                                                <input <?=$response['readonly']?> type="text" name="name" class='form-control disabled' value="<?php echo strtoupper($response['model']['nss']) ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-2 ">Afore:</label>
                                            <div class="col-sm-10">
                                            
                                                <input <?=$response['readonly']?> type="text" name="name" class='form-control disabled' value="<?php echo strtoupper($response['model']['afore']) ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-2 ">RFC:</label>
                                            <div class="col-sm-10">
                                            
                                                <input <?=$response['readonly']?> type="text" name="name" class='form-control disabled' value="<?php echo strtoupper($response['model']['rfc']) ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="tipo_licencia" class="control-label col-sm-2 ">Licencia:</label>
                                            <div class="col-sm-10">
                                            
                                                <input <?=$response['readonly']?> type="text" id="tipo_licencia" name="tipo_licencia" class='form-control disabled' value="<?php echo strtoupper($response['model']['puesto']) ?>">
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label for="textfield" class="control-label col-sm-2 ">Extension</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="textfield" id="textfield" class="form-control">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
											<label for="text" class="control-label col-sm-2">Max. Grado de Estudios</label>
											<div class="col-sm-2">
												<select name="gend" id="gend" data-rule-required="true">
													<option value="">-- Chose one --</option>
													<option value="1">Primaria Cert.</option>
													<option value="2">Secundaria Cert.</option>
													<option value="2">Licenciatura Trunca</option>
													<option value="2">Licenciatura Titulo</option>
													<option value="2">Maestria Cert.</option>
													<option value="2">Doctorado Cert.</option>
												</select>
											</div>
											<div class="col-sm-1">
												<label for="carrera" class="control-label">Carrera</label>
											</div>
											<div class="col-sm-3">
												<input type="text" name="carrera" id="carrera" class="form-control" data-rule-required="false">
											</div>
											<div class="col-sm-1">
												<label for="cedula" class="control-label ">Cedula Prof.</label>
											</div>
											<div class="col-sm-3">
												<input type="text" name="cedula" id="cedula" class="form-control" data-rule-required="false">
											</div>
										</div>
										<div class="form-group">
											<label for="oficios" class="control-label col-sm-2">Oficios que domina</label>
											<div class="col-sm-10">
												<textarea id="oficios" name="oficios" id="tt333" class="form-control" rows="7" placeholder="Oficios que domina"></textarea>
											</div>
										</div>
										
										
									</div>
									<div class="step" id="thirdStep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">

													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">

													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Additional information</label>
											<div class="col-sm-10">
												<textarea name="textare" id="tt333" class="form-control" rows="7" placeholder="You can provide additional information in here..."></textarea>
											</div>
										</div>
									</div>
									<div class="step" id="fourthstep">
										<ul class="wizard-steps steps-4">
											<li>
												<div class="single-step">
													<span class="title">
														1</span>
													<span class="circle">

													</span>
													<span class="description">
														Basic information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														2</span>
													<span class="circle">

													</span>
													<span class="description">
														Advanced information
													</span>
												</div>
											</li>
											<li>
												<div class="single-step">
													<span class="title">
														3</span>
													<span class="circle">
													</span>
													<span class="description">
														Additional information
													</span>
												</div>
											</li>
											<li class='active'>
												<div class="single-step">
													<span class="title">
														4</span>
													<span class="circle">
														<span class="active"></span>
													</span>
													<span class="description">
														Check again
													</span>
												</div>
											</li>
										</ul>
										<div class="form-group">
											<label for="text" class="control-label col-sm-2">Check again</label>
											<div class="col-sm-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="okokok" value="agree" data-rule-required="true">Everything is ok?</label>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<input type="reset" class="btn" value="Back" id="back">
										<input type="submit" class="btn btn-primary" value="Submit" >
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">

$(document).ready(function(){
	var form = $("#formulario");
			alert('inicio');
	form.submit(function(){

		$.ajax({
			type: 'POST',
			url: form.attr("action"),
			data: form.serialize()
			}.done(function(data) {
				if(data.Success){
					alert('success');
					}	
					else {
						alert(data.Error);
					}
				
				}

			})

		});
		return false;
		
		})

	})




</script>


</body>

</html>
