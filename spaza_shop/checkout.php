<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['username'])) {
        header('Location: login.html');
        exit();
    }

    // Get the logged-in user's ID
    $username = $_SESSION['username'];
    $sql = "SELECT id FROM users WHERE name = '$username'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    $user_id = $user['id'];

    // Calculate the total
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Create a new order
    $sql = "INSERT INTO orders (user_id, total) VALUES ($user_id, $total)";
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;

        // Insert order items
        foreach ($_SESSION['cart'] as $item) {
            $product_id = $item['id'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ($order_id, $product_id, $quantity, $price)";
            $conn->query($sql);
        }

        // Clear the cart
        $_SESSION['cart'] = [];
        
        // Redirect to a success page
        header('Location: success.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
