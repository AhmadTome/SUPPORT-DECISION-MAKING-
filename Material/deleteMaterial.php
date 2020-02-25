<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>حذف المواد</title>
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
            <?php

            $info = getInfo();
            ?>
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
            <form action="../database/deleteMaterial.php" method="post" style="padding: 50px">
                <div class="form-group mb-lg">
                    <label class="pull-right">قائمة الأقسام <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" id="category_select" name="category_select">
                            <option selected disabled>--- اختار اسم القسم ---</option>
                            <?php
                            for($i=0;$i<count($info);$i++){
                                echo '<option value='. $info[$i]["id"] .'>'. $info[$i]["name"] .'</option>';
                            }

                            ?>


                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">قائمة المواد <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="material_select" id="material_select">
                            <option selected disabled>--- اختار اسم المادة ---</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">اسم المادة <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="mat_name" id="mat_name" type="text" class="form-control input-lg text-right" placeholder="اسم المادة"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">وصف المادة <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <textarea name="mat_desc" id="mat_desc" class="form-control" rows="8"></textarea>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-4 text-right pull-left">
                        <button type="submit" class="btn btn-primary hidden-xs">حذف</button>
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
        $("#category_select").on("change",function () {
            var cat_id = $(this).val();

            $.ajax({
                url: "../database/getMaterialInfo.php",
                type: "get",
                data: {"cat_id":cat_id,"mat_id":0} ,
                success: function (res) {
                    $("#material_select").empty();
                    $("#mat_name").val('')
                    $("#mat_desc").val('')
                    res = JSON.parse(res);
                    $("#material_select").append('<option selected disabled>--- Select The Material Name ---</option>');
                    for(var i=0;i<res.length;i++){
                        $("#material_select").append('<option value='+ res[i]["id"] +'>'+ res[i]["name"] +'</option>');
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        })


        $("#material_select").on("change",function () {
            var mat_id = $(this).val();
            $.ajax({
                url: "../database/getMaterialInfo.php",
                type: "get",
                data: {"mat_id":mat_id,"cat_id":0} ,
                success: function (res) {
                    res = JSON.parse(res);
                    $("#mat_name").val('')
                    $("#mat_desc").val('')
                    $("#mat_name").val(res[0]["name"])
                    $("#mat_desc").val(res[0]["description"])
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

        })
    })
</script>














<?php

function getInfo(){
    $servername = "localhost";
    $username = "decision_making";
    $password = "";

// Create connection
//$conn = mysqli_connect($servername, $username, $password);
    $conn = mysqli_connect($servername, "root",$password, $username,"3306");
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,"utf8");




    $query = "SELECT * FROM `category`";

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $info = [];
        while ($row = $result->fetch_assoc()) {
            array_push($info,
                ["name" => $row["name"],
                    "description" => $row["description"],
                    "id" => $row["id"]
                ]);
        }
        return $info;
        //echo $sl_number;
    }
}


?>
