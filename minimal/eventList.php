<?php 
include 'loginSystem.php';
include 'navbar.php';

?>


<?php

$sql                    = "SELECT * FROM event";
$result                 = $con->query($sql)->fetchAll();

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

        #eventName {

            margin-bottom: 10px;
        }

    </style>
    
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-sm-4"></div>

            <?php if($_SESSION['role'] != 'Guardian' && $_SESSION['role'] != 'Newbie'): ?>
        	<div class="col-xs-12 col-sm-4 addEventMargin">
                <a href="event.php">Press here to add a new event</a>
        	</div>
        <?php endif; ?>
    		<div class="col-sm-4"></div>
        </div>
        <div class="row">
                
                    <?php if(!empty($result)): ?>
                        <?php foreach($result as $event): ?>
                            <div class="col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php echo $event['event_name']; ?></strong></h3>
                                </div>
                                <div class="panel-body">
                                    <p><?php echo $event['event_description']; ?></p>
                                    
                                </div>
                                <div class="panel-footer">
                                    <?php
                                        $eventDate = DateTime::createFromFormat("Y-m-d", $event['date_created'])->format("d-m-Y");
                                    ?>
                                    Event Date: <?php echo $eventDate; ?>
                                    <button data-event-id="<?php echo $event['id']; ?>" class="btn btn-info pull-right joinEvent">Join</button>
                                </div>
                            </div>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
        </div>
    </div>
</body>
</html>


<script type="text/javascript">
$( document ).ready(function(){

    $('.joinEvent').click(function(){ // when button is clicked
        $(this).html('Joined') // replace join with joined
            .css("background-color", "#3CB371");

        $.ajax({
          type: "POST",
          url: 'insertEventWithAjax.php',
          data: 'eventId=' + $(this).data('event-id'),
          success: function(){
            alert('success')
          }

        });
    });

});
</script>