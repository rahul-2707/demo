<?php 

include 'config.php';

$c_id=$_GET['id'];

$drop="delete from contacts where cont_id='$c_id'";
$res=mysqli_query($connection,$drop);
if($res){
    echo "<script>window.alert('DELETE SUCCESSFULLY');window.location='Home.php';</script>";

}
else{
    
    echo "<script>window.alert(' CANNOT DELETE ');window.location='Home.php';</script>";
}
?>