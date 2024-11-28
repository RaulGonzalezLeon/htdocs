<?php
// Define el número para la tabla de multiplicar
$numero = 7; // Cambia este número según el valor que quieras multiplicar
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </tr>

        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td><?= $numero ?></td>
                <td>*</td>
                <td><?= $i ?></td>
                <td>=</td>
                <td><?= $numero * $i ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>