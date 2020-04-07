<?php
session_start();
?>

<title>LogIn</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- login start -->
<style>


    /* register */


    .tab-content>.tab-pane {
        display: block;
    }

    #myTabContent
    {
        position: relative;
        width: 100%;
        height: 370px;
        z-index: 5;
        overflow: hidden;
    }

    #myTabContent .tab-pane
    {
        position: absolute;
        top: 0;
        padding: 10px 40px;
        z-index: 1;
        opacity: 0;
        -webkit-transition: all linear 0.3s;
        -moz-transition: all linear 0.3s;
        -o-transition: all linear 0.3s;
        -ms-transition: all linear 0.3s;
        transition: all linear 0.3s;
    }

    #login,
    .content-3 {
        -webkit-transform: translateX(-250px);
        -moz-transform: translateX(-250px);
        -o-transform: translateX(-250px);
        -ms-transform: translateX(-250px);
        transform: translateX(-250px);
    }

    #newuser,
    .content-4 {
        -webkit-transform: translateX(250px);
        -moz-transform: translateX(250px);
        -o-transform: translateX(250px);
        -ms-transform: translateX(250px);
        transform: translateX(250px);
    }

    .register .register-right ul .nav-item:a.active~#myTabContent #login,
    .register .register-right ul .nav-item:a.active~#myTabContent .content-2,
    .register .register-right ul .nav-item:a.active~#myTabContent #newuser,
    {
        -webkit-transform: translateX(0px);
        -moz-transform: translateX(0px);
        -o-transform: translateX(0px);
        -ms-transform: translateX(0px);
        transform: translateX(0px);
        z-index: 100;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
        -webkit-transition: all ease-out 0.2s 0.1s;
        -moz-transition: all ease-out 0.2s 0.1s;
        -o-transition: all ease-out 0.2s 0.1s;
        -ms-transition: all ease-out 0.2s 0.1s;
        transition: all ease-out 0.2s 0.1s;
    }


    @keyframes page {
        0% {
            left: 0;
        }
        50% {
            left: 10px;
        }
        100% {
            left: 0;
        }
    }

    @-moz-keyframes page {
        0% {
            left: 0;
        }
        50% {
            left: 10px;
        }
        100% {
            left: 0;
        }
    }

    @-webkit-keyframes page {
        0% {
            left: 0;
        }
        50% {
            left: 10px;
        }
        100% {
            left: 0;
        }
    }

    @-ms-keyframes page {
        0% {
            left: 0;
        }
        50% {
            left: 10px;
        }
        100% {
            left: 0;
        }
    }

    @-o-keyframes page {
        0% {
            left: 0;
        }
        50% {
            left: 10px;
        }
        100% {
            left: 0;
        }
    }


    .register {
        background: -webkit-linear-gradient(left,  rgba(0, 0, 0, 0.26), #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-right-radius: 15% 50%;
        border-bottom-right-radius: 15% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {

    }



    .register .nav-tabs {
        margin-top: 1%;
        border: none;
        background: #0062cc;
        border-radius: 20px;
        width: 35%;
        float: right;
    }
    #myTab  .nav-item {
        padding: 5px 3px;
        text-align: center;
        display: block;
        margin: 0px 6px;
    }
    .register .nav-tabs .nav-link {
        padding: 10px 8px;
        height: 25px;
        color: #fff;
        font-size: 13px;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        color:  #1143a6;
        border: 1px solid  #1143a6;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: left;
        color:   #1143a6;
    }

    #login.active
    {

        -webkit-transform: translateX(0px);
        transform: translateX(0px);
        z-index: 100;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
        -webkit-transition: all ease-out 0.2s 0.1s;
        transition: all ease-out 0.2s 0.1s;

    }
    #newuser.active
    {

        -webkit-transform: translateX(0px);
        transform: translateX(0px);
        z-index: 100;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
        -webkit-transition: all ease-out 0.2s 0.1s;
        transition: all ease-out 0.2s 0.1s;

    }
</style>

<div class="container register">
    <div class="row">

        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab" style="margin-top: 114px;">
                    <div class="row register-form" style="margin-left: 201px">
                        <div class="col-md-12 profile_card" >
                            <form  action="database/login.php" method="post">
                                <div class="form-group">
                                    <i class="fa fa-envelope-o"></i>
                                    <input class="input100" type="text" name="username" placeholder="ايميل" required style="text-align: right">
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input class="input100" type="password" name="pwd" placeholder="***********" required style="text-align: right">
                                </div>
                                <div class="float-l">
                                    <input type="submit" class="btn btn-primary" style="background-color: #1143a6" value="تسجيل دخول" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3 register-left">
            <img src="img/logo2.png" alt="" style="width:240px;" />
            <h3 style="    font-family: cursive;color:#1143a6; ">مركز المعلومات ودعم اتخاذ القرار</h3>
        </div>
    </div>
</div>




















