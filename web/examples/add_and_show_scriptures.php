<?php require "../php/db_access.php" ; ?>
<?php require "../php/add_scripture.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Scriptures in Database</title>
    </head>
    <body>
        <?php
            $stmt = $db->prepare("SELECT  s.book, s.chapter, s.verse, s.content, t.topic_name  FROM scriptures AS s LEFT JOIN scripture_by_topic AS st ON s.id = st.scripture_id  LEFT JOIN topic AS t ON st.topic_id = t.topic_id");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $content = '';
            foreach ($rows as $row )
            {
                if($content != $row['content']){
                    echo '<br><br>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</b>';
                    echo ' - "' . $row['content'] . '"'; 
                    echo "Topics: " . $row['topic_name'] . " ";
                    $content = $row['content'];
                }
                else{
                    echo $row['topic_name'] . " ";
                }
            }
        ?>
    </body>
</html>
