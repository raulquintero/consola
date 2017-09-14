<table class="table table-hover table-striped table-nomargin table-borderedeee " >
					<thead>
					<tr>
						<th style="background:lightgreen;color:#444444">Producto</th>
						<th style="background:lightgreen;color:#444444">Descripcion</th>
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