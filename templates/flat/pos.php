<html>
<head>
	<title></title>

	
<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	
	
	<link rel="stylesheet" href="/assets/flat/css/local.css">



</head>
<body style="background: #555">



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
						<td class="dinero"><b><?php echo $_SESSION['efectivo']; ?><b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Tarjeta</td>
						<td class="dinero"><b><?php echo $_SESSION['tarjeta']; ?><b></td>
					</tr>
					<tr>
						<td class="titulo_dinero">Resta</td>
						<td class="dinero"><h4><b>MX$<?php //echo $Cart->cartTotal(); ?><b></h4></td>
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


</body>
</html>