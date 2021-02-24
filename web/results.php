<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Profiles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div>

<?php include "dbConnect.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $username = $_POST['profile_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT id, username, fname, lname, street_name, city_name FROM users WHERE username=:username');
        $stmt->execute(array(':username' => $username));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<strong>Username:</strong>     ' . $row['username'] . '<p><strong>Full Name:</strong>     ' . $row['fname'] . ' ' . $row['lname'] . '<p><strong>Address:</strong>     ' . $row['street_name'] . '</br>'. $row['city_name'].'</a>';
         echo '<br><br>';
        }
 ?>
 </div>
</body>
</html>