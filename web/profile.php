
<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>
<?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/

require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<div>

<h1>Profile</h1>

<?php


try
{
	// For this example, we are going to make a call to the DB to get the scriptures
	// and then for each one, make a separate call to get its topics.
	// This could be done with a single query (and then more processing of the resultset
	// afterward) as follows:

	//	$statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'
	//	. ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'
	//	. ' INNER JOIN topic t ON st.topicId = t.id');


	// prepare the statement
	$statement = $db->prepare('SELECT id, fname, lname, street_name, city_name FROM users');
	$statement->execute();

	// Go through each result
	if ($username = 'username')
	{
        $row = $statement->fetch(PDO::FETCH_ASSOC)
		echo '<p>';
		echo '<strong>' . $row['fname'] . ' ' . $row['lname'] . ':';
		echo $row['street_name'] . '</strong>' . ' - ' . $row['city_name'];
		echo '<br />';
		echo 'Topics: ';

		// get the topics now for this scripture
		
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