<?php
session_start();
if(session_destroy()){
    echo "<script> window.alert('logout successfully');window.location='index.php';</script>";

}




?>