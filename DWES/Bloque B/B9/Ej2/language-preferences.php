<?php
// Configurar cookie si el usuario ha seleccionado un idioma
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    setcookie("language", $language, time() + (30 * 24 * 60 * 60)); // Cookie válida por 30 días
    header("Location: language-preferences.php"); // Redireccionar para aplicar cambios
    exit();
}

// Obtener idioma desde la cookie si existe
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : null;

?>

<!DOCTYPE html>
<html lang="<?php echo $language ?: 'es'; ?>">
<head>
    <meta charset="UTF-8">
    <title>Selección de Idioma</title>
</head>
<body>
    <?php if ($language): ?>
        <?php if ($language == 'es'): ?>
            <h1>Bienvenido</h1>
            <p>Has seleccionado Español.</p>
        <?php else: ?>
            <h1>Welcome</h1>
            <p>You have selected English.</p>
        <?php endif; ?>
    <?php else: ?>
        <h2>Seleccione su idioma</h2>
        <form method="POST" action="">
            <label>
                <input type="radio" name="language" value="es" required> Español
            </label>
            <label>
                <input type="radio" name="language" value="en" required> English
            </label>
            <button type="submit">Guardar</button>
        </form>
    <?php endif; ?>
</body>
</html>