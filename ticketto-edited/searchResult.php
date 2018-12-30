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

    <title>Film ha</title>
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
<div class="w-100 content" style=" background-color: #eee;" id="pinned2">
    <div class="container">
        <div class="row text-justify" style="padding-top: 6%; padding-bottom: 8%;">
            <div class="col-md">
                <div class="row pt-5">
                    <div class="col-md">
                        <h6><i class="fas fa-icons1 fa-search "></i>
                            <strong style="color: rgb(46, 139, 175);">نتایج جستجو</strong>
                            <span class="pr-4 pl-4 pt-2 pb-2 mr-3 text-white filmtxt"
                                  style="background-color: rgba(31,70,113,0.85);">
                                کلمه سرچ شده</span>
                        </h6>
                    </div>
                </div>
                <div class="row pt-4 pb-3">
                    <div class="col-md-3">
                        <div class="filmtxt p-2 text-white text-center" style="border-radius: 3px; margin:0.5%;">سینما</div>
                        <div class="card pb-1 ">
                            <a href="darbareyeFilm.php">
                                <img class="card-img-top img-effect" src="imgs/main.jpg" alt="Card image cap" style="height: 350px;">
                            </a>
                            <a class="card-link" href="darbareyeFilm.php">
                                <div class="card-body pr-3">
                                    <p class="card-title" style="color: #1b1e21; font-size: 14px;"><strong>
                                        پردیس سینمایی باغ کتاب
                                    </strong></p>
                                    <p class="card-text text-secondary" style="font-size: 12px;">
                                        تهران، بزرگراه شهید حقانی
                                    </p>
                                </div>
                                <div class="pr-2 pl-2">
                                    <a class="btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2"
                                       href="darbareyeFilm.php" style="font-size: 12px; "
                                       role="button">درباره سینما</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="filmtxt p-2 text-white text-center" style="border-radius: 3px; margin:0.5%;">فیلم</div>
                        <div class="card pb-1 ">
                            <a href="darbareyeFilm.php"><img class="card-img-top img-effect" src="imgs/Maghzha(2).jpg"
                                                              alt="Card image cap" style="height: 350px;"></a>
                            <a class="card-link" href="darbareyeFilm.php">
                                <div class="card-body pr-3">
                                    <p class="card-title" style="color: #1b1e21; font-size: 14px;"><strong>
                                        مغزهای کوچک زنگ زده
                                    </strong></p>
                                    <p class="card-text text-secondary" style="font-size: 12px;">
                                        هومن سیدی
                                    </p>
                                </div>
                                <div class="pr-2 pl-2">
                                    <a class="btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2"
                                       href="darbareyeFilm.php" style="font-size: 12px; "
                                       role="button">خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="filmtxt p-2 text-white text-center" style="border-radius: 3px; margin:0.5%;">تئاتر</div>
                        <div class="card pb-1 ">
                            <a href="darbareyeFilm.php"><img class="card-img-top img-effect" src="imgs/1000pa.jpg"
                                                              alt="Card image cap" style="height: 350px;"></a>
                            <a class="card-link" href="darbareyeFilm.php">
                                <div class="card-body pr-3">
                                    <p class="card-title" style="color: #1b1e21; font-size: 14px;"><strong>
                                        هزار پا
                                    </strong></p>
                                    <p class="card-text text-secondary" style="font-size: 12px;">
                                        ابوالحسن داودی
                                    </p>
                                </div>
                                <div class="pr-2 pl-2">
                                    <a class="btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2"
                                       href="darbareyeFilm.php" style="font-size: 12px; "
                                       role="button">خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="filmtxt p-2 text-white text-center" style="border-radius: 3px; margin:0.5%;">فیلم آینده</div>
                        <div class="card pb-1 ">
                            <a href="darbareyeFilm.php"><img class="card-img-top img-effect" src="imgs/Tange.jpg"
                                                              alt="Card image cap" style="height: 350px;"></a>
                            <a class="card-link" href="darbareyeFilm.php">
                                <div class="card-body pr-3">
                                    <p class="card-title" style="color: #1b1e21; font-size: 14px;"><strong>
                                        تنگه ابوقریب
                                    </strong></p>
                                    <p class="card-text text-secondary" style="font-size: 12px;">
                                        بهرام توکلی
                                    </p>
                                </div>
                                <div class="pr-2 pl-2">
                                    <a class="btn blue-btn2 float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2"
                                       href="darbareyeFilm.php" style="font-size: 12px;"
                                       role="button">به زودی ...</a>
                                </div>
                            </a>
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
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
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