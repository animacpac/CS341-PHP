  
<?php
    session_start();
    require 'dBconnect.php';
    $username = mysqli_real_escape_string($database,$_REQUEST['username']);
    if(!$_SESSION['user_username']){
        header("location:$username");
    }
?>