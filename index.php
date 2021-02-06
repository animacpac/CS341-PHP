<?php include "sr1.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Scriptures</title>
    </head>
    <body>
        <h1>Scripture Resources by Book</h1>
    </body>

    <form method="post" action="results.php">
    <p>Search by:</p>
    <label>Book</label>
    <select name='book_filter' id='book_filter' required>
    <?php
       $books_array = array();
       //Search for all the books in the DB 
       foreach ($db->query ('SELECT DISTINCT book FROM scriptures') as $row )
       {
           //Add book to the book array if it has not been added 
          if(!(in_array($row['book'], $books_array)))
          {
              array_push($books_array, $row['book']);
          }
       }
       //loop the books_array variable to create an option for each book 
       foreach ($books_array as $book_in_array )
       {
        echo '<option value="' . $book_in_array . '">' .  $book_in_array . '</option>';
       }
    ?>
    </select>
    <button type="submit">Submit Form</button>
    <form> 
</html>