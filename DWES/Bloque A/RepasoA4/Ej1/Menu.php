<?php
class Menu {
    public string $restaurantName;
    public array $dishes;

    public function __construct(string $restaurantName, array $dishes = []) {
        $this->restaurantName = $restaurantName;
        $this->dishes = $dishes;
    }

    public function addDish(Dish $dish): void {
        $this->dishes[] = $dish;
    }

    public function listDishes(): array {
        return $this->dishes;
    }

    public function listAvailableDishes(): array {
        return array_filter($this->dishes, function(Dish $dish): bool {
            return $dish->isAvailable();
        });
    }
}
?>
