<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h2> Sign Up Here </h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label>Username </label>
                <input type="text" name="user" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Passowrd</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="subimit" class="btn btn-primary"> Register </button>
        </form>
    </div>
</div>

            