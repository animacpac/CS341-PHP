<?php include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial number</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">  
                    <body>

                      

                      <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                        $sr=key+1;
                        $total=$total+$value['Price'];

                        echo"
                        <tr>
                            <td>$sr</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]</td>
                            <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                            <td>
                        <form action='manage_cart.php' method='POST'>
                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                        </tr>
                        ";
                        }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="col-lg-8">
                <div class="col-lg-4">
                    <h3>Total:</h3>
                    <h5>$<?php echo $total ?></h5>
                    <br />
                    <form action="address.php" method="POST">
                        Email: <input type="text" name="Email">
                        <button name='Email' class="btn btn-primary btn-block">Submit Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
