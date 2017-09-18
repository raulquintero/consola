<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Messages &amp; Chat</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets/flat/css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="/assets/flat/css/plugins/jquery-ui/jquery-ui.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/flat/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="/assets/flat/css/themes.css">


	<!-- jQuery -->
	<script src="/assets/flat/js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="/assets/flat/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="/assets/flat/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/flat/js/plugins/jquery-ui/jquery-ui.js"></script>
	<!-- slimScroll -->
	<script src="/assets/flat/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="/assets/flat/js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="/assets/flat/js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="/assets/flat/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="/assets/flat/js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="/assets/flat/js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="/assets/flat/js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="/assets/flat/js/demonstration.min.js"></script>

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

</head>


<body data-layout="<?php echo $layout?>" <?php echo $layout_topbar ?> class="<?php echo $theme ?>" onload="<?php echo $_SESSION['showMessage'] ?>">

	<?php include DIR_TEMPLATES.'navigation.php';?>	<div id="navigation">
		
	</div>
	<div class="container-fluid nav-hidden" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
	

		
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Centro de Mensajes</h1>
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
							<a href="components-messages.html">Components</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="components-messages.html">Messages &amp; Chat</a>
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
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3>
									<i class="fa fa-envelope"></i>
									raulquintero13@cibercomm.com (este correo no es para uso personal)
								</h3>
							</div>
							<div class="box-content nopadding">
								<ul class="tabs tabs-inline tabs-left">
									<li class='write hidden-480'>
										<a href="#">Write message</a>
									</li>
									<li class='active'>
										<a href="#inbox" data-toggle="tab">
											<i class="fa fa-inbox"></i>Inbox
											<strong>(3)</strong>
										</a>
									</li>
									<li>
										<a href="#sent" data-toggle="tab">
											<i class="fa fa-share"></i>Sent items</a>
									</li>
									<li>
										<a href="#trash" data-toggle="tab">
											<i class="fa fa-trash-o"></i>Trash</a>
									</li>
								</ul>
								<div class="tab-content tab-content-inline">
									<div class="tab-pane active" id="inbox">
										<div class="highlight-toolbar">
											<div class="pull-left">
												<div class="btn-toolbar">
													<div class="btn-group visible-480">
														<a href="" class="btn btn-danger">New</a>
													</div>
													<div class="btn-group">
														<a href="#" class="btn" rel="tooltip" data-placement="bottom" title="Refresh results">
															<i class="fa fa-refresh"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" data-placement="bottom" title="Mark elements">
																<i class="fa fa-square-o"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a href="#" class='sel-all'>All</a>
																</li>
																<li>
																	<a href="#" class='sel-unread'>Unread</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="btn-group">
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Archive">
															<i class="fa fa-inbox"></i>
														</a>
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Mark as spam">
															<i class="fa fa-exclamation-triangle"></i>
														</a>
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Delete">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" data-placement="bottom" title="Move to folder">
																<i class="fa fa-folder"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a href="#">Some folder</a>
																</li>
																<li>
																	<a href="#">Another folder</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="pull-right">
												<div class="btn-toolbar">
													<div class="btn-group text hidden-768">
														<span>
															<strong>1-25</strong>of
															<strong>348</strong>
														</span>
													</div>
													<div class="btn-group">
														<a href="#" class="btn">
															<i class="fa fa-angle-left"></i>
														</a>
														<a href="#" class="btn">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown">
																<i class="fa fa-cog"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="#">Settings</a>
																</li>
																<li>
																	<a href="#">Account settings</a>
																</li>
																<li>
																	<a href="#">Email settings</a>
																</li>
																<li>
																	<a href="#">Themes</a>
																</li>
																<li>
																	<a href="#">Help &amp; FAQ</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<table class="table table-striped table-nomargin table-mail">
											<thead>
												<tr>
													<th class='table-checkbox hidden-480'>
														<input type="checkbox" class='sel-all'>
													</th>
													<th class='table-icon hidden-480'></th>
													<th>Sender</th>
													<th>Subject</th>
													<th class='table-icon hidden-480'></th>
													<th class='table-date hidden-480'>Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Johny Doesy
													</td>
													<td>
														Lorem ipsum sint laborum.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Lorem ipsum
													</td>
													<td>
														Lorem ipsum veniam esse nisi in ut aliquip do laboris sed pariatur.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Officia In
													</td>
													<td>
														Lorem ipsum dolore do ullamco id ullamco occaecat sed dolore adipisicing officia in cillum ut.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Occaecat Tempor
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Sed Elit
													</td>
													<td>
														Lorem ipsum sed sed elit nisi adipisicing mollit eu adipisicing.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Johny Doesy
													</td>
													<td>
														Lorem ipsum sint laborum.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Lorem ipsum
													</td>
													<td>
														Lorem ipsum veniam esse nisi in ut aliquip do laboris sed pariatur.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Officia In
													</td>
													<td>
														Lorem ipsum dolore do ullamco id ullamco occaecat sed dolore adipisicing officia in cillum ut.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Occaecat Tempor
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Sed Elit
													</td>
													<td>
														Lorem ipsum sed sed elit nisi adipisicing mollit eu adipisicing.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="tab-pane" id="sent">
										<div class="highlight-toolbar">
											<div class="pull-left">
												<div class="btn-toolbar">
													<div class="btn-group">
														<div class="dropdown hidden-768">
															<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" data-placement="bottom" title="Mark elements">
																<i class="fa fa-square-o"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a href="#" class='sel-all'>All</a>
																</li>
																<li>
																	<a href="#" class='sel-unread'>Unread</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="btn-group">
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Archive">
															<i class="fa fa-inbox"></i>
														</a>
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Mark as spam">
															<i class="fa fa-exclamation-triangle"></i>
														</a>
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Delete">
															<i class="fa fa-trash-o"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown" rel="tooltip" data-placement="bottom" title="Move to folder">
																<i class="fa fa-folder"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a href="#">Some folder</a>
																</li>
																<li>
																	<a href="#">Another folder</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="pull-right">
												<div class="btn-toolbar">
													<div class="btn-group text hidden-768">
														<span>
															<strong>1-25</strong>of
															<strong>348</strong>
														</span>
													</div>
													<div class="btn-group">
														<a href="#" class="btn" data-toggle="dropdown">
															<i class="fa fa-angle-left"></i>
														</a>
														<a href="#" class="btn" data-toggle="dropdown">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown">
																<i class="fa fa-cog"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="#">Settings</a>
																</li>
																<li>
																	<a href="#">Account settings</a>
																</li>
																<li>
																	<a href="#">Email settings</a>
																</li>
																<li>
																	<a href="#">Themes</a>
																</li>
																<li>
																	<a href="#">Help &amp; FAQ</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<table class="table table-striped table-nomargin table-mail">
											<thead>
												<tr>
													<th class='table-checkbox hidden-480'>
														<input type="checkbox" class='sel-all'>
													</th>
													<th class='table-icon hidden-480'></th>
													<th>Sender</th>
													<th>Subject</th>
													<th class='table-icon hidden-480'></th>
													<th class='table-date hidden-480'>Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Johny Doesy
													</td>
													<td>
														Lorem ipsum sint laborum.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														proident
													</td>
													<td>Lorem ipsum Incididunt consectetur Duis proident laboris nulla cillum dolore elit esse enim tempor veniam.</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														reprehenderit
													</td>
													<td>Lorem ipsum Laborum consequat dolor amet reprehenderit dolor dolor amet.</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														eiusmod
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														occaecat
													</td>
													<td>Lorem ipsum Consequat Duis adipisicing dolor occaecat cillum aliquip adipisicing in cupidatat irure id in.</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														nisi
													</td>
													<td>Lorem ipsum Culpa magna aliqua Duis cillum dolor officia proident.</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														esse
													</td>
													<td>
														Lorem ipsum veniam esse nisi in ut aliquip do laboris sed pariatur.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														ipsum
													</td>
													<td>Lorem ipsum Sed sit enim cillum reprehenderit Excepteur pariatur.</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														eiusmod
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														elit
													</td>
													<td>
														Lorem ipsum sed sed elit nisi adipisicing mollit eu adipisicing.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="tab-pane" id="trash">
										<div class="highlight-toolbar">
											<div class="pull-left">
												<div class="btn-toolbar">
													<div class="btn-group">
														<a href="#" class='btn' rel="tooltip" data-placement="bottom" title="Undo">
															<i class="fa fa-arrow-left"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="pull-right">
												<div class="btn-toolbar">
													<div class="btn-group text hidden-768">
														<span>
															<strong>1-25</strong>of
															<strong>348</strong>
														</span>
													</div>
													<div class="btn-group">
														<a href="#" class="btn" data-toggle="dropdown">
															<i class="fa fa-angle-left"></i>
														</a>
														<a href="#" class="btn" data-toggle="dropdown">
															<i class="fa fa-angle-right"></i>
														</a>
													</div>
													<div class="btn-group hidden-768">
														<div class="dropdown">
															<a href="#" class="btn" data-toggle="dropdown">
																<i class="fa fa-cog"></i>
																<span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right">
																<li>
																	<a href="#">Settings</a>
																</li>
																<li>
																	<a href="#">Account settings</a>
																</li>
																<li>
																	<a href="#">Email settings</a>
																</li>
																<li>
																	<a href="#">Themes</a>
																</li>
																<li>
																	<a href="#">Help &amp; FAQ</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<table class="table table-striped table-nomargin table-mail">
											<thead>
												<tr>
													<th class='table-checkbox hidden-480'>
														<input type="checkbox" class='sel-all'>
													</th>
													<th class='table-icon hidden-480'></th>
													<th>Sender</th>
													<th>Subject</th>
													<th class='table-icon hidden-480'></th>
													<th class='table-date hidden-480'>Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														veniam
													</td>
													<td>
														Lorem ipsum sint laborum.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Lorem ipsum
													</td>
													<td>
														Lorem ipsum veniam esse nisi in ut aliquip do laboris sed pariatur.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														commodo
													</td>
													<td>Lorem ipsum In id magna commodo esse do ad esse labore elit.</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														tempor
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														mollit
													</td>
													<td>
														Lorem ipsum sed sed elit nisi adipisicing mollit eu adipisicing.
													</td>
													<td class='table-icon hidden-480'>
													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star active">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														adipisicing
													</td>
													<td>Lorem ipsum Magna sunt mollit adipisicing est elit veniam nostrud.</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														12. Feb
													</td>
												</tr>
												<tr class='unread'>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														cillum ut
													</td>
													<td>Lorem ipsum Sunt qui quis laboris aliquip officia sed et.</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														11. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														veniam incididunt
													</td>
													<td>
														Lorem ipsum dolore do ullamco id ullamco occaecat sed dolore adipisicing officia in cillum ut.
													</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														10. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Sed Laborum
													</td>
													<td>
														Lorem ipsum ut in in eiusmod ut occaecat tempor.
													</td>
													<td class='table-icon hidden-480'>
														<i class="fa fa-paperclip"></i>
													</td>
													<td class='table-date hidden-480'>
														9. Feb
													</td>
												</tr>
												<tr>
													<td class='table-checkbox hidden-480'>
														<input type="checkbox" class='selectable'>
													</td>
													<td class='table-icon hidden-480'>
														<a href="#" class="sel-star">
															<i class="fa fa-star"></i>
														</a>
													</td>
													<td class='table-fixed-medium'>
														Duis amet
													</td>
													<td>Lorem ipsum Duis amet sed laborum veniam incididunt occaecat.</td>
													<td class='table-icon hidden-480'>

													</td>
													<td class='table-date hidden-480'>
														8. Feb
													</td>
												</tr>

											</tbody>
										</table>
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
