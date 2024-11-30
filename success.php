<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Payment</title>
</head>
<body>
    <div style="display: flex; flex-direction:column; justify-content: center; align-items: center ;">
        
        <br>
        <?php

            echo "<h1 style='font-size: 30px; color: green;'>Thank you for your payment!</h1>";

            // Clear the cart in localStorage
            echo "<script>

                document.addEventListener('DOMContentLoaded', function() {
                localStorage.removeItem('cartItems');
    
                document.getElementByTagNames('cartItem')[0].innerHTML = '';
                });

                </script>";

        ?>
        <div><a href="index">Back to home page.</a></div>
    </div>
</body>
</html>