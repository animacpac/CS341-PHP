<?php include("header.php"); 
session_start();
$username=$_SESSION['username'];
require("dbConnect");

$db = get_db();

?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<?php


try
{
	
	$statement = $db->prepare('SELECT id, fname, lname, street_name, city_name FROM users');
	$statement->execute();

	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['fname'] . ' ' . $row['lname'] . ':';
		echo $row['street_name'] . '</strong>' . ' - ' . $row['city_name'];
		
		echo '</p>';
	}


}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}



?>


</body>
</html>