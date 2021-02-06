<?php include "sr1.php" ; ?>
<?php include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html>

<?php
        echo '<h1>user description</h1> <br><br>';
        
        $id = $_GET['id'];

      
        $stmt = $db->prepare('SELECT * FROM note WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
     
 ?>
 <table>
    <tr>
        <th>First Name  |</th>
        <th>Last Name  |</th>
        <th>User ID  |</th>
        <th>Address  |</th>
    </tr>
    <tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['userid']; ?></td>
        <td><?php echo $row['content']; ?></td>
    </tr>

 </table>

 
 </html>