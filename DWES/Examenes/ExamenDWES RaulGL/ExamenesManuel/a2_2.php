<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <?php
    // Generar 3 tablas utilizando un bucle for
    for ($i = 1; $i <= 3; $i++) {
        // Calcular el número de filas y columnas en función del valor de $i
        $rows = 5 * $i;
        $columns = 6 * $i;

        echo "<table border='1' style='border-collapse: collapse; text-align: center; margin-bottom: 10px;'>";

        // Generar filas y columnas
        for ($row = 1; $row <= $rows; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $columns; $col++) {
                // Verificar si la celda está en el borde
                if ($row == 1 || $row == $rows || $col == 1 || $col == $columns) {
                    // Si está en el borde, mostrar las coordenadas
                    echo "<td>($row, $col)</td>";
                } else {
                    // Si no está en el borde, dejar la celda vacía
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";

        // Separar las tablas con una línea horizontal y un salto de línea
        echo "<hr><br>";
    }
    ?>

</body>

</html>