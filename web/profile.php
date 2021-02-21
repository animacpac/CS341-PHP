<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
require("dbConnect.php");
$db = get_db();

?>

<!DOCTYPE html>
<html>
<body>

<?php

$sql = "SELECT id, firstname, lastname FROM username";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}


?>


</body>
</html>