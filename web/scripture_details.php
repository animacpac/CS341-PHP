<?php include "sr1.php" ; ?>
<!DOCTYPE html>
<html>
<?php
    //Check if the page has been called adter a post method

        echo '<h1>user description</h1> <br><br>';
        
        $id = $_GET['id'];

        //Prepared statement to get scripture details 
        $stmt = $db->prepare('SELECT * FROM note WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
        // {
                    
        //  echo '<b>' . $row['first_name'] . ' ' . $row['last_name'] . ':' . $row['userid'] . '</b>';
        //  echo ' - "' . $row['content'] . '"'; 
        //  echo '<br><br>';
        // }
 ?>
 <table>
    <tr>
        <th>First Name  </th><br>
        <th>Last Name  </th><br>
        <th>User ID  </th><br>
        <th>Address  </th><br>
    </tr>
    <tr>
        <td><?php echo $row['first_name']; ?></td><br>
        <td><?php echo $row['last_name']; ?></td><br>
        <td><?php echo $row['userid']; ?></td><br>
        <td><?php echo $row['content']; ?></td><br>
    </tr>

 </table>

 
 </html>