<?php
declare(strict_types=1);


function generrarArrayInt($min,$max,$n = 10,$value = 7) : int{
    $numeros = [];
    
    for ($i = 0; $i <= $n; $i++) {
        $numeros[rand($min, $max)];
    }

    return $numeros;

};

function muestraArray(){
    $numero = [1,2,3,4,5,6,7,8,9];
    return $numero;
};

function minimoArray($numeros) : int{
    $numeros.min();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1</title>
</head>
<body>
    <h1>Resultados de las Funciones de Array</h1>
    <h3>Array 1 (Aleatorios)</h3>
    <?php generrarArrayInt(2,39) ?>

</body>
</html>