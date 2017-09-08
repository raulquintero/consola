<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php $empresa?> - Pantalla Bloqueada</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/flat/css/themes.css">


	<!-- jQuery -->
	<script src="/assets/flat/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="/assets/flat/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<script src="/assets/flat/js/eakroko.js"></script>

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

<body class='locked'>
	<div class="wrapper">
		<div class="pull-left">
			<img src="/assets/flat/img/noavatarblocked.png" alt="" width="200" height="200">
			<a href="more-login.html"><?php echo $_SESSION['username']?></a>
		</div>
		<div class="right">
			<div class="upper">
				<h5 style="color:white"><?php // echo $_SESSION['username']?></h5>
				<span>Bloqueado</span>
			</div>
			<form action="/unlock" method='post' >
				<input type="password" placeholder="Password" class='form-control' value='' autocomplete="off">
				<div>
					<input type="submit" value="Unlock" class='btn btn-inverse'>
				</div>
			</form>
		</div>
	</div>

</body>

</html>
