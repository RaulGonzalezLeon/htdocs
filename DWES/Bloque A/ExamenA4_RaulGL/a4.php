<?php

declare(strict_types=1);
require "includes/Producto.php";
require "includes/Carrito.php";

/*
    TAREAS A REALIZAR:
*/

// Generar 10 productos (los IDs que contengan deben ser del 1 al 10)
$producto1 = new Producto("Producto1", 9.99, 2,1);
$producto2 = new Producto("Producto2", 19.99, 1,2);
$producto3 = new Producto("Producto3", 7.99, 5,3);
$producto4 = new Producto("Producto4", 3.99, 2,4);
$producto5 = new Producto("Producto5", 41.99, 4,5);
$producto6 = new Producto("Producto6", 1.99, 3,6);
$producto7 = new Producto("Producto7", 8.99, 7,7);
$producto8 = new Producto("Producto8", 9.99, 1,8);
$producto9 = new Producto("Producto9", 54.99, 4,9);
$producto10 = new Producto("Producto10", 0.99, 3,10);

$productos = [$producto1,$producto2,$producto3,$producto4,$producto5,
$producto6,$producto7,$producto8,$producto9,$producto10];

// Prueba a asignarle una cadena vacía como un nombre del producto con id 1, guardando en una variable $resultadoPruebaNombre una cadena que muestre el resultado de la asignación
$resultadoPruebaNombre = $producto1->setNombre(" ");

// Prueba a asignarle la cantidad -20 a la cantidad del producto con id 2, guardando en una variable $resultadoPruebaCantidad una cadena que muestre el resultado de la asignación
$resultadoPruebaCantidad = $producto2->setCantidad(-20);

// Prueba a asignarle el ID 0 al producto con id 3, guardando en una variable $resultadoPruebaId una cadena que muestre el resultado de la asignación
$resultadoPruebaId = $producto1->setId(0);

// Crea un objeto Carrito que contenga los 10 productos anteriores usando el constructor de la clase Carrito
$miCarrito = new Carrito($productos, 0.12);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Carrito de Compras</h1>

<h2>Resultado de las operaciones realizadas</h2>
<ul>
    <li>Resultado cambio de nombre del producto con ID 1: <?= $resultadoPruebaNombre ?> </li>
    <li>Resultado cambio de cantidad del producto con ID 2: <?= $resultadoPruebaCantidad ?> </li>
    <li>Resultado cambio de ID del producto con ID 3: <?= $resultadoPruebaId ?> </li>
    <li>Resultado de añadir el producto con ID 4: <?= $resultadoPruebaAñadirProducto ?> </li>
</ul>
<br>
<hr>
<h2>Detalles del carrito</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $miCarrito->muestraCarrito(); ?>
    </tbody>
</table>

<br>
<hr>
<h2>Resumen del Carrito</h2>
<p>Subtotal: <?= $miCarrito->calcularSubtotal() ?> €</p>
<p>Impuestos (21%): <?= $miCarrito->calcularImpuestos() ?> €</p>
<p class="total">Total: <?= $miCarrito->calcularTotal() ?> €</p>

</body>
</html>
