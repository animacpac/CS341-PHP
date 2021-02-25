<?php


$fname = $_POST['txtFname'];
$lname = $_POST['txtLname'];
$street_name = $_POST['txtStreet'];
$city_name = $_POST['txtCity'];
$zipcode = $_POST['txtZip'];
$credit_card = $_POST['txtCredit'];
$amount = $_POST['txtAmount'];




$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$street_name = htmlspecialchars($street_name);
$city_name = htmlspecialchars($city_name);
$zipcode = htmlspecialchars($zipcode);
$credit_card = htmlspecialchars($credit_card);
$amount = htmlspecialchars($amount);




require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO purchase(fname, lname, street_name, city_name, state_name, zipcode, credit_card, amount) VALUES(:fname, :lname, :street_name, :city_name, :state_name, :zipcode, :credit_card, :amount)';
$statement = $db->prepare($query);
$statement->bindValue(':fname', $fname);
$statement->bindValue(':lname', $lname);
$statement->bindValue(':street_name', $street_name);
$statement->bindValue(':city_name', $city_name);
$statement->bindValue(':zipcode', $zipcode);
$statement->bindValue(':credit_card', $credit_card);
$statement->bindValue(':amount', $amount);

$statement->execute();


header("Location: signIn.php");
die(); 

?>