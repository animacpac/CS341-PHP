<?php
include('dbConnect.php');
session_start();
$user_check=$_SESSION['username'];
$ses_sql=mysqli_query($con,"select username,id from users where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['username'];
$loggedin_id=$row['id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
 header("Location: signin.php");
}
?>