<?php include "dbConnect.php" ; ?>
<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DBA Access</title>
    </head>
    <body>
        <h1> User information by last name</h1>
    </body>

    <form method="post" action="results.php">
    <p>Choose Last Name</p>
    <label>Users </label>
    <select name='last_name_filter' id='last_name_filter' required>
    <?php
       $names_array = array();
       
       foreach ($db->query ('SELECT DISTINCT last_name FROM note') as $row )
       {
           //Add book to the book array if it has not been added 
          if(!(in_array($row['last_name'], $names_array)))
          {
              array_push($names_array, $row['last_name']);
          }
       }
       //loop the books_array variable to create an option for each book 
       foreach ($names_array as $last_name_in_array )
       {
        echo '<option value="' . $last_name_in_array . '">' .  $last_name_in_array . '</option>';
       }
    ?>
    </select>
    <button type="submit">Submit Form</button>
    <form> 
</html>