<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>Delete Student</title>
    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template"/>
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/skins/default.css"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">


</head>
<body>

<!-- start: page -->
<section class="body-sign col-xs-12 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4">


    <div class="center-sign">


        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-left">
                <h2 class="title text-uppercase text-bold m-none">Delete Student&nbsp;&nbsp;<i class="fa fa-user mr-xs"></i></h2>
            </div>
            <div class="col-xs-12 col-lg-offset-3 col-sm-offset-3 col-xs-offset-3">
                <img src="../img/logo.png">
            </div>
            <div class="panel-body" >
                <form action="database/login.php" method="post">
                    <div class="form-group mb-lg">
                        <label class="pull-left">Student Number <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <span style="display: inline-block; width: 50%">
                                 <input name="username" type="text" class="form-control input-lg" placeholder="Full Name" required/>
                            </span>
                            <span class="pull-right" style="display: inline-block; width: 40%; ">
                                 <input style="background-color:#06a39f; color: white; " name="username" type="button" class="form-control input-lg" value="Search"/>
                            </span>

                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <div class="input-group input-group-icon">
                            <span style="display: inline-block; width: 50%">
                        <label class="pull-left">Student Number <span class="required-star">*</span></label>
                            </span>
                            <span style="display: inline-block; width: 50%">
                                 <input name="username" type="text" class="form-control input-lg" readonly/>
                            </span>


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
                            <button type="submit" class="btn btn-primary hidden-xs">Delete</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>
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

</body>
</html>