<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/flat/css/themes.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/datatable/TableTools.css">
	<link rel="stylesheet" href="/assets/flat/css/local.css">

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

		<!-- New DataTables -->
	<script src="/assets/flat/js/plugins/moment/js/jquery.moment.min.js"></script>
	<script src="/assets/flat/js/plugins/moment/js/moment-range.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.tableTools.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.fixedColumns.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.fixedHeader.min.js"></script>
	<script src="/assets/flat/js/plugins/datatables/extensions/dataTables.scroller.min.js"></script>

	<!--[if lte IE 9]>
		<script src="/assets/flat/js/plugins/placeholder/jquery.placeholder.min.js"></script>
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



	<!-- Notify -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/gritter/jquery.gritter.css">
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Notify -->
	<script src="/assets/flat/js/plugins/gritter/jquery.gritter.min.js"></script>
	

	<script src="/assets/js/local.js"></script>

<script type="text/javascript">
titulo="<?php echo $_SESSION['titulo'] ?>";
texto="<?php echo $_SESSION['texto'] ?>";
</script>
<?php 
// if($_SESSION['showMessage']) $function = "mess(titulo,texto)";
// if (isset($_SESSION['showMessage']))
// 			unset($_SESSION['showMessage']);
 ?>


<script type=text/javascript>
		function setFocusTo(campo){
			 $(campo).focus();
			//document.getElementById("user_pass").focus();
		}
</script>

</head>
<!-- onloade="setFocusTo('<?php echo $focusto ?>');<?php echo $function ?>" -->
<body data-layout="<?php echo $layout ?>" class="<?php echo $theme ?>"   style="background: #555">

		
<?php include DIR_TEMPLATES.'navigation.php';?>
	
	<div class="container-fluid nav-hidden" id="content">

		<div id="main" style="background: #555">
			<div class="container-fluid"  >
				
				

<div class="row" >
	<div class="col-sm-9" ><br>
		<div class="box box-colore box-borderede" >
			
			<div class="box-content nopadding listproductos" style="background:#e2e2e2;overflow-y:scroll;">
				<table class="table table-hover table-striped table-nomargin table-borderedeee " >
					<thead>
					<tr>
						<th style="background:lightgreen;color:#444444">Producto</th>
						<th style="background:lightgreen;color:#444444">Color y Talla</th>
						<th style="background:lightgreen;color:#444444">Precio</th>
						<th style="background:lightgreen;color:#444444">Cantidad</th>
						<th style="background:lightgreen;color:#444444">Total</th>
						<th class='hidden-480' style="background:lightgreen;color:#444444">Opciones</th>
					</tr>
					</thead>
					<tbody>
<?php 
//$productos = $Cart->getCart();

//foreach ($productos as $producto) 
{

//$precio_contado=dinero($producto['precio_contado']+($producto['precio_contado']*$iva/100));

// if($producto['discount']){
// 	$descuento=1-($producto['discount']/100);
// 	$precio_nuevo=$precio_contado*$descuento;
// 	$precio_contado="<s>$ ".dinero($precio_contado)."</s>";
// 	$precio_nuevo=dinero($precio_nuevo);
// }	
/*
 ?>			
					<tr>
						<td><?php echo strtoupper($producto['codigo']) ?><br>
							<?php echo strtoupper($producto['producto']) ?></td>
						<td>
							<?php echo $producto['color'] ?><br><?php echo $producto['talladet'] ?>
						</td>
						<td align=right><?php 
							if ($producto['discount'])
								echo "-".$producto['discount']."% ".$precio_contado." <br>".$precio_nuevo."&nbsp;";
								else echo $precio_contado.$precio_nuevo;

						?></td>
						<td align=center><?php echo $producto['qanty'].$producto['descuento'] ?></td>
						<td align=right><?php if ($descuento) echo $precio_nuevo; else echo $precio_contado  ?>
							<a class='visible-480' href="/cart/clearitem/<?php echo $producto['codigo'] ?>/pos"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
						</td>
						<td class='hidden-480'><a class="hidden-print" href="/cart/clearitem/<?php echo $producto['codigo'] ?>/pos"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a></td>
					</tr>
<?php 
*/}
 ?>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php //print_r($_SESSION) ?>	
	<div class="col-sm-3" >
		<div class="box box-colore box-borderede"  style="background:#444" >
			<div class="box-title" style="background:#444;color:#cccccc">
				<!--boton class="btn btn-green" style="width:48%"><br>Contado<br><br></boton>
				<boton class="btn disabled" style="width:48%"><br>Credito<br><br></boton-->
				<!--br-->
				<h5><b><font color=white>RAUL ALBERTO <br>QUINTERO CIFUENTES</font></b></h5>
				<!-- Cliente: <br> -->
			</div>
			<div class="box-content nopadding" style="background: #444">
				<table class="table table-user table-nomargin table-borderede ">
					
					
					</thead>
					<tbody>
					<tr>
						<td class="titulo_dinero">Subtotal</td>
						<td class="dinero"><b>$<?php //echo dinero($Cart->cartTotal());?></b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Descuento</td>
						<td class="dinero"><b>$0.00</b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Envio</td>
						<td class="dinero"><b>$0.00</b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">TOTAL</td>
						<td class="dinero"><h4><b>MX$<?php //echo dinero($Cart->cartTotal()); ?><b></h4></td>
					</tr>
					<!-- <tr>
						<td class="titulo_dinero">Efectivo</td>
						<td class="dinero"><b><?php echo dinero($_SESSION['efectivo']); ?><b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Tarjeta</td>
						<td class="dinero"><b><?php echo dinero($_SESSION['tarjeta']); ?><b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Resta</td>
						<td class="dinero"><h4><b>MX$<?php echo dinero($Cart->cartTotal()); ?><b></h4></td>
					</tr> -->
					</tbody>
				</table>

				<boton href="/#modal-user" onkeyup="setFocusTo('#cambio')" data-toggle="modal" class="btn btn-darkblue" style="width:100%"><h3><b>CREDITO</b></h3><br></boton>
				<boton href="/#modal-user" onkeyup="setFocusTo('#cambio')" data-toggle="modal" class="btn btn-green" style="width:100%"><h3><b>EFECTIVO</b></h3><br></boton>
				<!-- <br><br><boton class="btn btn-darkblue"  style="width:100%"><br>Pagar con Tarjeta<br><br></boton><br> -->

			</div>
		</div>
			<br><br><br><br><br>
	</div>



</div>











    



























<!--// POS bottom menu begin-->
<div class="navbar navbar-fixed-bottom" style='border-top:3px solid #333; /*#5A8AC5;*/background: red;'>
    <div id="navigation">
        <div class="container-fluid" >
            <div >
                <form method="POST" action="/cart/additembycodebar" class="form-messages">
                <div class="text ">
                    <!-- <input type="file" accept="image/*;capture=camera" id="c" name="c" placeholder="Teclee o Scanee Codigo..." class="form-control"> -->
                    <input type="text" id="codebar" name="codebar" placeholder="Teclee o Scanee Codigo..." class="form-control">
                    <input type=hidden name='backpage' value='pos'>
                </div>
                </form>
            </div>    

            <div class='hidden-xs'>
            	<!-- <button class='btn btn-green'>hola</button> -->
            <ul class='main-nav2'>
                <li class='active' ><a href="index.html"><span>F2 POS</span></a></li>
                <li class='active' ><a href="/#modal-client" data-toggle="modal"  onkeyup="setFocusTo('#cambio')"><span>F4 Clientes</span></a></li>
                <li class='active' ><a href="/#modal-user" data-toggle="modal"  onkeyup="setFocusTo('#cambio')"><span>F7 Borrar Producto</span></a></li>
                <li class='active' ><a href="index.html"><span>F8 Checar Precio</span></a></li>
                <li class='active' ><a href="index.html"><span>F9 Servicios</span></a></li>
                <li class='active' ><a href="index.html"><span>F10 Miscelanos</span></a></li>
            </ul>
            </div>
            <div class="user span4 hidden-xs">
                <!-- <div class="dropdown" style="text-align:right;"> -->
                    <span id="txt" style="background:white; border:1px solid gray;padding-left:8px;padding-right:8px"></span>&nbsp;&nbsp;<span style="color:white;"><b>MONTESITO Pyme<br>by http://www.cibercomm.com</b>
                        <!-- <img src="img/demo/user-avatar.jpg" alt=""> --> 
                    </span>
                <!-- </div>  -->
            </div>
        </div>
    </div>
</div>
<!--// POS bottom menu end-->
















				
			</div>
		</div>
	</div>














	<div id="modal-user" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background:#2AAB2C;color:white">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Total a Pagar</h4>
				</div>
				<div class="modal-body">
					<div class="row">
							<!-- <div class="col-sm-2">
								<img src="/assets/flat/img/demo/user-1.jpg" alt="">
							</div> -->
						<div class="col-sm-10">
							<dl class="dl-horizontal" style="margin-top:0;">
								<dt>Total:</dt>
								<dd><h1>MX$ <?php echo dinero($Cart->cartTotal());?></h1></dd>
								<dd>Efectivo: $ <input type="text" id="cambio"></dd>

							</dl>
						</div>
						<div class="col-sm-10">
							<dl class="dl-horizontal" style="margin-top:0;">
								<dd>Tarjeta: $ <input type="text" id="cambio"></dd>
								<dd>Voucher: <input type="text" id="cambio"></dd>

							</dl>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="/cobrar/efectivo" class="btn btn-gray" data-dismissssss="modal" style="width:200px"><h3>CREDITO</h3><br></a>
					<a href="/cobrar/efectivo" class="btn btn-green" data-dismissssss="modal" style="width:200px"><h3>CONTADO</h3><br></a>
				</div>
			</div>
		</div>
	</div>


<div id="modal-client" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background:#2AAB2C;color:white">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Clientes</h4>
				</div>
				<div class="modal-body">
					<div class="row">
							<!-- <div class="col-sm-2">
								<img src="/assets/flat/img/demo/user-1.jpg" alt="">
							</div> -->
						<div class="col-sm-10">
							<dl class="dl-horizontal" style="margin-top:0;">
								<dt>Id</dt>
								<dd>Nombre</dd>
								<dd>Apellido</dd>

							</dl>
							<dl class="dl-horizontal" style="margin-top:0;">
								<dt>Id</dt>
								<dd>Nombre</dd>
								<dd>Apellido</dd>

							</dl>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="/cobrar/efectivo" class="btn btn-green" data-dismissssss="modal" style="width:200px"><h3>Cancelar</h3><br></a>
				</div>
			</div>
		</div>
	</div>



	
</body>

</html>
