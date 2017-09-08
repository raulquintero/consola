			<h2><?php echo  ucwords($response['nombre']);?></h2>
	
			<form method='POST' class='form-validate' id="test"  action="/login/<?php echo $response['key']?>">
    
          		<!-- <input type="hidden" name="backpage" value="<?=$q?>"> -->
    
        <div class="form-group">
          <div class="password controls" >
				<?php
					if ($_SESSION['error']){
						echo '<div class="alert alert-warning alert-dismissable" style="border:1px solid red">';
							echo "<font color=red>Error: ".strtoupper($_SESSION['error'])."</font><br>"; unset($_SESSION['error']); 
						echo '</div>';
					}
				?>    
            <input type="password" name="pass" id="user_name"  placeholder="Password" class='form-control' data-rule-required="true" data-rule-email="false">
          </div>
        </div>
        <!-- <div class="form-group">
          <div class="pw controls" >
            <input type="password" name="user_pass" placeholder="Password" class='form-control' data-rule-required="true">
          </div>
        </div> -->
        <div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember">
						<label for="remember">Remember me</label>
					</div>
					<input type="submit" value="Continuar" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#">
					<span>Forgot password?</span>
				</a>
			</div>
		</div>