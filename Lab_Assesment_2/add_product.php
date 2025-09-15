<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $display = $_POST['display'];

    $sql = "INSERT INTO products (name, description, price, display) 
            VALUES ('$name', '$description', '$price', '$display')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="add_product.php" method="POST">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="display">Display (Yes/No):</label><br>
        <input type="text" id="display" name="display" required><br><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
