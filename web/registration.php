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
  $mysqli_select_db($con, 'note_user');

  $name = $_POST['username'];
  $pass = $_POST['password'];

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