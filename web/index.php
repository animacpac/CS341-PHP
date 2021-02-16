
  
<?php
/**********************************************************
* File: home.php
* Author: Br. Burton
* 
* Description: This is the home page. It checks that a user
*  exists on the session and redirects to the login page
*  if it does not.
***********************************************************/
session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signIn.php");
	die(); // we always include a die after redirects.
}

?>

<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

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