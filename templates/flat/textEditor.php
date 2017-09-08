<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<!-- META TAGS FOR FACEBOOK -->
 	<meta property=\"og:site_name\" content=\"Catalogo Ropa\" />
 	<meta property=\"og:image\" itemprop=\"image\" content=\"http://catalogo.noip.us/categorias/".$cat_imagen.".jpg\" />
	<meta property=\"og:url\" content=\"catalogo.noip.us\" />
	<meta property=\"og:type\" content=\"website\" />
	<meta property=\"og:title\" content=\"Tienda de Ropa Bolsos y Accesorios\" />
	<meta property=\"og:description\" content=\"Ropa para Caballero y Dama.\" />
 

	<title><?php echo $empresa ?></title>
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
	<!-- jQuery UI -->
	<script src="/assets/flat/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/assets/flat/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<!-- Form -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>

	<!-- Theme framework -->
	<script src="/assets/flat/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/assets/flat/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/assets/flat/js/demonstration.min.js"></script>


    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
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

<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>">


<?php include DIR_TEMPLATES.'navigation.php';?>


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
				<div class="page-header">
					<div class="pull-left">
						<h1>Blank page</h1>
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
							<a href="more-files.html">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">Blank page</a>
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
									<i class="fa fa-bars"></i>
									Basic Widget
								</h3>
							</div>
							<div class="box-content">
								Content
                                <textarea rows="30">
                                CONTRATO INDIVIDUAL DE TRABAJO QUE CELEBRAN POR UNA PARTE NUEVA EMPRESA , REPRESENTADA EN ESTE ACTO 

POR EL LICENCIADO RAMÓN GONZÁLEZ ZANELLA, A QUIEN EN LO SUCESIVO SE LE DENOMINARA EL PATRON  Y POR LA 

OTRA  LA C. MARÍA TERESA ALMIRA ROBLES Y A QUIEN EN LO SUCESIVO SE LE DENOMINARA  LA TRABAJADORA  AL 

TENOR DE LAS SIGUIENTES:







DECLARACIONES







A) Declara LA TRABAJADORA: 







1.- Haber nacido el día   15   de   Febrero  de   1970   tener   38   años de edad, de nacionalidad   

mexicana    con domicilio ubicado en     Marcos Mejora 51 int. 6ª, Col. Del Sur    



2.- Tener  los conocimientos y experiencia necesarios para prestar sus servicios al EL PATRON en el 

puesto de RECEPCIONISTA.







B) Declara EL PATRÓN:







1.- Ser una Sociedad Mercantil Mexicana, constituida conforme a las leyes del País.



2.- Tener su domicilio en      Augusto Rodín 11 Despacho C2, Col. Del Valle.   



3.- Tener por Objeto Social el de      Ventas.      



4.- Desear utilizar los servicios de LA TRABAJADORA, para desempeñar el puesto de RECEPCIONISTA y los 

demás que sean similares a dicha actividad.



C L A U S U L A S



PRIMERA.- Este Contrato se celebra por tiempo indefinido y en términos de los artículos 20 y 21 de la Ley federal del Trabajo



SEGUNDA.- La TRABAJADORA se obliga aprestar sus servicios personales subordinados a EL PATRON consistentes en el puesto de RECEPCIONISTA, desempeñándolos bajo la dirección y dependencia de EL PATRON y en general todos aquellos que estén relacionados con esa actividad como son de manera enunciativa y no limitativa: Coordinación de la administración de la empresa; Coordinación de la contabilidad externa, Revisión de la cobranza, Seguimiento de facturación de los cierres mensuales de proyectos, Control estricto de los movimientos de los estados de cuenta de la empresa así como de las entradas y salidas, Seguimiento de clientes, Programación de citas con nuevos prospectos, Elaboración de reportes de pago a proveedores, Elaboración de recibos, Seguimiento del archivo, Asistencia a la Dirección General ; sin perjuicio de cualesquiera otros que éste le encomiende, debiendo desempeñar sus servicios en el domicilio de la empresa  o en cualquier otro que esta le indique.



TERCERA.- Los servicios contratados en los términos del presente contrato conforme a la cláusula que antecede los desempeñara LA TRABAJADORA, en el D. F., pero EL PATRON podrá en cualquier momento fijar a LA TRABAJADORA otro lugar de trabajo dentro del Valle de México.



CUARTA.- Por sus servicios a EL PATRON, durante la vigencia del presente contrato, LA TRABAJADORA  percibirá un salario   mensual   por la cantidad de $4,830.00, con las deducciones correspondientes por la cantidad de $  483.00    por concepto de SAR. Y $   895.00   por concepto de cuota al I.M.S.S., resultando un NETO A PAGAR de $3,452.00 (Tres mil cuatrocientos cincuenta y dos pesos 00/100 M. N.), en el que queda comprendido el pago correspondiente a séptimos días y días de descanso obligatorio que establece la Ley Federal del Trabajo o en que pueda convenir a EL PATRON, mismo que será cubierto los días 1°  y 16 de cada mes o el día próximo hábil en caso de ser sábado o domingo; en el domicilio de la empresa.







QUINTA.- Las partes  convienen en que los servicios de LA TRABAJADORA son de carácter estrictamente confidencial, por lo que el puesto para el que será contratada se considerará de confianza para todos los efectos legales.



SEXTA.- La duración de la Jornada de Trabajo será de   lunes   a   viernes  , de las    9:00  horas. a las   18:00   horas. Con un descanso para reposar y tomar sus alimentos de las    2:00    a las   3:00    horas; tomándolas como mejor convenga a LA TRABAJADORA. Siendo esta la duración máxima de la jornada  y quedando estrictamente prohibido el trabajar horas extras sino con el consentimiento previo y permiso por escrito debidamente firmado por EL PATRON, en el que se señale, la fecha, las horas, el motivo, y el monto a pagar, sin que exceda de tres horas diarias ni de tres veces por semana.



SEPTIMA.- Para efectos del Seguro Social EL PATRON dará de alta a LA TRABAJADORA y cubrirá sus aportaciones.



OCTAVA.- LA TRABAJADORA  disfrutará de un periodo anual de vacaciones  en los términos del artículo 76 de la Ley Federal del Trabajo obligándose a firmar constancia de estas así como del pagó de la prima correspondiente.



NOVENA.- EL PATRON se reserva el derecho a dar por terminado el presente contrato en cualquier tiempo, en caso de que LA TRABAJADORA no cumpla con las obligaciones que contrae y con las que se derivan de la Ley de la Materia.



DECIMA.- LA TRABAJADORA reconoce que  todos los artículos, estudios, escritos, formatos, expedientes, documentos, libros, mobiliario, información verbal que se le proporcione con motivo de la relación de trabajo, así como los que la propia trabajadora prepare o formule con relación con sus servicios; son propiedad exclusiva de EL PATRON en todo tiempo y se obliga a conservarlos en buen estado, a no sustraerlos del lugar de trabajo salvo por necesidades de servicio y con autorización expresa y por escrito de EL PATRON en el momento en que así se requiera por lo que en caso contrario se le responsabilizara de cualquier perdida o faltante.



DECIMO PRIMERA.- LA TRABAJADORA se obliga a no divulgar ninguno de los aspectos de los negocios de EL PATRON, ni proporcionara a tercera persona, verbalmente o por escrito, directa o indirectamente, información alguna sobre los sistemas y actividades de cualquier clase que observe de EL PATRON y no en el desarrollo de sus actividades y no mostrara a terceros los documentos, expedientes, escritos, artículos, contratos, bitácora, estados de cuenta, y de mas materiales  e información que le proporcione EL PATRON o que prepare o formule con relación a sus servicios.



DECIMO SEGUNDA.- LA TRABAJADORA se obliga no obstante de la rescisión del presente contrato, a no divulgar ni a servirse personalmente de los negocios de EL PATRON, que fueren de su conocimiento con motivo de la relación de trabajo ni a proporcionar a terceros la información y documentos señalados en la cláusula que antecede. Para el caso contrario LA TRABAJADORA quedara sujeta  a la responsabilidad civil por daños y perjuicios que causare a EL PATRON, así como a las sanciones de carácter penal a que se hiciere acreedora.



DECIMO TERCERA.- EL PATRON  reconoce de forma expresa que la antigüedad de LA TRABAJADORA  es a partir del día 01 de agosto de 1998.



DECIMO CUARTA.- Ambas partes contratantes declaran que respecto a las obligaciones y derechos que mutuamente les corresponde en sus respectivas calidades de Patrón y de Trabajadora y que no hayan sido motivo de cláusula expresa en el presente contrato, se sujetarán a las disposiciones de la Ley Federal del Trabajo.



Leído que fue por ambas partes este documento ante los testigos que también firman e impuestos de su contenido y sabedores de las obligaciones que contraen, lo firman por duplicado en la Ciudad de México, Distrito Federal, a los    2   días del mes de  octubre  del año   2012   .





           PATRON                                                               TRABAJADORA





NUEVA EMPRESA                            

RAMÓN GONZÁLEZ ZANELLA.                       MARÍA TERESA ALMIRA ROBLES


                                
                                </textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</script>
</body>

</html>
