<?php 

session_start();

session_destroy(); //e ok 

if(isset($_COOKIE['CookieMonster'])) {

	setcookie('CookieMonster', "", time() - 86400 * 31);

}
// if cookie exist destroy.
header("Location:login.php");


?>