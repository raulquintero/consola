<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Basic forms</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
		<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">FLAT</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
				<i class="fa fa-bars"></i>
			</a>
			<ul class='main-nav'>
				<li>
					<a href="index.html">
						<span>Dashboard</span>
					</a>
				</li>
				<li class='active'>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Forms</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class='active'>
							<a href="forms-basic.html">Basic forms</a>
						</li>
						<li>
							<a href="forms-extended.html">Extended forms</a>
						</li>
						<li>
							<a href="forms-validation.html">Validation</a>
						</li>
						<li>
							<a href="forms-wizard.html">Wizard</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Components</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="components-timeline.html">Timeline</a>
						</li>
						<li>
							<a href="components-pagestatistics.html">Page statistics</a>
						</li>
						<li>
							<a href="components-sidebarwidgets.html">Sidebar widgets</a>
						</li>
						<li>
							<a href="components-messages.html">Messages &amp; Chat</a>
						</li>
						<li>
							<a href="components-gallery.html">Gallery &amp; Thumbs</a>
						</li>
						<li>
							<a href="components-tiles.html">Tiles</a>
						</li>
						<li>
							<a href="components-icons.html">Icons &amp; Buttons</a>
						</li>
						<li>
							<a href="components-elements.html">UI elements</a>
						</li>
						<li>
							<a href="components-typography.html">Typography</a>
						</li>
						<li>
							<a href="components-bootstrap.html">Bootstrap elements</a>
						</li>
						<li>
							<a href="components-grid.html">Grid</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Tables</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="tables-basic.html">Basic tables</a>
						</li>
						<li>
							<a href="tables-advanced.html">Advanced tables</a>
						</li>
						<li>
							<a href="tables-large.html">Large tables</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Plugins</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="plugins-charts.html">Charts</a>
						</li>
						<li>
							<a href="plugins-calendar.html">Calendar</a>
						</li>
						<li>
							<a href="plugins-filemanager.html">File manager</a>
						</li>
						<li>
							<a href="plugins-filetrees.html">File trees</a>
						</li>
						<li>
							<a href="plugins-elements.html">Editable elements</a>
						</li>
						<li>
							<a href="plugins-maps.html">Maps</a>
						</li>
						<li>
							<a href="plugins-dragdrop.html">Drag &amp; Drop widgets</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Pages</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="more-error.html">Error pages</a>
						</li>
						<li class='dropdown-submenu'>
							<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Shop</a>
							<ul class="dropdown-menu">
								<li>
									<a href="more-shop-list.html">List view</a>
								</li>
								<li>
									<a href="more-shop-product.html">Product view</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="more-pricing.html">Pricing tables</a>
						</li>
						<li>
							<a href="more-faq.html">FAQ</a>
						</li>
						<li>
							<a href="more-invoice.html">Invoice</a>
						</li>
						<li>
							<a href="more-userprofile.html">User profile</a>
						</li>
						<li>
							<a href="more-searchresults.html">Search results</a>
						</li>
						<li>
							<a href="more-login.html">Login</a>
						</li>
						<li>
							<a href="more-locked.html">Lock screen</a>
						</li>
						<li>
							<a href="more-email.html">Email templates</a>
						</li>
						<li>
							<a href="more-blank.html">Blank page</a>
						</li>
						<li class='dropdown-submenu'>
							<a href="#" data-toggle="dropdown" class='dropdown-toggle'>Blog</a>
							<ul class="dropdown-menu">
								<li>
									<a href="more-blog-list.html">List big image</a>
								</li>
								<li>
									<a href="more-blog-list-small.html">List small image</a>
								</li>
								<li>
									<a href="more-blog-post.html">Post</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Layouts</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="layouts-sidebar-hidden.html">Default hidden sidebar</a>
						</li>
						<li>
							<a href="layouts-sidebar-right.html">Sidebar right side</a>
						</li>
						<li>
							<a href="layouts-color.html">Different default color</a>
						</li>
						<li>
							<a href="layouts-fixed.html">Fixed layout</a>
						</li>
						<li>
							<a href="layouts-fixed-topside.html">Fixed topbar and sidebar</a>
						</li>
						<li class='dropdown-submenu'>
							<a href="#">Mobile sidebar</a>
							<ul class="dropdown-menu">
								<li>
									<a href="layouts-mobile-slide.html">Slide</a>
								</li>
								<li>
									<a href="layouts-mobile-button.html">Button</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="layouts-footer.html">Footer</a>
						</li>
					</ul>
				</li>
			</ul>
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="label label-lightred">4</span>
						</a>
						<ul class="dropdown-menu pull-right message-ul">
							<li>
								<a href="#">
									<img src="img/demo/user-1.jpg" alt="">
									<div class="details">
										<div class="name">Jane Doe</div>
										<div class="message">
											Lorem ipsum Commodo quis nisi ...
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/user-2.jpg" alt="">
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
								<a href="#">
									<img src="img/demo/user-3.jpg" alt="">
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

					<li class="dropdown sett">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-cog"></i>
						</a>
						<ul class="dropdown-menu pull-right theme-settings">
							<li>
								<span>Layout-width</span>
								<div class="version-toggle">
									<a href="#" class='set-fixed'>Fixed</a>
									<a href="#" class="active set-fluid">Fluid</a>
								</div>
							</li>
							<li>
								<span>Topbar</span>
								<div class="topbar-toggle">
									<a href="#" class='set-topbar-fixed'>Fixed</a>
									<a href="#" class="active set-topbar-default">Default</a>
								</div>
							</li>
							<li>
								<span>Sidebar</span>
								<div class="sidebar-toggle">
									<a href="#" class='set-sidebar-fixed'>Fixed</a>
									<a href="#" class="active set-sidebar-default">Default</a>
								</div>
							</li>
						</ul>
					</li>
					<li class='dropdown colo'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-tint"></i>
						</a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">
								Predefined colors
							</li>
							<li>
								<span class='red'></span>
								<span class='orange'></span>
								<span class='green'></span>
								<span class="brown"></span>
								<span class="blue"></span>
								<span class='lime'></span>
								<span class="teal"></span>
								<span class="purple"></span>
								<span class="pink"></span>
								<span class="magenta"></span>
								<span class="grey"></span>
								<span class="darkblue"></span>
								<span class="lightred"></span>
								<span class="lightgrey"></span>
								<span class="satblue"></span>
								<span class="satgreen"></span>
							</li>
						</ul>
					</li>
					<li class='dropdown language-select'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<img src="img/demo/flags/us.gif" alt="">
							<span>US</span>
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="img/demo/flags/br.gif" alt="">
									<span>Brasil</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/de.gif" alt="">
									<span>Deutschland</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/es.gif" alt="">
									<span>España</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/fr.gif" alt="">
									<span>France</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe
						<img src="img/demo/user-avatar.jpg" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="more-login.html">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
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
				<div class="page-header">
					<div class="pull-left">
						<h1>Basic forms</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#">
									<i class="fa fa-cogs"></i>
								</a>
							</li>
							<li class='lightgrey'>
								<a href="#">
									<i class="fa fa-globe"></i>
								</a>
							</li>
						</ul>
						<ul class="stats">
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
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="forms-basic.html">Forms</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="forms-basic.html">Basic forms</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-edit"></i>Basic forms</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-horizontal'>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Text input</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" class="form-control">
											<span class="help-block">This is just a supporting text</span>
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="control-label col-sm-2">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" id="password" placeholder="*********" class="form-control">
											<span class="help-block">Minimum length: 9, only numeric</span>
										</div>
									</div>
									<div class="form-group">
										<label for="file" class="control-label col-sm-2">File-input</label>
										<div class="col-sm-10">
											<input type="file" name="file" id="file" class="form-control">
											<span class="help-block">Only .jpg (Max Size: 100MB)</span>
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="control-label col-sm-2">Select</label>
										<div class="col-sm-10">
											<select name="select" id="select" class='form-control'>
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
												<option value="6">Option-6</option>
												<option value="7">Option-7</option>
												<option value="8">Option-8</option>
												<option value="9">Option-9</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Checkboxes</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor.
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Radios</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="radio">Lorem ipsum dolor sit.
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio">Lorem ipsum dolor.
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio">Lorem Lorem ipsum dolor.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label col-sm-2">Textarea</label>
										<div class="col-sm-10">
											<textarea name="textarea" id="textarea" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Striped form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-striped'>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Text input</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="control-label col-sm-2">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Checkboxes
											<small>More information here</small>
										</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor.
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label col-sm-2">Textarea</label>
										<div class="col-sm-10">
											<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
										</div>
									</div>
									<div class="form-actions col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Bordered form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Text input</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="control-label col-sm-2">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Checkboxes
											<small>More information here</small>
										</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor.
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label col-sm-2">Textarea</label>
										<div class="col-sm-10">
											<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
										</div>
									</div>
									<div class="form-actions col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Vertical form</h3>
							</div>
							<div class="box-content">
								<form action="#" method="POST" class='form-vertical'>
									<div class="form-group">
										<label for="textfield" class="control-label">Text input</label>
										<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
									</div>
									<div class="form-group">
										<label for="password" class="control-label">Password</label>
										<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Checkboxes
											<small>More information here</small>
										</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor.
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label">Textarea</label>
										<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Vertical bordered form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-vertical form-bordered'>
									<div class="form-group">
										<label for="textfield" class="control-label">Text input</label>
										<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
									</div>
									<div class="form-group">
										<label for="password" class="control-label">Password</label>
										<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Checkboxes
											<small>More information here</small>
										</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor.
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label">Textarea</label>
										<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Vertical striped form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-vertical form-bordered form-striped'>
									<div class="form-group">
										<label for="textfield" class="control-label">Text input</label>
										<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
									</div>
									<div class="form-group">
										<label for="password" class="control-label">Password</label>
										<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Checkboxes
											<small>More information here</small>
										</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor.
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label">Textarea</label>
										<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3>
									<i class="fa fa-th-list"></i>Colored</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Text input</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="password" class="control-label col-sm-2">Password</label>
										<div class="col-sm-10">
											<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Checkboxes
											<small>More information here</small>
										</label>
										<div class="col-sm-10">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor.
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
												</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea" class="control-label col-sm-2">Textarea</label>
										<div class="col-sm-10">
											<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
										</div>
									</div>
									<div class="form-actions col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-list"></i>Column form</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-column form-bordered'>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Text input</label>
												<div class="col-sm-10">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="control-label col-sm-2">Password</label>
												<div class="col-sm-10">
													<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2">Checkboxes
													<small>More information here</small>
												</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="checkbox">Lorem ipsum dolor.
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
														</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">Textarea</label>
												<div class="col-sm-10">
													<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label col-sm-2">Text input</label>
												<div class="col-sm-10">
													<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="password" class="control-label col-sm-2">Password</label>
												<div class="col-sm-10">
													<input type="password" name="password" id="password" placeholder="Password input" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2">Checkboxes
													<small>More information here</small>
												</label>
												<div class="col-sm-10">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="checkbox">Lorem ipsum dolor.
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="checkbox">Lorem ipsum dolor sit.
														</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="textarea" class="control-label col-sm-2">Textarea</label>
												<div class="col-sm-10">
													<textarea name="textarea" id="textarea" rows="5" class="form-control">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore.</textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="form-actions">
												<button type="submit" class="btn btn-primary">Save changes</button>
												<button type="button" class="btn">Cancel</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-list-ul"></i>Element settings</h3>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="POST" class='form-horizontal form-bordered'>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Disabled input</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Disabled input" class="form-control" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Small input</label>
										<div class="col-sm-10">
											<div class="col-xs-2">
												<input type="text" name="textfield" id="textfield" placeholder="Small input" class="form-control">
												<span class="help-block">
													<code>.col-xs-2</code>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Medium input</label>
										<div class="col-sm-10">
											<div class="col-xs-3">
												<input type="text" name="textfield" id="textfield" placeholder="Small input" class="form-control">
												<span class="help-block">
													<code>.col-xs-3</code>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Large input</label>
										<div class="col-sm-10">
											<div class="col-xs-4">
												<input type="text" name="textfield" id="textfield" placeholder="Small input" class="form-control">
												<span class="help-block">
													<code>.col-xs-4</code>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">X-Large input</label>
										<div class="col-sm-10">
											<div class="col-xs-5">
												<input type="text" name="textfield" id="textfield" placeholder="Small input" class="form-control">
												<span class="help-block">
													<code>.col-xs-5</code>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">XX-Large input</label>
										<div class="col-sm-10">
											<div class="col-xs-6">
												<input type="text" name="textfield" id="textfield" placeholder="Small input" class="form-control">
												<span class="help-block">
													<code>.col-xs-6</code>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="textfield" class="control-label col-sm-2">Multiple select</label>
										<div class="col-sm-10">
											<select name="a" id="a" multiple="multiple" class='form-control'>
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
												<option value="6">Option-6</option>
												<option value="7">Option-7</option>
											</select>
										</div>
									</div>
									<div class="form-group has-success">
										<label for="textfield" class="control-label col-sm-2">Success state</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Success" class="form-control">
											<span class="help-block">
												Good job.
											</span>
										</div>
									</div>
									<div class="form-group has-warning">
										<label for="textfield" class="control-label col-sm-2">Warning state</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Warning" class="form-control">
											<span class="help-block">
												Oh wait! Check your settings again.
											</span>
										</div>
									</div>
									<div class="form-group has-error">
										<label for="textfield" class="control-label col-sm-2">Error state</label>
										<div class="col-sm-10">
											<input type="text" name="textfield" id="textfield" placeholder="Error" class="form-control">
											<span class="help-block">
												There seems to be an error
											</span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-color box-bordered red">
							<div class="box-title">
								<h3>
									<i class="fa fa-th"></i>Label above input (grid)
								</h3>
							</div>
							<div class="box-content">
								<form action="#" method="get" class='form-vertical'>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 3</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">label 3</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 3</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">label 3</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">label 4</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 4</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">label 4</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-1">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 1</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-11">
											<div class="form-group">
												<label for="textfield" class="control-label">label 11</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 2</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-10">
											<div class="form-group">
												<label for="textfield" class="control-label">label 10</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 3</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-9">
											<div class="form-group">
												<label for="textfield" class="control-label">label 9</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 4</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<label for="textfield" class="control-label">label 8</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 5</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-7">
											<div class="form-group">
												<label for="textfield" class="control-label">label 7</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label">Label 6</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="textfield" class="control-label">label 6</label>
												<input type="text" name="textfield" id="textfield" placeholder="Text input" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-38620714-4']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
	</script>
</body>

</html>
