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
$sql="SELECT * FROM usertable where username='$username' && password='$hashpassword' limit 1;";
$res=$conn->query($sql);
if($res->num_rows>0){
session_start();//initializes the session
$_SESSION['loggedin']=true;
header("location:hidden.php");
}
else{
    echo "user doesnot exists";
}
?>