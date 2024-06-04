<?php
session_start();
include 'config.php';

// Fetch products from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaza Shop - Products</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
                <li>
                    <?php
                    if ($loggedin) {
                        echo '<a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>';
                    } else {
                        echo '<a href="login.html"><button class="login-button">Login</button></a>';
                    }
                  ?>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main-content">
        <section class="products">
            <h2>Products</h2>
            <p>Explore our wide range of products</p>
            <div class="category drinks">
                <h3>Drinks</h3>
                <div class="grid-container">
                    <!-- product list here -->
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Spaza Shop</p>
        <?php
        if ($loggedin) {
            echo '<a href="signout.php">Sign Out</a>';
        }
      ?>
    </footer>
</body>
</html>