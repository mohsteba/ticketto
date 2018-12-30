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

	$errors = array();

    $flag = false;
    
	if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {	
			$dsn = 'mysql:dbname=acount;host=localhost;port=3306';
			$username = 'root';
			$password = '';
			try {
				$db = new PDO($dsn,$username,$password);
                $db->exec( "SET CHARACTER SET utf8" );
} catch( PDOException $e ) {
die( 'رخداد خطا در هنگام ارتباط با پایگاه داده:<br>' . $e );
}

$stmt = $db->prepare( "INSERT INTO contact ( familyandname,email,phone,payam) VALUES ( ?, ? ,?,?)" );      
$stmt->bindValue( 1, $_POST['familyandname']);
$stmt->bindValue( 2, $_POST['email'] );
$stmt->bindValue( 3, $_POST['phone']);
$stmt->bindValue( 4, $_POST['payam'] );
$stmt->execute();

$flag = true;

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf8_persian_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />

    <title>تماس با ما</title>
    <link rel="icon" href="imgs/logo.png">

</head>

<body style="background-color:#f5f5f5;">
    <?php if( $flag == false ) : ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top w-100" style="background-color: #dadada">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="imgs/logo.png" alt="" style="width: 60px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ml-2">
                        <a class="nav-link" href="../index.php"><span class="blue-txt">صفحه اصلی </span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="../teatr.php"> <span class="blue-txt">تئاترها</span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="../film.php"> <span class="blue-txt">فیلم‌ها </span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="../cinema.php"> <span class="blue-txt">سینما‌ها</span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="../salesTable/salesTable/salestable.php"><span class="blue-txt">جدول فروش </span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="../ticketoblog/index.html"> <span class="blue-txt">اخبار سینما</span></a>
                    </li>
                    <li class="nav-item active mr-2 ml-2 ">
                        <a class="nav-link" href="index.php"><span class="blue-txt">تماس با ما </span></a>
                    </li>
                </ul>
                 <form>
                <input type="text" name="search" placeholder="جستجو"
                       onfocus="this.placeholder='جستجو فیلم، تئاتر و سینما'" onblur="this.placeholder='جستجو'" class="pb-1 pt-2 pr-2 pl-1 search">
            </form>
            <!--onclick="searchFunction()"-->
<!--            <div id="snackbar">موردی یافت نشد.</div>-->

                <?php if (!isset($_SESSION["email"])) : ?>
                <div class="btn-group mr-2">
                    <a href="/ozviat.php" role="button" class="text-white btn rounded-right blue-btn" style="border-radius:0;">عضویت
                    </a>
                    <a href="/vorud.php" role="button" class="btn rounded-left pt-1 pb-1 purple-btn" style="border-radius:0;">ورود
                    </a>
                </div>

                <!--       HERE      -->
                <?php else: ?>
                <div class="btn-group mr-2">
                    <ul class="dropdown-menu" style="background-color: #eaeaea;" role="menu">
                        <li class="pb-2"><a href="../profile.php" style="padding-left: 20%; text-decoration: none; color:rgb(46, 139, 175);">
                                <i class="fas fa-icons1 fa-user-circle pt-2"></i>
                                پروفایل کاربری </a></li>
                        <li class="pb-2"><a href="?signout" style="padding-left: 57%; text-decoration: none; color:rgb(46, 139, 175);">
                                <i class="fas fa-icons1 fa-sign-out-alt pt-2"></i>
                                خروج</a></li>
                    </ul>
                    <button type="button" class="text-white btn rounded-right disabled" style="background-color: rgb(31,70,113); border-radius:0;">
                        <?=$_SESSION['email']?>
                    </button>
                    <button type="button" class="btn dropdown-toggle rounded-left text-white pt-2 pb-1" data-toggle="dropdown" style="background-color: rgb(37,84,136); border-radius:0;">
                        <span class="caret"></span>
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>



    <div class="w-100 pt-1 pb-1">

        <div class="container-fluid  fh5co_fh5co_bg_contcat bg-white " style="direction:ltr; width: 100%; margin-top: 7%;">
            <div class="container ">
                <div class="row py-4 ">
                    <div class="col-md-4 py-3">
                        <div class="row fh5co_contact_us_no_icon_difh5co_hover pt-4 pb-4">

                            <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                                <span class="c_g d-block float-right">آدرس ما</span>
                                <br>
                                <span class="d-block c_g fh5co_contact_us_no_text float-right ">تهران، سیدخندان، دانشگاه خواجه نصیر</span>
                            </div>
                            <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                                <div class="fh5co_contact_us_no_icon_div "> <span><i class="fa fa-map-marker"></i></span> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 ">
                        <div class="row fh5co_contact_us_no_icon_difh5co_hover pt-4 pb-4">

                            <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                                <span class="c_g d-block float-right">با ما تماس بگیرید</span>
                                <br>
                                <span class="d-block c_g fh5co_contact_us_no_text float-right">
                                    <a href="tel:+۹۸۹۱۲۶۹۷۷۶۳۷" class="text-secondary" style="text-decoration: none;">989126977637+</a>
                                </span>
                            </div>
                            <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                                <div class="fh5co_contact_us_no_icon_div "> <span><i class="fa fa-phone"></i></span> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 ">
                        <div class="row fh5co_contact_us_no_icon_difh5co_hover pt-4 pb-4">

                            <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                                <span class="c_g d-block float-right">سوالی دارید؟</span>
                                <br>
                                <span class="d-block c_g fh5co_contact_us_no_text float-right">
                                    <a href="mailto:ticketto@kntu.ac.ir" class="text-secondary" style="text-decoration: none;">
                                        ticketto@kntu.ac.ir</a></span>
                            </div>
                            <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                                <div class="fh5co_contact_us_no_icon_div "> <span><i class="fa fa-envelope"></i></span> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 pt-2 pb-2" id="contact">
        <div class="container bg-white mt-4 mb-5">

            <div class="row pt-3">
                <div class="col-12 text-center contact_margin_svnit ">
                    <div class="fh5co_heading float-right pr-2" style="color: rgb(44,117,152)">
                        <h5>تماس با ما
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-md-6 pr-4">
                    <form method="POST">
                        <div class="col-12 pb-3">
                            <input type="text" class="form-control fh5co_contact_text_box" placeholder="نام و نام خانوادگی" name="familyandname" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" class="form-control fh5co_contact_text_box" placeholder="ایمیل " name="email" />
                        </div>
                        <div class="col-6 py-3">
                            <input type="text" class="form-control fh5co_contact_text_box" placeholder="شماره تماس" name="phone" />
                        </div>
                        <div class="col-12 py-3">
                            <input class="form-control fh5co_contacts_message" placeholder="پیام شما" name="payam" />
                        </div>
                        <button class="col-12 py-3 text-center"> <strong>ارسال پیام</strong> </button>
                    </form>
                </div>
                <div class="col-md-6 align-self-center float-right">
                    <iframe class="float-right" style="width:530px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.4086878948824!2d51.445908814875004!3d35.740758434313115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e03f23ef71155%3A0x50c1ae57983a32eb!2sK.N.Toosi+University+of+Technology%2C+Faculty+of+Computer+and+Electrical+Engineering!5e0!3m2!1sen!2s!4v1545157440104" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
            </div>

        </div>

    </div>


    <div class="w-100 bg-white" id="contact">
        <div class="container-fluid">

            <div class="row pb-2 pt-4">
                <div class="col-md-6 text-justify " style="font-size: 14px; padding-left: 12%; padding-top: 2.5%;">
                    <ul class="footer">
                        <li class="footeritem pl-4 pr-4"><a href="index.php">تماس با ما</a></li>
                        <li class="footeritem pl-4 pr-4"><a href="../rahnama.php">راهنمای استفاده از تیکتو</a></li>
                        <li class="footeritem pl-4 pr-4"><a href="../ayande.php">فیلم های آینده</a></li>
                        <li class="footeritem pl-4 "><a href="../darbareMa.php">درباره تیکتو</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-center " style="padding-right: 39%;">

                    <a href="../index.php"><img src="imgs/logo.png" class="img-fluid" alt="" style="width: 100px;"></a>
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
                    <a href="https://www.facebook.com/login/" target="_blank"><i class="fa fa-facebook fa-icons2" data-toggle="tooltip" title="Contact us via Facebook"></i></a>
                </li>
                <li class="footer-icon d-inline-block mr-1 ml-1 " style="background-color: #4da7de;">
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-icons2" data-toggle="tooltip" title="Contact us via Twitter."></i></a>
                </li>
                <li class="footer-icon d-inline-block mr-1 ml-1 " style="background-color: #6d34ac;">
                    <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram fa-icons2" data-toggle="tooltip" title="Contact us via Instagram."></i></a>
                </li>
            </ul>
        </div>

        <div class="row justify-content-center text-center">
            <p>
                <a href="mailto:ticketto@kntu.ac.ir" class="vorudlink" style="text-decoration: none;">ticketto@kntu.ac.ir</a>
                <br>
                <a href="tel:989126977637+" class="vorudlink" style="text-decoration: none;">989126977637+</a>

            </p>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<?php else: ?>
<script>
    window.location.href = '../index.php';
</script>
<?php endif; ?>

</html>