<!DOCTYPE html>
<html lang="en"> <!--<![endif]-->
<head>
	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/base.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/layout.css">
</head>
<body>
	<!-- Primary Page Layout -->
	<div class="container">
		<div class="form-bg">
			<form action="<?php base_url(); ?>login/login_pengguna" method="post">
				<h2>Login</h2>
				<p><input type="text" placeholder="Username" name="username"></p>
				<p><input type="password" placeholder="Password" name="password"></p>
				<button type="submit"></button>
			</form>
		</div>
		<!-- <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p> -->
	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>

	<!-- End Document -->
</body>
</html>