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
    echo '</br><br>'.'<h6>First Name </h6>'. $row['fname'] .'</br><br>'.'<h6>Last Name </h6>'.
    $row['lname']. '</br><br>'.'<h6>Street Name </h6>'. 
    $row['street_name'] .'</br><br>'.'<h6>City Name </h6>'. $row['city_name'].'<h6>Zipcode </h6>'. $row['zipcode'];
    
   

}


?>


</body>
</html>