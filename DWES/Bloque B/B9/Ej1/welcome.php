<?php
// Procesar el formulario y almacenar el nombre en una cookie
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    setcookie("usuario", $nombre, 0, "/"); // La cookie dura hasta que el usuario cierre el navegador
    header("Location: welcome.php"); // Redirige para aplicar la cookie
    exit();
}

// Verificar si la cookie ya existe
$usuario = isset($_COOKIE["usuario"]) ? htmlspecialchars($_COOKIE["usuario"]) : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida con Cookies</title>
</head>
<body>
    <?php if ($usuario): ?>
        <h2>Bienvenido de nuevo, <?php echo $usuario; ?>!</h2>
    <?php else: ?>
        <form method="POST">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Enviar</button>
        </form>
    <?php endif; ?>
</body>
</html>

