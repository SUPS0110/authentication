<?php session_start();
if( isset($_SESSION['loggedin'])!=1){
    header("location:login.php");
}
?>