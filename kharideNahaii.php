<!--html code -->
<!doctype html>



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




<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login-style.css">

    <title>کد پیگیری خرید</title>
    <link rel="icon" href="imgs/logo.png">

</head>



<body>
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
  $teatr_or_movie =$_GET['movie_teatr'];
  if ($_GET['movie_teatr'] == '0'){
    $cinema_id  = $_GET['cinema_id'];
    $info_id = $_GET['infirmation_id'];

    $sql = "SELECT * FROM teatrwendsday where id ='$info_id'";
    $result = $conn->query($sql);
    $conn->query("SET CHARSET SET 'utf8'");
    while ($res = mysqli_fetch_array($result)) {
      $this_teatr_id = $res['teatr'];
      $saat = $res['saat'];
      $salon = $res['salon'];
    }

    $sql2 = "SELECT * FROM teatr where teatrid ='$this_teatr_id'";
    $result2 = $conn->query($sql2);
    $conn->query("SET CHARSET SET 'utf8'");
    while ($res2 = mysqli_fetch_array($result2) ) {
      $movie_name = $res2['name'];
      // code...
    }
    $sql3 = "SELECT * FROM cinema where cinemaid ='$cinema_id'";
    $result3 = $conn->query($sql3);
    $conn->query("SET CHARSET SET 'utf8'");
    while ($res3 = mysqli_fetch_array($result3) ) {
        $cinema_name = $res3['name'];

    }
      $peygiri_random = rand(1000,15000);

      $sql4 = "INSERT INTO user_blit_info (peygiri, user_email, info_id,teatr_or_movie)
      VALUES ('$peygiri_random', '$usr_email', '$info_id',$teatr_or_movie)";
      $result3 = $conn->query($sql4);
      $conn->query("SET CHARSET SET 'utf8'");
    echo"  <div class='w-100' style='padding-top:6%;'>
          <div class='container'>
              <div class='row justify-content-center text-justify pt-5'>
                  <div class='col-md-5 text-center pt-4 pb-4 pr-4 pl-4 form1'>

                      <div class='pt-3 pb-4' style='color:rgb(46, 139, 175);'>
                              <h6 class='pr-4 pl-4 pt-2 pb-2 ml-4 mr-4 text-white'
                                style='background-color: rgba(75,158,23,0.43); border-radius: 1vh;'>
                                  خرید شما با موفقیت انجام شد.</h6>
                      </div>
                      <div class='pb-2'>
                      <p><strong>$movie_name</strong></p>
                      <p>$cinema_name
                      <br>سالن $salon</p>
                      <p>چهارشنبه ۱۲ دی ماه
                      <br>ساعت $saat</p>
                      <p>کد پیگیری: <strong>$peygiri_random</strong></p>

                      </div>
                      <hr class='my-3'>

                      <a class='btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-3 mb-2 text-white'
                                     href='index.php' role='button'>بازگشت به صفحه اصلی
                      </a>

                  </div>
              </div>
          </div>
      </div>";
  }
  else {
    $cinema_id  = $_GET['cinema_id'];
    $info_id = $_GET['infirmation_id'];

        $sql = "SELECT * FROM  wendsday where id ='$info_id'";
        $result = $conn->query($sql);
        $conn->query("SET CHARSET SET 'utf8'");
        while ($res = mysqli_fetch_array($result)) {
          $this_movie_id = $res['movie'];
          $saat = $res['saat'];
          $salon = $res['salon'];
        }

        $sql2 = "SELECT * FROM movies where nameid ='$this_movie_id'";
        $result2 = $conn->query($sql2);
        $conn->query("SET CHARSET SET 'utf8'");
        while ($res2 = mysqli_fetch_array($result2) ) {
          $movie_name = $res2['name'];
          // code...
        }
        $sql3 = "SELECT * FROM cinema where cinemaid ='$cinema_id'";
        $result3 = $conn->query($sql3);
        $conn->query("SET CHARSET SET 'utf8'");
        while ($res3 = mysqli_fetch_array($result3) ) {
            $cinema_name = $res3['name'];

        }
        $peygiri_random = rand(1000,15000);
        $sql4 = "INSERT INTO user_blit_info (peygiri, user_email, info_id,teatr_or_movie)
        VALUES ('$peygiri_random', '$usr_email', '$info_id',$teatr_or_movie)";
        $result3 = $conn->query($sql4);
        $conn->query("SET CHARSET SET 'utf8'");
    echo "  <div class='w-100' style='padding-top:6%;'>
          <div class='container'>
              <div class='row justify-content-center text-justify pt-5'>
                  <div class='col-md-5 text-center pt-4 pb-4 pr-4 pl-4 form1'>

                      <div class='pt-3 pb-4' style='color:rgb(46, 139, 175);'>
                              <h6 class='pr-4 pl-4 pt-2 pb-2 ml-4 mr-4 text-white'
                                style='background-color: rgba(75,158,23,0.43); border-radius: 1vh;'>
                                  خرید شما با موفقیت انجام شد.</h6>
                      </div>
                      <div class='pb-2'>
                      <p><strong>$movie_name</strong></p>
                      <p>$cinema_name
                      <br>سالن $salon</p>
                      <p>چهارشنبه ۱۲ دی ماه
                      <br>ساعت $saat</p>
                      <p>کد پیگیری: <strong>$peygiri_random</strong></p>

                      </div>
                      <hr class='my-3'>

                      <a class='btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-3 mb-2 text-white'
                                     href='index.php' role='button'>بازگشت به صفحه اصلی
                      </a>

                  </div>
              </div>
          </div>
      </div>";
  }





   ?>
<script>
</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='js/bootstrap.min.js'></script>
</body>

</html>
