<?php
$lunes = [
    'PrimerHora' => "DIW",
    'SegundaHora' => "DIW",
    'TerceraHora' => "EIE",
    'CuartaHora' => "EIE",
    'QuintaHora' => "DWEC",
    'SextaHora' => "DWEC",
];
$martes = [
    'PrimerHora' => "DAW",
    'SegundaHora' => "DWES",
    'TerceraHora' => "DWES",
    'CuartaHora' => "DWEC",
    'QuintaHora' => "DWEC",
    'SextaHora' => "HLC",
];
$miercoles = [
    'PrimerHora' => "DWES",
    'SegundaHora' => "DWES",
    'TerceraHora' => "DWEC",
    'CuartaHora' => "DWEC",
    'QuintaHora' => "HLC",
    'SextaHora' => "DAW",
];
$jueves = [
    'PrimerHora' => "DWES",
    'SegundaHora' => "DWES",
    'TerceraHora' => "DIW",
    'CuartaHora' => "DIW",
    'QuintaHora' => "EIE",
    'SextaHora' => "EIE",
];
$viernes = [
    'PrimerHora' => "DWES",
    'SegundaHora' => "DWES",
    'TerceraHora' => "DIW",
    'CuartaHora' => "DIW",
    'QuintaHora' => "DAW",
    'SextaHora' => "HLC",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej2 RaulGL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>HORARIO SEMANA</h1>
    <table>
        <tr>
            <td>Hora</td>
            <td>Lunes</td>
            <td>Martes</td>
            <td>Miercoles</td>
            <td>Jueves</td>
            <td>Viernes</td>
        </tr>
        <tr>
            <td>1ª Hora</td>
            <td><?= $lunes['PrimerHora'] ?></td>
            <td><?= $martes['PrimerHora'] ?></td>
            <td><?= $miercoles['PrimerHora'] ?></td>
            <td><?= $jueves['PrimerHora'] ?></td>
            <td><?= $viernes['PrimerHora'] ?></td>
        </tr>
        <tr>
            <td>2ª Hora</td>
            <td><?= $lunes['SegundaHora'] ?></td>
            <td><?= $martes['SegundaHora'] ?></td>
            <td><?= $miercoles['SegundaHora'] ?></td>
            <td><?= $jueves['SegundaHora'] ?></td>
            <td><?= $viernes['SegundaHora'] ?></td>
        </tr>
        <tr>
            <td>3ª Hora</td>
            <td><?= $lunes['TerceraHora'] ?></td>
            <td><?= $martes['TerceraHora'] ?></td>
            <td><?= $miercoles['TerceraHora'] ?></td>
            <td><?= $jueves['TerceraHora'] ?></td>
            <td><?= $viernes['TerceraHora'] ?></td>
        </tr>
        <tr>
            <td>4ª Hora</td>
            <td><?= $lunes['CuartaHora'] ?></td>
            <td><?= $martes['CuartaHora'] ?></td>
            <td><?= $miercoles['CuartaHora'] ?></td>
            <td><?= $jueves['CuartaHora'] ?></td>
            <td><?= $viernes['CuartaHora'] ?></td>
        </tr>
        <tr>
            <td>5ª Hora</td>
            <td><?= $lunes['QuintaHora'] ?></td>
            <td><?= $martes['QuintaHora'] ?></td>
            <td><?= $miercoles['QuintaHora'] ?></td>
            <td><?= $jueves['QuintaHora'] ?></td>
            <td><?= $viernes['QuintaHora'] ?></td>
        </tr>
        <tr>
            <td>6ª Hora</td>
            <td><?= $lunes['SextaHora'] ?></td>
            <td><?= $martes['SextaHora'] ?></td>
            <td><?= $miercoles['SextaHora'] ?></td>
            <td><?= $jueves['SextaHora'] ?></td>
            <td><?= $viernes['SextaHora'] ?></td>
        </tr>
    </table>

</body>
</html>