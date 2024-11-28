<?php
// Clase Vehicle
class Vehicle {
    public $make;
    public $model;
    public $licensePlate;
    public $available;

    public function __construct($make, $model, $licensePlate, $available) {
        $this->make = $make;
        $this->model = $model;
        $this->licensePlate = $licensePlate;
        $this->available = $available;
    }

    public function getDetails() {
        return "Marca: $this->make, Modelo: $this->model, Matrícula: $this->licensePlate, Disponible: " . ($this->available ? "Sí" : "No");
    }

    public function isAvailable() {
        return $this->available;
    }
}

// Clase Fleet
class Fleet {
    public $name;
    public $vehicles = [];

    public function __construct($name, $vehicles = []) {
        $this->name = $name;
        $this->vehicles = $vehicles;
    }

    public function addVehicle($vehicle) {
        $this->vehicles[] = $vehicle;
    }

    public function listVehicles() {
        foreach ($this->vehicles as $vehicle) {
            echo $vehicle->getDetails() . "<br>";
        }
    }

    public function listAvailableVehicles() {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->isAvailable()) {
                echo $vehicle->getDetails() . "<br>";
            }
        }
    }
}

// Creación de objetos y visualización
$vehicle1 = new Vehicle("Toyota", "Corolla", "ABC123", true);
$vehicle2 = new Vehicle("Honda", "Civic", "DEF456", false);
$vehicle3 = new Vehicle("Ford", "Focus", "GHI789", true);

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
    <h1>Información del Parque de Vehículos: <?php echo $fleet->name; ?></h1>
    <h2>Todos los vehículos:</h2>
    <?php $fleet->listVehicles(); ?>

    <h2>Vehículos disponibles:</h2>
    <?php $fleet->listAvailableVehicles(); ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>
