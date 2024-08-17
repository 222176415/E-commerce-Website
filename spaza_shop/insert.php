<?php
include 'config.php';
session_start();

// Product information
$products = [
    [
        'name' => 'Coca-Cola Original',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/Coke.jpeg'
    ],
    [
        'name' => 'Fanta Orange',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/FantaOrange.jpeg'
    ],
    [
        'name' => 'Sprite',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/Sprite.jpeg'
    ],
    [
        'name' => 'Coca-Cola Zero',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/Coke.jpeg'
    ],
    [
        'name' => 'Pepsi',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/Pepsi.jpeg'
    ],
    [
        'name' => 'Red Bull',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Products/redBull.jpeg'
    ],
    [
        'name' => '7 Up',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'Images/Image1.jpeg'
    ],
    [
        'name' => 'Aquafina',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'https://images.unsplash.com/photo-1555830028-8b5b59a0f587?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
    ],
    [
        'name' => 'Dasani',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'https://images.unsplash.com/photo-1555830028-8b5b59a0f587?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
    ],
    [
        'name' => 'Evian',
        'price' => 13.50,
        'category' => 'drinks',
        'image' => 'https://images.unsplash.com/photo-1555830028-8b5b59a0f587?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
    ]
];
// Insert products into the database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

foreach ($products as $product) {
    $sql = "INSERT INTO products (name, price, category, image) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $product['name'], $product['price'], $product['category'], $product['image']);
    $stmt->execute();
}

// Close the database connection
$conn->close();
?>