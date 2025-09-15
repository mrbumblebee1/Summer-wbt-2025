<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $display = $_POST['display'];

        $update_sql = "UPDATE products SET name='$name', description='$description', price='$price', display='$display' WHERE id=$id";

        if ($conn->query($update_sql) === TRUE) {
            echo "Product updated successfully!";
        } else {
            echo "Error updating product: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form action="" method="POST">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required><?php echo $product['description']; ?></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required><br><br>

        <label for="display">Display (Yes/No):</label><br>
        <input type="text" id="display" name="display" value="<?php echo $product['display']; ?>" required><br><br>

        <button type="submit">Update Product</button>
    </form>
</body>
</html>
