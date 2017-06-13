<?php 
    session_start();
    require('../dbconfig/config.php');
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
    <link rel="stylesheet" type="text/css" href="../assets/css/register.css">
    <script type="text/javascript" src="../assets/js/login.js"></script>


	<title>
		Register
	</title>

</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
            </div>
            <div class="wrap">
                <p class="form-title">
                    Register</p>
                <form class="login" method="POST" action="">
                <input name="username" type="text" placeholder="Username" required="true" />
                <input name="email" type="email" placeholder="Email" required="true" />
                <input name="password" type="password" placeholder="Password" required="true" />
                <input name="cpassword" type="password" placeholder="Confim Password" required="true" />

                <label>
                    <select class="form-control fontSize" name="class" required="true">
                        <option value="">--</option>
                        <option value="Warrior">Warrior</option>
                        <option value="Valkire">Valkire</option>
                        <option value="Ninja">Ninja</option>
                        <option value="Kunoichi">Kunoichi</option>
                        <option value="Musa">Musa</option>
                        <option value="Mahewe">Mahewe</option>
                        <option value="Berzerk">Berzerk</option>
                        <option value="Wizard">Wizard</option>
                        <option value="Witch">Witch</option>
                        <option value="Dark Knight">Dark Knight</option>
                        <option value="Striker">Striker</option>
                    </select>
                </label>

                <input name="register" type="submit" value="Register" class="btn btn-primary btn-sm" />
                
                </form>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php 

if(isset($_POST['register'])) {


    $username                   = $con->quote($_POST['username']);

    $email                      = $con->quote($_POST['email']);

    $password                   = $con->quote(sha1($_POST['password']));

    $cpassword                  = $con->quote(sha1($_POST['cpassword']));

    $class                      = $con->quote($_POST['class']);

    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){

        $isNotEmail = false;
        echo '<script type="text/javascript"> alert("Please add the correct credentials!") </script> ';

    }else{

        $isNotEmail = true;
    }


    if($password == $cpassword && $isNotEmail) {



        $sql                    = "SELECT * FROM user WHERE username = $username OR email = $email ";

        $result                 = $con->query($sql)->fetch(); 

        //$query_run  = mysqli_query($con, $query);



        if($result != false) {



                echo '<script type="text/javascript"> alert("User Already Exists!") </script> ';



        } else {



            $sql                = "INSERT INTO user (username, email, password, class) VALUES ($username, $email, $password, $class) ";


            $con->exec($sql);

            header('location: index.php');

            echo '<script type="text/javascript"> alert("User Successfully Registered!") </script> ';


        }

    } elseif ($password !== $cpassword){

        echo '<script type="text/javascript"> alert("Password does not match!") </script> ';

    }

}



?>