<?php include "../php/db_access.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Scriptures</title>
    </head>
    <body>
        <h1>Scripture Resources</h1>
    </body>
    <?php
       foreach ($db->query ('SELECT * FROM scriptures') as $row )
       {
        echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b> - ';
        echo '"' . $row['content'] . '"'; 
        echo '<br><br>';
       }
    ?>
    <br>
    <br>
    <a href='form.php'>Go to form</a>
    <br>
    <a href='add_scripture_page.php'>Add Scripture</a>
</html>