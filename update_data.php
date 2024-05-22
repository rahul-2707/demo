<?php 
include 'config.php';

$c_id=$_GET['id'];
$name=$_GET['name'];
$contact=$_GET['contact'];


$data="update contacts set name='$name',contact_no='$contact' where cont_id='$c_id'";
$res=mysqli_query($connection,$data);
if($res){
    echo "<script>window.alert('UPDATE SUCCESSFULLY'); window.location='Home.php';</script>";
}
else{
   # die(mysqli_error($connection));
    echo "<script>window.alert('SORRY NOT UPDATED'); window.location='Home.php';</script>";
}

?>