<?php include("header.php"); 
include("dbConnect.php")
session_start();
$username = $_SESSION['username'];
$qry=mysqli_query($mysqli,"SELECT * FROM users WHERE username='".$_SESSION['username'];."'");
?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<div>

<h1>Show Profile</h1>
Welcome: 

</body>
</html>