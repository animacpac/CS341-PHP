<?php include("header.php"); 
session_start();
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
Welcome: <?php echo 'fname' ?>

</body>
</html>