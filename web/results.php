<?php require "dbConnect.php" ; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <?php
            $stmt = $db->prepare("SELECT  id, fname, lname, street_name, city_name  FROM users");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $content = '';
            foreach ($rows as $row )
            {
               
                echo '<br><br>' . $row['id'] . ' ' . $row['fname'] . ':' . $row['lname'] . '</b>';
                echo ' - "' . $row['street_name'] . '"'; 
                echo "Topics: " . $row['city_name'] . " ";
                              
                
            }
        ?>
    </body>
</html>
