<?php
    session_start();
    require 'dbConnect.php';
    $username = mysqli_real_escape_string($database,$_REQUEST['username']);
    $current_user = $_SESSION['username'];
    if($_SESSION['username']){
        header("location:profile.php?username=$username&current_user=$current_user");
    }
?>