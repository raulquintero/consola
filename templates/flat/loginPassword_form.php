<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- icheck -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/icheck/all.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/tyle.css">
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
<?php
if($focusto){
echo '
	<script type=text/javascript>
		function setFocusTo(){
			 $("#'.$focusto.'").focus();
			//document.getElementById("'.$focusto.'").focus();
		}
	</script>
	';
}
?>
</head>

<body class='login' onload="setFocusTo();">


<div class="wrapper">
<!-- 		<h1>
			<a href="index.html">
				<img src="/assets/flat/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">FLAT</a>
		</h1> -->
		<div class="login-body">
			<h2>SIGN IN </h2>
	<center><img src="/assets/flat/img/noavatar.png" height=100 ></center>
			<form method='POST' class='form-validate' id="test"  action="/auth/2">
    
          		<input type="hidden" name="backpage" value="<?=$backpage?>">
    
        <div class="form-group">
          <div class="email controls" >

          <div class="pw controls" ><center><b><?php echo strtolower($_SESSION['username']); ?></b></center><br>
            <!-- <input type="text" name="user_name" id="user_name"  placeholder="E-Mail" class='form-control' data-rule-required="true" data-rule-email="false"> -->
          </div>
        </div>
        <div class="form-group">
            <input type="password" id="user_pass" name="user_pass" placeholder="Password" class='form-control' data-rule-required="true">
          </div>
        </div>
        <div class="submit">
					
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#">
					<span>Forgot password?</span>
				</a>
			</div>
		</div>
	</div>
	




</body>

</html>

