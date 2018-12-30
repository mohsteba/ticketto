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
    <link rel="stylesheet" href="css/style2.css">

    <title>ثبت خرید بلیت</title>
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
                    <a class="nav-link" href="salesTable/salesTable/salestable.php"><span
                            class="blue-txt">جدول فروش </span></a>
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
                       onfocus="this.placeholder='جستجو فیلم، تئاتر و سینما'" onblur="this.placeholder='جستجو'"
                       class="search">
            </form>
            <!--onclick="searchFunction()"-->
            <!--<div id="snackbar">موردی یافت نشد.</div>-->
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
                    <li class="pb-2"><a href="profile.php"
                                        style="padding-left: 20%; text-decoration: none; color:rgb(46, 139, 175);">
                        <i class="fas fa-icons1 fa-user-circle pt-2"></i>
                        پروفایل کاربری </a></li>
                    <li class="pb-2"><a href="?signout"
                                        style="padding-left: 57%; text-decoration: none; color:rgb(46, 139, 175);">
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

<div class="w-100 content" style=" background-color: #eee; padding-top: 8%;">
    <div class="container pb-5">
        <div class="bg-white pr-3 pl-3"
             style="padding-top: 3%; padding-bottom: 4%; border: 1px solid #eee; border-radius: 0.5vh;">
            <div class="row text-justify">
                <div class="col-md-3 pr-4">
                    <img src="imgs/filmha/sarv/main.jpg" class="img-fluid rounded img-thumbnail" style="height: 300px;">
                </div>
                <div class="col-md-5 ">
                    <div class="pt-3 pr-0">
                        <h5><strong>
                            سرو زیر آب
                        </strong></h5>
                        <h6 class="pt-3">پردیس سینمایی باغ کتاب</h6>
                        <p>سالن سه(ظرفیت 70 نفر)</p>
                        <div class="text-secondary pt-2" style="font-size: 14px;">
                            <p><i class="fas fa-map-marker-alt fa-icons5 pl-2" style="padding-right: 1%;"></i>
                                نشانی: بزرگراه شهید حقانی، ورودی کتابخانه ملی، باغ کتاب تهران
                            </p>
                            <p><i class="fas fa-calendar fa-icons5 pl-2" style="padding-right: 0.8%;"></i>
                                تاریخ: شنبه، ۱۳۹۷/۱۰/۰۱
                            </p>
                            <p><i class="fas fa-clock fa-icons5 pl-2" style="padding-right: 0.5%;"></i>
                                ساعت: ۱۸:۱۰
                            </p>
                            <p><i class="fas fa-money-bill-alt fa-icons5 pl-1"></i>
                                قیمت بلیت: رایگان
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            <div class="row text-justify pt-4 pr-2">
                <div class="col-md ">
                    <div class="pt-3">
                        <h6><i class="fas fa-check fa-icons5 pr-1" style="color: rgb(46, 139, 175);"></i>
                            <strong style="color: rgb(31,70,113);">
                                مشخصات شما
                            </strong>
                        </h6>
                        <div style="padding-left: 13%; padding-right: 9%;">
                            <ul class="list-group">
                                <li class="list-group-item bg-light">نام:
                                    <span style="color:rgb(46, 139, 175); padding-right: 27%;">نام کاربر</span>
                                </li>
                                <li class="list-group-item">نام خانوادگی:
                                    <span style="color:rgb(46, 139, 175); padding-right: 19%;">نام خانوادگی کاربر</span>
                                </li>
                                <li class="list-group-item bg-light">ایمیل:
                                    <span style="color:rgb(46, 139, 175); padding-right: 25%;">user@email.com</span>
                                </li>
                                <li class="list-group-item ">تعداد بلیت:
                                    <span style="color:rgb(46, 139, 175); padding-right: 20%;">2</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-justify pt-5 pr-2">
                <div class="col-md ">
                    <div class="pt-3">
                        <h6><i class="fas fa-exclamation-circle fa-icons5 pr-1 text-danger"></i>
                            <strong style="color: rgb(31,70,113);">
                                توجه
                            </strong>
                            <div class="border border-danger rounded pt-4 pl-4"
                                 style="margin-left: 12.9%; margin-right: 12.6%; line-height: 35px; font-size: 14px;">
                                <ul>
                                    <li>بلیت خریداری شده قابل استرداد یا تعویض نمیباشد.</li>
                                    <li>پس از پرداخت آنلاین وجه، محل صندلی خود را انتخاب نمایید. در غیر اینصورت تیکتو
                                        مسئولیتی در قبال بلیت شما نخواهد داشت.
                                    </li>
                                    <li>فیلم در صورتی اکران میشود که حداقل ۵ بلیت فروش رفته باشد.</li>
                                    <li>برای دریافت بلیت خود ۱۵ دقیقه قبل از شروع سانس به گیشه سینما مراجعه فرمایید.
                                    </li>
                                    <li>کاربر موظف است اطلاعات شخصی واقعی و صحیح خود را در سایت وارد نماید. در غیر
                                        اینصورت تیکتو مسئولیتی در قبال هرگونه مشکل احتمالی که در اثر ارائه اطلاعات غلط
                                        از طرف کاربر به این سایت، ایجاد شده است، ندارد.
                                    </li>
                                </ul>
                            </div>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="row text-justify pt-4 pr-2">
                <div class="col-md ">
                    <div class="pt-3">
                        <div class="border bg-light rounded pt-4 pb-4 pl-4 ml-4 mr-4"
                             style=" line-height: 35px; font-size: 14px;">
                            <form>
                                <div class="form-group row pr-5">
                                    <div class="form-check">
                                        <!--<input type="checkbox" style="width: 15px; height: 15px;"-->
                                               <!--onchange="document.getElementById('buy').disabled = !this.checked;"-->
                                               <!--name='visto' id='visto'/>-->
                                        <input type="checkbox" style="width: 15px; height: 15px;"  onclick="activateFunction()">
                                        <span class="checkmark"></span>
                                        <label class="form-check-label pr-3">
                                            قوانین و اطلاعات فوق را قبول دارم.
                                        </label>
                                    </div>
                                </div>
                               <a class="btn bg-secondary text-white first-item ml-2 pt-2 pb-2 pr-4 pl-4"
                                   href="index.html" style="margin-right: 7%;"
                                   role="button">انصراف</a>
                                <button type="button" id="buy"
                                        class="btn blue-btn pl-4 pr-4 pt-2 pb-2 text-white disabled2"
                                        onclick="sendCodeFunction()">
                                    خرید
                                </button>
                                <div id="codeSnackbar">کد پیگیری به ایمیل شما ارسال شد.</div>


                            </form>
                        </div>
                    </div>
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
   
    function activateFunction() {
        var element = document.getElementById("buy");
        element.classList.toggle("disabled2");
    }

    function sendCodeFunction() {
        var x = document.getElementById("codeSnackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    }


    function searchFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    }

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

</html>