<?php $noDebug =TRUE;?>
<h2><?php echo  ucwords($response['nombre']);?></h2>
	<form method='POST' class='form-validate' id="test"  action="/login/<?php echo $response['key']?>">
        <div class="form-group">
          	<div class="password controls" >
				<?php
					if (isset($_SESSION['error'])){
						echo '<div class="alert alert-warning alert-dismissable" style="border:1px solid red">';
						echo "<font color=red>Error: ".strtoupper($_SESSION['error'])."</font><br>"; unset($_SESSION['error']); 
						echo '</div>';
					}
					?>    
            	<input type="password" name="pass" id="user_name"  placeholder="Password" class='form-control' data-rule-required="true" data-rule-email="false">
          	</div>
        </div>
        
        <div class="submit">
			<div class="remember">

				<input type="hidden" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember">
				<label for="remember"></label>
			</div>
			<input type="submit" value="Continuar" class='btn btn-primary'>
		</div>
	</form>
	<div class="forget">
		<a href="#">
			
			<span>Forgot password?
			
			<? var_dump($_POST);?>
			.
			</span>
			
		</a>