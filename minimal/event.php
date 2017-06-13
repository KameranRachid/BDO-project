<?php 

include 'loginSystem.php';
include 'navbar.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link href="../assets/css/bootstrap-datepicker.css" rel="stylesheet" />  


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link href="../assets/css/toolkit-minimal.css" rel="stylesheet">
        <link href="../assets/css/application-minimal.css" rel="stylesheet">
  
	<script src="../jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-datepicker.js"></script>
    <style>
        .confirm-events {

            margin-top:10px;
        }

        .event-structure{

            margin-bottom: 10px;
        }

        .event-description {

        	height: 200px !important;
        }

    </style>
    
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-sm-4"></div>
        	<div class="col-xs-12 col-sm-4">
            <p class="form-title">
                    Fill in the necessary details for the event.</p>
                <form method="POST" action="event.php">
        		  <div class="controls">
                      <span>Event Title: </span><input name="eventTitle" class="form-control event-structure" type="text" required />
                      <span>Event Description: </span><textarea name="eventDescription" class="form-control event-structure event-description" type="text" required /></textarea>
        		      <span>Date: </span><input name="eventDate" class="datepicker form-control" type="text" required />
                      <input name="eventSubmit" id="register-events"  type="submit" value="Submit" class="confirm-events btn btn-info btn-sm pull-right" />
        		  </div>
                  </form>
        	</div>
    		<div class="col-sm-4"></div>
        </div>
    </div>
	<script type="text/javascript">
	 $('.datepicker').datepicker({
         format: 'dd/mm/yyyy',
    	 weekStart:1,
    	 color: 'red'
	 });
	</script>
</body>
</html>

<?php 



	if(isset($_POST['eventSubmit'])) {

		$eventTitle					      = $con->quote($_POST['eventTitle']);
		$eventDescription				  = $con->quote($_POST['eventDescription']);
		//$eventDate					  = $con->quote($_POST['eventDate']);
		$userID						      = $con->quote($_SESSION['user_id']);

        // 'd/m/Y' => 'Y-m-d' '27/05/2017'
        $eventDate = DateTime::createFromFormat("d/m/Y", $_POST['eventDate'])->format('Y-m-d');

            $sql                          = "INSERT INTO event (event_name, event_description, date_created, user_id) 
                                             VALUES ($eventTitle, $eventDescription, '$eventDate', $userID)";

        $con->exec($sql);
        header('Location:eventList.php');



	}

?>
