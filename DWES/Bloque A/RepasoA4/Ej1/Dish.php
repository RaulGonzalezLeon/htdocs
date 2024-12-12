<?php
class Dish {
    public string $name;
    public float $price;
    public array $ingredients;
    public bool $available;

    public function __construct(string $name, float $price, array $ingredients, bool $available) {
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
        $this->available = $available;
    }

    public function getDetails(): string {
        $ingredientsList = implode(", ", $this->ingredients);
        return "{$this->name} ({$ingredientsList}) - \${$this->price}";
    }

    public function isAvailable(): bool {
        return $this->available;
    }
}
?>
