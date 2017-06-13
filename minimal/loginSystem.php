<?php

    session_start();

    require('../dbconfig/config.php');


    if(isset($_POST['signIn'])) {

        $username                     = $con->quote($_POST['username']);
        $password                     = $con->quote(sha1($_POST['password']));


        $sql                          = "SELECT * FROM user WHERE username = $username AND password = $password ";
        $result                       = $con->query($sql)->fetch(); 

        if($result != false) {

            $_SESSION['username']     = $_POST['username'];
            $_SESSION['user_id']      = $result['id'];
            $_SESSION['role']         = $result['role'];

               // header('location: index.php');
        } else {

            echo '<script type="text/javascript"> alert("The credentials that were entered are not valid!") </script> ';
            header("Location:login.php");


        }
    }


  if(isset($_POST['remember_me']) && ($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')) {

    $hour = time() + 86400 * 30;
    setcookie('CookieMonster', $_POST['username'], $hour, "/");
  }

  if(isset($_COOKIE['CookieMonster'])) {

    $_SESSION['username'] = $_COOKIE['CookieMonster'];

  }
  // verificam daca cookie este setat
  // recuperam cookie
  // punem cookie la $_SESSION['username']

?>