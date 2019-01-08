
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
<!--    <link rel="stylesheet" href="css/login-style.css">-->

    <title>بلیت های من</title>
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
            <form method="get" action="searchResult.php">
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

<div class="w-100" style="padding-top:3%; padding-bottom:2%; background-color:rgb(27,62,101);">
    <div class="container">
        <div class="row text-justify justify-content-center"
             style=" margin-top: 12%; margin-bottom: 5%; ">
            <div class="col-md-3 text-justify ml-2 p-2 pb-5 rounded"
                 style="background-color: #fff; border: 1px solid white;">
                <h5 style="color:rgb(46, 139, 175);"><i class="fas fa-icons1 fa-user-circle pt-2"></i>
                    <strong>پروفایل من:</strong>
                </h5>
                <a href="profile-tickets.php" style="text-decoration: none;">
                    <h6 class="pr-4 pt-3 txthover" style="color: rgb(49,139,175);"><i
                            class="fas fa-icons3 fa-ticket-alt pl-1"
                            style="color: rgb(49,139,175);"></i>
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
                        <i class="fas fa-icons3 fa-ticket-alt pl-1"></i>
                        <strong>فهرست بلیت های من
                        </strong>
                    </p>
                </div>
                <table class="table table-striped table-bordered table-hover text-center">
                    <thead style="background-color: rgb(43,131,165);" class="text-white">
                    <tr>

                        <th>برنامه</th>
                        <th>محل</th>
                        <th>سانس</th>
                        <th>کد رزرو</th>
                    </tr>
                    </thead>
                    <tbody>
											<?php
											$servername = "localhost";
										  $username = "root";
										  $password = "";
										  $dbname = "acount";

										  // Create connection
										  $conn = new mysqli($servername,$username, $password,$dbname);
										  $conn->set_charset("utf8");
										  // Check connection
										  if ($conn->connect_error) {
										  die("Connection failed: " . $conn->connect_error);
										  }
											$usr_email = $_SESSION["email"];
										  $sql = "SELECT * FROM user_blit_info where user_email ='$usr_email'";
										  $result = $conn->query($sql);
											$conn->query("SET CHARSET SET 'utf8'");
											while ($res = mysqli_fetch_array($result)) {
													$id_info = $res['info_id'];
													$peygiri = $res['peygiri'];
												$sql2 = "SELECT * FROM wendsday where id ='$id_info'";
												 $result2 = $conn->query($sql2);
												 $conn->query("SET CHARSET SET 'utf8'");
												 while ($res2 =mysqli_fetch_array($result2) ) {
												 	// code...
														if ($res['teatr_or_movie']==1){
													$saat = $res2['saat'];
													$salon = $res2['salon'];
													$movie_id = $res2['movie'];
													$cinema_id = $res2['cinema'];
													$sql3 = "SELECT * FROM cinema where cinemaid ='$cinema_id'";
													 $result3 = $conn->query($sql3);
													 $conn->query("SET CHARSET SET 'utf8'");
													 while ($res3 =mysqli_fetch_array($result3)) {
														 $cinema_name = $res3['name'];
														 $sql4 = "SELECT * FROM movies where nameid ='$movie_id'";
															$result4 = $conn->query($sql4);
															$conn->query("SET CHARSET SET 'utf8'");
															while ($res4 =mysqli_fetch_array($result4)) {
																// code...
																$movie_name  = $res4['name'];
																echo "
	 														 			<tr>
	  	 																<td>$movie_name</td>
	  	 																<td>$cinema_name</td>
	  	 																<td>$saat</td>
	  	 																<td>$peygiri</td>
	  	 														</tr>";
															}

													 }

												 }
											 }

											}
											$sql5 = "SELECT * FROM user_blit_info where user_email ='$usr_email'";
											$result5 = $conn->query($sql5);
											$conn->query("SET CHARSET SET 'utf8'");
											while ($res5 = mysqli_fetch_array($result5)) {
													$id_info = $res5['info_id'];
													$peygiri = $res5['peygiri'];
												$sql6 = "SELECT * FROM teatrwendsday where id ='$id_info'";
												 $result6 = $conn->query($sql6);
												 $conn->query("SET CHARSET SET 'utf8'");

												 while ($res6 =mysqli_fetch_array($result6) ) {
													// code...
													if ($res5['teatr_or_movie']==0){
													$saat = $res6['saat'];
													$salon = $res6['salon'];
													$teatr_id = $res6['id'];
													$cinema_id = $res6['cinema'];
													$sql7 = "SELECT * FROM cinema where cinemaid ='$cinema_id'";
													 $result7 = $conn->query($sql7);
													 $conn->query("SET CHARSET SET 'utf8'");
													 while ($res7 =mysqli_fetch_array($result7)) {
														 $cinema_name = $res7['name'];
														 $sql8 = "SELECT * FROM teatr where teatrid ='$teatr_id'";
															$result8 = $conn->query($sql8);
															$conn->query("SET CHARSET SET 'utf8'");
															while ($res8 =mysqli_fetch_array($result8)){
																// code...
																$teatr_name  = $res8['name'];
																echo "
																		  <tr>
																			<td>$teatr_name</td>
																			<td>$cinema_name</td>
																			<td>$saat</td>
																			<td>$peygiri</td>
																	</tr>";
															}

													 }

												 }
											 }

											}



											?>

                    </tbody>
                </table>

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
