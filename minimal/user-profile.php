<?php
session_start();
require('../dbconfig/config.php');

function get_user_data($con){

	$username 			= $_SESSION['username'];

	$sql 				= "SELECT username, email, class FROM user WHERE username = '$username' ";

	$result 			= $con->query($sql)->fetch();

	if ($result != false) { 

		$username 			= $_SESSION['username'];

	} else {
	    $result 		= "0 results";
	}


	return $result; 

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
	    <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
	    <link href="../assets/css/application-minimal.css" rel="stylesheet">
	    <link href="../assets/css/user-profile.css" rel="stylesheet">

	    <style>
	    	#return-home {
	    		margin-top: 20px;
	    		width: 120px;
	    		font-size: 20px;
	    		margin-bottom: 10px;
	    		background-color: #1E90FF;
	    	}
	    </style>
</head>
<body>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="../assets/img/testicon.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
				<!--Username is displayed on the left panel -->
				<?php if(isset($_SESSION['username'])): ?>

					<div class="profile-usertitle-name">

						<p><?php echo $_SESSION["username"];?></p>

					</div>

					

					<div class="profile-usertitle-job">
						<p><?php echo $_SESSION["role"]; ?></p>
					</div>

					<?php endif; ?>
				</div>
				<!-- END SIDEBAR USER TITLE -->

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="edit-user-profile.php">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>

			<div><input id="return-home" type="submit" value="Home" class="btn btn-info btn-sm" /></div>

		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   You can find your none interesting information down below.

			   	<?php 
								$to_show = get_user_data($con);

								echo "<br/> <hr> Email: {$to_show['email']} <hr> Class: {$to_show['class']} <hr> ";

								?>
            </div>

		</div>
	</div>
</div>

<script type="text/javascript">
    
    document.getElementById("return-home").onclick = function(event){
        event.preventDefault()
        window.location.href = "index.php";
    }
</script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>

</body>
</html>