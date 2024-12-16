<?php 
$texto = 'Empresa Practicas de Empresa';


$primera_aparicion = strpos($texto, 'Pr');
$ultima_aparicion = strrpos($texto, 'Empresa');
$contiene_palabra = preg_match('/Practicas/', $texto);
$extraer_texto = substr($texto, 8);
$comienza_texto = str_starts_with($texto, 'Emp');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B_5.2 Raul Gonzalez</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <p>Primera aparicion: <?= $primera_aparicion ?></p>
    <p>Ultima aparicion: <?= $ultima_aparicion ?></p>
    <p>Contiene la palabra (Practicas): <?= $contiene_palabra  ?></p>
    <p>Extrae partes del texto (Practicas): <?= $extraer_texto ?></p>
    <p>Comprobar si comienza por (Emp): <?= $comienza_texto ?></p>
<?php include 'includes/footer.php'; ?>
</body>
</html>