<?php include "sr1.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>user description</h1> <br><br>';
        
        $id = $_GET['id'];

        //Prepared statement to get scripture details 
        $stmt = $db->prepare('SELECT * FROM note WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<b>' . $row['first_name'] . ' ' . $row['last_name'] . ':' . $row['userid'] . '</b>';
         echo ' - "' . $row['content'] . '"'; 
         echo '<br><br>';
        }
 ?>