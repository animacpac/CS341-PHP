

<!DOCTYPE html>
<html>
    <head>
        <title>Management Page</title>
    </head>
    <body>
        <h1>This Page is where we manage all the inputs and new items</h1>
    </body>

    <!-- <form method="post">
     <label>Search</label>
     <input type="text" name="search">
     <input type="submit" name="submit">
    
    <select name='book_filter' id='book_filter' required>
    <?php
       
      if (isset($_POST["submit"])) 
      {
        $str = $_POST["search"];
        $sth = $db->prepare("SELECT * FROM 'search' WHERE Name = '$str' ");
        $sth->setFetchMode(PDO:: FETCH_ASSOC)
        $sth->execute();
        if($row = $sth->fetch())
        {
          ?>
          <br><br><br>
          <table>
          <tr>
            <th>Name</th>
            <th>Description</th>
          </tr>
          <tr>
            <td><?php echo $row->Name; ?></th>
            <td><?php echo $row->Description; ?></th>
          </tr>
          </table>
        }
      }
    ?>
    </select>
    <button type="submit">Submit Form</button>
    </form>  -->
</html>