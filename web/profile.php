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




while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo $stmt['fname'];
}
?>


</body>
</html>