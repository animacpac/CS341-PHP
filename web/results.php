<?php include "sr1.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $first_name = $_POST['first_name_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT * FROM note WHERE first_name=:first_name');
        $stmt->execute(array(':first_name' => $first_name));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<a href=user_details.php?id=' . $row['id'] . '>' . $row['first_name'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</a>';
         echo '<br><br>';
        }
 ?>