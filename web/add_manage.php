<?php
$fulname = $_POST['fulname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$name_card = $_POST['name_card'];
$credit_card = $_POST['credit_card'];
$exp_m = $_POST['exp_m'];
$exp_y = $_POST['exp_y'];
$ccv = $_POST['ccv'];





$fulname = htmlspecialchars($fulname);
$email = htmlspecialchars($email);
$address = htmlspecialchars($address);
$city = htmlspecialchars($city);
$state = htmlspecialchars($state);
$zipcode = htmlspecialchars($zipcode);
$name_card = htmlspecialchars($name_card);
$credit_card = htmlspecialchars($credit_card);
$exp_m = htmlspecialchars($exp_m);
$exp_y = htmlspecialchars($exp_y);
$ccv = htmlspecialchars($ccv);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO purchase(fulname, email, address, city, state, zipcode, name_card, credit_card, exp_m, exp_y, ccv) VALUES(:fulname, :email, :address, :city, :state, :zipcode, :name_card, :credit_card, :exp_m, :exp_y, :ccv)';
$statement = $db->prepare($query);
$statement->bindValue(':fulname', $fulname);
$statement->bindValue(':email', $email);
$statement->bindValue(':address', $address);
$statement->bindValue(':city', $city);
$statement->bindValue(':state', $state);
$statement->bindValue(':zipcode', $zipcode);
$statement->bindValue(':name_card', $name_card);
$statement->bindValue(':credit_card', $credit_card);
$statement->bindValue(':exp_m', $exp_m);
$statement->bindValue(':exp_y', $exp_y);
$statement->bindValue(':ccv', $ccv);


header("Location: index.php");
?>