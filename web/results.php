<?php include "dbConnect2.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $username = $_POST['profile_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT id, username, fname, lname, street_name FROM users WHERE username=:username');
        $stmt->execute(array(':username' => $username));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<h1>Username:</h1>' . $row['username'] . '<p><h1>Full Name:</h1>' . $row['fname'] . ' ' . $row['lname'] . '<p><h1>Address:</h1>' . $row['street_name'] . '</br>'. $row['street_name'].'</a>';
         echo '<br><br>';
        }
 ?>
