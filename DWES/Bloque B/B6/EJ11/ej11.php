<?php
$eventos = ['Ceremonia de Apertura', 'Atletismo', 'Natación', 'Ciclismo', 'Ceremonia de Clausura'];
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $seleccionados = isset($_POST['eventos']) && is_array($_POST['eventos']) ? $_POST['eventos'] : [];
    $validos = array_intersect($seleccionados, $eventos);

    if (count($validos) > 0) {
        $message = '¡Gracias por tu registro!';
    } else {
        $message = 'Debes seleccionar al menos un evento válido.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Voluntarios</title>
</head>
<body>
    <h1>Registro de Voluntarios - Olimpiadas de París 2024</h1>

    <?php if (!empty($message)): ?>
        <p style="color: <?= $message === '¡Gracias por tu registro!' ? 'green' : 'red'; ?>;">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    <form action="" method="POST">
        <p>Selecciona los eventos en los que deseas participar:</p>
        <?php foreach ($eventos as $evento): ?>
            <label>
                <input type="checkbox" name="eventos[]" value="<?= htmlspecialchars($evento) ?>">
                <?= htmlspecialchars($evento) ?>
            </label><br>
        <?php endforeach; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


