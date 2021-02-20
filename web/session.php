
<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<body>
<?php
include('dbConnect.php');
session_start();
if(isset($_GET['username'])){
    include('dbConnect.php');
session_start();
$userquery = mysqli_query("SELECT * FROM users WHERE usename='$username'") or die
if (mysqli_num_rows($userquery) != 1){
    die ("That username could not be found!");

}
while($row = mysql_fetch_array ($userquery, MYSQL_ASSOC)){
    $fname = $row['fname'];
    $lname = $row['lname'];
    $street_name = $row['street_name'];
    $city_name = $row['city_name'];
    $zipcode = $row['zipcode'];
    $username = $row['username'];
}
?>
<h2><?php echo $fname; ?> <?php echo $lname; ?> Profile </h2><br/>
<table>
    <tr><td>First Name</td><td><?php echo $fname; ?></td></tr> 
    <tr><td>Last Name</td><td><?php echo $lname; ?></td></tr> 
    <tr><td>Street Name</td><td><?php echo $street_name; ?></td></tr> 
    <tr><td>City Name</td><td><?php echo $city_name; ?></td></tr> 
    <tr><td>Zipcode</td><td><?php echo $zipcode; ?></td></tr> 
    <tr><td>Zipcode</td><td><?php echo $zipcode; ?></td></tr> 

    


<?php
} else die;

?>
</body>
</html>


