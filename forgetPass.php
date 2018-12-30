<?php 
if (isset($_GET['forget_password'])){
    
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login-style.css">

    <title>فراموشی رمز عبور</title>
    <link rel="icon" href="imgs/logo.png">

</head>

<body>
<form method="POST">
    <div class="w-100">
        <div class="container pt-5">
            <div class="row justify-content-center text-justify pt-5">
                <div class="col-md-5 text-center pt-4 pb-4 pr-4 pl-4 form1">
                    <div>
                        <a href="index.php"> <img src="imgs/logo.png" class="img-fluid zoom"
                                                   title="بازگشت به صفحه اصلی" alt=""
                                                   style="width: 130px;"></a>
                    </div>
                    <div class="text-justify pt-3" style="color:rgb(46, 139, 175);">
                        <p>
                            فراموشی رمز
                        </p>
                        <hr class="my-3">
                    </div>
                    <form>
                        <div class="form-group pb-3 pt-4 pr-3 pl-3">
                            <input type="text" class="form-control pr-3 pb-3 pt-3" placeholder="ایمیل" name="email" required>
                            <div class="invalid-feedback text-justify" id="emailtext">
                            </div>
                        </div>
                        <button type="submit" id="submitbtn" class="btn blue-btn pl-4 pr-4 pt-2 pb-2 mt-1 mb-3 text-white"
                                onclick="sendmailFunction()">
                            بازیابی رمز
                        </button>
                        <div id="snackbar1">رمز عبور به ایمیل شما ارسال شد.</div>
                        <!--<div id="snackbar2">ایمیل مورد نظر موجود نمیباشد.</div>-->
                    
                        </form>
                
            </div>
        </div>
    </div>
        </div>

    <script>
        function sendmailFunction() {
            var x = document.getElementById("snackbar1");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
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

        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password")
            , name = document.getElementById("name")
            , length = document.getElementById("length");


        //email validation
        function validateForm() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (x.length == 0) {
                document.getElementById("emailtext").innerText = "لطفا ایمیل خود وارد کنید.";
            }
            else if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                document.getElementById("emailtext").innerText = "ایمیل وارد شده صحیح نمیباشد.";
                return false;
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
</form>
</body>

</html>
