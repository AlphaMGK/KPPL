<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Panah Cakrawala || Reset Password</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
<!-- //js -->
<!-- cart -->
	<script src="<?php echo base_url('js/simpleCart.min.js'); ?>"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery-ui.css'); ?>">
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-3.1.1.min.js'); ?>"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="<?php echo base_url('css/animate.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('js/wow.min.js'); ?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>

<body>
<!-- header -->
	
<!-- //header -->
<!-- breadcrumbs -->
	
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Reset Password</h3>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post" action="<?php echo base_url().'index.php/custManager/update_password'?>">
					<input type="Password" placeholder="Password" name="password" required=" " >
					<input type="Password" placeholder="Konfirmasi Password" name="conpassword" required=" " >
					<input type="submit" value="Kirim">
				
					
				</form>
			</div>
			
			<p class="animated wow slideInUp" data-wow-delay=".5s"><a href="<?php echo base_url().'index.php/custManager/login'?>">Login</a> Kembali Ke <a href="<?php echo base_url(); ?>">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- footer -->
<!-- //footer -->
</body>
</html>
