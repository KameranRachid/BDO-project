<?php 

    session_start();

    require('../dbconfig/config.php');	
?>

<?php 

if (isset($_GET["email"]) && isset($_GET['token'])) {


	$email                      = $con->quote($_GET['email']);
	$token                      = $con->quote($_GET['token']);

	$data = "SELECT id FROM user WHERE email = $email AND token = $token";
    $dataResult = $con->query($data)->fetch();

    if($dataResult != false) {

    	$str 						= "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
		$str 						= str_shuffle($str);
		$str 						= substr($str, 0, 15);
		$password 					= sha1($str);

		$con->exec("UPDATE user SET password = '$password', token='' WHERE email=$email");
    }
}

?>

    <!-- <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
    <link href="../assets/css/application-minimal.css" rel="stylesheet">	
    <link rel="stylesheet" type="text/css" href="../assets/css/reset-password.css">
    <script type="text/javascript" src="../assets/js/login.js"></script>


	<title>
		Reset Password
	</title>

</head>

<body>


<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    <?php if(isset($str)){
					echo "Your new password is: $str";
				} else {
					echo "The password has already been sent. Please check the link that was provided to your email inbox!";
				}

				?></p>

                <div>
                    <form action="" class="text-center">
                        <input id="backToLogin" type="submit" value="Back" class="btn btn-info btn-sm" />
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    
    document.getElementById("backToLogin").onclick = function(event){
        event.preventDefault()
        window.location.href = "login.php";
    }
</script>

</body>

</html>