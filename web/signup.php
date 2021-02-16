
<!DOCTYPE html>
<html lang="en"> 
  
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
    
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="createAccount.php" method="POST">
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
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <br>Please Put in your address<br>
            <div class="form-group <?php echo (!empty($streetname_err)) ? 'has-error' : ''; ?>">
                <label>Street Name</label>
                <input type="text" id="txtStreet" name="txtStreet" class="form-control" placeholder="Streetname" value="<?php echo $streetname; ?>">
                <span class="help-block"><?php echo $streetname_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($cityname_err)) ? 'has-error' : ''; ?>">
                <label>City Name</label>
                <input type="text" id="txtCity" name="txtCity" placeholder="City" class="form-control" value="<?php echo $cityname; ?>">
                <span class="help-block"><?php echo $cityname_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($zipcode_err)) ? 'has-error' : ''; ?>">
                <label>Zipcode</label>
                <input type="number" min="10000" max="99999" name="txtZip" placeholder="Zipcode" class="form-control" value="<?php echo $zipcode; ?>">
                <span class="help-block"><?php echo $zipcode_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>

            <p>Already have an account? <a href="signIn.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>  
 