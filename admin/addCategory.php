<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>إضافة قسم جديد</title>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">


</head>
<body>
<?php

if($_SESSION['user_type'] == "sadmin")
include ('navbar.html');
else
include ('../supervisor/navbar.html');
?>
<!-- start: page -->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="width: 100%;background-image: url(../img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

            </div>
            <p class="text-right" style="color: red">
                <?php
                if (isset($_SESSION['Error'])) {
                    echo $_SESSION['Error'];

                    unset($_SESSION['Error']);

                }
                ?>
            </p>
            <p class="text-right" style="color: white; background-color: green" >
                <?php
                if( isset($_SESSION['success']) )
                {
                    echo $_SESSION['success'];

                    unset($_SESSION['success']);

                }
                ?>
            </p>
            <form action="../database/addCategory.php" method="post" style="padding: 50px;">
                <div class="form-group mb-lg">
                    <label class="pull-right">إسم القسم <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="cat_name" type="text" class="form-control input-lg text-right" placeholder="اسم القسم"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">وصف القسم <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <textarea name="cat_desc" class="form-control" rows="8"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right pull-left">
                        <button type="submit" class="btn btn-primary hidden-xs">اضافة</button>
                    </div>
                </div>

            </form>





        </div>
    </div>
</div>
<!-- end: page -->
<!-- Vendor -->
<script src="../assets/vendor/jquery/jquery.js"></script>
<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="../assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="../assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="../assets/javascripts/theme.init.js"></script>


<!--===============================================================================================-->
<script src="../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/vendor/bootstrap/js/popper.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/vendor/daterangepicker/moment.min.js"></script>
<script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>