
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
            <div class="form-group <?php echo (!empty($confirm_password)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password; ?></span>
            </div>
            <p>User information</p>
            <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" id="txtFname" name="txtFname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
            <div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
            <input type="text" id="txtLname" name="txtLname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
               
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Address</p>
            <div class="form-group <?php echo (!empty($street_name_err)) ? 'has-error' : ''; ?>">
                <label>Street Name</label>
                <input type="text" id="txtStreet" name="txtStreet" class="form-control" placeholder="Street Name" value="<?php echo $Street_name; ?>">
            <div class="form-group <?php echo (!empty($city_name_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
            <input type="text" id="txtCity" name="txtCity" class="form-control" placeholder="City Name" value="<?php echo $city_name; ?>">
               
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
 