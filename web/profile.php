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

<?php
include "dbConnect.php";
$db = get_db();

$stmt = $db->prepare('SELECT id, username, fname, lname, street_name, city_name FROM users WHERE username=:username');
$stmt->execute(array(':username' => $username));




while($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo '</br><br>'.'Welcome: '. $row['fname'];
    echo '</br><br>'.'<h3>First Name: </h3>'. $row['fname'] .'</br><br>'.'<h3>Last Name: </h3>'. $row['lname'];
    
   

}


?>


</body>
</html>