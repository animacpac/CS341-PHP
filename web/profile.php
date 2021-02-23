<?php include("header.php"); 
session_start();
$username=$_SESSION['username'];

?>
  


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<?php
include "dbConnect.php";

$query = "SELECT fname, lname, street_name, city_name, zipcode FROM users WHERE username = '$username' ";
$result = mysql_query($query);
$row=mysql_fetch_array($result);
while($row){
    $uid=$row['fname'];
    echo $uid;
}
?>


</body>
</html>