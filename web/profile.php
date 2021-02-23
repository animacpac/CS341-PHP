<?php include("header.php"); 
include "dbConnect.php";
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



?>


</body>
</html>