<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];

$qry=mysqli_query($mysqli,"select * from Table users where username='$username'");
?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<div>

<h1>Show Profile</h1>
<?php
	$show = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `id`='".$_SESSION['username'];."'");
	while($row = mysqli_fetch_row($show)){
?>
	<tr class="even pointer">
		<td><?= $row['username'] ?></td>
		<td><?= $row['fname'] ?></td>
		<td><?= $row['lname'] ?></td>
		<td><?= $row['street_name'] ?></td>
		<td><?= $row['city_name'] ?></td>
	</tr>
<?php 
	}


</div>

</body>
</html>