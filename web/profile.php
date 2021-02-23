<?php include("header.php"); 
session_start();

$u_id=$_SESSION['username'];


?>
  

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>

<body>
<?php
include("dbConnect");

$db = get_db();

$sql = "SELECT id, fname, lname FROM users";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>