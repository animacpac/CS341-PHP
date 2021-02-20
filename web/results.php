<?php include "dbConnect.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $username = $_POST['username'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT id, username, fname, lname, street_name, city_name, zipcode FROM users WHERE username=:username');
        $stmt->execute(array(':username' => $username));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<a href=user_details.php?id=' . $row['id'] . '>' . $row['fname'] . ' ' . $row['lame'] . ':' . $row['street_name'] . $row['city_name'] . $row['zipcode'] . '</a>';
         echo '<br><br>';
        }
 ?>

