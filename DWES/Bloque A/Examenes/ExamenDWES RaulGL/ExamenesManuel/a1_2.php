<?php
// Definir el horario en un array asociativo
$horario = [
    "Lunes" => ["DIW", "DIW", "EIE", "EIE", "DWEC", "DWEC"],
    "Martes" => ["DAW", "DWES", "DWES", "DWEC", "DWEC", "HLC"],
    "Miércoles" => ["DWES", "DWES", "DWEC", "DWEC", "HLC", "DAW"],
    "Jueves" => ["DWES", "DWES", "DIW", "DIW", "EIE", "EIE"],
    "Viernes" => ["DWES", "DWES", "DIW", "DIW", "DAW", "HLC"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario Semanal</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Horario Semanal</h1>
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1ª Hora</td>
                <td><?php echo $horario['Lunes'][0]; ?></td>
                <td><?php echo $horario['Martes'][0]; ?></td>
                <td><?php echo $horario['Miércoles'][0]; ?></td>
                <td><?php echo $horario['Jueves'][0]; ?></td>
                <td><?php echo $horario['Viernes'][0]; ?></td>
            </tr>
            <tr>
                <td>2ª Hora</td>
                <td><?php echo $horario['Lunes'][1]; ?></td>
                <td><?php echo $horario['Martes'][1]; ?></td>
                <td><?php echo $horario['Miércoles'][1]; ?></td>
                <td><?php echo $horario['Jueves'][1]; ?></td>
                <td><?php echo $horario['Viernes'][1]; ?></td>
            </tr>
            <tr>
                <td>3ª Hora</td>
                <td><?php echo $horario['Lunes'][2]; ?></td>
                <td><?php echo $horario['Martes'][2]; ?></td>
                <td><?php echo $horario['Miércoles'][2]; ?></td>
                <td><?php echo $horario['Jueves'][2]; ?></td>
                <td><?php echo $horario['Viernes'][2]; ?></td>
            </tr>
            <tr>
                <td>Recreo</td>
                <td colspan="5">Recreo</td>
            </tr>
            <tr>
                <td>4ª Hora</td>
                <td><?php echo $horario['Lunes'][3]; ?></td>
                <td><?php echo $horario['Martes'][3]; ?></td>
                <td><?php echo $horario['Miércoles'][3]; ?></td>
                <td><?php echo $horario['Jueves'][3]; ?></td>
                <td><?php echo $horario['Viernes'][3]; ?></td>
            </tr>
            <tr>
                <td>5ª Hora</td>
                <td><?php echo $horario['Lunes'][4]; ?></td>
                <td><?php echo $horario['Martes'][4]; ?></td>
                <td><?php echo $horario['Miércoles'][4]; ?></td>
                <td><?php echo $horario['Jueves'][4]; ?></td>
                <td><?php echo $horario['Viernes'][4]; ?></td>
            </tr>
            <tr>
                <td>6ª Hora</td>
                <td><?php echo $horario['Lunes'][5]; ?></td>
                <td><?php echo $horario['Martes'][5]; ?></td>
                <td><?php echo $horario['Miércoles'][5]; ?></td>
                <td><?php echo $horario['Jueves'][5]; ?></td>
                <td><?php echo $horario['Viernes'][5]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
