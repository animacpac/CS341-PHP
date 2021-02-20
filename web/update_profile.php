<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['username'];
    if(isset($_POST)){
        require 'dbConnect.php';
            
     
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $user_address=$_REQUEST['user_address'];
        $user_country=$_REQUEST['user_country'];
      
        

        $sql3="UPDATE user SET fname='$fname',lname='$lname',user_profession='$user_profession'
        ,user_address='$user_address',email='$email'
        ,password='$password',user_country='$user_country' WHERE username = '$temp'";

            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:edit_profile.php?username=$temp&request=profile-update&status=success");
    }    
?>