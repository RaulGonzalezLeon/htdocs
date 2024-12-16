<?php 
$canciones = [
    'Blinding Lights - The Weeknd',
    'Estoy enfermo - Pignoise',
    'Levitating - Dua Lipa',
    'One More Night - Maroon 5',
    'Feel Good Inc. - Gorillaz' ,
    'One More Night - Maroon 5',
];

array_unshift($canciones, 'Pasarela - Daddy Yankee');
array_push($canciones, 'Punto 40 - Rauw Alejandro');
array_shift($canciones);
array_pop($canciones);
$buscar_cancion = array_search('Levitating - Dua Lipa', $canciones);
$esta_en_array = in_array('Estoy enfermo - Pignoise', $canciones);
$n_canciones = count($canciones);
$cancion_aleatoria = array_rand($canciones);
$mostrar_array = implode(', ', $canciones);
$array_exploded = explode(', ', $mostrar_array);
$eliminar_duplicados = array_unique($canciones);

$nuevas_canciones = [
    'Despacito - Luis Fonsi',
    'Shape of You - Ed Sheeran',
    'Happier - Marshmello'
];
$canciones_combinadas = array_merge($canciones, $nuevas_canciones);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
        <?php foreach ($canciones as $cancion): ?>
            <li><?= $cancion ?></li>
        <?php endforeach; ?>


        <h1>Buscar Cancion</h1>
        <p><?= $buscar_cancion ?></p>
        <h1>Esta en el array</h1>
        <p><?= $esta_en_array ?></p>
        <h1>Numero Canciones</h1>
        <p><?= $n_canciones ?></p>
        <h1>Cancion Aleatoria</h1>
        <p><?= $cancion_aleatoria ?></p>
        <h1>Mostrar Lista Canciones</h1>
        <p><?= $mostrar_array ?></p>
        <h1>Array Explode</h1>
        <ul>
            <?php foreach ($array_exploded as $cancion): ?>
                <li><?= $cancion ?></li>
            <?php endforeach; ?>
        </ul>
        <h1>Eliminar Duplicados</h1>
        <ul>
            <?php foreach ($eliminar_duplicados as $cancion): ?>
                <li><?= $cancion ?></li>
            <?php endforeach; ?>
        </ul>
        <h1>Fusionar listas</h1>
        <ul>
            <?php foreach ($canciones_combinadas as $cancion): ?>
                <li><?= $cancion ?></li>
            <?php endforeach; ?>
        </ul>
<?php include 'includes/footer.php'; ?>
</body>
</html>