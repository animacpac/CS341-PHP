<?php include "dbConnect.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $username = $_POST['profile_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT id, fname, lname, street_name FROM users WHERE username=:username');
        $stmt->execute(array(':username' => $username));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<a href=show_details.php?id=' . $row['id'] . '>' . $row['fname'] . ' ' . $row['lname'] . ':' . $row['street_name'] . '</a>';
         echo '<br><br>';
        }
 ?>
