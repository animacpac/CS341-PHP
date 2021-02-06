<?php include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <form action="user_detail.php">
    <button type="submit" name="MANAGE" class="btn btn-info">MANAGE USERS</button>
    </form>
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="purse.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Purse</h5>
                            <p class="card-text">Price: $20.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Purse 1">
                            <input type="hidden" name="Price" value="20.00">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="purse2.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Purse 2</h5>
                            <p class="card-text">Price: $15.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Purse2">
                            <input type="hidden" name="Price" value="15.00">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="purse3.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Purse 3</h5>
                            <p class="card-text">Price: $30.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Purse3">
                            <input type="hidden" name="Price" value="30.00">
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>