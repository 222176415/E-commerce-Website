<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Get the product information from the form submission
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Add the product to the cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = array('name' => $product_name, 'price' => $product_price);

    // Redirect to the cart page
    header("Location: view_cart.php");
    exit;
} else {
    // Redirect to the login page if not logged in
    header("Location: login.html");
    exit;
}
?>