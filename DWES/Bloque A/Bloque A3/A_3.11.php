<?php
function calculate_cost($cost, $quantity, $discount = 0, $tax = 20, $shipping = 0)
{
    $cost = $cost * $quantity;
    $tax = $cost * ($tax / 100);
    return ($cost + $tax + $shipping) - $discount;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio Total</th>
        </tr>
        <tr>
            <td>Dark chocolate</td>
            <td>$<?= calculate_cost(quantity: 10, cost: 5, tax: 5, discount: 2, shipping: 3) ?></td>
        </tr>
        <tr>
            <td>Milk chocolate</td>
            <td>$<?= calculate_cost(quantity: 10, cost: 5, tax: 5, shipping: 2) ?></td>
        </tr>
        <tr>
            <td>White chocolate</td>
            <td>$<?= calculate_cost(5, 10, tax: 5, shipping: 1) ?></td>
        </tr>
        <tr>
            <td>Hazelnut chocolate</td>
            <td>$<?= calculate_cost(quantity: 8, cost: 7, tax: 8, discount: 3, shipping: 2) ?></td>
        </tr>
        <tr>
            <td>Mint chocolate</td>
            <td>$<?= calculate_cost(quantity: 12, cost: 6, tax: 10, shipping: 4) ?></td>
        </tr>
        <tr>
            <td>Almond chocolate</td>
            <td>$<?= calculate_cost(quantity: 5, cost: 10, discount: 5, tax: 12, shipping: 3) ?></td>
        </tr>
    </table>
</body>
</html>

