<?php

	$errors = array();
	$signup = false;

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

$stmt = $db->prepare( "INSERT INTO users ( name,familyname,password,email) VALUES ( ?, ? ,?,?)" );
$stmt->bindValue( 1, $_POST[ 'name' ] );
$stmt->bindValue( 2, $_POST[ 'familyname' ] );
$stmt->bindValue( 3, password_hash( $_POST[ 'password' ], PASSWORD_BCRYPT ) );
$stmt->bindValue( 4, $_POST[ 'email' ] );
$stmt->execute();

$signup = true;

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login-style.css">

    <title>عضویت کاربر</title>
    <link rel="icon" href="imgs/logo.png">

</head>

<body>
<?php if( $signup == false ) : ?>

<?php

?>

<form method="POST">
<div class="w-100">
    <div class="container pt-4 ">
        <div class="row justify-content-center text-justify pt-3">
            <div class="col-md-5 text-center pt-3 pb-4 pr-4 pl-4 form1">
                <div>
                    <a href="index.php"> <img src="imgs/logo.png" class="img-fluid zoom" title="بازگشت به صفحه اصلی" alt=""
                                              style="width: 130px;"></a>
                </div>
                <div class="text-justify pt-2" style="color:rgb(46, 139, 175);">
                    <p>
                        به جمع ما خوش آمدید.
                    </p>
                    <hr class="my-3">
                </div>
                <form class="needs-validation" name="myForm" onsubmit="return validateForm();" novalidate >
                    <div class="pt-2 pb-3">
                        <input type="text" class="form-control" id="name" placeholder="نام" name="name" required>
                        <div class="invalid-feedback text-justify" id="nametext">
                            لطفا نام خود را وارد کنید.
                        </div>
                    </div>
                    <div class="pb-3">
                        <input type="text" class="form-control" id="lastname" placeholder="نام خانوادگی" name="familyname"
                               required>
                        <div class="invalid-feedback text-justify">
                            لطفا نام خانوادگی خود را وارد کنید.
                        </div>
                    </div>
                    <div class="pb-3">
                        <input type="email" class="form-control" id="email"
                               aria-describedby="emailHelp" placeholder="ایمیل" name="email" required>
                        <div class="invalid-feedback text-justify" id="emailtext">
                        </div>
                    </div>
                    <div class="pb-3">
                        <input type="password" class="form-control" id="password" placeholder="رمز ورود" name="password" required>
                        <div class="invalid-feedback text-justify">
                            لطفا رمز ورود خود را وارد کنید.
                        </div>
                    </div>
                    <div class="pb-3">
                        <input type="password" class="form-control" id="confirm_password" placeholder="تکرار رمز عبور" name="password_confirmation"
                               required>
                        <div class="invalid-feedback text-justify" id="passtext">
                            لطفا رمز عبور خود را مجددا وارد کنید.
                        </div>
                    </div>
                    <button type="submit" id="submitbtn" class="btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-3 text-white">
                        <strong>عضویت</strong>
                    </button>
                    <div class="text-center pt-3">
                        <p>
                            حساب کاربری دارید؟
                            <a href="vorud.php " class="vorudlink" style="text-decoration: none; ">ورود به سایت</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    //fields validation
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

    // confirm password
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password")
        , name = document.getElementById("name");

    document.getElementById("submitbtn").onclick = function validatePassword() {
        // inputAlphabet();
        if (confirm_password.value.length == 0) {
            document.getElementById("passtext").innerText = "لطفا رمز عبور خود را مجددا وارد کنید.";
        }
        else if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            document.getElementById("passtext").innerText = "تکرار رمز عبور با رمز عبور یکسان نمیباشد.";
        } else {
            confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    //email validation
    function validateForm() {
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if(x.length==0){
            document.getElementById("emailtext").innerText = "لطفا ایمیل خود وارد کنید.";
        }
        else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            document.getElementById("emailtext").innerText = "ایمیل وارد شده صحیح نمیباشد.";
            return false;
        }
    }

    //name validation
    function inputAlphabet() {
        var alphaExp = /^[a-zA-Z]+$/;
        if (!(name.value.match(alphaExp))) {
            document.getElementById("nametext").innerText = "نام وارد شده صحیح نمیباشد.";
        }
    }
</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</form >
<?php else: ?>
    <script>
        window.location.href = 'vorudAFTERozviat.php';

    </script>
    <?php endif; ?>
    
</body>

</html>