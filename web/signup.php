<?php include("header.php"); 
session_start();
?>
<?php
/**********************************************************
* File: topicEntry.php
* Author: Br. Burton
* 
* Description: This is the PHP file that the user starts with.
*   It has a form to enter a new scripture and topic.
*   It posts to the insertTopic.php page.
***********************************************************/

// The DB connection logic is in another file so it can be included
// in each of our different PHP files.
require("sr1.php");
$db = get_db();

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

            