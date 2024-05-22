<?php 

session_start();


$data=$_SESSION['username'];
if($data==''){
    echo "<script>window.alert('please login to access');window.location='index.php';</script>";

}
else{
    echo '';
}
?>