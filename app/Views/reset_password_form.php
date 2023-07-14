<!DOCTYPE html>
<html lang="en">
<head>
	<title>Password Reset | Hao</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="reset_password_form/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/css/util.css">
	<link rel="stylesheet" type="text/css" href="reset_password_form/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('reset_password_form/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url('processReset'); ?>" method="post">
				<a href="<?php echo site_url('landing_page'); ?>">
					<span class="login100-form-logo">
					<img src="reset_password_form/images/hao_logo.svg" alt="Hao Logo">
					</span>
					</a>	
					<span class="login100-form-title p-b-34 p-t-27">
						Reset Password
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirm password">
						<input class="input100" type="password" name="confirm_password" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Reset
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="reset_password_form/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="reset_password_form/vendor/animsition/js/animsition.min.js"></script>
	<script src="reset_password_form/vendor/bootstrap/js/popper.js"></script>
	<script src="reset_password_form/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="reset_password_form/vendor/select2/select2.min.js"></script>
	<script src="reset_password_form/vendor/daterangepicker/moment.min.js"></script>
	<script src="reset_password_form/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="reset_password_form/vendor/countdowntime/countdowntime.js"></script>
	<script src="reset_password_form/js/main.js"></script>
</body>
</html>
