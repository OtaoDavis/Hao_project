<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="login_view/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="login_view/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="login_view/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="login_view/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="login_view/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_view/css/main.css">
</head>
<body>
	<div class="limiter">
    	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        	<div class="wrap-login100">
            	<form class="login100-form validate-form" action="<?php echo site_url('processLogin'); ?>" method="post">
                	<span class="login100-form-logo">
                    <i class="zmdi zmdi-landscape"></i>
                	</span>

                	<span class="login100-form-title p-b-34 p-t-27">
                    Log in
                	</span>

               	 	<div class="wrap-input100 validate-input" data-validate="Enter email">
                    	<input class="input100" type=
						"text" name="email" placeholder="Email">
                    	<span class="focus-input100" data-placeholder="&#xf207;"></span>
                	</div>
                	<?php if (isset($validation) && $validation->hasError('email')) : ?>
                    	<div class="validation-error"><?= $validation->getError('email') ?></div>
                	<?php endif; ?>

                	<div class="wrap-input100 validate-input" data-validate="Enter password">
                    	<input class="input100" type="password" name="pass" placeholder="Password">
                    	<span class="focus-input100" data-placeholder="&#xf191;"></span>
                	</div>
                	<?php if (isset($validation) && $validation->hasError('pass')) : ?>
                    	<div class="validation-error"><?= $validation->getError('pass') ?></div>
                	<?php endif; ?>

                	<?php if (isset($error)) : ?>
                    	<div class="error-message"><?= $error ?></div>
                	<?php endif; ?>

                	<div class="container-login100-form-btn">
                    	<button class="login100-form-btn" type="submit">
                        	Login
                    	</button>
                	</div>

                	<div class="text-center p-t-10">
                    	<a class="txt2" href="<?php echo site_url('register'); ?>">Not Registered? Register Here</a>
                	</div>
            	</form>
        	</div>
    	</div>
	</div>


    <div id="dropDownSelect1"></div>

    <script src="login_view/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="login_view/vendor/animsition/js/animsition.min.js"></script>
    <script src="login_view/vendor/bootstrap/js/popper.js"></script>
    <script src="login_view/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="login_view/vendor/select2/select2.min.js"></script>
    <script src="login_view/vendor/daterangepicker/moment.min.js"></script>
    <script src="login_view/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="login_view/vendor/countdowntime/countdowntime.js"></script>
    <script src="login_view/js/main.js"></script>
</body>
</html>
