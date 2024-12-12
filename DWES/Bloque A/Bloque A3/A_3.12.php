<?php
// Activamos el modo estricto de tipos en PHP
declare(strict_types=1);

// Paso 2: Definimos el array asociativo $books con los datos de cada libro
$books = [
    [
        'title' => 'Book A',
        'price' => 15.99,
        'stock' => 10,
    ],
    [
        'title' => 'Book B',
        'price' => 22.50,
        'stock' => 5,
    ],
    [
        'title' => 'Book C',
        'price' => 9.99,
        'stock' => 20,
    ],
];

// Paso 3: Definimos la tasa de impuesto como una variable
$tax_rate = 12; // Representa el 12% de impuesto

// Paso 4: Definimos las funciones requeridas

// Función para obtener el total de stock en inventario
function get_total_stock(array $books): int {
    $totalStock = 0;
    foreach ($books as $book) {
        $totalStock += $book['stock']; // Sumamos el stock de cada libro
    }
    return $totalStock;
}

// Función para calcular el valor total en inventario de un libro
function get_inventory_value(float $price, int $stock): float {
    return $price * $stock; // Multiplicamos el precio por la cantidad en inventario
}

// Función para calcular el impuesto a pagar sobre el valor total de inventario
function calculate_tax(float $inventoryValue, float $taxRate): float {
    return $inventoryValue * ($taxRate / 100); // Calculamos el impuesto basado en la tasa
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h1>Inventory</h1>
    
    <!-- Paso 5: Creamos una tabla HTML para mostrar los detalles de los libros -->
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Inventory Value</th>
                <th>Tax</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Iteramos sobre cada libro en el array $books para mostrar sus detalles
            foreach ($books as $book) {
                // Calculamos el valor total de inventario y el impuesto para cada libro
                $inventoryValue = get_inventory_value($book['price'], $book['stock']);
                $tax = calculate_tax($inventoryValue, $tax_rate);
            ?>
                <tr>
                    <!-- Mostramos los detalles del libro en cada columna -->
                    <td><?php echo ($book['title']); ?></td>
                    <td><?php echo number_format($book['price'], 2); ?>€</td>
                    <td><?php echo $book['stock']; ?></td>
                    <td><?php echo number_format($inventoryValue, 2); ?>€</td>
                    <td><?php echo number_format($tax, 2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Mostramos el total de stock en el inventario usando la función get_total_stock -->
    <h2>Total Stock: <?php echo get_total_stock($books); ?></h2>

</body>
</html>
