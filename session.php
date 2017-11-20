<?php

include 'process.php';
$email=$_SESSION['email'];
if(!isset($email)){
    header("location:index.php");

}


?>