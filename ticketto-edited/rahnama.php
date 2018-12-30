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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login-style.css">
    <link rel="stylesheet" href="css/style.css">

    <title>رهنمای استفاده</title>
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

<div class="w-100">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center text-justify pt-4 mt-5">
            <div class="col-md-10 text-center pt-5 pb-5 pr-4 pl-4 form1">
                <div class="text-justify pt-2 pr-3 pl-3">
                    <p style="color: rgb(46, 139, 175);">
                        راهنمای استفاده از سایت و خرید بلیت:
                    </p>
                    <hr class="my-3">
                    <p class="pt-3" style="color: color: rgb(46, 139, 175);">
                        <strong>مراحل خرید:</strong>
                    </p>
                    <p style="line-height: 40px;" class="pl-4">
                        خرید و رزرو بلیت خیلی ساده است و کافی است مراحل زیر را انجام دهید:
                        <br>
                        ۱- بعد از مراجعه به صفحه سینمای مورد نظر، فیلم، روز نمایش و سپس سانس مورد نظرتان را انتخاب کنید.
                        <br>
                        ۲- با کلیک بر روی دکمه خرید بلیت وارد صفحه مشخصات شده که می‌بایست نام، ایمیل
                        و تعداد بلیت را وارد کنید. اگر عضو تیکتو هستنید باید ابتدا با نام کاربری و
                        رمز عبور خود وارد شوید و سپس خرید انجام دهید تا در خریدهایتان ثبت شود.
                        <br>
                        ۳- بعد از انتخاب تعداد بلیت روی کلید پرداخت کلیک کنید. به صفحه بانک
                        رفته و با استفاده از کارت بانکی که دارای رمز دوم (رمز اینترنتی) و کد CVV۲ می باشد،
                        مبلغ بلیت را پرداخت نمایید.
                        <br>
                        ۴- پس از پرداخت به سایت بازمی‌گردید که کد رزرو به شما داده خواهد شد و باید صندلی خود را انتخاب
                        کنید. پس از انتخاب صندلی ایمیل تایید برای شما ارسال می‌گردد.
                        <br>
                        رزرو شما در اینجا به پایان رسیده و کافی است قبل از شروع سانس به گیشه سینمای مربوط مراجعه کرده، و
                        با ارایه کد رزرو به مسوول گیشه بلیت خود را با همان شماره صندلی که خودتان انتخاب کرده بودید،
                        دریافت نمایید.
                        <br><br>
                        <span class="vorudlink">*</span>
                         در صورتی که هنگام خرید به هر دلیلی مراحل خرید تکمیل نگردید (کد رزرو دریافت نکردید)، به این
                        معنی است که خریدی برای شما مربوط به فیلم مورد نظران ثبت نشده است. مبلغ کسر شده نیز پس از رفع
                        مغایرتهای بانکی ظرف ۲۴ ساعت از سوی بانک به حساب شما برگشت داده میشود. در صورت عدم برگشت مبلغ طی
                        مدت زمان مذکور میبایست تاییدیه بانکی خود را از طریق فکس یا ایمیل به
                        <a href="mailto:ticketto@kntu.ac.ir" class="vorudlink" style="text-decoration: none;">ticketto@kntu.ac.ir</a>
                        ارسال فرمایید تا در اسرع وقت مبلغ عودت گردد.
                        <br><br>
                        <span class="vorudlink">*</span>
                         در صورت بروز مشکل با ایمیل
                        <a href="mailto:ticketto@kntu.ac.ir" class="vorudlink" style="text-decoration: none;">ticketto@kntu.ac.ir</a>
                        یا شماره
                        <a href="tel:989126977637+" class="vorudlink" style="text-decoration: none;">989126977637+</a>
                        تماس حاصل فرمایید.
                        .</p>
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



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>