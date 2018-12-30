
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acount";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM assoonmovie where id = 1";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
//while($movie = mysqli_fetch_assoc($result)){
//    echo "id= ".$movie["image1"];
//}
$conn->close();




?>
<!doctype html>
<html lang="en">
<?php while($soonmovie = mysqli_fetch_assoc($result)) :  ?>
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

    <title><?=$soonmovie['name']; ?></title>
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


<div class="w-100 bg-full "style="background-image:url('<?=$soonmovie['image2']; ?>');">
    <div class="container" style="padding-top: 9%;">
        <div class="row pb-5">
            <div class="col-md-4">
                <img src="<?=$soonmovie['image1']; ?>" class="img-fluid" alt="" style="height:410px;">
            </div>
            <div class="col-md-8 text-justify pt-4 pr-5 text-white">
                <h1><strong><?=$soonmovie['name']; ?></strong></h1>
                <div class="row">
                    <div class="col-md-1.5 text-center pt-4 pr-3">
                        <span class="pr-4 pl-4 pt-2 pb-2 ml-2 text-white filmtxt"><?=$soonmovie['janr']; ?></span>
                        <span class="pr-3 pl-3 pt-2 pb-2 text-white filmtxt"><?=$soonmovie['time']; ?></span>
                    </div>
                </div>
                <div class="row pt-5 pr-3">
                    <p><?=$soonmovie['director']; ?></p>
                </div>
                <div class="row pt-3 pr-3">
                    <p><?=$soonmovie['productor']; ?></p>
                </div>
                <div class="row pt-3 pr-3">
                    <p><?=$soonmovie['dateofproduct']; ?></p>
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
                    <p><?=$soonmovie['about']; ?></p>
                    <br>
                    <h6><i class="fas fa-user fa-icons1 pl-2"></i>
                        <strong>بازیگران:</strong>
                    </h6>
                    <p><?=$soonmovie['actor']; ?></p>
                    <h6><i class="fas fa-users fa-icons1 pl-2 pt-3"></i>
                        <strong>سایر عوامل:</strong>
                    </h6>
                    <p><?=$soonmovie['other']; ?></p>
                    <h6><i class="fas fa-file-video fa-icons1 pl-2 pt-3"></i>
                    <strong>پخش:</strong>
                    </h6>
                    <p> <?=$soonmovie['spanser']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <h6><i class="fas fa-images fa-icons1 pl-2 pb-3"></i>
                    <strong>تصاویری از فیلم</strong>
                </h6>
                <img id="myImg1" src="<?=$soonmovie['image3'] ?>" class="myImg img-fluid pb-3" alt="" style="height: 250px;">
                <img id="myImg2" src="<?=$soonmovie['image4'] ?>" class="myImg img-fluid pb-3" alt="" style="height: 250px;">
                <img id="myImg3" src="<?=$soonmovie['image5'] ?>" class="myImg img-fluid pb-3" alt="" style="height: 250px;">
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
<?php endwhile;?>
</html>