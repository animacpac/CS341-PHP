<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
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

    

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <ul>
                <li><a href="order.php">ORDER HERE</a></li>
                <li><a href="signIn.php">PROFILE</a></li>
                <li><a href="signup.php">SIGNUP HERE</a></li>
            </ul>
        </div>

        <div class="col-6 col-s-9">
            <h1 id="color1">YOUR PIZZA YOUR WAY</h1>

            <p id="color2">“We Are committed in serving the best food with the most fresh Ingredients”</p>
            <div class="container1">
                <img src="peperoni.jpg" alt="Powerful image" class="image">
                <div class="overlay">
                    <div class="text">
                        Hello I love my family and as you see I am displaying them for you.
                        <br /> I love going out for hikes and snow shoewing. <br />“In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they’re still beautiful.”
                    </div>

                </div>
            </div>
        </div>

        <div class="col-3 col-s-1">
            <div class="as
<body>

Wecolme <?= $username ?><br /><br />
    
</body>
</html>