<?php require "dbConnect2.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Scriptures in Database</title>
    </head>
    <body>
        <?php
            $stmt = $db->prepare("SELECT  s.fname, s.lname, s.street_name, s.city_name, FROM users");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $content = '';
            foreach ($rows as $row )
            {
                if($content != $row['fname']){
                    echo '<br><br>' . $row['fname'] . ' ' . $row['lname'] . ':' . $row['street_name'] . '</b>';
                    echo ' - "' . $row['city_name'] . '"'; 
                    
                    $content = $row['content'];
                }
                else{
                    echo $row['username'] . " ";
                }
            }
        ?>
    </body>
</html>