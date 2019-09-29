<?php
//this file for setting connection and starting session
    $con=mysqli_connect("51.158.118.84:33060","root","root","portablebag") or die(mysqli_error($con));
    session_start();
?>
