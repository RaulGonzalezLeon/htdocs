<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las fechas ingresadas por el usuario
    $inicio = new DateTime($_POST["inicio"]);
    $fin = new DateTime($_POST["fin"]);

    // Calcular la diferencia entre ambas fechas
    $intervalo = $inicio->diff($fin);

    // Calcular el número total de horas y minutos
    $totalMinutos = ($intervalo->days * 24 * 60) + ($intervalo->h * 60) + $intervalo->i;
    $totalHoras = intdiv($totalMinutos, 60);
    $minRestantes = $totalMinutos % 60;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Duración de Evento</title>
</head>
<body>
    <h2>Ingrese las fechas y horas del evento</h2>
    <form method="POST">
        <label for="inicio">Fecha y hora de inicio:</label>
        <input type="datetime-local" name="inicio" required>
        <br><br>
        <label for="fin">Fecha y hora de fin:</label>
        <input type="datetime-local" name="fin" required>
        <br><br>
        <button type="submit">Calcular Duración</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Resultados:</h3>
        <p>Duración del evento: <?= $intervalo->format('%d días, %h horas, %i minutos') ?></p>
        <p>Duración total: <?= $totalHoras ?> horas y <?= $minRestantes ?> minutos.</p>
    <?php endif; ?>
</body>
</html>
