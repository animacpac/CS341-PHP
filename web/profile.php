<?php include("header.php"); 
session_start();

$u_id=$_SESSION['username'];
$qry=mysqli_query($mysqli,"select * from users where username='$u_id'");

?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<div>

<h1>Show Profile</h1>
Welcome: <?php echo $row["fname"]; ?>

</body>
</html>