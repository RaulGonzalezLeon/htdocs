<?php
// Definimos los precios de cada tipo de hamburguesa
$precios = [
    "Hamburguesa Clásica" => 5.50,
    "Hamburguesa con Queso" => 6.75,
    "Hamburguesa BBQ" => 7.25,
    "Hamburguesa Vegetariana" => 6.00
];

// Generar un número aleatorio de ventas entre 50 y 100
$ventasTotales = mt_rand(50, 100);
$ventas = [];

// Generar ventas aleatorias
for ($i = 0; $i < $ventasTotales; $i++) {
    $tipo = array_rand($precios); // Seleccionar un tipo aleatorio de hamburguesa
    $cantidad = mt_rand(1, 5); // Generar cantidad entre 1 y 5
    $totalVenta = round($precios[$tipo] * $cantidad, 2);
    $ventas[] = [
        "tipo" => $tipo,
        "cantidad" => $cantidad,
        "total" => $totalVenta
    ];
}

// Calcular el total del día
$totalDia = 0;
foreach ($ventas as $venta) {
    $totalDia += $venta["total"];
}
$totalDiaFormateado = number_format($totalDia, 2);

// Estadísticas
$raizCuadrada = sqrt($totalDia);
$potencia = pow($totalDia, 2);
$redondeoArriba = ceil($totalDia);
$redondeoAbajo = floor($totalDia);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Ventas</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <h1>Resumen de Ventas del Día</h1>

    <!-- Tabla con ventas -->
    <table>
        <tr>
            <th>#</th>
            <th>Tipo de Hamburguesa</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        <?php foreach ($ventas as $index => $venta): ?>
        <tr>
            <td><?= $index + 1?></td>
            <td><?= $venta['tipo'] ?></td>
            <td><?= $venta['cantidad'] ?></td>
            <td>$<?= number_format($venta['total'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Totales -->
    <div class="totales">
        <h2>Totales y Estadísticas</h2>
        <p><strong>Total del Día:</strong> $<?= $totalDiaFormateado ?></p>
        <p><strong>Raíz Cuadrada del Total:</strong> <?= round($raizCuadrada, 2) ?></p>
        <p><strong>Potencia al Cuadrado del Total:</strong> <?= number_format($potencia, 2) ?></p>
        <p><strong>Redondeo Hacia Arriba:</strong> <?= $redondeoArriba ?></p>
        <p><strong>Redondeo Hacia Abajo:</strong> <?= $redondeoAbajo ?></p>
    </div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
