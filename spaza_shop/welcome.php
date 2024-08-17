<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaza Shop - Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
    <header class="header">
        <h1>Spaza Shop</h1>
        <nav class="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="offers.html">Special Offers</a></li>
                <li><a href="loyalty.html">Loyalty Program</a></li>
                <li>
                    <a href="view_cart.php">
                        <i class="fa fa-shopping-cart" style="color: green; font-size: 24px;"></i>
                    </a>
                    <a href="logout.php"><br>
                        <button class="login-button">Logout</button>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main-content">
        <section class="welcome">
            <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
            <br/>
            <p>You have successfully logged in. Start shopping now!</p>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Spaza Shop</p>
    </footer>
</body>

</html>