<?php
// Lista de productos
$products = [
    "Producto1" => "Descripción del Producto 1",
    "Producto2" => "Descripción del Producto 2",
    "Producto3" => "Descripción del Producto 3"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul>
        <?php foreach ($products as $name => $description): ?>
            <!-- Generar enlaces para cada producto -->
            <li><a href="product.php?name=<?= urlencode($name) ?>"><?= htmlspecialchars($name) ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

