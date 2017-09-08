<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa ?> - Ordenar y Pagar</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/css/themes.css">


	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Form -->
	<script src="/js/plugins/form/jquery.form.min.js"></script>

	<!-- Theme framework -->
	<script src="/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="/js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-precomposed.png" />

</head>

<body data-layout="<?php echo $layout?>" class="<?php echo $theme ?>">

	<?php include DIR_TEMPLATES.'navigation.php';?>
	
	<div class="container-fluid  nav-hidden" id="content">
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
				<div class="page-header hidden-xs">
					<div class="pull-left">

							<h1> Ordenar y Pagar</h1>
							<?php //echo print_r ($_GET); ?>
							<!-- <a href="#modal-1" role="button" class="btn notify" data-notify-title="<br>Item Agregado: 70009348 - $567.00 MX." data-notify-message=" ">Basic notification</a> -->
					</div>
					<div class="pull-right">
						
						<!-- <ul class="stats">
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
						</ul> -->
					</div>
				</div>
				
				<div class="breadcrumbs hidden-xs">
					<ul>
						<li>
							<a href="/">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<?php 
						echo"<li>
							<a href=\"#\">Orden</a>
						</li>";
						
						?>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>


<?php if ($Cart->cartCount()) $ocultar=""; else $ocultar=" hidden "; ?>
<div class="row <?php echo $ocultar ?>">
<div class="col-sm-9">

	<div class="box box-color box-borderedno">
		<div class="box-title">
			<h3>
			<i class="fa fa-shopping-cart"></i>
			Resumen de la Orden
			</h3>
		</div>

		<div class="box-content nopadding">

		<table class="table table-striped table-user hidden-xs hidden-md hidden-sm   ">
                          <thead>
                            <tr>
                              <th>Codigo</th>
                              <th>Producto</th>
                              <th>Color/Estilo Talla</th>
                              <th>Desc</th>
                              <th>Cant.</th>
                              <th>Precio Unit.</th>
                              <th>SubTotal</th>
                            </tr>
                          </thead>
            <tbody>
		<?php 
		//$cart->viewCart();
		$productos = $Cart->getCart();
		$total=0;
		$subtotal=0;
		foreach ($productos as $producto) {
					
			$precio = $producto['precio_contado'] * 1.16;
			$subtotal = dinero($precio * $producto['qanty']) - ($precio * $producto['discount']/100);
			echo "<tr>";
			echo "<td>".$producto['codigo']."</td>" ;
			echo "<td>".strtoupper($producto['producto'])."</td>" ;
			echo "<td>".strtoupper($producto['color'])."" ;
			echo "<br>".strtoupper($producto['talladet'])."</td>" ;
			echo "<td>".$producto['discount']." %</td>";
			echo "<td> 
					&nbsp;&nbsp;".$producto['qanty']." &nbsp;&nbsp;
					<img src='/img/noimage.png' width=45 height=1></td>" ;
			echo "<td align=right>".dinero($precio)."</td>" ;
			echo "<td align=right>". dinero($subtotal) ."</td>" ;
			echo "</tr>";
			$total+=$subtotal;
		}
			echo "<tr><td colspan=5></td>
					<td colspan=1 align=right class='total'>Total</td>
					<td align=right class='dinero total'><b>MX$ ".dinero($total)."</b><imge src='/img/noimage.png' width=90 height=1></td></tr></tr>"

		 ?>
            </tbody>
    	</table>
		$50.00 MX de Gastos de envio en ordenes menores a $400.00 MX

		</div>
	</div>
</div>



<?php 
if ( $Login->getClienteId() )
{
 ?>

<div class="col-sm-3 hidden-print" >
	<div class="box box-color box-bordered">
		<div class="box-title">
			<h3>
				<!-- <i class="fa fa-usd"></i> -->
				Forma de Pago
			</h3>
		</div>
		<div class="box-content nopadding">
<br>
&nbsp;&nbsp;
<span class="label label-default">Total a Pagar</span>
<center>
 <h3><b>$<?php echo dinero($total) ?>MX</b></h3>	</center>
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="raul.quintero-facilitador@live.com">
<input type="hidden" name="item_name" value="Factura Catalogo">
<input type="hidden" name="item_number" value="0000001">
<input type="hidden" name="currency_code" value="MXN">
<input type="hidden" value="1" name="no_note"/>
<input type="hidden" value="1" name="no_shipping"/>
<input type="hidden" name="amount" value="<?php echo dinero($total) ?>">

<input type="hidden" name="return" value="http://catalogo.noip.us/gracias.html">
<input type="hidden" name="cancel_return" value="http://catalogo.noip.us/ordenarypagar">
<input type="hidden" name="notify_url" value="http://catalogo.noip.us/verificar.php">

<!-- <input type="hidden" name="return" value="http://catalogo.noip.us/verificar.php">
<input type="hidden" name="cancel_return" value="http://catalogo.noip.us/pagocancelado.php">
<input type="hidden" name="notify_url" value="http://catalogo.noip.us/notificar.php">
 --><input type="image" src="http://www.tecnoestudios.com/tland/pages/casmm/images/BotonPaypal.png" width=190
                   name="submit"
                   alt="Make payments with PayPal - it's fast, free and secure!">
</form>	

		</div>
	</div>
</div>

<?php 
}
else
{
 ?>

<div class="col-sm-3 hidden-print" >
	<div class="box box-color box-bordered">
		<div class="box-title">
			<h3>
				<!-- <i class="fa fa-usd"></i> -->
				Ingreso a Sistema
			</h3>
		</div>
		<div class="box-content nopadding">
			<br>
			<center>
				Para Ordenar tiene que ingresar al sistema primero
			</center>

			<form method='POST' classe='form-validate' id="test"  action="/auth/1">
				<input type="hidden" name="backpage" value="ordenar">
			        <div class="form-group">
			          <div class="email controls" style="width:200px;padding:10px;">
			            <input type="text" name="user_name" id="user_name"  placeholder="E-Mail" class='form-control' data-rule-required="true" data-rule-email="false">
			          </div>
			        </div>
			        
			        <div class="submit pull-right">
			          <div class="remember">
			            
			          	<input type="submit" value="Log In" class='btn btn-primary'>&nbsp;&nbsp;
			          	<br><br>
			          </div>
			        </div>
			</form>
		</div>
	</div>
</div>


<?php 
}
 ?>










</div>
	



<!-- 

<form action="/verificar.php"  method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="raul.quintero-facilitador@live.com">
<input type="hidden" name="item_name" value="Factura Catalogo">
<input type="hidden" name="item_number" value="0000001">
<input type="hidden" name="payment_status" value="Completed">
<input type="hidden" name="mc_gross" value="250">
<input type="hidden" name="mc_currency" value="MXNd">
<input type="hidden" name="txn_id" value="54949500000001">
<input type="hidden" name="receiver_email" value="raul.quintero-facilitador@live.com">
<input type="hidden" name="payer_email" value="raul.quintero-buyer@live.com">
<input type="hidden" value="1" name="no_note"/>
<input type="hidden" value="1" name="no_shipping"/>
<input type="hidden" name="return" value="http://catalogo.noip.us/verificar.php">
<input type="hidden" name="cancel_return" value="http://catalogo.noip.us/pagocancelado.php">
<input type="hidden" name="notify_url" value="http://catalogo.noip.us/notificar.php">
<input type="image" src="http://www.tecnoestudios.com/tland/pages/casmm/images/BotonPaypal.png" width=190
                   name="submit"
                   alt="Make payments with PayPal - it's fast, free and secure!">
</form> -->	

	


 			</div>
 		</div>






	</div>

</body>

</html>
