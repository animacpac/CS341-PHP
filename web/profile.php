<?php include("header.php"); 
session_start();
$username=$_SESSION['username'];

?>
  


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<? $username?>
<?php
include "dbConnect.php";

$stmt = $db->prepare('SELECT id, username, fname, lname, street_name, city_name FROM users WHERE username=:username');
$stmt->execute(array(':username' => $username));
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row )
        {
         echo '<strong>Username:</strong>     ' . $row['username'] . '<p><strong>Full Name:</strong>     ' . $row['fname'] . ' ' . $row['lname'] . '<p><strong>Address:</strong>     ' . $row['street_name'] . '</br>'. $row['city_name'].'</a>';
         echo '<br><br>';
        }
?>


</body>
</html>