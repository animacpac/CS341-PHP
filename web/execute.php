<?php 
session_start();
include('dbConnect.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: profile.php?remarks=failed"); 
}else {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $street_name=$_POST['street_name'];
 $city_name=$_POST['city_name'];
 $zipcode=$_POST['zipcode'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(mysqli_query($con,"INSERT INTO users(fname, lname, street_name, city_name, zipcode, username, password)VALUES('$fname', '$lname', '$street_name', 'city_name', '$username', '$password')")){ 
 header("location: profile.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: profile.php?remarks=error&value=$e");  
 }
}
?>