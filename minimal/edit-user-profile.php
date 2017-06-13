<?php 
	session_start();
    require('../dbconfig/config.php');
?>




<!DOCTYPE html>
<html>
<head>

	<title>User Profile</title>

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
      <link href="../assets/css/application-minimal.css" rel="stylesheet">
      <link href="../assets/css/edit-user-profile.css" rel="stylesheet">

</head>
<body>

<div class="container">
<br>
<br>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">

                <?php if(isset($_SESSION['username'])): ?>

                	<div>
        				<img src="../assets/img/testicon.png" alt="Texto Alternativo" class="img-circle img-thumbnail">
        				<h2><?php echo $_SESSION["username"];?></h2>
        			</div>

        			<?php endif; ?>

        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	<form role="form"  method="POST" action="">
			<h2>Edit your profile</h2>
			<hr class="colorgraph">
			<div class="row">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="cpassword"  class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6">
				<input name="save" type="submit" id="SaveButton" value="Save" class="btn btn-primary btn-sm" /></div>
			</div>
		</form>
	</div>
</div>

</div>
        </div>
     </div>       
</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>


</body>
</html>

<?php 

if(isset($_POST['save'])) {

	$username 					= $con->quote($_SESSION['username']);
	
	$email                      = $con->quote($_POST['email']);

    $password                   = $con->quote(sha1($_POST['password']));

    $cpassword                  = $con->quote(sha1($_POST['cpassword']));

    $sql 						= "SELECT email, password FROM user WHERE email = $email";

    $result						= $con->query($sql)->fetch();

    if($password == $cpassword) {

    	$sql 					= "UPDATE user SET email=$email, password=$password WHERE username=$username";

    	$con->exec($sql);

        header('location: index.php');

        echo '<script type="text/javascript"> alert("User information successfully changed!") </script> ';
    } else {

    	echo '<script type="text/javascript"> alert("OOOOPPPPSSSSS") </script> ';
    }

}

?>
