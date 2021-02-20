<?php include "dbConnect.php" ; ?>
<?php include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html>

<?php
        echo '<h1>user description</h1> <br><br>';
        
        $id = $_GET['id'];

      
        $stmt = $db->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row )
     
 ?>
 <style>
 table, th, td {
  border: 1px solid black;
}
</style>
 <table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User ID</th>
        <th>Address</th>
    </tr>
    <tr>
        <td><?php echo $row['fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['userid']; ?></td>
        <td><?php echo $row['content']; ?></td>
    </tr>

 </table>

 
 </html>