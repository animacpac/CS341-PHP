<!DOCTYPE html> 
<html> 
<head> 
    <title>Homepage</title> 
    <link rel="stylesheet" type="text/css"
                    href="style.css"> 
</head> 
<body> 
    <div class="header"> 
        <h2>Home Page</h2> 
    </div> 
    <div class="content"> 

        <?php  if (isset($_SESSION['username'])) : ?> 
            <p> 
                Welcome  
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            </p> 
            <p>  
                <a href="index.php?logout='1'" style="color: red;"> 
                    Click here to Logout 
                </a> 
            </p> 
        <?php endif ?> 
    </div> 
</body> 
</html> 