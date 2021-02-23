<?php 
session_start();
include('dbConnect.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: signin.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $street_name=$_POST['street_name'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(mysqli_query($con,"INSERT INTO member(fname, lname, street_name,username, password)VALUES('$fname', '$lname','$street_name', '$username', '$password')")){ 
 header("location: signin.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: signin.php?remarks=error&value=$e");  
 }
}
?>