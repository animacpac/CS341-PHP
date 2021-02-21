
<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<body>

<?php
require("dbConnect.php");
$db = get_db();

$query = 'SELECT * FROM users';

$results = $db->query($query);

echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";

?>

</body>
</html>