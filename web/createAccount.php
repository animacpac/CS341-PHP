<?php

$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];
$streetname = $_POST['txtStreet'];
$cityname = $_POST['txtCity']
$zipcode = $_POST["txtZip"]
$statename = $_POST["txtState"]
if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signUp.php");
	die(); // we always include a die after redirects.
}

// Let's not allow HTML in our usernames. It would be best to also detect this before
// submitting the form and preven the submission.
$username = htmlspecialchars($username);

// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database
require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO users(username, password, streetname, cityname, zipcode, statename) VALUES(:username, :password, :streetname, :cityname, :zipcode, :statename)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $hashedPassword);
$statement->bindValue(':streetname', $username);
$statement->bindValue(':cityname', $cityname);
$statement->bindValue(':zipcode', $zipcode);
$statement->bindValue(':statename', $statename);


$statement->execute();


// finally, redirect them to the sign in page
header("Location: signIn.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>