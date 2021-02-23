<?php

session_start();

$badLogin = false;


if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM users WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];


		
		if (password_verify($password, $hashedPasswordFromDB))
		{
			$_SESSION['login_user'] = $username;
			header("Location: index.php");
			
			die(); 
		}
		else
		{
			$badLogin = true;
		}

	}
	else
	{
		$badLogin = true;
	}
}


?>