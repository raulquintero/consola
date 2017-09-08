<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title><?php echo $empresa ?> - Perfil</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- jQuery UI -->
        <link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
        <!-- Tagsinput -->
        <link rel="stylesheet" href="css/plugins/tagsinput/jquery.tagsinput.css">
        <!-- select2 -->
        <link rel="stylesheet" href="css/plugins/select2/select2.css">
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
        <!-- select2 -->
        <script src="js/plugins/select2/select2.min.js"></script>
        <!-- Bootbox -->
        <script src="js/plugins/bootbox/jquery.bootbox.js"></script>
        <!-- Bootbox -->
        <script src="js/plugins/form/jquery.form.min.js"></script>
        <!-- Validation -->
        <script src="js/plugins/validation/jquery.validate.min.js"></script>
        <script src="js/plugins/validation/additional-methods.min.js"></script>
        <!-- TagsInput -->
        <script src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- Custom file upload -->
        <script src="js/plugins/fileupload/bootstrap-fileupload.min.js"></script>

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

    <body data-layout="<?php echo $layout ?>"  <?php echo $layout_topbar ?> class="<?php echo $theme ?>">


        <?php include DIR_TEMPLATES . 'navigation.php'; ?>

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
                            <h1>Mi Perfil</h1>
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
                                <a href="more-files.html">Perfil del Usuario</a>
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
                                        <i class="fa fa-user"></i>
                                        Editar Perfil
                                    </h3>
                                </div>
                                <div class="box-content nopadding">
                                    <ul class="tabs tabs-inline tabs-top">
                                        <li class='active'>
                                            <a href="#profile" data-toggle='tab'>
                                                <i class="fa fa-user"></i>Profile</a>
                                        </li>
                                        <li>
                                            <a href="#notifications" data-toggle='tab'>
                                                <i class="fa fa-bullhorn"></i>Notifications</a>
                                        </li>
                                        <li>
                                            <a href="#security" data-toggle='tab'>
                                                <i class="fa fa-lock"></i>Security</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content padding tab-content-inline tab-content-bottom">
                                        <div class="tab-pane active" id="profile">
                                            <form action="#" class="form-horizontal">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 84px; height: 84px;">
                                                                <img src="img/demo/user-1.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <span class="btn btn-default btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="...">
                                                                </span>
                                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label for="name" class="control-label col-sm-2 right">Nombre:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" class='form-control' value="<?php echo strtoupper($asociado['nombre']) ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="apellidop" class="control-label col-sm-2 right">Apellido P:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="apellidop" class='form-control' value="<?php echo strtoupper($asociado['apellidop']) ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="apellidom" class="control-label col-sm-2 right">Apellido M:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="apellidom" class='form-control' value="<?php echo strtoupper($asociado['apellidom']) ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="control-label col-sm-2 right">Email:</label>
                                                            <div class="col-sm-10">
                                                                <input readonly type="text" name="email" class='form-control' value="<?php echo $asociado['email'] ?>">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="pw" class="control-label col-sm-2 right">Password:</label>
                                                            <div class="col-sm-10">
                                                                <button class="btn btn-green">Cambiar Password</button>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-2 right" for="select01">Padre</label>
                                                            <div class="col-sm-10">
                                                                <select id="select01" class="chzn-select chzn-done" style1="display: none;" name="parent_id">
                                                                    <option value=0>Menu principal</option>
                                                                    <?php echo $usuario;$Menu->showAddListCategory(0, 0, $usuario['portada_id']);?>
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="form-group">
                                                            <label for="theme" class="control-label col-sm-2 right">Tema:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="apellidop" class='form-control' value="<?php echo strtoupper($usuario['theme']) ?>">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="apellidop" class="control-label col-sm-2 right">Template:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="apellidop" class='form-control' value="<?php echo strtoupper($usuario['template']) ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="macaddress" class="control-label col-sm-2 right">MacAdd:</label>
                                                            <div class="col-sm-10">
                                                                <input readonly type="text" name="apellidop" class='form-control' value="<?php echo getMacAddress() ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-actions">
                                                            <input type="submit" class='btn btn-primary' value="Guardar Cambios">
                                                            <input type="reset" class='btn' value="Descartar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="notifications">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="asdf" class="control-label col-sm-2">Email notifications</label>
                                                    <div class="col-sm-10">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="asdf">Send me security emails</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="asdf">Send system emails</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="asdf">Lorem ipsum dolor</label>
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="asdf">Minim veli</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="asdf" class="control-label col-sm-2">Email for notifications</label>
                                                    <div class="col-sm-10">
                                                        <select name="email" id="email">
                                                            <option value="1"><?php echo $asociado['email'] ?></option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <input type="submit" class='btn btn-primary' value="Save">
                                                    <input type="reset" class='btn' value="Discard changes">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="security">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="asdf" class="control-label col-sm-2">Disable account for</label>
                                                    <div class="col-sm-10">
                                                        <select name="email" id="email">
                                                            <option value="1">1 week</option>
                                                            <option value="2">2 weeks</option>
                                                            <option value="3">3 weeks</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="asdf" class="control-label col-sm-2">Lock account?</label>
                                                    <div class="col-sm-10">
                                                        <a href="more-locked.html" class="btn btn-danger">Lock account now</a>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <input type="submit" class='btn btn-primary' value="Save">
                                                    <input type="reset" class='btn' value="Discard changes">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
