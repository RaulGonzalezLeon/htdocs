<?php 
$numero = 7; /* Numero que se va a multiplicar */

/* Bucle para sacar las multiplicaciones */
for($numero2 = 1; $numero2 <= 10; $numero2++ ){
    $numero2;
    $resultado[] = $numero * $numero2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej1 RaulGL</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <h1>Tabla del 7</h1>
    <table>
        <tr>
            <th>a</th><th>*</th><th>b</th><th>=</th><th>a*b</th>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[0] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[1] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[2] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[3] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[4] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[5] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[6] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[7] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[8] ?></td>
        </tr>
        <tr>
            <td><?= $numero ?></td><td>*</td><td><?= $numero2 ?></td><td>=</td><td><?= $resultado[9] ?></td>
        </tr>
    </table>
</body>
</html>