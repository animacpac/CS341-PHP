<?php


require("dbConnect.php");
$db = get_db();

$query = 'SELECT * FROM users';

$results = $db->query($query);

echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";






die(); 

?>