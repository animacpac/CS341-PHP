<!DOCTYPE html>
<html>
<?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $db->prepare('SELECT id, userid, first_name, last_name, content FROM note');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo $row['id'];
        }
}


catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
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