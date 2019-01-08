<?php
session_start();
$req_changpass = password_hash($_POST['password'] ,PASSWORD_BCRYPT);
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

$sql = "UPDATE users SET password ='$req_changpass'  where email ='$usr_email'";
$result = $conn->query($sql);
$conn->query("SET CHARSET SET 'utf8'");
Redirect('profile-changePass.php' , false);
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}






?>
