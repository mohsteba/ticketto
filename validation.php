<?php

// change user informartion
session_start();
$req_name = $_POST['name'];
$req_familyname = $_POST['lastname'];
$req_adr = $_POST['address'];
$req_phonnum = $_POST['phonenumber'];


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
$usr_email = $_SESSION['email'];

$sql = "UPDATE users SET name='$req_name' , familyname='$req_familyname' , adress='$req_adr' , phone='$req_phonnum' where email ='$usr_email'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
Redirect('profile-edit.php' , false);
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}


?>
