<?php
    session_start();
    require 'dbConnect.php';
    session_destroy();
    header('location:signin.php?logout=success');
?>