
<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Pizza FHE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="signIn.php">Sign In</a>
                    </li>
                </ul>
                <div>                   
                    <?php
                     $count=0;
                      if(isset($_SESSION['cart']))
                      {
                        $count=count($_SESSION['cart']);
                      }
                    ?>
                    <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>


<body>

Wecolme <?= $username ?><br /><br />
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