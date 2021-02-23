<?php include("header.php"); 
session_start();
?>
  


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>


<?php
	$show = mysqli_query($mysqli,"SELECT * FROM users WHERE username='".$_SESSION['username'];."'");
	while($row = mysqli_fetch_row($show)){
?>
	<tr class="even pointer">
		<td><?= $row[1] ?></td>
		<td><?= $row[2] ?></td>
		<td><?= $row[3] ?></td>
		<td><?= $row[4] ?></td>
		<td><?= $row[5] ?></td>
	</tr>
<?php 
	}
?>


</body>
</html>