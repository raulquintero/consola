<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Search results</title>

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
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>

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
				<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Forms</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
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
				<li class='active'>
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
						<li class='active'>
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
						<h1>Search results</h1>
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
							<a href="more-files.html">Pages</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="more-searchresults.html">Search results</a>
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
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="fa fa-search"></i>
									Search results
								</h3>
							</div>
							<div class="box-content nopadding">
								<div class="highlight-toolbar">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<ul class='pagination pagination-custom'>
													<li>
														<a href="#">
															<i class="fa fa-angle-double-left"></i>
														</a>
													</li>
													<li>
														<a href="#">1</a>
													</li>
													<li class='active'>
														<a href="#">2</a>
													</li>
													<li>
														<a href="#">3</a>
													</li>
													<li>
														<a href="#">4</a>
													</li>
													<li>
														<a href="#">5</a>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" title="Sort">Sort by
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="#">Name</a>
														</li>
														<li>
															<a href="#">Date</a>
														</li>
														<li>
															<a href="#">Relevance</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-group">
											<span>Showing results
												<strong>1-25</strong>of
												<strong>348</strong>
											</span>
										</div>
									</div>
								</div>
								<div class="search-results">
									<ul>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
										<li>
											<div class="thumbnail">
												<img src="http://www.placehold.it/80" alt="">
											</div>
											<div class="search-info">
												<a href="#">Lorem ipsum dolor</a>
												<p class="url">www.loremasdasdd.com/</p>
												<p>Lorem ipsum minim quis mollit occaecat consectetur irure. Lorem ipsum officia Excepteur ut aliqua cillum est laboris. Lorem ipsum in exercitation enim veniam exercitation consectetur. Lorem ipsum cupidatat ea culpa cupidatat sed proident officia
													consequat irure dolore Excepteur consectetur. Lorem ipsum sunt ut aliquip commodo mollit ad culpa. Lorem ipsum aliquip sit laborum reprehenderit amet et anim pariatur. Lorem ipsum Ut quis irure enim quis commodo ullamco ad qui qui ut id.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="highlight-toolbar bottom">
									<div class="pull-left">
										<div class="btn-toolbar">
											<div class="btn-group">
												<ul class='pagination pagination-custom'>
													<li>
														<a href="#">
															<i class="fa fa-angle-double-left"></i>
														</a>
													</li>
													<li>
														<a href="#">1</a>
													</li>
													<li class='active'>
														<a href="#">2</a>
													</li>
													<li>
														<a href="#">3</a>
													</li>
													<li>
														<a href="#">4</a>
													</li>
													<li>
														<a href="#">5</a>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
											<div class="btn-group">
												<div class="dropdown">
													<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" title="Sort">Sort by
														<span class="caret"></span>
													</a>
													<ul class="dropdown-menu">
														<li>
															<a href="#">Name</a>
														</li>
														<li>
															<a href="#">Date</a>
														</li>
														<li>
															<a href="#">Relevance</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="pull-right">
										<div class="btn-group">
											<span>Showing results
												<strong>1-25</strong>of
												<strong>348</strong>
											</span>
										</div>
									</div>
								</div>
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