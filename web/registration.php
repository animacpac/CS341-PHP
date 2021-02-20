<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['signup_button'])){
        $email=$_REQUEST['email'];
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $sql="INSERT INTO user(fname,lname,email,username,password,user_joindate,user_avatar) VALUES('$fname','$lname','$email','$username','$password',CURRENT_TIMESTAMP,'default.jpg')";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['username'] = $username;
        header('Location: update_profile_after_registration.php?username='.$username);
    }
?>