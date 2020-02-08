<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>Register Page For Student</title>
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

<!-- start: page -->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="width: 100%;background-image: url(../img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

            </div>



            <form action="database/login.php" method="post" style="padding: 50px;">
                <div class="form-group mb-lg">
                    <label class="pull-left">Full Name <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="text" class="form-control input-lg" placeholder="Full Name"
                               required/>
                        <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">User Type <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control">
                            <option selected disabled>--- Select The User Type ---</option>
                            <option>Student</option>
                            <option>Admin</option>
                            <option>Super Admi</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Student Number <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="text" class="form-control input-lg" placeholder="Student Number"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Birth Date <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="date" class="form-control input-lg" required/>

                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-left">Gender <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: left" >
                                <input name="username" type="radio"  value="Male" /> Male
                            </span>
                        <span style="  display: inline-block; width: 50%;text-align: left">
                                <input name="username" type="radio"  value="Female"/> Female
                            </span>



                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Year Level <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="text" class="form-control input-lg" placeholder="Year Level"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Degree Program <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control">
                            <option selected disabled>--- Select The User Type ---</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Email <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="email" class="form-control input-lg" placeholder="username@example.com"
                               required/>
                    </div>
                </div>
                <div class="form-group mb-lg">
                    <label class="pull-left">Mobile No. <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="text" class="form-control input-lg" placeholder="Mobile Number"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Country <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control">
                            <option selected disabled>--- Select The User Type ---</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Address <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="email" class="form-control input-lg" placeholder="Your Address ..."
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Password <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="password" class="form-control input-lg" placeholder="*************"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-left">Confirmed Password <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="password" class="form-control input-lg" placeholder="*************"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <div class="input-group input-group-icon text-left">
                        <input class="pull-left" name="username" type="radio" />
                        <label class="pull-left">&nbsp;I accept the <span style="color: #00ff09">Terms of Users</span>&nbsp;&&nbsp;<span style="color: #00ff09">Privacy Policy</span></label>

                    </div>
                </div>
                <p class="text-left" style="color: red">
                    <?php
                    if (isset($_SESSION['Error'])) {
                        echo $_SESSION['Error'];

                        unset($_SESSION['Error']);

                    }
                    ?>
                </p>


                <div class="row">
                    <div class="col-sm-4 text-right pull-right">
                        <button type="submit" class="btn btn-primary hidden-xs">Register</button>
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