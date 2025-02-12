<?php
$fecha_actual = time(); 
$fecha_formateada = date("Y-m-d H:i:s", $fecha_actual); 

// Usamos strtotime para obtener la fecha de inicio (5 días después de la fecha actual)
$fecha_inicio_timestamp = strtotime("+5 days");
$fecha_inicio_formateada = date("Y-m-d H:i:s", $fecha_inicio_timestamp);

// Usamos mktime para crear la fecha de fin (25 de mayo de 2025 a las 12:00:00)
$fecha_fin_timestamp = mktime(12, 0, 0, 5, 25, 2025);
$fecha_fin_formateada = date("Y-m-d H:i:s", $fecha_fin_timestamp);

// Convertimos los timestamps a objetos DateTime para poder usar diff()
$fecha_inicio = new DateTime();
$fecha_inicio->setTimestamp($fecha_inicio_timestamp);

$fecha_fin = new DateTime();
$fecha_fin->setTimestamp($fecha_fin_timestamp);

// Calculamos la diferencia usando el método diff()
$diferencia = $fecha_inicio->diff($fecha_fin);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas en PHP</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <p>Fecha y hora actual: <?php echo $fecha_formateada; ?></p>
    <p>Fecha de inicio: <?php echo $fecha_inicio_formateada; ?></p>
    <p>Fecha de fin: <?php echo $fecha_fin_formateada; ?></p>
    <p>Diferencia en días: <?php echo $diferencia->days; ?></p>
    <?php include 'includes/footer.php'; ?>
</body>
</html>




