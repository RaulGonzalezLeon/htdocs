<?php
// Clase Fleet
require_once 'Vehicle.php';

class Fleet {
    private string $name;
    private array $vehicles;

    public function __construct(string $name, array $vehicles = []) {
        $this->setName($name);
        $this->setVehicles($vehicles);
    }

    // Métodos Getter y Setter
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        if (empty($name)) {
            echo "El nombre de la flota no puede estar vacío. Se asignará 'Flota por defecto'.<br>";
            $this->name = "Flota por defecto";
            return;
        }
        if (strlen($name) > 50) {
            echo "El nombre de la flota supera los 50 caracteres. Se truncará.<br>";
            $this->name = substr($name, 0, 50);
            return;
        }
        $this->name = $name;
    }

    public function getVehicles(): array {
        return $this->vehicles;
    }

    public function setVehicles(array $vehicles): void {
        $validVehicles = [];
        foreach ($vehicles as $vehicle) {
            if ($vehicle instanceof Vehicle) {
                $validVehicles[] = $vehicle;
            } else {
                echo "Se ignoró un elemento no válido al establecer los vehículos.<br>";
            }
        }
        $this->vehicles = $validVehicles;
    }

    // Método para agregar un vehículo a la flota
    public function addVehicle(Vehicle $vehicle): void {
        if (in_array($vehicle, $this->vehicles, true)) {
            echo "El vehículo ya está en la flota. No se añadirá nuevamente.<br>";
            return;
        }
        $this->vehicles[] = $vehicle;
    }

    // Método para listar todos los vehículos
    public function listVehicles(): void {
        if (empty($this->vehicles)) {
            echo "No hay vehículos en la flota.<br>";
            return;
        }
        foreach ($this->vehicles as $vehicle) {
            echo $vehicle->getDetails() . "<br>";
        }
    }

    // Método para listar solo los vehículos disponibles
    public function listAvailableVehicles(): void {
        $availableVehicles = array_filter($this->vehicles, function ($vehicle) {
            return $vehicle->isAvailable();
        });

        if (empty($availableVehicles)) {
            echo "No hay vehículos disponibles en la flota.<br>";
            return;
        }

        foreach ($availableVehicles as $vehicle) {
            echo $vehicle->getDetails() . "<br>";
        }
    }
}
?>

