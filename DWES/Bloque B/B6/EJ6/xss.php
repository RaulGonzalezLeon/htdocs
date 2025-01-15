<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar mensaje</title>
</head>
<body>
    <h1>Mensaje procesado</h1>
    <p>
        <?php
        if (isset($_GET['mensaje'])) {
            // Escapar caracteres especiales para prevenir XSS
            $mensaje = htmlspecialchars($_GET['mensaje'], ENT_QUOTES, 'UTF-8');
            echo "Mensaje recibido: " . $mensaje;
        } else {
            echo "No se ha proporcionado ningún mensaje.";
        }
        ?>
    </p>
</body>
</html>
