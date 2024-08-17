<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaza Shop - Order Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Spaza Shop</h1>
        <nav class="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="offers.html">Special Offers</a></li>
                <li><a href="loyalty.html">Loyalty Program</a></li>
                <li><a href="login.html"><button class="login-button">Login</button></a></li>
            </ul>
        </nav>
    </header>
    <main class="main-content">
        <section class="success">
            <h2>Order Placed Successfully</h2>
            <p>Thank you for your purchase! Your order has been placed successfully.</p>
            <p><a href="products.php">Continue Shopping</a></p>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Spaza Shop</p>
    </footer>
</body>
</html>
