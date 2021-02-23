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
require("dbConnect");

$db = get_db();

try
{
	$query = 'SELECT fname, lname, street_name, city_name FROM users WHERE username = '$username'';
	$statement = $db->prepare($query);

	$fname = 'fname';



	echo "$fname";
}


?>


</body>
</html>