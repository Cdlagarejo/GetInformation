<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>GetInformation</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo URL; ?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo URL; ?>css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo URL; ?>css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
        <![endif]-->

    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
        <![endif]-->
        
        <!-- start: Favicon -->
        <link rel="shortcut icon" href="<?php echo URL; ?>img/favicon.png">
        <!-- end: Favicon -->      
        <style type="text/css">
        body { background:  url(../img/bg-login.jpg) !important; }
        </style>

    </head>
    <body>		
    	<div class="container-fluid-full">
    		<div class="row-fluid">

    			<div class="row-fluid">
    				<div class="login-box">
    					<br>
    					<br>

    					<h1>Ingresa a tu Cuenta</h1>
    					<form class="form-horizontal" action="<?php echo URL; ?>login/login" method="post">
    						<fieldset>

    							<div class="input-prepend" title="Username">
    								<span class="add-on"><i class="halflings-icon user"></i></span>
    								<input class="input-large span10" name="usuario" id="username" type="text" placeholder="Usuario"/>
    							</div>
    							<div class="clearfix"></div>

    							<div class="input-prepend" title="Password">
    								<span class="add-on"><i class="halflings-icon lock"></i></span>
    								<input class="input-large span10" name="contrasenia" id="password" type="password" placeholder="Contraseña"/>
    							</div>
    							<div class="clearfix"></div>

    							<label class="remember" for="remember"><input type="checkbox" id="remember" />Recuerdame</label>

    							<div class="button-login">	
    								<button type="submit" class="btn btn-primary" name="btn_login" >Login</button>
    							</div>
    							<div class="clearfix"></div>
    						</form>
    						<hr>
    					</div><!--/span-->
    				</div><!--/row-->


    			</div><!--/.fluid-container-->

    		</div><!--/fluid-row-->
    		<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    			<div class="modal-content">
    				<ul class="list-inline item-details">
    					<li><a href="http://themifycloud.com">Admin templates</a></li>
    					<li><a href="http://themescloud.org">Bootstrap themes</a></li>
    				</ul>
    			</div>
    		</div>