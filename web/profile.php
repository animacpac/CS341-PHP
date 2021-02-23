<?php include("header.php"); 
session_start();
$username=$_SESSION['username'];
$fname=$_SESSION['fname'];
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
if(mysql_num_rows($result)>0)
{
    echo = $fname
}
else
{
    echo "No record found";
}
?>


</body>
</html>