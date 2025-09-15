<?php
include 'db.php';

$sql = "SELECT * FROM products WHERE display = 'Yes'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["description"]. "</td>
                <td>" . $row["price"]. "</td>
                <td>
                    <a href='edit_product.php?id=" . $row["id"] . "'>Edit</a> | 
                    <a href='delete_product.php?id=" . $row["id"] . "'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No products found";
}

$conn->close();
?>
