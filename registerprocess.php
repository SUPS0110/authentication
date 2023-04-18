<?php
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Connecton failed");
}
$username=$_POST['username'];
$password=$_POST['password'];
$hashpassword=md5($password);
$sql="INSERT INTO USERTABLE set username='$username', password='$hashpassword';";
$res=$conn->query($sql);
if($res==TRUE){
    header("location:login.php");
}
else{
    echo "insertion failed";
}
?>