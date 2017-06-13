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
		Login
	</title>

</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" method="POST" action="index.php">
                <input name="username" type="text" placeholder="Username" />
                <input name="password" type="password" placeholder="Password" />
                <input name="signIn" type="submit" value="Sign In" class="btn btn-primary btn-sm" />
                <input id="onClickRegister" type="submit" value="Sign Up" class="btn btn-info btn-sm" />
                <input id="backToHome" type="submit" value="Back" class="btn btn-danger btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input name="remember_me" type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="forgotpassword.php" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    document.getElementById("onClickRegister").onclick = function(event){
        event.preventDefault()
        window.location.href = "register.php";
    }


        document.getElementById("backToHome").onclick = function(event){
        event.preventDefault()
        window.location.href = "index.php";
    }
</script>


</body>

</html>




