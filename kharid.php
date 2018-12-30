<!--


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

include("functions.php");

?>

-->



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

    <title>خرید بلیت</title>
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
<!--            <div id="snackbar">موردی یافت نشد.</div>-->
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
            <div class="btn-group mr-2">
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
<!--            here-->
   <?php

   $infoid = $_GET['info_id'];
   getblit($infoid);
    ?>
<!--            here-->
            <div class="row text-justify pt-4 pr-2">
                <div class="col-md " >
                    <div class="pt-3">
                        <h6><i class="fas fa-shopping-cart fa-icons5" style="color: rgb(46, 139, 175);"></i>
                            <strong style="color: rgb(31,70,113);">
                                مشخصات خریدار و تعداد بلیت
                            </strong></h6>
                    </div>
                    <div class="pt-2 pl-2">
                        <div class="tab">
  <?php if (isset($_SESSION["email"])) : ?>
                            <button class="tablinks" onclick="openCity(event, 'buyTicket')">
خرید بلیت                            </button>
<?php else: ?>
                            <button class="tablinks" onclick="openCity(event, 'guestTicket')">
ورود به سایت                            </button>
<?php endif;?>
<!--
                            <button class="tablinks" onclick="openCity(event, 'pelan')">
                                مشاهده پلان سینما
                            </button>
-->
                        </div>

                         <div id="buyTicket" class="tabcontent pt-4 pb-5">
                            <h6><i class="fas fa-user fa-icons5 pb-4 pt-3 pr-1 pl-1"></i>
                                قبلا با کاربری خود وارد شده اید
                            </h6>
                            <form>
                                <div class="pb-3 form-inline pr-2" style="padding-left: 30%; font-size: 15px;">
                                    <select class="pl-4 custom-select" style="margin-left: 2%;">
                                        <option selected>تعداد بلیت</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <a class="btn blue-btn text-white first-item pt-2 pb-2 pr-4 pl-4"
                                       href="sabteKharid.php"
                                       role="button">ادامه</a>
                                </div>
                            </form>
                        </div>
                        <div id="guestTicket" class="tabcontent pt-5 pb-5">
                            <h6><i class="fas fa-user-plus fa-icons5 pb-5 pt-3 pr-2"></i>
                                <span class="pr-4 pl-4 pt-3 pb-3 mr-1 rounded"
                                      style="background-color: #f2dede; border-color: #ebcccc; color: #a94442; font-size: 14px;">
کاربر گرامی برای ثبت بلیت باید وارد سایت شوید                             </span>
                            </h6>
                            <a class="btn blue-btn text-white first-item pt-2 pb-2 pr-4 pl-4"
                               href="vorud.php" style="margin-right: 12%;"
                               role="button">ورود به سایت</a>
                        </div>
<!--
                        <div id="pelan" class="tabcontent pt-5 pb-5">
                            <h6><i class="far fa-play-circle fa-icons5 pb-4"></i>
                                این پلان صرفا جهت مشاهده وضعیت سالن میباشد. انتخاب صندلی پس از پرداخت و اخذ کد رزرو میسر
                                خواهد بود.
                            </h6>

                        </div>
-->
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

<!-- The Modal -->
<div id="myModal2" class="modal2">

    <!-- The Close Button -->
    <span class="close2">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal2-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>

<script>
    function eyeFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("eye");
            if (x.type === "password") {
                x.type = "text";
                y.classList.remove("fa-eye-slash");
                y.classList.add("fa-eye");
            } else {
                x.type = "password";
                y.classList.remove("fa-eye");
                y.classList.add("fa-eye-slash");
            }
        }

    function openCity(evt, tabField) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabField).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();


    function searchFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 3000);
    }

    // $(document).ready(function () {
    //     $('[data-toggle="tooltip"]').tooltip();
    // });

    // Get the modal
    var modal2 = document.getElementById('myModal2');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img1 = document.getElementById('myImg1');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img1.onclick = function () {
        modal2.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    var img2 = document.getElementById('myImg2');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img2.onclick = function () {
        modal2.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    var img3 = document.getElementById('myImg3');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img3.onclick = function () {
        modal2.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal2.style.display = "none";
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
