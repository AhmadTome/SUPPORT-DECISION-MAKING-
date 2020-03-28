<?php
session_start();
?>

<!doctype html>
<html class="fixed">
<head>
    <title>تسجيل حساب جديد</title>
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
include ('navbar.html');
?>
<!-- start: page -->
<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100">
            <div style="width: 100%;background-image: url(../img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

            </div>
            <h4 style="text-align: center;">
                كلية العلوم والآداب في محافظة الراس مركز المعلومات

            </h4>
            <p class="text-left" style="color: red">
                <?php
                if (isset($_SESSION['Error'])) {
                    echo $_SESSION['Error'];

                    unset($_SESSION['Error']);

                }
                ?>
            </p>
            <p class="text-left" style="color: white; background-color: green" >
                <?php
                if( isset($_SESSION['success']) )
                {
                    echo $_SESSION['success'];

                    unset($_SESSION['success']);

                }
                ?>
            </p>
            <form name="loginForm" action="../database/register.php" method="post" style="padding: 50px;" onsubmit="return validateForm()" dir="rtl">
                <div class="form-group mb-lg">
                    <label class="pull-right">الاسم الكامل <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="fullname" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                               required/>
                        <span class="input-group-addon pull-right">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-right"><span id="user_type_title"></span> نوع الحساب <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="user_type" id="user_type" type="text" class="form-control input-lg" readonly value="supervisor"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right"><span id="user_type_title"></span> الرقم التعريفي <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="number" type="text" class="form-control input-lg" placeholder="الرقم التعريفي"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">تاريخ الميلاد <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="Bday" type="text" class="form-control input-lg" required/>

                    </div>
                </div>


                <div class="form-group mb-lg">
                    <label class="pull-right">الجنس <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: right" >
                                <input name="gender" type="radio"  value="Male" /> ذكر
                            </span>
                        <span style="  display: inline-block; width: 50%;text-align: right">
                                <input name="gender" type="radio"  value="Female"/> انثى
                            </span>



                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">المستوى العلمي <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="level">
                            <option selected disabled>--- اختار المستوى التعليمي ---</option>
                            <option value="موظف">موظف</option>
                            <option value="سنة أولى فصل أول">سنة أولى فصل أول</option>
                            <option value="سنة أولى فصل ثاني">سنة أولى فصل ثاني</option>
                            <option value="سنة ثانية فصل أول">سنة ثانية فصل أول</option>
                            <option value="سنة ثانية فصل ثاني">سنة ثانية فصل ثاني</option>
                            <option value="سنة ثالثة فصل أول">سنة ثالثة فصل أول</option>
                            <option value="سنة ثالثة فصل ثاني">سنة ثالثة فصل ثاني</option>
                            <option value="سنة رابعة فصل أول">سنة رابعة فصل أول</option>
                            <option value="سنة رابعة فصل ثاني">سنة رابعة فصل ثاني</option>
                            <option value="سنة خامسة فصل أول">سنة خامسة فصل أول</option>
                            <option value="سنة خامسة فصل ثاني">سنة خامسة فصل ثاني</option>


                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">القسم <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="department">
                            <option selected disabled>--- اختار القسم ---</option>
                            <option value="موظف">موظف</option>
                            <option value="كلية الشريعة">كلية الشريعة</option>
                            <option value="كلية المجتمع">كلية المجتمع</option>
                            <option value="الكليات العربية والإنسانية">الكليات العربية والإنسانية</option>
                            <option value="كليات العلوم والآداب">كليات العلوم والآداب</option>
                            <option value="الكليات الهندسية والعلمية">الكليات الهندسية والعلمية</option>
                            <option value="الكليات الصحية">الكليات الصحية</option>
                            <option value="الارشاد الأكاديمي">الارشاد الأكاديمي</option>



                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الدرجة <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon" >
                        <select class="form-control" name="degree_program">
                            <option selected disabled>--- اختار الدرجة ---</option>
                            <option value="Bacholar">بكالوريس</option>
                            <option value="master">ماجستير</option>
                            <option value="doctor">دكتوراه</option>
                            <option value="Mdoctor">استاذ مشارك</option>
                            <option value="profosor">بروفوسور</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">سنة التخرج <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="gradulation_year" type="date" class="form-control input-lg" placeholder="اكتب السنة مثل 2020 او اتركها فارغة اذا المستخدم محاضر"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">ايميل <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="email" type="email" class="form-control input-lg" placeholder="username@example.com"
                               required/>
                    </div>
                </div>
                <div class="form-group mb-lg">
                    <label class="pull-right">رقم الهاتف <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="mobile_no" type="text" class="form-control input-lg" placeholder="Mobile Number"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الدولة <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <select class="form-control" name="country">
                            <option selected disabled>--- اختر الدولة ---</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>


                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">العنوان <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="address" type="text" class="form-control input-lg" placeholder="Your Address ..."
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">الرقم السري <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="pwd" type="password" class="form-control input-lg" placeholder="*************"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <label class="pull-right">تأكيد الرقم السري <span class="required-star">*</span></label>
                    <div class="input-group input-group-icon">
                        <input name="r_pwd" type="password" class="form-control input-lg" placeholder="*************"
                               required/>
                    </div>
                </div>

                <div class="form-group mb-lg">
                    <div class="input-group input-group-icon text-left">
                        <input class="pull-right" name="username" type="radio" />
                        <label class="pull-right">&nbsp;وافقت على <span style="color: #00ff09">سياسة البرنامج والمستخدمين</span>&nbsp;</label>

                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-4 text-right pull-left">
                        <button type="submit" class="btn btn-primary hidden-xs">تسجيل حساب جديد</button>
                    </div>
                </div>
                <!-- <p style="font-size: 18px;">هل لديك حساب بالفعل ؟ <a href="../sign_in.php"> تسجيل الدخول هنا!</a></p> -->

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
        $("#user_type").on("change",function () {
            //$("#user_type_title").text($(this).val());
        })
    });

    function validateForm() {
        var pass = document.forms["loginForm"]["pwd"].value;
        var pass_confirm = document.forms["loginForm"]["r_pwd"].value;
        if (pass != pass_confirm) {
            alert("The passwords are not matched!");
            return false;
        }
    }
</script>
