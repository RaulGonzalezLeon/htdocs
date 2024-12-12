<?php
require_once 'Fleet.php';
require_once 'Vehicle.php';

// Creación de objetos de vehículos
$vehicle1 = new Vehicle("Toyota", "Corolla", "ABC123", true);
$vehicle2 = new Vehicle("Honda", "Civic", "DEF456", false);
$vehicle3 = new Vehicle("Ford", "Focus", "GHI789", true);

// Creación de la flota
$fleet = new Fleet("Parque Principal");
$fleet->addVehicle($vehicle1);
$fleet->addVehicle($vehicle2);
$fleet->addVehicle($vehicle3);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque de Vehículos</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <h1>Información del Parque de Vehículos: <?php echo $fleet->getName(); ?></h1>
    <h2>Todos los vehículos:</h2>
    <?php $fleet->listVehicles(); ?>

    <h2>Vehículos disponibles:</h2>
    <?php $fleet->listAvailableVehicles(); ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>
