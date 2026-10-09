<?php
require_once "db.php";

$sql = "SELECT id, name, category, quantity, price FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>AI Smart Inventory - Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            padding: 20px;
        }

        h1 {
            color: darkblue;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: darkblue;
            color: white;
        }
    </style>
</head>

<body>

<h1>AI Smart Inventory System</h1>
<h2>Product Details</h2>

<?php
if ($result === false) {
    echo "<p>Products table is not created yet. We will set up the database later.</p>";
} else {
?>

<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo htmlspecialchars($row["id"]); ?></td>
        <td><?php echo htmlspecialchars($row["name"]); ?></td>
        <td><?php echo htmlspecialchars($row["category"]); ?></td>
        <td><?php echo htmlspecialchars($row["quantity"]); ?></td>
        <td><?php echo htmlspecialchars($row["price"]); ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<?php
}
?>

<br>
<a href="dashboard.html">Back to Dashboard</a>

</body>
</html>

<?php
$conn->close();
?>
