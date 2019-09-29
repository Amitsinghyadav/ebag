<?php
error_reporting(E_ERROR | E_PARSE);
//this file for setting connection and starting session
    $con=mysqli_connect("51.158.118.84","rootroot","root","portbag") or die(mysqli_error($con));
    session_start();
?>
