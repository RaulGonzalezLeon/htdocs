<?php
session_start();

// Si no existe el carrito en la sesión, se crea como un array vacío
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Definimos algunos productos ficticios (id => [nombre, precio])
$products = [
    1 => ['name' => 'Producto A', 'price' => 10.00],
    2 => ['name' => 'Producto B', 'price' => 15.50],
    3 => ['name' => 'Producto C', 'price' => 7.25],
];

// Si se ha hecho clic en "Añadir al carrito"
if (isset($_GET['add'])) {
    $productId = $_GET['add'];

    // Verificamos que el producto exista en la lista
    if (isset($products[$productId])) {
        // Si el producto ya está en el carrito, incrementamos la cantidad
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            // Si no está, lo añadimos con cantidad 1
            $_SESSION['cart'][$productId] = [
                'name' => $products[$productId]['name'],
                'price' => $products[$productId]['price'],
                'quantity' => 1
            ];
        }
    }

    // Redirigimos de nuevo a products.php para evitar doble inserción en caso de refresco
    header('Location: products.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <ul>
        <?php foreach ($products as $id => $prod): ?>
            <li>
                <?php echo $prod['name']; ?> - $<?php echo number_format($prod['price'], 2); ?>
                | <a href="?add=<?php echo $id; ?>">Añadir al carrito</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>
    <a href="cart.php">Ver Carrito</a>
</body>
</html>


