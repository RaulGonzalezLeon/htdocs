<?php
// Función para generar contraseñas aleatorias
function generarContrasena($longitud = 8) {
    // Caracteres permitidos para la contraseña
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $contrasena = '';
    $maxIndex = strlen($caracteres) - 1;

    // Genera la contraseña aleatoria
    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[random_int(0, $maxIndex)];
    }

    // Contador estático para las contraseñas generadas
    static $contador = 0;
    $contador++;

    // Devuelve la contraseña y el contador
    return [
        'contrasena' => $contrasena,
        'contador' => $contador
    ];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Generador de Contraseñas</title>
</head>

<body>
    <h1>Generador de Contraseñas Aleatorias</h1>

    <?php
    // Generar contraseñas de diferentes longitudes
    $resultado1 = generarContrasena(); // Longitud predeterminada (8)
    $resultado2 = generarContrasena(12); // Longitud personalizada (12)
    $resultado3 = generarContrasena(16); // Longitud personalizada (16)
    ?>

    <h2>Contraseñas generadas:</h2>
    <ul>
        <li>Contraseña 1 (8 caracteres): <?= $resultado1['contrasena'] ?></li>
        <li>Contraseña 2 (12 caracteres): <?= $resultado2['contrasena'] ?></li>
        <li>Contraseña 3 (16 caracteres): <?= $resultado3['contrasena'] ?></li>
    </ul>

    <p>Total de contraseñas generadas: <?= $resultado3['contador'] ?></p>
</body>

</html>
