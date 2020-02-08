<?php
session_start();
?>

<!doctype html>
<html class="fixed">
	<head>
		<title>Login Page</title>
		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<?php include ('assets/css_include.html') ?>


	</head>
    <body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div style="width: 100%;background-image: url(img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

                </div>

                <form class="login100-form validate-form" action="database/login.php" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pwd" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="row col-sm-12">
                    <div class=" pull-right">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<?php include ('assets/js_include.html')?>
	</body>
</html>