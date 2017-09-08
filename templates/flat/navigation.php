
<?php echo "<div id='server'></div>"; ?>
 <div id="modal-window" class="modal fade">
        <div class="modal-dialog">
            <div  class="modal-content">
                <div id="modal-contenido">
                </div>
                <div class="modal-header">

                </div>
            </div>
        </div>
    </div>
<div id="navigation">
    <div class="container-fluid">
            <a href="/" id="brand"><?php echo $empresa ?></a>
            <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
                <i class="fa fa-bars"></i>
            </a>
            
            <ul class='main-nav'>
                            <?php $check_ruta=1;$Menu->listCategory(0,0,$check_ruta);?>

            </ul>
            
            
            <ul class='main-nav'>
                <?php //echo $Header->showCategorias($categoria_id,$subcategoria_id)?>
            </ul>
            <div class="user">
                <ul class="icon-nav">
                <?php  
                //if ( $Login->isLogged() )   // checar si esta logueado 
		//echo $Header->getMenuCorreo() ?>
                <?php //echo $Header->getMenuIdioma()	?>				
		

<?php //echo $Header->getCart($Cart->cartCount(),$Cart->getCart()) ?>



<?php

$menuUsuario=<<<EOD
<div class="dropdown ">

<ul class="icon-nav">
<li class='dropdown'>
	<a href="#" class='dropdown-toggle' data-toggle="dropdown">
		<i class="fa fa-envelope"></i>
		<span class="label label-lightred">4</span>
	</a>
	<ul class="dropdown-menu pull-right message-ul">
		<li>
			<a href="/mensajes">
				<img src="/assets/flat/img/demo/user-1.jpg" alt="">
				<div class="details">
					<div class="name">Jane Doe</div>
					<div class="message">
						Lorem ipsum Commodo quis nisi ...
					</div>
				</div>
			</a>
		</li>
		<li>
			<a href="/mensajes">
				<img src="/assets/flat/img/demo/user-2.jpg" alt="">
				<div class="details">
					<div class="name">John Doedoe</div>
					<div class="message">
						Ut ad laboris est anim ut ...
					</div>
				</div>
				<div class="count">
					<i class="fa fa-comment"></i>
					<span>3</span>
				</div>
			</a>
		</li>
		<li>
			<a href="/mensajes">
				<img src="/assets/flat/img/demo/user-3.jpg" alt="">
				<div class="details">
					<div class="name">Bob Doe</div>
					<div class="message">
						Excepteur Duis magna dolor!
					</div>
				</div>
			</a>
		</li>
		<li>
			<a href="components-messages.html" class='more-messages'>Go to Message center
				<i class="fa fa-arrow-right"></i>
			</a>
		</li>
	</ul>
</li>



<li class='dropdown language-select'>
	<a href="#" class='dropdown-toggle' data-toggle="dropdown">
		<img src="/assets/flat/img/demo/flags/mx.gif" alt="">
		<span>MX</span>
	</a>
	<ul class="dropdown-menu pull-right">
		<li>
			<a href="#">
				<img src="/assets/flat/img/demo/flags/us.gif" alt="">
				<span>US</span>
			</a>
		</li>
		
	</ul>
</li>
</ul>

<div class="dropdown">


EOD;


						if ($_COOKIE['key']){
							$menuUsuario .= "<a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\"><span class='hidden-xs'>Raul Quintero
										<img src=\"/assets/flat/img/avatar_verde.png\" height=26 alt=\"\"></span>";
							$menuUsuario .="<span class='visible-xs'>RQ</span>";
							// $menuUsuario .="<img src=\"/img/avatar_verde.png\" height=26 alt=\"\">";
							}
						else 
							$menuUsuario .= "<a href=\"/\" classe='dropdown-toggle' >Log IN <img src=\"/assets/flat/img/noavatar.png\" height=26 alt=\"\">";
						
$menuUsuario.=<<<EOD
				</a>
						 
					
					<ul class="dropdown-menu pull-right">
						<li>

EOD;


if (1)
{
	
	$menuUsuario .=  "<li>
			<a href=\"/perfil\">Mi Perfil</a>
		</li>";
	if (0){
		$menuUsuario .=  "<li style='border-top:1px solid gray;'>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/pos\">POS</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/clientes\">Clientes</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/apartados/vigentes\">Apartados</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/ordenes/pendientes\">Ordenes</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/dashboard\">Dashboard</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/agenda\">Agenda</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/calendario\">Calendario</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/telemarketing\">Telemarketing</a>
		</li>";
	}
	$menuUsuario .= "<li style='border-top:1px solid gray;'>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/lock\">Bloquear Pantalla</a>
		</li>";
	$menuUsuario .= "<li>
			<a href=\"/logout\">Salir</a>
		</li>";

}
else
{



$menuUsuario.= '

<div id="login">
<div class="header" style="width:200px;padding:10px;" >
						<b>Bienvenido/a </b>
						
				
				</div>


 	<form method="POST" classe="form-validate" id="test"  action="/auth/1">
          		<input type="hidden" name="backpage" value="'.$backpath.'">
        <div class="form-group">
          <div class="email controls" style="width:200px;padding:10px;">

            <input type="text" name="user_name" id="user_name"  placeholder="E-Mail" class="form-control" data-rule-required="true" data-rule-email="false">
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="pw controls" style="width:200px;padding:10px;">
            <input type="password" name="user_pass" placeholder="Password" class="form-control" data-rule-required="true">
          </div>
        </div> -->
        <div class="submit pull-right">
          <div class="remember">
            
            <!-- <input type="checkbox" name="remember" classe="icheck-me" data-skin="square" data-color="blue" id="remember">
            <label for="remember">Remember me</label> -->
          <!--<input type="hidden" name="fn" value="1">-->
          <input type="button" value="Log In" class="btn btn-primary" onclick="sendUser(user_name.value)">&nbsp;&nbsp;
          <br><br>
          </div>
          

	</form>
        </div>
    </div>
';
 
}
?>

<?php
$menuUsuario .= <<<EOD

						
						
					</ul>
				</div>
EOD;
echo $menuUsuario;

?>





<?php //echo $Header->getMenuUsuario($usuario,$Usuario->getNameInitials($usuario),$backpath) ?>	
				</ul>		
			</div>
		</div>
	</div>
