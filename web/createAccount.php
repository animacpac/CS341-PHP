<?php

$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];
$fname = $_POST['txtFname'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUp.php");
	die(); 
}


$username = htmlspecialchars($username);
$fname = htmlspecialchars($fname);


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO users(username, password, fname) VALUES(:username, :password, :fname)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':fname', $fname);


$statement->bindValue(':password', $hashedPassword);

$statement->execute();


header("Location: signIn.php");
die(); 

?>