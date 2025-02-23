<?php
session_start();

// Acción para vaciar el carrito
if (isset($_GET['action']) && $_GET['action'] === 'empty') {
    $_SESSION['cart'] = []; // Se vacía el carrito
    header('Location: checkout.php');
    exit();
}

// Acción para finalizar la compra
$mensaje = '';
if (isset($_GET['action']) && $_GET['action'] === 'buy') {
    // Aquí iría la lógica de procesar pago o guardar en BD
    // Por simplicidad, solo vaciamos el carrito
    $_SESSION['cart'] = [];
    $mensaje = '¡Compra realizada con éxito!';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
</head>
<body>
    <h1>Finalizar Compra</h1>

    <?php if ($mensaje): ?>
        <p style="color:green;"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>No hay productos en el carrito.</p>
    <?php else: ?>
        <p>¿Deseas vaciar el carrito o proceder con la compra?</p>
        <a href="?action=empty">Vaciar Carrito</a> |
        <a href="?action=buy">Proceder a la Compra</a>
    <?php endif; ?>

    <hr>
    <a href="products.php">Volver a la Tienda</a>
</body>
</html>
