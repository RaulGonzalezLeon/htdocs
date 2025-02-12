<?php
$evento = new DateTime('2024-10-16 15:30:00');

$evento->setDate(2025, 5, 20); 
$evento->setTime(18, 45, 00); 

$timestamp = strtotime('2026-01-01 12:00:00');
$evento->setTimestamp($timestamp);

$evento->modify('+3 days');  
$evento->modify('-2 hours'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha del Evento</title>
</head>
<body>
    <h2>Fecha y hora final del evento:</h2>
    <p><?php echo $evento->format('d/m/Y H:i:s'); ?></p>
</body>
</html>
