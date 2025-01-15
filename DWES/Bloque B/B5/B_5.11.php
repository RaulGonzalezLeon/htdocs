<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba redSocial</title>
</head>
<body>
<?php include 'includes/header.php'; ?>

<?php 
// Importar la clase redSocial desde el archivo PHP
require_once 'redSocial.php';

// Instanciar la clase
$redSocial = new redSocial();

// Mostrar intereses como cadena
echo '<h2>Intereses Como Cadena</h2>';
echo $redSocial->obtenerInteresesComoCadena();

// Agregar nuevo interés
$redSocial->agregarInteres('Deportes');
$redSocial->agregarInteres('Cocina');

// Mostrar intereses con números aleatorios
echo '<h2>Intereses con Números Aleatorios</h2>';
echo $redSocial->obtenerInteresesConNumerosAleatorios();


?>

<?php include 'includes/footer.php'; ?>
</body>
</html>
