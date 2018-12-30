<?php



function getinfoforush(){
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
$sql="select * from movies order by forush desc";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
    $index=1;
    while ($movie=mysqli_fetch_array($result)){

        $movie_name =$movie['name'];
        $movie_week =$movie['week'];
        $movie_cinemanum = $movie['cinema_num'];
        $movie_forush = $movie['forush'];
        echo"
        <tr>
                <td>$index</td>
            <td><a>$movie_name</a></td>
            <td>$movie_week</td>
            <td>$movie_cinemanum</td>
            <td>$movie_forush میلیون</td>
        </tr>
        ";
        $index = $index + 1 ;



    }



}

function getresmovie(){
    if(isset($_GET['search'])){
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
$search = $_GET['search'];
$sql="select * from movies where name like N'%$search%' ";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
			while($movie=mysqli_fetch_array($result))
			{
        $movie_id =$movie['nameid'];
        $movie_name =$movie['name'];
        $movie_director = $movie['director'];
        $movie_image1 = $movie['image1'];

                      echo"
                        <div class='col-md-3 mb-4'>
                        <div class='card pb-1 '>
                            <a href='aboutmovie.php?movies_id=$movie_id'><img class='card-img-top img-effect' src='$movie_image1' alt='Card image cap'></a>
                            <a class='card-link' href='aboutmovie.php?movies_id=$movie_id'>
                                <div class='card-body pr-3'>
                                    <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                                        $movie_name
                                    </strong></p>
                                    <p class='card-text text-secondary' style='font-size: 12px;'>
                                         $movie_director
                                    </p>
                                </div>
                                <div class='pr-2 pl-2'>
                                    <a class='btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2'
                                       href='aboutmovie.php?movies_id=$movie_id' style='font-size: 12px; '
                                       role='button'>خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>
";
			}
        }
}



function getresteatr(){
    if(isset($_GET['search'])){
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
$search = $_GET['search'];
$sql="select * from teatr where name like N'%$search%' ";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
			while($movie=mysqli_fetch_array($result))
			{
        $movie_id =$movie['teatrid'];
        $movie_name =$movie['name'];
        $movie_director = $movie['director'];
        $movie_image1 = $movie['image1'];

                      echo"
                        <div class='col-md-3 mb-4'>
                        <div class='card pb-1 '>
                            <a href='aboutmovie.php?movies_id=$movie_id'><img class='card-img-top img-effect' src='$movie_image1' alt='Card image cap'></a>
                            <a class='card-link' href='aboutmovie.php?movies_id=$movie_id'>
                                <div class='card-body pr-3'>
                                    <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                                        $movie_name
                                    </strong></p>
                                    <p class='card-text text-secondary' style='font-size: 12px;'>
                                         $movie_director
                                    </p>
                                </div>
                                <div class='pr-2 pl-2'>
                                    <a class='btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2'
                                       href='aboutmovie.php?movies_id=$movie_id' style='font-size: 12px; '
                                       role='button'>خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>
";
			}
        }
}
function getblit($infoid){

    if (isset($_GET['cinema_id'])){

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
$time_info;
$cinemaidtable= $_GET['cinema_id'];
$sql = "SELECT * FROM cinema where cinemaid ='$cinemaidtable'";
$result = $conn->query($sql);
$info= $_GET['info_id'];
$sql2 = "SELECT * FROM wendsday where id ='$info'";
$result2 = $conn->query($sql2);
$conn->query("SET CHARSET SET 'utf8'");

while ($information = mysqli_fetch_array($result2)) {
      $movie_name_id = $information['movie'];
      $sql3 = "SELECT * FROM movies where nameid ='$movie_name_id'";
      $result3 = $conn->query($sql3);
      $conn->query("SET CHARSET SET 'utf8'");
      while ($res=mysqli_fetch_array($result3)) {
        $movie_name=$res['name'];
        $movie_img=$res['image1'];

      }
      $time_info = $information['saat'];
      $price_info = $information['price'];
}
}
 while($cinema=mysqli_fetch_array($result))
{
     $cinema_id = $cinema['cinemaid'];
     $cinema_name = $cinema['name'];
     $cinema_address = $cinema['address'];
        echo" <div class='row text-justify'>
                <div class='col-md-3 pr-4'>
                    <img src='$movie_img' class='img-fluid rounded img-thumbnail' style='height: 300px;'>
                </div>
                <div class='col-md-5 '>
                    <div class='pt-3 pr-0'>
                        <h5><strong>
$movie_name                        </strong></h5>
                        <h6 class='pt-3'>$cinema_name</h6>

                        <div class='text-secondary pt-2' style='font-size: 14px;'>
                            <p><i class='fas fa-map-marker-alt fa-icons5 pl-2' style='padding-right: 1%;'></i>
                                $cinema_address
                            </p>
                            <p><i class='fas fa-calendar fa-icons5 pl-2' style='padding-right: 0.8%;'></i>
                              تاریخ :‌چهارشنبه ۱۲ دی ماه
                            </p>
                            <p><i class='fas fa-clock fa-icons5 pl-2' style='padding-right: 0.5%;'></i>
                              ساعت $time_info
                            </p>
                            <p><i class='fas fa-money-bill-alt fa-icons5 pl-1'></i>
                            $price_info هزار تومان
                              </p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>

                </div>
            </div>";
    }
}

//function getsansandcinema(){
//
//}
function getfirstmoviedata(){
    if(isset($_GET['movies_id'])) {
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
$thismovie_id= $_GET['movies_id'];
$sql = "SELECT * FROM movies where nameid ='$thismovie_id'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
}
 while($movie=mysqli_fetch_array($result))
{
    $movie_id=$movie['nameid'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_productor = $movie['productor'];
    $movie_image1 = $movie['image1'];
    $movie_image2 =$movie['image2'];
    $movie_image3 =$movie['image3'];
    $movie_image4 =$movie['image4'];
    $movie_image5 =$movie['image5'];
    $movie_janr = $movie['janr'];
    $movie_time = $movie['time'];
    $movie_dateofproduct = $movie['dateofproduct'];
    $movie_other = $movie['other'];
    $movie_spanser  = $movie['spanser'];
    $movie_actor = $movie['actor'];
    $movie_date = $movie['date'];
     echo "<title>$movie_name</title>";

 }
}




function getsecondmoviedata(){
        if(isset($_GET['movies_id'])) {
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
$thismovie_id= $_GET['movies_id'];
$sql = "SELECT * FROM movies where nameid ='$thismovie_id'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
}
 while($movie=mysqli_fetch_array($result))
{
    $movie_id=$movie['nameid'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_productor = $movie['productor'];
    $movie_image1 = $movie['image1'];
    $movie_image2 =$movie['image2'];
    $movie_image3 =$movie['image3'];
    $movie_image4 =$movie['image4'];
    $movie_image5 =$movie['image5'];
    $movie_janr = $movie['janr'];
    $movie_time = $movie['time'];
    $movie_dateofproduct = $movie['dateofproduct'];
    $movie_other = $movie['other'];
    $movie_spanser  = $movie['spanser'];
    $movie_actor = $movie['actor'];
    $movie_date = $movie['date'];
     echo"<div class='w-100 bg-full' style='background-image: url($movie_image2);''>
    <div class='container' style='padding-top: 9%;'>
        <div class='row pb-5'>
            <div class='col-md-4'>
                <img src='$movie_image1' class='img-fluid' alt='' style='height:410px;'>
            </div>
            <div class='col-md-8 text-justify pt-1 pr-5 text-white'>
                <h1><strong>$movie_name</strong></h1>
                <div class='row'>
                    <div class='col-md-1.5 text-center pt-4 pr-3'>
                        <span class='pr-4 pl-4 pt-2 pb-2 ml-2 text-white filmtxt'>$movie_janr</span>
                        <span class='pr-3 pl-3 pt-2 pb-2 text-white filmtxt'>$movie_time</span>
                    </div>
                </div>
                <div class='row pt-5 pr-3'>
                    <p>$movie_director</p>
                </div>
                <div class='row pt-3 pr-3'>
                    <p>$movie_productor</p>
                </div>
                <div class='row pt-3 pr-3'>
                    <p>$movie_dateofproduct</p>
                </div>
                <div class='row pt-3 pr-3'>
                    <a class='btn bg-danger float-left text-white first-item pt-2 pb-2 pr-3 pl-3'
                       href='#kharid' role='button'>خرید بلیت</a>
                </div>
            </div>
        </div>
    </div>
</div>";
 }
}

function getthirmoviepartinfo(){
    if(isset($_GET['movies_id'])) {
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
$thismovie_id= $_GET['movies_id'];
$sql = "SELECT * FROM movies where nameid ='$thismovie_id'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
}
 while($movie=mysqli_fetch_array($result))
{
    $movie_id=$movie['nameid'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_productor = $movie['productor'];
    $movie_image1 = $movie['image1'];
    $movie_image2 =$movie['image2'];
    $movie_image3 =$movie['image3'];
    $movie_image4 =$movie['image4'];
    $movie_image5 =$movie['image5'];
    $movie_janr = $movie['janr'];
    $movie_time = $movie['time'];
    $movie_dateofproduct = $movie['dateofproduct'];
    $movie_other = $movie['other'];
    $movie_spanser  = $movie['spanser'];
    $movie_actor = $movie['actor'];
    $movie_date = $movie['date'];
     $movie_about = $movie['about'];
    echo"<div class='row text-justify bg-white pr-3 pl-3' style='padding-top: 6%; padding-bottom: 5%; border: 1px solid #eee; border-radius: 0.5vh;'>
            <div class='col-md-8'>
                <div style='padding-left:18%; line-height: 30px;'>
                    <h5><i class='fas fa-film fa-icons1 pl-2'></i>
                        <strong>درباره فیلم:</strong>
                    </h5>
                    <p>$movie_about</p>
                    <br>
                    <h6><i class='fas fa-user fa-icons1 pl-2'></i>
                        <strong>بازیگران:</strong>
                    </h6>
                    <p>$movie_actor</p>
                    <h6><i class='fas fa-users fa-icons1 pl-2 pt-3'></i>
                        <strong>سایر عوامل:</strong>
                    </h6>
                    <p> $movie_other</p>
                    <h6><i class='fas fa-file-video fa-icons1 pl-2 pt-3'></i>
                        <strong>پخش:</strong>
                    </h6>
                    <p>$movie_spanser</p>
                    <h6><i class='fas fa-calendar-alt fa-icons1 pl-2 pt-3'></i>
                        <strong>تاریخ اکران:</strong>
                    </h6>
                    <p>$movie_date</p>

                </div>
            </div>
            <div class='col-md-4'>
                <h6><i class='fas fa-images fa-icons1 pl-2 pb-3'></i>
                    <strong>تصاویری از فیلم</strong>
                </h6>
                <img id='myImg1' src='$movie_image3' class='myImg img-fluid pb-3' alt='' style='height: 250px;'>
                <img id='myImg2' src='$movie_image4' class='w-100 myImg img-fluid pb-3' alt='' style='height: 250px;'>
                <img id='myImg3' src='$movie_image5' class='myImg img-fluid pb-3' alt='' style='height: 250px;'>
            </div>
        </div>";
}
}

function getmovie(){

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

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
while($movie=mysqli_fetch_array($result))
{
    $movie_id=$movie['nameid'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_image1 = $movie['image1'];

                      echo"
                        <div class='col-md-3 mb-4'>
                        <div class='card pb-1 '>
                            <a href='aboutmovie.php?movies_id=$movie_id'><img class='card-img-top img-effect' src='$movie_image1' alt='Card image cap'></a>
                            <a class='card-link' href='aboutmovie.php?movies_id=$movie_id'>
                                <div class='card-body pr-3'>
                                    <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                                        $movie_name
                                    </strong></p>
                                    <p class='card-text text-secondary' style='font-size: 12px;'>
                                         $movie_director
                                    </p>
                                </div>
                                <div class='pr-2 pl-2'>
                                    <a class='btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2'
                                       href='aboutmovie.php?movies_id=$movie_id' style='font-size: 12px; '
                                       role='button'>خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>
";
}
}


function getfilm(){

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

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
while($movie=mysqli_fetch_array($result))
{
     $movie_id=$movie['nameid'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_image1 = $movie['image1'];



    echo"

         <div class='col-md-3 mb-4'>
                        <div class='card pb-1 '>
                            <a href='aboutmovie.php?movies_id=$movie_id'><img class='card-img-top img-effect' src='$movie_image1' alt='Card image cap'></a>
                            <a class='card-link' href='aboutmovie.php?movies_id=$movie_id'>
                                <div class='card-body pr-3'>
                                    <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                                        $movie_name
                                    </strong></p>
                                    <p class='card-text text-secondary' style='font-size: 12px;'>
                                         $movie_director
                                    </p>
                                </div>
                                <div class='pr-2 pl-2'>
                                    <a class='btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2'
                                       href='aboutmovie.php?movies_id=$movie_id' style='font-size: 12px; '
                                       role='button'>خرید بلیت</a>
                                </div>
                            </a>
                        </div>
                    </div>

    ";

}

}


function getsans($id_movie){
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
$sql = "SELECT * FROM wendsday where movie = '$id_movie'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
while($movie=mysqli_fetch_array($result))
{
  $id_information = $movie['id'];
  $id_cinema = $movie['cinema'];
  $sql2= "SELECT * FROM cinema where cinemaid = '$id_cinema'";
  $result2 = $conn->query($sql2);
  $conn->query("SET CHARSET SET 'utf8'");
  while ($cinema = mysqli_fetch_array($result2)) {
    $cinema_name = $cinema['name'];
    $salon_name = $movie['salon'];
    $time_ekran = $movie['saat'];
    echo"<div class='card'>
    <div class='card-header' id='headingOne' style='background-color: #eee;'>
        <p class='collapsed mb-2 pt-2' data-toggle='collapse'
           data-target='#collapseOne' aria-expanded='false'
           aria-controls='collapseOne'><img src='imgs/bagheketab.jpg' style='width: 60px;'
                                            class='ml-4'>
            $cinema_name
            <button class='btn cinema-btn pl-3 pr-3 pt-1 pb-1 float-left mt-3'>مشاهده سانس ها
            </button>
        </p>
    </div>
    <div id='collapseOne' class='collapse' aria-labelledby='headingOne'
	<div class='card-body pt-4 pb-5 pr-5'>
  <div class='row text-justify pr-5 pb-1'>
      <p><i class='far fa-calendar-alt fa-icons1 pl-1 pt-3'></i>
          <strong>چهارشنبه</strong>
          (97/08/05)
      </p>
  </div>
  <div class='row pb-2 text-center' style='padding-right: 5%;'>
  <div class='col-md-2.5 pr-1 pl-1'>
      <div class='card border-bottom rounded pastsans-panel pl-2 pr-2 pt-1' style='width: 150px; height: 170px;'>
          <!--<a class='card-link' href='index.php'>-->
              <div class='card-body pt-4'>
                  <h5 class='card-title text-danger' style='font-size: 17px;'>
                      $time_ekran</h5>
                  <p class='card-text text-dark'><strong>سالن $salon_name</strong><br>رایگان
                  </p>
                  <a href='kharid.php?cinema_id=$id_cinema&info_id=$id_information' class='btn blue-btn2 mt-3 text-white pr-3 pl-3'
                     style='font-size: 13px;'>خرید بلیت</a>
              </div>
        </a>
      </div>
  </div>
</div>
  </div>
    </div>
    </div>
    ";

  }



}
}


function getteatr(){
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

$sql = "SELECT * FROM teatr";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
while($teatrs=mysqli_fetch_array($result))
{
$teatrs_id=$teatrs['teatrid'];
$teatrs_name=$teatrs['name'];
$teatrs_director = $teatrs['director'];
$teatrs_image1 = $teatrs['image1'];

echo" <div class='col-md-3 mb-4'>
    <div class='card pb-1 '>


        <a href='aboutteatr.php?teatrss_id=$teatrs_id'><img class='card-img-top img-effect' src='$teatrs_image1' alt='Card image cap'></a>
        <a class='card-link' href='aboutteatr.php?teatrss_id=$teatrs_id'>
            <div class='card-body pr-3'>
                <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                        $teatrs_name
                    </strong></p>
                <p class='card-text text-secondary' style='font-size: 12px;'>
                    $teatrs_director
                </p>
            </div>
            <div class='pr-2 pl-2'>
                <a class='btn blue-btn float-left text-white first-item pt-2 pb-2 pr-4 pl-4 mb-2 ml-2' href='aboutteatr.php?teatrss_id=$teatrs_id' style='font-size: 12px; ' role='button'>خرید بلیت</a>
            </div>
        </a>
    </div>
</div>
";
}
}

function getassoonmovie(){

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

$sql = "SELECT * FROM assoonmovie";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
while($movie=mysqli_fetch_array($result))
{
    $movie_id=$movie['id'];
    $movie_name=$movie['name'];
    $movie_director = $movie['director'];
    $movie_image1 = $movie['image1'];

                      echo
                    "
                      <div class='col-md-3 mb-4'>
                        <div class='card pb-1 '>
                            <a href='aboutayande.php?assoonmovie_id=$movie_id'><img class='card-img-top img-effect' src='$movie_image1' alt='Card image cap'></a>
                            <a class='card-link' href='aboutayande.php?assoonmovie_id=$movie_id'>
                                <div class='card-body pr-3'>
                                    <p class='card-title' style='color: #1b1e21; font-size: 14px;'><strong>
                                        $movie_name
                                    </strong></p>
                                    <p class='card-text text-secondary' style='font-size: 12px;'>
                                        $movie_director
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
";
}
}









?>
