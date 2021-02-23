<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>
  
<?php


require("dbConnect.php");
$db = get_db();

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



	
	$statement = $db->prepare('SELECT id, username, fname, lname, street_name FROM users');
	$statement->execute();

	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['username'] . ' ' . $row['fname'] . ':';
		echo $row['lname'] . '</strong>' . ' - ' . $row['street_name'];
		echo '<br />';
		

		$stmtTopics = $db->prepare('SELECT name FROM topic t'
			. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
			. ' WHERE st.scriptureId = :scriptureId');

		$stmtTopics->bindValue(':scriptureId', $row['id']);
		$stmtTopics->execute();

	
		
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