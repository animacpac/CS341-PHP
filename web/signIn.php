
  
<?php

session_start();

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM login WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];


		
		if (password_verify($password, $hashedPasswordFromDB))
		{
			$_SESSION['username'] = $username;
			header("Location: index.php");
			
			die(); 
		}
	

	}

}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>




<div class="wrapper">
        <h2>Please Login</h2>
        <p>Please fill this form to create an account.</p>
        <form action="signIn.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Username">
                
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="txtPassword" name="txtPassword" placeholder="Password" class="form-control" >
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sign In"/>
                
            </div>
            <p>Already have an account? <a href="signup.php">Login here</a>.</p>
        </form>
    </div>    

</div>

</body>
</html>

