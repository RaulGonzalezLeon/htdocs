<?php
$nombre = ' Raul ';
$correo = ' RaulGonzaleZ@gmail.com';
$mensaje = 'esto es un mensaje de prueba urgente capullo';

$nombre_sin_espacios = trim($nombre);
$correo_sin_espacios = trim($correo);
$mensaje_sin_espacios = trim($mensaje);

$correo_en_minusculas = strtolower($correo);
$mensaje_sin_palabras_inapropiadas = str_replace('capullo','*******', $mensaje);

$reemplazo_insensible = str_ireplace('URGENTE','urgente',$mensaje);
$repetir_cadena = $mensaje . str_repeat('!',3);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B_5.3 Raul Gonzalez</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <h1>Mostrar Datos Originales</h1>
    <p><?= $nombre ?></p>
    <p><?= $correo ?></p>
    <p><?= $mensaje ?></p>
    <h1>Eliminando espacios</h1>
    <p><?= $nombre_sin_espacios ?></p>
    <p><?= $correo_sin_espacios ?></p>
    <p><?= $mensaje_sin_espacios ?></p>
    <h1>Correo en minusculas</h1>
    <p><?= $correo_en_minusculas ?></p>
    <h1>Reemplazar palabras inapropiadas</h1>
    <p><?= $mensaje_sin_palabras_inapropiadas ?></p>
    <h1>Reemplazo de minusculas a mayusculas</h1>
    <p><?= $reemplazo_insensible ?></p>
    <h1>Repetir Cadena</h1>
    <p><?= $repetir_cadena ?></p>
<?php include 'includes/footer.php'; ?>
</body>
</html>