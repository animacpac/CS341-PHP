<?php include "dbConnect2.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profiles</title>
    </head>
    <body>
        <h1>Select Profile</h1>
    </body>

    <form method="post" action="results.php">
    <p>Search by:</p>
    <label>Profile</label>
    <select name='profile_filter' id='profile_filter' required>
    <?php
       $users_array = array();
       //Search for all the books in the DB 
       foreach ($db->query ('SELECT username FROM users') as $row )
       {
           
          if(!(in_array($row['username'], $books_array)))
          {
              array_push($users_array, $row['username']);
          }
       }
       //loop the books_array variable to create an option for each book 
       foreach ($users_array as $users_in_array )
       {
        echo '<option value="' . $users_in_array . '">' .  $users_in_array . '</option>';
       }

    ?>
    </select>
    <button type="submit">Submit Form</button>
    <form> 