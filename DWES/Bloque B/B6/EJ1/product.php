<?php
// Lista de productos
$products = [
    "Producto1" => [
        "description" => "Descripción del Producto 1",
        "price" => "$10",
        "availability" => "En stock"
    ],
    "Producto2" => [
        "description" => "Descripción del Producto 2",
        "price" => "$20",
        "availability" => "Agotado"
    ],
    "Producto3" => [
        "description" => "Descripción del Producto 3",
        "price" => "$30",
        "availability" => "En stock"
    ]
];

// Obtener el nombre del producto desde la cadena de consulta
$productName = isset($_GET['name']) ? urldecode($_GET['name']) : null;

// Verificar si el producto existe
if ($productName && isset($products[$productName])) {
    $product = $products[$productName];
} else {
    // Si el producto no es válido o no existe, enviar un encabezado HTTP 404 y mostrar un mensaje de error
    http_response_code(404); // Establecer el código de estado HTTP a 404
    echo "<h1>Error 404: Producto no encontrado</h1>";
    echo "<p>El producto que estás buscando no existe o el parámetro proporcionado es inválido.</p>";
    echo '<a href="index.php">Volver a la lista de productos</a>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <h2><?= htmlspecialchars($productName) ?></h2>
    <p><strong>Descripción:</strong> <?= htmlspecialchars($product['description']) ?></p>
    <p><strong>Precio:</strong> <?= htmlspecialchars($product['price']) ?></p>
    <p><strong>Disponibilidad:</strong> <?= htmlspecialchars($product['availability']) ?></p>
    <a href="index.php">Volver a la lista de productos</a>
</body>
</html>


