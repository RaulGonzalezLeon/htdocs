<?php
function calculate_cost($cost, $quantity, $discount = 0, $tax = 0)
{
    $cost = $cost * $quantity;
    $cost = $cost - $discount;
    $cost += $cost * ($tax / 100); // Aplicar impuestos si los hay
    return $cost;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Parámetros Opcionales y Valores por Defecto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Tabla de Productos</h2>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Costo Unitario</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Impuestos</th>
            <th>Costo Total</th>
        </tr>
        <tr>
            <td>Dark chocolate</td>
            <td>$5</td>
            <td>10</td>
            <td>$5</td>
            <td>10%</td>
            <td>$<?= calculate_cost(5, 10, 5, 10) ?></td>
        </tr>
        <tr>
            <td>Milk chocolate</td>
            <td>$3</td>
            <td>4</td>
            <td>$0</td>
            <td>8%</td>
            <td>$<?= calculate_cost(3, 4, 0, 8) ?></td>
        </tr>
        <tr>
            <td>White chocolate</td>
            <td>$4</td>
            <td>15</td>
            <td>$20</td>
            <td>5%</td>
            <td>$<?= calculate_cost(4, 15, 20, 5) ?></td>
        </tr>
        <tr>
            <td>Almond chocolate</td>
            <td>$6</td>
            <td>7</td>
            <td>$10</td>
            <td>12%</td>
            <td>$<?= calculate_cost(6, 7, 10, 12) ?></td>
        </tr>
        <tr>
            <td>Hazelnut chocolate</td>
            <td>$7</td>
            <td>5</td>
            <td>$8</td>
            <td>15%</td>
            <td>$<?= calculate_cost(7, 5, 8, 15) ?></td>
        </tr>
    </table>
</body>
</html>

