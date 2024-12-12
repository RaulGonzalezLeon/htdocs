<?php
// Clase Vehicle
class Vehicle {
    private string $make;
    private string $model;
    private string $licensePlate;
    private bool $available;

    public function __construct(string $make, string $model, string $licensePlate, bool $available) {
        $this->make = $make;
        $this->model = $model;
        $this->licensePlate = $licensePlate;
        $this->available = $available;
    }

    // Métodos Getter y Setter
    public function getMake(): string {
        return $this->make;
    }

    public function setMake(string $make): void {
        $this->make = $make;
    }

    public function getModel(): string {
        return $this->model;
    }

    public function setModel(string $model): void {
        $this->model = $model;
    }

    public function getLicensePlate(): string {
        return $this->licensePlate;
    }

    public function setLicensePlate(string $licensePlate): void {
        $this->licensePlate = $licensePlate;
    }

    public function isAvailable(): bool {
        return $this->available;
    }

    public function setAvailable(bool $available): void {
        $this->available = $available;
    }

    // Método para obtener los detalles del vehículo
    public function getDetails(): string {
        return "Marca: $this->make, Modelo: $this->model, Matrícula: $this->licensePlate, Disponible: " . ($this->available ? "Sí" : "No");
    }
}
?>
