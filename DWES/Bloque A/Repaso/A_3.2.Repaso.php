<?php
function calcularArea($dimension1, $dimension2 = null, $figura = "cuadrado"){
    $area = 0;
    switch($figura){
        case "cuadrado":
            $area = $dimension1 * $dimension1;
            break;
        case "rectangulo":
            $area = $dimension1 * $dimension2;
            break;
        case "triangulo":
            $area = ($dimension1 * $dimension2)/2;
            break;
    }

    return $area;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>El area del cuadrado es: <?= calcularArea(3) ?></p>
    <p>El area del rectangulo es: <?= calcularArea(3,4,"rectangulo") ?></p>
    <p>El area del triangulo es: <?= calcularArea(3,7,"triangulo") ?></p>
    
</body>
</html>