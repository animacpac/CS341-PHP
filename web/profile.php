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
echo $username
$query = "SELECT fname, lname, street_name, city_name, zipcode FROM master WHERE id = '$username' ";
$result = mysql_query($query);
$row=mysql_fetch_array($result);
while($row)
 {
  $uid=$row[0];

  echo $uid;

   }
?>


</body>
</html>