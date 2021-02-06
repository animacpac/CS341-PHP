<?php include "sr1.php" ; ?>

<?php
    //Check if the page has been called adter a post method

        echo '<h1>These are your results in the database:</h1> <br><br>';
        
        $book = $_POST['book_filter'];


        //Prepared statement to get results filtered by book 
        $stmt = $db->prepare('SELECT id, book, chapter, verse FROM scriptures WHERE book=:book');
        $stmt->execute(array(':book' => $book));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        {
         echo '<a href=scripture_details.php?id=' . $row['id'] . '>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</a>';
         echo '<br><br>';
        }
 ?>