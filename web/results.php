<?php include "sr1.php" ; ?>
<?php include("header.php"); 
session_start();
?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $last_name = $_POST['last_name_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT * FROM note WHERE last_name=:last_name');
        $stmt->execute(array(':last_name' => $last_name));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<a href=user_details.php?id=' . $row['id'] . '>' . $row['first_name'] . ' ' . $row['last_name'] . ':' . $row['verse'] . '</a>';
         echo '<br><br>';
        }
 ?>