<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Declarar patrones y restricciones
    $pattern_nombre = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/";
    $minlength_nombre = 2;
    $maxlength_nombre = 50;
    $pattern_telefono = "/^\d{9,}$/";

    // Validar y sanear los datos
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_NUMBER_INT);
    $tipo_evento = filter_input(INPUT_POST, 'tipo_evento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $terminos = filter_input(INPUT_POST, 'terminos', FILTER_VALIDATE_BOOLEAN);

    // Mensajes de error
    $errores = [];

    if (!$nombre || !preg_match($pattern_nombre, $nombre) || strlen($nombre) < $minlength_nombre || strlen($nombre) > $maxlength_nombre) {
        $errores[] = "El nombre debe tener entre $minlength_nombre y $maxlength_nombre caracteres y solo contener letras.";
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    if (!$telefono || !preg_match($pattern_telefono, $telefono)) {
        $errores[] = "El teléfono debe contener al menos 9 dígitos.";
    }

    if ($tipo_evento !== "Presencial" && $tipo_evento !== "Online") {
        $errores[] = "El tipo de evento seleccionado no es válido.";
    }

    if (!$terminos) {
        $errores[] = "Debe aceptar los términos y condiciones.";
    }

    // Si no hay errores, mostrar mensaje de éxito
    if (empty($errores)) {
        echo "<h1>Registro exitoso</h1>";
        echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
        echo "<p>Correo: " . htmlspecialchars($correo) . "</p>";
        echo "<p>Teléfono: " . htmlspecialchars($telefono) . "</p>";
        echo "<p>Tipo de evento: " . htmlspecialchars($tipo_evento) . "</p>";
        echo "<p>Gracias por registrarse.</p>";
        exit; // Salir para evitar que se muestre nuevamente el formulario
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Eventos</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required minlength="2" maxlength="50" pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]+">
        <br><br>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br><br>

        <label for="telefono">Teléfono de contacto:</label>
        <input type="text" id="telefono" name="telefono" required pattern="\d{9,}">
        <br><br>

        <label for="tipo_evento">Tipo de evento:</label>
        <select id="tipo_evento" name="tipo_evento" required>
            <option value="Presencial">Presencial</option>
            <option value="Online">Online</option>
        </select>
        <br><br>

        <label>
            <input type="checkbox" name="terminos" required>
            Acepto los términos y condiciones
        </label>
        <br><br>

        <button type="submit">Registrarse</button>
    </form>
    <?php
    // Mostrar errores debajo del formulario
    if (!empty($errores)) {
        echo "<div style='color: red; margin-top: 20px;'><h2>Errores:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul></div>";
    }
    ?>
</body>
</html>

