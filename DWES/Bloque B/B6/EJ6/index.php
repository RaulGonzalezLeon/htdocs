<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapando contenido</title>
</head>
<body>
    <h1>Ejemplo: Escapando contenido proporcionado por usuarios</h1>
    <p>
        Haz clic en el siguiente enlace para enviar un mensaje:
        <a href="xss.php?mensaje=<?php echo urlencode('<script>alert("ataque XSS")</script>'); ?>">
            Enviar mensaje malicioso
        </a>
    </p>
</body>
</html>
