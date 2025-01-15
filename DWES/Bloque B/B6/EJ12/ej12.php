<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $newsletter = $_POST['newsletter'] ?? '';

    $errores = [];

    // Validar correo electrónico
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Por favor, ingresa un correo electrónico válido.";
    }

    // Validar edad
    if (empty($edad) || !filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 18]])) {
        $errores[] = "Debes ser mayor de 18 años.";
    }

    // Validar interés en boletines
    if ($newsletter !== 'si') {
        $errores[] = "Debes confirmar tu interés en recibir boletines.";
    }

    if (empty($errores)) {
        echo "<p>Registro completado con éxito.</p>";
    } else {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Evento</title>
</head>
<body>
    <h1>Registro de Evento</h1>
    <form method="post" action="">
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" min="18" required><br><br>

        <label for="newsletter">¿Deseas recibir boletines?</label><br>
        <input type="checkbox" id="newsletter" name="newsletter" value="si"> Sí<br><br>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
