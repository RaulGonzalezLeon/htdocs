<?php
$nombre = "";
$edad = "";


function longitud_nombre($nombre, int $min = 0, int $max = 100): bool
{
   return (strlen($nombre) >= $min && strlen($nombre) <= $max);
}

function edad_valida($edad, int $min = 0, int $max = 100): bool
{
    return ($edad >= $min && $edad <= $max);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $tipo_libro = $_POST['tipo_libro'] ?? '';
    $terminos = $_POST['terminos'] ?? '';

    if (!empty($nombre) && !empty($correo) && !empty($edad) && !empty($tipo_libro) && !empty($terminos)) {
        if (!longitud_nombre($nombre, 2, 50)) {

            echo "<p>Error: Tu nombre debe estar comprendido entre 2 y 50 caracteres</p>"; 
        }
        if(!edad_valida((int)$edad, 13)){
            echo "<p>Error: Debes de ser mayor de 13 años</p>";
        }
            else{
            echo "<p>Formulario enviado correctamente. Gracias, " . htmlspecialchars($nombre) . ".</p>";
        }
        
    } else {
         // Mostrar mensaje de error si faltan campos
        echo "<p>Error: Por favor, completa todos los campos requeridos.</p>";
    }
} ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examenb6_b</title>
</head>
<body>
<form action="examenb6_b.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="<?= htmlspecialchars($nombre) ?>"><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required value=""><br><br>

        <label for="edad">Edad</label>
        <input type="tel" id="edad" name="edad" required value="<?= htmlspecialchars($edad) ?>"><br><br>

        <select name="tipo_libro">
            <option value="fisico">Fisico</option>
            <option value="digital">Digital</option>
        </select></p>

        <p><input type="checkbox" name="terminos" value="true"> 
        I agree to the terms and conditions.</p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>