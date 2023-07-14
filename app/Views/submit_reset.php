<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Reset | Hao</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="submitReset/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="submitReset/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="submitReset/css/util.css">
	<link rel="stylesheet" type="text/css" href="submitReset/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('submitReset/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url('processReset'); ?>" method="post">
				<a href="<?php echo site_url('reset_password_form'); ?>">
					<span class="login100-form-logo">
					<img src="submitReset/images/hao_logo.svg" alt="Hao Logo">
					</span>
					</a>	
					<span class="login100-form-title p-b-34 p-t-27">
						Reset Password
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter your Email">
						<input class="input100" autocomplete="off" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Continue
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="submitReset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="submitReset/vendor/animsition/js/animsition.min.js"></script>
	<script src="submitReset/vendor/bootstrap/js/popper.js"></script>
	<script src="submitReset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="submitReset/vendor/select2/select2.min.js"></script>
	<script src="submitReset/vendor/daterangepicker/moment.min.js"></script>
	<script src="submitReset/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="submitReset/vendor/countdowntime/countdowntime.js"></script>
	<script src="submitReset/js/main.js"></script>
</body>
</html>
