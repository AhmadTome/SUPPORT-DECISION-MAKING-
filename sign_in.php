<?php
session_start();
?>

<!doctype html>
<html class="fixed">
	<head>
		<title>تسجيل دخول</title>
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

                <form class="login100-form validate-form" action="database/login.php" method="post" dir="rtl">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <label>اسم المستخدم</label>
                        <input class="input100" type="text" name="username" placeholder="ادخل اسم المستخدم" required>

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <label>كلمة المرور</label>
                        <input class="input100" type="password" name="pwd" placeholder="***********" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="row col-sm-12">
                    <div class="pull-left">
                        <button type="submit" class="btn btn-success">
                            تسجيل الدخول
                        </button>
                    </div>
<br>
<br>
<br>
                        <p style="font-size: 18px;">هل تريد تسجيل حساب جديد ؟ <a href="student/register.php"> تسجيل حساب جديد!</a></p>

                </form>
            </div>
        </div>
    </div>
	<?php include ('assets/js_include.html')?>
	</body>
</html>
