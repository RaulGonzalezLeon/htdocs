<?php
require_once 'Dish.php';
require_once 'Menu.php';

// Crear platos
$dish1 = new Dish("Spaghetti Bolognese", 12.99, ["pasta", "carne", "tomate"], true);
$dish2 = new Dish("Pizza Margherita", 9.99, ["masa", "queso", "tomate"], true);
$dish3 = new Dish("Ensalada César", 7.99, ["lechuga", "pollo", "queso parmesano"], false);
$dish4 = new Dish("Sopa de Lentejas", 5.99, ["lentejas", "zanahoria", "cebolla"], true);

// Crear menú y agregar platos
$menu = new Menu("Restaurante Gourmet");
$menu->addDish($dish1);
$menu->addDish($dish2);
$menu->addDish($dish3);
$menu->addDish($dish4);

// Mostrar el menú en HTML
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú del Restaurante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .menu {
            margin: 20px 0;
        }
        .available {
            color: green;
        }
        .unavailable {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Menú de <?= $menu->restaurantName ?></h1>
    <div class="menu">
        <h2>Todos los platos</h2>
        <ul>
            <?php foreach ($menu->listDishes() as $dish): ?>
                <li class="<?= $dish->isAvailable() ? 'available' : 'unavailable' ?>">
                    <?= $dish->getDetails() ?> 
                    <?= $dish->isAvailable() ? "(Disponible)" : "(No disponible)" ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="menu">
        <h2>Platos Disponibles</h2>
        <ul>
            <?php foreach ($menu->listAvailableDishes() as $dish): ?>
                <li class="available">
                    <?= $dish->getDetails() ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
