<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>بحث وتعديل حسابات</title>
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
        text-align: right;
    }
</style>
<body>
<?php
include('navbar.html')
?>


<!-- start: page -->
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div style="width: 100%;background-image: url(../img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

            </div>
            <h4 style="text-align: center;">
                كلية العلوم والآداب في محافظة الرس مركز المعلومات

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
                    <label class="pull-right">رقم الطالب او المشرف <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                            <span class="pull-right" style="display: inline-block; width: 50%">
                                 <input name="number" id="sl_number" type="text" class="form-control input-lg" placeholder="الرقم التعريفي" required/>
                            </span>
                        <span class="pull-left" style="display: inline-block; width: 40%; ">
                                 <input style="background-color:#06a39f; color: white; text-align: center" name="search" id="search" type="button" class="form-control input-lg" value="بحث"/>
                            </span>

                    </div>
                </div>






                <div class="form-group mb-lg">
                    <label class="pull-right">الاسم الكامل <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="fullname" id="fullname" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                               required/>
                        <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">نوع الحساب <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="user_type" id="user_type">
                            <option selected disabled>--- اختار الحساب ---</option>
                            <option value="student">Student</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-right">تاريخ الميلاد <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="Bday" id="Bday" type="text" class="form-control input-lg" required/>

                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-right">الجنس <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: right" >
                                <input name="gender" class="gender" type="radio"  value="Male" /> ذكر
                            </span>
                        <span style="  display: inline-block; width: 50%;text-align: right">
                                <input name="gender" class="gender" type="radio"  value="Female"/> انثى
                            </span>



                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">المستوى <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="level" id="level" type="text" class="form-control input-lg" placeholder="مستواك"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">البرنامج <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon" >
                        <select class="form-control" name="degree_program" id="degree_program">
                            <option selected disabled>--- اختار البرنامج ---</option>
                            <option value="Bacholar">Bacholar</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الايميل <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="email" id="email" type="email" class="form-control input-lg" placeholder="username@example.com"
                               required/>
                    </div>
                </div>
                <div class="form-group mb-lg">
                    <label class="pull-right">رقم الهاتف <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="mobile_no" id="mobile_no" type="text" class="form-control input-lg" placeholder="رقم الهاتف"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الدولة <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="country" id="country">
                            <option selected disabled>--- اختار الدولة ---</option>
                            <option value="Palestine">Palestine</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">العنوان <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="address" id="address" type="text" class="form-control input-lg" placeholder="عنوانك"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الرقم السري <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="pwd" id="pwd" type="password" class="form-control input-lg" placeholder="*************"
                               required/>
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

<script>
    $(document).ready(function () {
        $("#search").on("click",function () {

            var sl_number = $("#sl_number").val();
            $.ajax({
                url: "../database/getInfo.php",
                type: "get",
                data: {"sl_number":sl_number} ,
                success: function (res) {

                    if (res.length < 2000)
                        res = JSON.parse(res)
                    console.log(res)
                    if (res[0] != undefined) {
                        $("#fullname").val('')
                        $('#user_type option').eq(0).prop('selected', true);
                        $('#degree_program option').eq(0).prop('selected', true);
                        $('#country option').eq(0).prop('selected', true);
                        $("#number").val('')
                        $("#Bday").val('')
                        $(".gender").prop("checked", false);
                        $("#level").val('')
                        $("#email ").val('')
                        $("#mobile_no").val('')
                        $("#address").val('')
                        $("#pwd").val('')
                        $("#r_pwd").val('')

                        // ============================

                        $("#fullname").val(res[0].name)
                        $('#user_type').val(res[0].type);
                        $('#degree_program').val(res[0].degree);
                        $('#country').val(res[0].country);
                        $("#number").val(sl_number)
                        $("#Bday").val(res[0].age)
                        console.log(res[0].gender)
                        $('input:radio[name=gender]').filter('[value='+ res[0].gender +']').prop('checked', true);                        $("#level").val(res[0].level)
                        $("#email ").val(res[0].email)
                        $("#mobile_no").val(res[0].mobile_no)
                        $("#address").val(res[0].address)
                        $("#pwd").val(res[0].pwd)

                    }else{
                        $("#fullname").val('')
                        $('#user_type option').eq(0).prop('selected', true);
                        $('#degree_program option').eq(0).prop('selected', true);
                        $('#country option').eq(0).prop('selected', true);
                        $("#number").val('')
                        $("#Bday").val('')
                        $(".gender").prop("checked", false);
                        $("#level").val('')
                        $("#email ").val('')
                        $("#mobile_no").val('')
                        $("#address").val('')
                        $("#pwd").val('')
                        $("#r_pwd").val('')
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });

    })
    })
</script>
