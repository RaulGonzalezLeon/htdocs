<?php
declare(strict_types = 1);

$price = '4.5'; // Cambiamos a un string para ver el error de tipos estrictos
$quantity = 3;

function calculate_total(int|float $price, int $quantity): int|float
{
    return $price * $quantity;
}

$total = calculate_total($price, $quantity);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Type Declarations</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Total $<?= $total ?></p>
</body>
</html>
