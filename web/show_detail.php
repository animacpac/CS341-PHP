<?php include "dbConnect2.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>Profile Details</h1> <br><br>';
        
        $id = $_GET['id'];

        //Prepared statement to get scripture details 
        $stmt = $db->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<b>' . $row['fname'] . ' ' . $row['lname'] . ':' . $row['street_name'] . '</b>';
         echo ' - "' . $row['city_name'] . '"'; 
         echo '<br><br>';
        }
 ?>