<?php
session_start();

	$signin = false;

	if( isset( $_GET[ 'signout' ] ) ) {
		unset( $_SESSION[ 'email' ] );
	}

	if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
		$dsn = 'mysql:dbname=acount;host=localhost;port=3306';
		$username = 'root';
		$password = '';

		try {
			$db = new PDO( $dsn, $username, $password );
			$db->exec( "SET CHARACTER SET utf8" );
} catch( PDOException $e ) {
die( 'رخداد خطا در هنگام ارتباط با پایگاه داده:<br>' . $e );
}

$stmt = $db->prepare( "SELECT * FROM users where email = ?" );
$stmt->bindValue( 1, $_POST[ 'email' ] );
$stmt->execute();
$user = $stmt->fetch( PDO::FETCH_OBJ );

if( $user && password_verify( $_POST[ 'password' ], $user->password ) ) {
$signin = true;
$_SESSION[ 'email' ] = $user->email;
}
}
?>

<!--html code -->
<!doctype html>
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

    <title>ورود کاربر</title>
    <link rel="icon" href="imgs/logo.png">

</head>

<body>
<?php if( ! isset( $_SESSION[ 'email' ] ) ) : ?>
<form method="POST">
    <div class="w-100">
        <div class="container pt-5">
            <div class="row justify-content-center text-justify pt-5">
                <div class="col-md-5 text-center pt-4 pb-4 pr-4 pl-4 form1">
                    <div>
                        <a href="index.php"> <img src="imgs/logo.png" class="img-fluid zoom" title="بازگشت به صفحه اصلی" alt=""
                                                   style="width: 130px;"></a>
                    </div>
                    <div class="text-justify pt-2" style="color:rgb(46, 139, 175);">
                        <p>
                            خوش آمدید.
                        </p>
                        <hr class="my-3">
                    </div>
                    <form class="needs-validation" name="myForm" onsubmit="return validateForm();" novalidate >
                    
                    <div class="pb-3">
                        <input type="email" class="form-control" id="email"
                               aria-describedby="emailHelp" placeholder="ایمیل" name="email" required>
                        <div class="invalid-feedback text-justify" id="emailtext">
                        </div>
                    </div>
                        
                        <div class="form-group pb-3">
                            <input type="password" class="form-control pr-3 pb-4 pt-3" placeholder="گذرواژه"
                                   name="password" id="password" required>
                            <span id="eye" class="fa fa-fw fa-eye-slash field-icon" onclick="eyeFunction4()"></span>
                            <div class="invalid-feedback text-justify">
                            لطفا رمز ورود خود را وارد کنید.
                            </div>
                        </div>
                
                    <button type="submit" id="submitbtn" class="btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-3 text-white">
                            <strong>ورود</strong>
                        </button>
<!--
                        <div class="pt-3 pb-2">
                            <a href="forgetPass.php?forget_password" style="text-decoration: none; font-size: 14px;" class="text-danger">رمز خود را
                            فراموش کرده اید؟</a>
                        </div>
-->
                </form>
                    
                    
<!--
                    <form>
                        <div class="form-group pb-2 pt-2">
                            <input type="text" class="form-control pr-3 pb-4 pt-3" placeholder="ایمیل" name="email">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" class="form-control pr-3 pb-4 pt-3" placeholder="گذرواژه" name="password">
                        </div>
                        <button type="submit" id="submitbtn" class="btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-3 text-white">
                            <strong>ورود</strong>
                        </button>
                    </form>
-->
                </div>
            </div>
        </div>
    </div>
<script>
    function eyeFunction4() {
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
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</form>
<?php else: ?>
<?php echo $_SESSION[ 'email' ]; ?>
<script>
    window.location.href = 'index.php';
</script>
<?php endif; ?>
</body>

</html>
