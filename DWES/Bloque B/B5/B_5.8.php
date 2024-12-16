<?php
$canciones = [
    'Blinding Lights - The Weeknd' => 1500,
    'Estoy enfermo - Pignoise' => 1200,
    'Levitating - Dua Lipa' => 1800,
    'One More Night - Maroon 5' => 1600,
    'Feel Good Inc. - Gorillaz' => 1700,
];

// Generar número aleatorio de reproducciones (Tarea 1)
foreach ($canciones as $nombre => &$reproducciones) {
    $reproducciones = mt_rand(1000, 2000);
}
unset($reproducciones);

// Tareas de ordenación
$porNombreAsc = $canciones; sort($canciones);
$porNombreDesc = $canciones; rsort($porNombreDesc);
$porReproduccionesAsc = $canciones; asort($porReproduccionesAsc);
$porReproduccionesDesc = $canciones; arsort($porReproduccionesDesc);
$porClaveAsc = $canciones; ksort($porClaveAsc);
$porClaveDesc = $canciones; krsort($porClaveDesc);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenación de Canciones</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <h1>Ejemplo: Funciones de Ordenación de Arrays</h1>
    
    <!-- Lista Original -->
    <h2>Lista Original</h2>
    <ul>
        <?php foreach ($canciones as $nombre => $reproducciones): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Nombre Ascendente -->
    <h2>2. Ordenar por Nombre (Ascendente)</h2>
    <ul>
        <?php foreach ($porNombreAsc as $nombre): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Nombre Descendente -->
    <h2>3. Ordenar por Nombre (Descendente)</h2>
    <ul>
        <?php foreach ($porNombreDesc as $nombre): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Número de Reproducciones Ascendente -->
    <h2>4. Ordenar por Número de Reproducciones (Ascendente)</h2>
    <ul>
        <?php foreach ($porReproduccionesAsc as $nombre => $reproducciones): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Número de Reproducciones Descendente -->
    <h2>5. Ordenar por Número de Reproducciones (Descendente)</h2>
    <ul>
        <?php foreach ($porReproduccionesDesc as $nombre => $reproducciones): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Clave Ascendente -->
    <h2>6. Ordenar por Clave (Nombre de Canción) Ascendente</h2>
    <ul>
        <?php foreach ($porClaveAsc as $nombre => $reproducciones): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Ordenar por Clave Descendente -->
    <h2>7. Ordenar por Clave (Nombre de Canción) Descendente</h2>
    <ul>
        <?php foreach ($porClaveDesc as $nombre => $reproducciones): ?>
            <li><?php echo $nombre; ?></li>
        <?php endforeach; ?>
    </ul>
<?php include 'includes/footer.php'; ?>
</body>
</html>


