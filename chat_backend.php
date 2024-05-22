<?php 
include 'config.php';


$send=$_GET['sender_id'];
$receive=$_GET['receiver_id'];
$message=$_GET['message'];

$data="insert into chat(sender_id,receiver_id,message,sent_on) values('$send','$receive','$message',now())";
$res1=mysqli_query($connection,$data);
if($res1){
    #echo "<script>window.alert('Success'); window.location='Home.php'</script>";
}
else{
    die(mysqli_error($connection));
    #echo "<script>window.alert('Not Success'); window.location='Home.php'</script>";
}
?>