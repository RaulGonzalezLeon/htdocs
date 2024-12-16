<?php
$texto = 'Practicas de empresa';

$texto_mayusculas = strtoupper($texto);
$texto_capitalizada = ucwords($texto);
$texto_longitud = strlen($texto);
$texto_longitud_sin_espacios =strlen(str_replace(" ","",$texto)) ;
$cantidad_palabras = str_word_count($texto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B_5.1 Raul Gonzalez </title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <p>Texto original: <?= $texto ?> </p>
    <p>Texto en mayusculas: <?= $texto_mayusculas ?></p>
    <p>El texto con cada palabra capitalizada: <?= $texto_capitalizada ?></p>
    <p>La longitud del texto en caracteres: <?= $texto_longitud ?></p>
    <p>La longitud del texto en caracteres sin espacios: <?= $texto_longitud_sin_espacios ?></p>
    <p>La cantidad de palabras en el texto: <?= $cantidad_palabras ?></p>
<?php include 'includes/footer.php'; ?>
</body>
</html>