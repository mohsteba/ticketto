
<?php
session_start();
if( isset( $_GET[ 'signout' ] ) ) {
		unset( $_SESSION[ 'email' ] );
        Redirect('index.php', false);
	}
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login-style.css">

    <title>پروفایل کاربری</title>
    <link rel="icon" href="imgs/logo.png">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top w-100" style="background-color: #dadada">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="" style="width: 60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="index.php"><span class="blue-txt">صفحه اصلی </span><span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="teatr.php"> <span class="blue-txt">تئاترها</span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="film.php"> <span class="blue-txt">فیلم‌ها </span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="cinema.php"> <span class="blue-txt">سینما‌ها</span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="salesTable/salesTable/salestable.php"><span class="blue-txt">جدول فروش </span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="ticketoblog/index.html"> <span class="blue-txt">اخبار سینما</span></a>
                </li>
                <li class="nav-item active mr-2 ml-2 ">
                    <a class="nav-link" href="contact/index.php"><span class="blue-txt">تماس با ما </span></a>
                </li>
            </ul>
            <form>
                <input type="text" name="search" placeholder="جستجو"
                       onfocus="this.placeholder='جستجو فیلم، تئاتر و سینما'" onblur="this.placeholder='جستجو'" class="search">
            </form>
            <!--onclick="searchFunction()"-->
            <div id="snackbar">موردی یافت نشد.</div>
            <?php if (!isset($_SESSION["email"])) : ?>
            <div class="btn-group mr-2">
                <a href="ozviat.php" role="button" class="text-white btn rounded-right blue-btn"
                        style="border-radius:0;">عضویت
                </a>
                <a href="vorud.php" role="button" class="btn rounded-left pt-1 pb-1 purple-btn"
                        style="border-radius:0;">ورود
                </a>
            </div>

            <!--       HERE      -->
            <?php else: ?>
            <div class="btn-group">
                <ul class="dropdown-menu" style="background-color: #eaeaea;" role="menu">
                    <li class="pb-2"><a href="profile.php" style="padding-left: 20%; text-decoration: none; color:rgb(46, 139, 175);">
                        <i class="fas fa-icons1 fa-user-circle pt-2"></i>
                        پروفایل کاربری </a></li>
                    <li class="pb-2"><a href="?signout" style="padding-left: 57%; text-decoration: none; color:rgb(46, 139, 175);">
                        <i class="fas fa-icons1 fa-sign-out-alt pt-2"></i>
                        خروج</a></li>
                </ul>
                <button type="button" class="text-white btn rounded-right disabled"
                        style="background-color: rgb(31,70,113); border-radius:0;"><?=$_SESSION['email']?>
                </button>
                <button type="button" class="btn dropdown-toggle rounded-left text-white pt-2 pb-1"
                        data-toggle="dropdown"
                        style="background-color: rgb(37,84,136); border-radius:0;">
                    <span class="caret"></span>
                </button>
            </div>
            <?php endif; ?>
        </div>
    </div>
</nav>



<div class="w-100 content">
    <div class="container">
        <div class="row text-justify justify-content-center"
             style=" margin-top: 12%; margin-bottom: 5%; ">
            <div class="col-md-3 text-justify ml-2 p-2 pb-5 rounded"
                 style="background-color: #fff; border: 1px solid white;">
                <h5 style="color:rgb(46, 139, 175);"><i class="fas fa-icons1 fa-user-circle pt-2"></i>
                    <strong>پروفایل من:</strong>
                </h5>
                <a href="profile-tickets.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 txthover"><i class="fas fa-icons3 fa-ticket-alt pl-1"></i>
                        <strong>بلیت های من</strong>
                    </h6>
                </a>
                <a href="profile-transaction.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 txthover"><i class="fas fa-icons3 fa-credit-card pl-1"></i>
                        <strong>تراکنش های من</strong>
                    </h6>
                </a>
                <a href="profile-edit.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 txthover"><i class="fas fa-icons3 fa-user pl-2"></i>
                        <strong>ویرایش اطلاعات من</strong>
                    </h6>
                </a>
                <a href="profile-changePass.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 txthover"><i class="fas fa-icons5 fa-key pl-2"></i>
                        <strong>تغییر رمز عبور</strong>
                    </h6>
                </a>
<!--
                <a href="index.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 pb-2 txthover"><i class="fas fa-icons3 fa-sign-out-alt pl-1"></i>
                        <strong>خروج از حساب کاربری</strong>
                    </h6>
                </a>
-->
            </div>
            <div class="col-md-8 text-justify rounded pb-3"
                 style="background-color: #fff; border: 1px solid #eee;">
                <div class="">
                    <p class="pt-4 ">
                        <i class="fas fa-icons3 fa-user pl-1"></i>
                        <strong>پروفایل من</strong>
                    </p>
                </div>
                <div style="padding-left: 20%; padding-right: 20%;">
                    <p class="">
                        <span style="color: rgb(46,139,175);"><strong>نام کاربری شما:</strong></span>
                        useremail@email.com
                    </p>
                    <form class="needs-validation" name="myForm" onsubmit="return validateForm();" novalidate>
                        <div class="pt-2 pb-4">
                            <label class="pr-1">نام</label>
                            <input type="text" class="form-control" id="name" placeholder=" نام کاربر باشه" required>
                            <div class="invalid-feedback text-justify" id="nametext">
                                لطفا نام خود را وارد کنید.
                            </div>
                        </div>
                        <div class="pb-4">
                            <label class="pr-1">نام خانوادگی</label>
                            <input type="text" class="form-control" id="lastname" placeholder="نام خانوادگی کاربر باشه"
                                   required>
                            <div class="invalid-feedback text-justify">
                                لطفا نام خانوادگی خود را وارد کنید.
                            </div>
                        </div>
                        <div class="pb-4">
                            <label class="pr-1">شماره همراه</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="شماره همراه">
                        </div>
                        <div class="pb-4">
                            <label class="pr-1">آدرس</label>
                            <input type="text" class="form-control" id="address" placeholder="آدرس">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio1">آقا</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">خانم</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        </div>
                        <br>
                        <button type="submit" id="submitbtn" class="btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-4 mb-3 text-white">
                            ثبت تغییرات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
<div class="w-100 bg-white" id="contact">
    <div class="container-fluid">

        <div class="row pb-2 pt-4">
            <div class="col-md-6 text-justify " style="font-size: 14px; padding-left: 12%; padding-top: 2.5%;">
                <ul class="footer">
                    <li class="footeritem pl-4 pr-4"><a href="contact/index.php">تماس با ما</a></li>
                    <li class="footeritem pl-4 pr-4"><a href="rahnama.php">راهنمای استفاده از تیکتو</a></li>
                    <li class="footeritem pl-4 pr-4"><a href="ayande.php">فیلم های آینده</a></li>
                    <li class="footeritem pl-4 "><a href="darbareMa.php">درباره تیکتو</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-center " style="padding-right: 39%;">
                
                <a href="index.php"><img src="imgs/logo.png" class="img-fluid" alt=""
                                          style="width: 100px;"></a>
            </div>
        </div>
    </div>

    <hr class="my-4">
    <div class="row justify-content-center text-center pt-3 pb-2">
        <p>کلیه حقوق مادی و معنوی این وبسایت محفوظ و مربوط به تیکتو می باشد.</p>
    </div>
    
     <div class="row text-center justify-content-center pl-5">
                <ul style="list-style: none;">
                    <li class="footer-icon d-inline-block mr-1 ml-1" style="background-color: #3e5b98;">
                        <a href="https://www.facebook.com/login/" target="_blank"><i
                                class="fa fa-facebook fa-icons2"
                                data-toggle="tooltip"
                                title="Contact us via Facebook"></i></a>
                    </li>
                    <li class="footer-icon d-inline-block mr-1 ml-1 " style="background-color: #4da7de;">
                        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-icons2"
                                                                          data-toggle="tooltip"
                                                                          title="Contact us via Twitter."></i></a>
                    </li>
                    <li class="footer-icon d-inline-block mr-1 ml-1 " style="background-color: #6d34ac;">
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram fa-icons2"
                                                                                      data-toggle="tooltip"
                                                                                      title="Contact us via Instagram."></i></a>
                    </li>
                </ul>
            </div>
    
    <div class="row justify-content-center text-center">
        <p>
            <a href="mailto:ticketto@kntu.ac.ir" class="vorudlink"
               style="text-decoration: none;">ticketto@kntu.ac.ir</a>
            <br>
            <a href="tel:989126977637+" class="vorudlink" style="text-decoration: none;">989126977637+</a>

        </p>
    </div>
</div>



<script>
    //fields validation
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password")
        , name = document.getElementById("name")
        , length = document.getElementById("length");

    // confirm password
    document.getElementById("submitbtn").onclick = function validatePassword() {
        if (confirm_password.value.length == 0) {
            document.getElementById("passtext").innerText = "لطفا رمز عبور خود را مجددا وارد کنید.";
        }
        else if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            document.getElementById("passtext").innerText = "تکرار رمز عبور با رمز عبور یکسان نمیباشد.";
            // } else if ((password.value.length >= 6) && (password.value == confirm_password.value)) {
            // document.getElementById("confirm_password").style.borderColor = "green";
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>

