<?php

$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];
$fname = $_POST['txtFname'];
$lname = $_POST['txtLname'];
$street_name = $_POST['txtStreet'];
$city_name = $_POST['txtCity'];
$zipcode = $_POST['txtZip'];

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
$zipcode = htmlspecialchars($zipcode);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


require("dbConnect.php");
$db = get_db();