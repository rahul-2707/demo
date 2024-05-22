<?php

include 'config.php';
session_start();
$user=$_POST['username'];
$password=$_POST['password'];

$check="select * from login where username='$user' and password='$password'";
$res=mysqli_query($connection,$check);

$count=mysqli_num_rows($res);
if($count==1){
    $_SESSION['username']=$user;
    $_SESSION['password']=$password;
     echo "<script> window.alert('login success'); window.location='Home.php';</script>";
}
else{
    echo "<script> window.alert('login fail'); window.location='index.php';</script>";
}

?>