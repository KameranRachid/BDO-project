<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "minimal";
$dsn = "mysql:host=$servername;dbname=$dbName";

try {
    $con = new PDO($dsn, $username, $password, array (
	    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	));
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function debug($infoToDeBug, $die = false){
	if(is_array($infoToDeBug)){
		echo '<pre>';
		print_r($infoToDeBug);
		echo '</pre>';
	}else{
		var_dump($infoToDeBug);
	}

	if($die == true) {
		die();
	}
	
}
?>