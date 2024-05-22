<?php 
include 'config.php';

$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$username=$_GET['username'];
$password=$_GET['password'];

$check="select * from login where username='$username' and password='$password'";
$res=mysqli_query($connection,$check);
$count=mysqli_num_rows($res);
if($count==0){
  
    $query="insert into register(name,email,contact,address,city,state,username) values('$name','$email','$contact','$address','$city','$state','$username')";
    $result=mysqli_query($connection,$query);

    $log_query="insert into login(username,password)values('$username','$password')";
    $ressult=mysqli_query($connection,$log_query);

    if($result){
        echo "<script> window.alert('Register success'); window.location='index.php';</script>";
    }
    else{
        echo "<script> window.alert('Sorry '); window.location='register.php';</script>"; 
        die(mysqli_error($connection));
    }


}
else{
    echo "<script>window.alert('Sorry you have alerdy an account');window.location='index.php';</script>";
}

?>