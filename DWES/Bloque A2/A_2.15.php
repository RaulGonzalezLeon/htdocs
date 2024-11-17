<?php
$name = 'Raul';               

$greeting = 'Hola';         
if ($name) {                 
    $greeting = 'Bienvenido al gimnasio, ' . $name;  
}

$product = 'GYM';       
$cost = 30;                   

for ($i = 1; $i <= 12; $i++) {
    $subtotal = $cost * $i;

    if ($i == 1) {
        // Primer mes sin descuento
        $discount = 0;
    } else {
        // Descuento del 30% a partir del segundo mes
        $discount = $subtotal * 0.30;
    }

    $precio[$i] = $subtotal - $discount;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_2.15 RaulGL</title>
</head>
<body>
<?php require 'includes_ejfinal/header.php'; ?>

<p><?= $greeting ?></p>
<h2> Descuentos <?= $product ?></h2>
<table>
    <tr>
        <th>Meses</th>
        <th>Precio</th>
    </tr>
    <?php foreach ($precio as $meses => $precioMes) { ?>
    <tr>
        <td>
            <?= $meses ?>
            mes<?= ($meses === 1) ? '' : 'es'; ?>
        </td>
        <td>
            <?= $precioMes ?>€
        </td>
    </tr>
    <?php } ?>
</table>

<?php include 'includes_ejfinal/footer.php' ?>

</body>
</html>
