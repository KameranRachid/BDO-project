<?php

    session_start();

    require('../dbconfig/config.php');

?>

<?php 
            

    if(isset($_POST['forgotPassword'])) {

        $email              = $con->quote($_POST['email']);

        $data               = "SELECT id FROM user WHERE email = $email";
        $dataResult = $con->query($data)->fetch();

        if ($dataResult != false) {

            $str            =  "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
            $str            =  str_shuffle($str);
            $str            =  substr($str, 0, 15);
            $url            =  "http://localhost/Kamiwebsite/minimal/resetPassword.php?token=$str&email=".$_POST['email'];

            mail($_POST['email'], "Reset Password", "To reset your password please visit the URL: <a target='blank' href='$url'>Reset me baby</a> \r\n\r\n\r\n\r\n <p>The service was provided by Aquiver Guild PVx. If any issue occurs please address to our Webmaster Kami-San.</p>", "From: localhost@yahoo.com\r\n" );

            $con->exec("UPDATE user SET token='$str' WHERE email=$email ");

            echo '<script type="text/javascript"> alert("Please check your email inbox!") </script>';

        } else {

            echo "PLease check  your credentials!";
            header("Location:forgotpassword.php");
        }
    }

?>

<!DOCTYPE html>
<html>
<head>


    <!-- <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
    <link href="../assets/css/application-minimal.css" rel="stylesheet">	
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <script type="text/javascript" src="../assets/js/login.js"></script>






	<title>
		Forgot Password
	</title>

</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Enter your email address to reset your password</p>
                <form class="login" method="POST" action="forgotpassword.php">
                <input name="email" type="text" placeholder="Email" />
                <input name="forgotPassword" type="submit" value="Submit" class="btn btn-primary btn-sm" />
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>
