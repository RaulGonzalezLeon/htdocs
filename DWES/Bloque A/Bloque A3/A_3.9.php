<?php
function get_stock_message($stock)
{
    if ($stock > 10) {
        return 'Good availability';
    }
    if ($stock === 10) {
        return 'Exactly 10 items in stock';
    }
    if ($stock > 0 && $stock < 10) {
        return 'Low stock';
    }
    return 'Out of stock';
}

// Ejemplos de stock para diferentes productos
$products = [
    ['name' => 'Chocolates', 'stock' => 25],
    ['name' => 'Gummies', 'stock' => 10],
    ['name' => 'Lollipops', 'stock' => 5],
    ['name' => 'Candy Canes', 'stock' => 0]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Multiple Return Statements</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Product Availability</h2>
    <table border="1">
        <tr>
            <th>Product</th>
            <th>Stock Status</th>
        </tr>
        <?php foreach ($products as $product) {?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= get_stock_message($product['stock']) ?></td>
        </tr>
        <?php }  ?>
    </table>
</body>
</html>

