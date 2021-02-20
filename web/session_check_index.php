<?php
    session_start();
    require 'dBconnect.php';
    if(isset($_POST['username'])) { 
    // check if the username has been set
        header("location:index.php");
    }
?>