<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa?> - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
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
	<!-- Validation -->
	<script src="/assets/flat/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/assets/flat/js/plugins/validation/additional-methods.min.js"></script>
	<!-- icheck -->
	<script src="/assets/flat/js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<script src="/assets/flat/js/eakroko.js"></script>

	<!--[if lte IE 9]>
		<script src="/js/assets/flat/plugins/placeholder/jquery.placeholder.min.js"></script>
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

<?php

echo '
	<script type=text/javascript>
		function setFocusTo(){
			 $("#user_name").focus();
			//document.getElementById("user_name").focus();
		}
	</script>
	';
?>

<style type="text/css">

body {
	background-image: url("/assets/flat/img/softdev.jpg");
}
</style>
</head>

<body class='login' onload="setFocusTo();">


<div class="wrapper">
		<h1>
			<a href="index.html">
				<img src="/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Cibercomm</a>
		</h1>
	<div class="login-body">
			<h2><?php echo  ucwords($response['nombre']);?></h2>
	<form method='POST' class='form-validate' id="test"  action="/login/<?php echo $response['key']?>">
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
	</div>
</div>

	




</body>

</html>

