<?php
session_start();

// Si el carrito no existe en sesión, lo creamos vacío (por seguridad)
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>El carrito está vacío.</p>
    <?php else: ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $totalGeneral = 0;
            // Recorremos cada producto en el carrito
            foreach ($_SESSION['cart'] as $id => $item):
                $subtotal = $item['price'] * $item['quantity'];
                $totalGeneral += $subtotal;
            ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>$<?php echo number_format($item['price'], 2); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($subtotal, 2); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3" align="right"><strong>Total General</strong></td>
                <td><strong>$<?php echo number_format($totalGeneral, 2); ?></strong></td>
            </tr>
        </table>
    <?php endif; ?>

    <hr>
    <a href="products.php">Seguir Comprando</a> |
    <a href="checkout.php">Finalizar Compra</a>
</body>
</html>


