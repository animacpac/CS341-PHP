<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Scripture and Topic List</title>
</head>

<body>
<div>

<h1>Scripture and Topic List</h1>

<?php


try
{



	
	$statement = $username->prepare('SELECT id, username, fname, lname, street_name FROM users');
	$statement->execute();

	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['username'] . ' ' . $row['fname'] . ':';
		echo $row['lname'] . '</strong>' . ' - ' . $row['street_name'];
		echo '<br />';
		
		
	}


}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

?>

</div>

</body>
</html>