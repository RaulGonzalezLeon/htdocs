<?php
$fecha_ingresada = '16/10/2024 15:30:00';
$fecha_convertir = date_create_from_format('d/m/Y H:i:s', $fecha_ingresada);
$timestamp = $fecha_convertir->getTimestamp();
$fecha_formateada = $fecha_convertir->format('j \d\e F \d\e Y, H:i');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 RaulGL</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <p>Fecha en formato Y-m-d H:i:s: <?= $fecha_convertir->format('Y-m-d H:i:s') ?></p>
    <p>Timestamp UNIX: <?= $timestamp ?></p>
    <p>Fecha formateada: <?= $fecha_formateada ?></p>
<?php include 'includes/footer.php'; ?>
</body>
</html>
