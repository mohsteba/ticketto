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

    <title>Darbareye film ayande</title>
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

<div class="w-100 bg-full" style="background-image:url('<?=$soonmovie['name']; ?>');">
    <div class="container" style="padding-top: 9%;">
        <div class="row pb-5">
            <div class="col-md-4">
                <img src="imgs/Jadeghadim.jpg" class="img-fluid" alt="" style="height:410px;">
            </div>
            <div class="col-md-8 text-justify pt-4 pr-5 text-white">
                <h1><strong>جاده قدیم</strong></h1>
                <div class="row">
                    <div class="col-md-1.5 text-center pt-4 pr-3">
                        <span class="pr-4 pl-4 pt-2 pb-2 ml-2 text-white filmtxt">اجتماعی</span>
                        <span class="pr-3 pl-3 pt-2 pb-2 text-white filmtxt">100 دقیقه</span>
                    </div>
                </div>
                <div class="row pt-5 pr-3">
                    <p>کارگردان: منیژه حکمت</p>
                </div>
                <div class="row pt-3 pr-3">
                    <p>تهیه کننده: منیژه حکمت</p>
                </div>
                <div class="row pt-3 pr-3">
                    <p>سال ساخت: 1396</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-100 content" style=" background-color: #eee;">
    <div class="container  pt-4 pb-4">
        <div class="row text-justify bg-white pr-3 pl-3" style="padding-top: 6%; padding-bottom: 5%; border: 1px solid #eee; border-radius: 0.5vh;">
            <div class="col-md-8">
                <div style="padding-left:18%; line-height: 30px;">
                    <h5><i class="fas fa-film fa-icons1 pl-2"></i>
                        <strong>درباره فیلم:</strong>
                    </h5>
                    <p>در شب سال نو مینو به خانه باز نمیگردد .....</p>
                    <br>
                    <h6><i class="fas fa-user fa-icons1 pl-2"></i>
                        <strong>بازیگران:</strong>
                    </h6>
                    <p>مهتاب کرامتی، آتیلا پسیانی، ترلان پروانه، محمدرضا غفاری، شیرین یزدان بخش،
                        لیلی رشیدی، هدی زین العابدین، محمدرضا هدایتی ، بهناز جعفری، بانیپال شومون، پوریا رحیمی و پرویز
                        پورحسینی</p>
                    <h6><i class="fas fa-users fa-icons1 pl-2 pt-3"></i>
                        <strong>سایر عوامل:</strong>
                    </h6>
                    <p>مدیر فیلمبرداری: داریوش عیاری
                        / تدوین: مصطفی خرقه پوش / موسیقی : کریستف رضاعی / مجری طرح : طهورا ابوالقاسمی / مشاور کارگردان :
                        مصطفی خرقه پوش
                        / طراح چهره پردازی : سعید ملکان / طراح صحنه : کیوان مقدم / دستیار اول کارگردان و برنامه ریز: سحر
                        مصیبی
                        / طراح لباس : نازنین توسلی / صدابردار : مهدی ابراهیم زاده / طراحی و ترکیب صدا : سید محمود موسوی
                        نژاد
                        / عنوانبندی : ابراهیم حقیقی / مدیرتولید : سمیرا علایی / مدیر تدارکات: حسن صفری</p>
                    <h6><i class="fas fa-file-video fa-icons1 pl-2 pt-3"></i>
                    <strong>پخش:</strong>
                    </h6>
                    <p>بامداد فیلم</p>
                </div>
            </div>
            <div class="col-md-4">
                <h6><i class="fas fa-images fa-icons1 pl-2 pb-3"></i>
                    <strong>تصاویری از فیلم</strong>
                </h6>
                <img src="imgs/1.jpg" class="img-fluid pb-3" alt="">
                <img src="imgs/2.jpg" class="img-fluid pb-3" alt="">
                <img src="imgs/3.png" class="img-fluid pb-3" alt="">
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



<!--Modal-->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-secondary">!!!</h4>
            </div>
            <div class="modal-body">
                <p>این امکان هم اکنون در دسترس نمیباشد.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn blue-btn text-white" data-dismiss="modal">بستن</button>
            </div>
        </div>
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
<?php endwhile;?>
</html>