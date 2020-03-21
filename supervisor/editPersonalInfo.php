<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>تعديل معلوماتي الشخصية</title>
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
<style>
    input{
        text-align: right !important;
    }
</style>
<body>
<?php
include('navbar.html')
?>
<?php
$info = getInfo();
?>
<!-- start: page -->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="width: 100%;background-image: url(../img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

            </div>
            <h4 style="text-align: center;">
                كلية العلوم والآداب في محافزة الراس مركز المعلومات

            </h4>
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

            <form action="../database/editInfo.php" method="post" style="padding: 50px;">



                <div class="form-group mb-lg">
                    <label class="pull-right">الاسم الكامل </label>
                    <div class="input-group input-group-icon">
                        <input name="fullname" id="fullname" value="<?php echo $info[0]["name"] ?>" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                               >
                        <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">نوع الحساب </label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="user_type" id="user_type">
                            <option selected value="student">Student</option>
                        </select>
                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-right">تاريخ الميلاد </label>
                    <div class="input-group input-group-icon">
                        <input name="Bday" id="Bday" value="<?php echo $info[0]["age"] ?>" type="text" class="form-control input-lg" >

                    </div>
                </div>


                <?php
                    if($info[0]["gender"] == "Male"){
                        echo ' <div class="form-group mb-lg">
                         <label class="pull-right">الجنس </label>
                    <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: right" >
                                <input name="gender" class="gender" type="radio" checked  value="Male" /> ذكر
                            </span>
                        <span style="  display: inline-block; width: 50%;text-align: right">
                                <input name="gender" class="gender" type="radio"  value="Female"/> انثى
                            </span>
                    </div>
                </div>';
                    }else{
                        echo ' <div class="form-group mb-lg">
                    <label class="pull-right">الجنس </label>
                    <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: right" >
                                <input name="gender" class="gender" type="radio"  value="Male" /> ذكر
                            </span>
                        <span style="  display: inline-block; width: 50%;text-align: right">
                                <input name="gender" class="gender" type="radio" checked  value="Female"/> انثى
                            </span>
                           </div>
                        </div>';
                    }

                ?>


                <div class="form-group mb-lg">
                    <label class="pull-right">المستوى </label>
                    <div class="input-group input-group-icon">
                        <input name="level" value="<?php echo $info[0]["level"] ?>" id="level" type="text" class="form-control input-lg" placeholder="المستوى"
                               >
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">البرنامج</label>
                    <div class="input-group input-group-icon" >
                        <select class="form-control" name="degree_program" id="degree_program">
                            <option selected disabled>--- اختار البرنامج ---</option>
                            <option value="Bacholar">Bacholar</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">ايميل </label>
                    <div class="input-group input-group-icon">
                        <input name="email" value="<?php echo $info[0]["email"] ?>" id="email" type="email" class="form-control input-lg" placeholder="username@example.com"
                               >
                    </div>
                </div>
                <div class="form-group mb-lg">
                    <label class="pull-right">رقم الهاتف </label>
                    <div class="input-group input-group-icon">
                        <input name="mobile_no" value="<?php echo $info[0]["mobile_no"] ?>" id="mobile_no" type="text" class="form-control input-lg" placeholder="رقم الهاتف "
                               >
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الدولة </label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="country" id="country">
                            <option selected disabled>--- اختار الدولة ---</option>
                            <option value="Palestine">Palestine</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">العنوان </label>
                    <div class="input-group input-group-icon">
                        <input name="address" value="<?php echo $info[0]["address"] ?>" id="address" type="text" class="form-control input-lg" placeholder="العنوان"
                               >
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الرقم السري </label>
                    <div class="input-group input-group-icon">
                        <input name="pwd" id="pwd" type="password" value="<?php echo $info[0]["pwd"] ?>" class="form-control input-lg"
                               >
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-4 text-right pull-left">
                        <button type="submit" class="btn btn-primary hidden-xs">تعديل المعلومات</button>
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


<?php

function getInfo()
{
    $servername = "localhost";
    $username = "decision_making";
    $password = "";

// Create connection
//$conn = mysqli_connect($servername, $username, $password);
    $conn = mysqli_connect($servername, "root", $password, $username, "3306");
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");

    $email = $_SESSION['user_email'];


    $query = "SELECT * FROM `users` WHERE `email` = '" . $email . "'";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $info = [];
        while ($row = $result->fetch_assoc()) {
            array_push($info,
                ["email" => $row["email"],
                    "type" => $row["type"],
                    "name" => $row["name"],
                    "age" => $row["age"],
                    "gender" => $row["gender"],
                    "level" => $row["level"],
                    "degree" => $row["degree"],
                    "mobile_no" => $row["mobile_no"],
                    "country" => $row["country"],
                    "address" => $row["address"],
                    "pwd" => $row["password"]
                ]);
        }

        return $info;
        //echo $sl_number;
    } else {
        header('Location: ../sign_in.php');
    }
}
?>


