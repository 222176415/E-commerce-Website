<?php
session_start();
include 'config.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaza Shop - Cart</title>
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
        <section class="cart">
            <h2>Your Cart</h2>
            <?php if (count($_SESSION['cart']) > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        <?php foreach ($_SESSION['cart'] as $item): ?>
                            <tr>
                                <td><?php echo $item['name']; ?></td>
                                <td>$<?php echo $item['price']; ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td>$<?php echo $item['price'] * $item['quantity']; ?></td>
                            </tr>
                            <?php $total += $item['price'] * $item['quantity']; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total</td>
                            <td>$<?php echo $total; ?></td>
                        </tr>
                    </tfoot>
                </table>
                <form action="checkout.php" method="post">
                    <button type="submit">Proceed to Checkout</button>
                </form>
            <?php else: ?>
                <p>Your cart is empty</p>
            <?php endif; ?>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Spaza Shop</p>
    </footer>
</body>
</html>
