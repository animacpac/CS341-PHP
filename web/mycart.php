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
<link rel="stylesheet" type="text/css" href="insert.css">
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
            <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="add_manage.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fulname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fulname" name="fulname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zipcode">Zip</label>
                <input type="text" id="zipcode" name="zipcode" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fulname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="name_card">Name on Card</label>
            <input type="text" id="name_card" name="name_card" placeholder="John More Doe">
            <label for="credit_card">Credit card number</label>
            <input type="text" id="credit_card" name="credit_card" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="exp_m" name="exp_m" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="exp_y">Exp Year</label>
                <input type="text" id="exp_y" name="exp_y" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Submit" class="btn">
      </form>
    </div>
  </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
