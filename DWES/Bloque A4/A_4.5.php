<?php
// Clase Vehicle
class Vehicle {
    public string $make;
    public string $model;
    public string $licensePlate;
    public bool $available;

    public function __construct(string $make, string $model, string $licensePlate, bool $available) {
        $this->make = $make;
        $this->model = $model;
        $this->licensePlate = $licensePlate;
        $this->available = $available;
    }

    public function getDetails(): string {
        return "Marca: $this->make, Modelo: $this->model, Matrícula: $this->licensePlate, Disponible: " . ($this->available ? "Sí" : "No");
    }

    public function isAvailable(): bool {
        return $this->available;
    }
}

// Clase Fleet
class Fleet {
    public string $name;
    public array $vehicles;

    public function __construct(string $name, array $vehicles = []) {
        $this->name = $name;
        $this->vehicles = $vehicles;
    }

    public function addVehicle(Vehicle $vehicle): void {
        $this->vehicles[] = $vehicle;
    }

    public function listVehicles(): void {
        foreach ($this->vehicles as $vehicle) {
            echo $vehicle->getDetails() . "<br>";
        }
    }

    public function listAvailableVehicles(): void {
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
