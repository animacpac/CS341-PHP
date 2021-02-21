
<!DOCTYPE html>
<html>
<body>

<?php
require("dbConnect.php");
$db = get_db();

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, fname, lname FROM vm16";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>