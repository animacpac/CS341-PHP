<?php
$username = $_POST['username'];
$password = $_POST['password'];
require("sr1.php");
$db = get_db();
try
{
    $query = 'INSERT INTO note_user(username, password) VALUES(:username, :password)';

    $statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
    $statement->execute();

    $id = $db->lastInsertId("id");

	// Now go through each topic id in the list from the user's checkboxes
	// foreach ($topicIds as $topicId)
	// {
	// 	echo "ScriptureId: $scriptureId, topicId: $topicId";

	// 	// Again, first prepare the statement
	// 	$statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');

	// 	// Then, bind the values
	// 	$statement->bindValue(':scriptureId', $scriptureId);
	// 	$statement->bindValue(':topicId', $topicId);

	// 	$statement->execute();
	// }
  $s = " select * from note_user where name = '$name'";

  $result = mysqli_query($con)
  
  $num = mysqli_stmt_num_rows($result);

  if($num == 1){
      echo "Username Already Taken";
  }
  else{
      $reg= "insert into note_user(username, password) values ('$name' , '$pass')";
      mysqli_query($con, $reg);
      echo" Registration Successful";
      }


}


catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>