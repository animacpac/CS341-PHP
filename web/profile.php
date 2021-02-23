<?php include("header.php"); 
session_start();
$username=$_SESSION['username'];
$fname='fname';
?>
  


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<?php
include "dbConnect.php";

$query = "SELECT fname, lname, street_name, city_name, zipcode FROM users WHERE id = '$username' ";
$result = mysql_query($query);
$row=mysql_fetch_array($result);
while($row=mysql_fetch_array($result)){
    $uid=$row['fname'];
    echo $uid;
}
?>


</body>
</html>