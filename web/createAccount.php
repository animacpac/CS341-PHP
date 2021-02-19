<?php

$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];
$fname = $_POST['txtFname'];
$lname = $_POST['txtLname'];
$street_name = $_POST['txtStreet'];
$city_name = $_POST['txtCity'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUp.php");
	die(); 
}


$username = htmlspecialchars($username);
$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$street_name = htmlspecialchars($street_name);
$city_name = htmlspecialchars($city_name);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO users(username, password, fname, lname, street_name, city_name) VALUES(:username, :password, :fname, :lname, :street_name, :city_name)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':fname', $fname);
$statement->bindValue(':lname', $lname);
$statement->bindValue(':street_name', $street_name);
$statement->bindValue(':city_name', $city_name);


$statement->bindValue(':password', $hashedPassword);

$statement->execute();


header("Location: signIn.php");
die(); 

?>