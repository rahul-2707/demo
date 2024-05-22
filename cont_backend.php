<?php 
include 'config.php';

$name=$_GET['name'];
$contact_no=$_GET['contact_no'];
$user_id=$_GET['user_id'];


$query="insert into contacts(name,contact_no,user_id,createdon_date) values('$name','$contact_no','$user_id',now())";
$result=mysqli_query($connection,$query);

if($result){
    echo "<script>window.alert('add contact successfully');window.location='Home.php';</script>"; 
}
else{
    die(mysqli_error($connection));
   # echo "<script>window.alert('sorry not enable to contact');window.location='Home.php';</script>"; 
}
?>