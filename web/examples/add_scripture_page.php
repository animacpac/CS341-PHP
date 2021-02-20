<?php require "../php/db_access.php" ; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Scripture</title>
    </head>
    <body>
        <h1>Fill this form to add a scripture to de database</h1>
    <form method="post" action="add_and_show_scriptures.php">
    <p>Provide the following information:</p>
    <label>Book: </label>
    <input type="text" name="book" required>
    <br>
    <br>
    <label>Chapter: </label>
    <input type="number" name="chapter" required>
    <br>
    <br>
    <label>Verse: </label>
    <input type="number" name="verse" required>
    <br>
    <br>
    <label>Content: </label>
    <textarea name="content" required></textarea>
    <br>
    <br>
    <label>Topics: </label>
    <br>
    <?php
       //Search for all the books in the DB 
       foreach ($db->query ('SELECT topic_name, topic_id  FROM topic') as $row )
       {
        echo '<input type="checkbox" name="topic[]" value="' . $row['topic_id'] . '">' .  $row['topic_name'] . '<br>';
       }
    ?>
    <input type="checkbox" name="new_topic" value="new_topic" >
    <input type="text " name="new_topic_name">

    <button type="submit">Add Scripture</button>
    </form> 
    </body>
    </html>