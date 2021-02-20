<?php include("header.php"); 
session_start();
$username = $_SESSION['username'];

?>

<?php 
    session_start();
    $current_user = $_SESSION['username'];
    $username = mysqli_real_escape_string($database,$_REQUEST['username']);
    $profile_username=$rws['username'];
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<body>
<h1><?php echo $row = ['fname']; ?></h1>
	


</body>
</html>