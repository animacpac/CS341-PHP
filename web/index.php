<?php include "sr1.php" ; ?>
<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DBA Access</title>
    </head>
    <body>
        <h1> User information by name</h1>
    </body>

    <form method="post" action="results.php">
    <p>Choose the user</p>
    <label>Users </label>
    <select name='first_name_filter' id='first_name_filter' required>
    <?php
       $names_array = array();
       
       foreach ($db->query ('SELECT DISTINCT first_name FROM note') as $row )
       {
           //Add book to the book array if it has not been added 
          if(!(in_array($row['first_name'], $names_array)))
          {
              array_push($names_array, $row['first_name']);
          }
       }
       //loop the books_array variable to create an option for each book 
       foreach ($names_array as $first_name_in_array )
       {
        echo '<option value="' . $first_name_in_array . '">' .  $first_name_in_array . '</option>';
       }
    ?>
    </select>
    <button type="submit">Submit Form</button>
    <form> 
</html>