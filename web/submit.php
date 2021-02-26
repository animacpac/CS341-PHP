<?php
session_start();


    if(isset($_POST['Submitted']))
    {
    
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                    alert('Item Removed');
                    window.location.href='mycart.php';
                    </script>";
    }
}
?>