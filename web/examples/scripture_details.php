<?php include "../php/db_access.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>Scripture details</h1> <br><br>';
        
        $id = $_GET['id'];

        //Prepared statement to get scripture details 
        $stmt = $db->prepare('SELECT * FROM scriptures WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>';
         echo ' - "' . $row['content'] . '"'; 
         echo '<br><br>';
        }
 ?>