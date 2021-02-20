<?php
    session_start();
    require 'dbConnect.php';
    session_destroy();
    header('location:login.php?logout=success');
?>