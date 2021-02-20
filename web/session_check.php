<?php
    session_start();
    require 'dbConnect.php';
    if(!$_SESSION['username']){
        header("location:login.php?session=notset");
    }
?>