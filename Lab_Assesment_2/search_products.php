<?php
include 'db.php';

if (isset($_POST['search'])) {
    $search_term = $_POST['search_term'];

    $sql = "SELECT * FROM products WHERE name LIKE '%$search_term%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["name"] . " - " . $row["description"] . " - " . $row["price"] . "<br>";
        }
    } else {
        echo "No results found";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Products</title>
</head>
<body>
    <h2>Search Products</h2>
    <form action="search_products.php" method="POST">
        <input type="text" name="search_term" placeholder="Search by product name" required>
        <button type="submit" name="search">Search</button>
    </form>
</body>
</html>
