
  
<?php

session_start();

$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
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

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: index.php");
			die(); // we always include a die after redirects.
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

// If we get to this point without having redirected, then it means they
// should just see the login form.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<!-- <h1>Please sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST">

			<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" id="txtPassword" name="txtPassword" placeholder="Password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sign In">
            </div>
            <p>Don't Have an Account <a href="signUp.php">Sign Up here</a>.</p>
	

</form>

<br /><br /> -->



<div class="wrapper">
        <h2>Please Login</h2>
        <p>Please fill this form to create an account.</p>
        <form action="signIn.php" method="POST">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" id="txtPassword" name="txtPassword" placeholder="Password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Sign In">
                
            </div>
            <p>Already have an account? <a href="signUp.php">Login here</a>.</p>
        </form>
    </div>    

</div>

</body>
</html>

