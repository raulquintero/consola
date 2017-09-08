<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title><?php echo $empresa ?> - Pagina error 404</title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/css/themes.css">


	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
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
<style type="text/css">
    html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }
 
    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    }
</style>
</head>

<body class='error'>
    <img alt="full screen background image" src="/img/wallpaper.jpg" id="full-screen-background-image" /> 

	<div class="wrapper" style="background:red">
		<div class="code">
			<span>404</span>
			<i class="fa fa-warning"></i>
		</div>
		<div class="desc">Oops! Sorry, that page could'nt be found.</div>
		<form action="more-searchresults.html" class='form-horizontal'>
			<div class="input-group">
				<input type="text" name="search" placeholder="Search a site.." class='form-control'>
				<span class="input-group-btn">
					<button type='submit' class='btn'>
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<div class="buttons" style="background:red">
			<div class="pull-left" style="background:red">
				<a href="index.html" class="btn btn--icon">
					<i class="fa fa-arrow-left"></i>Back</a>
			</div>
		</div>
	</div>
	

</body>

</html>
