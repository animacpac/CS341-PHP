<?php include "dbConnect.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profiles</title>
    </head>
    <body>
        <h1>To Be</h1>
    </body>
    <?php
       foreach ($db->query ('SELECT * FROM users') as $row )
       {
        echo '<b>' . $row['lname'] . ' ' . $row['fname'] . ':' . $row['street_name'] . '</b> - ';
        echo '"' . $row['city_name'] . '"'; 
        echo '<br><br>';
       }
    ?>
    <br>
    <br>
    <a href='manage.php'>Go to form</a>
    <br>
    
</html>