<?php

$form['nombre'] = '';
$form['correo'] = ''; 
$form['edad'] = '';
$form['tipo_libro'] = '';
$form['terminos'] = '';

$data = []; 
$errors = []; 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $filters['nombre'] = FILTER_NULL_ON_FAILURE;
    $filters['correo']= FILTER_VALIDATE_EMAIL;
    $filters['edad'] = FILTER_VALIDATE_INT;
    $filters['edad']['options']['min_range'] = 13;
    $filters['tipo_libro'] = FILTER_NULL_ON_FAILURE;
    $filters['terminos'] = FILTER_NULL_ON_FAILURE;


    //Obtener los valores enviados mediante POST y guardarlos en la variable $form
    $form = filter_input_array(INPUT_POST, $filters);

    // //Guardar los datos en la variable $data con los filtros
    $data = filter_var_array($form, $filters);

    

    if($data['nombre'] === false || $data['nombre'] === null){
        $errors[] = "El nombre contiene caracteres inválidos.";
    }
    //Verificar errores
    if($data['correo'] === false){
        $errors[] = "El correo es inválido.";
    }
    //Expresión regular para validar el teléfono
    if($data['edad'] === false || $data['edad'] === null) {
        $errors[] = "La edad no esta en el rango";
    } 
    if($data['tipo_libro'] === false || $data['tipo_libro'] === null){
        $errors[] = "El mensaje contiene caracteres inválidos.";
    }
    if($data['terminos'] === false || $data['terminos'] === null){
        $errors[] = "Selecciona los terminos";
    }

    // Sanitizar los datos después de la validación
    $data['nombre'] = filter_var($form['nombre'], FILTER_SANITIZE_STRING);
    $data['mensaje'] = filter_var($form['edad'], FILTER_SANITIZE_NUMBER_INT);
    $data['correo'] = filter_var($form['correo'], FILTER_SANITIZE_EMAIL);
    $data['correo'] = filter_var($form['tipo_libro'], FILTER_SANITIZE_EMAIL);
    $data['correo'] = filter_var($form['terminos'], FILTER_SANITIZE_EMAIL);

    // Mostrar los datos saneados
    echo "<h1>Datos Saneados</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($data['nombre']) . "</p>";
    echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($data['correo']) . "</p>";
    echo "<p><strong>Número de Teléfono:</strong> " . htmlspecialchars($data['edad']) . "</p>";
    echo "<p><strong>Mensaje:</strong> " . (htmlspecialchars($data['tipo_libro'])) . "</p>";
    echo "<p><strong>Mensaje:</strong> " . (htmlspecialchars($data['terminos'])) . "</p>";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examenb6_b</title>
</head>
<body>
<form action="examenb6_c.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="<?=htmlspecialchars($form['nombre'] )?>"><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required value="<?=htmlspecialchars($form['correo'] )?>"><br><br>

        <label for="edad">Edad</label>
        <input type="tel" id="edad" name="edad" required value="<?=htmlspecialchars($form['edad'] )?>"><br><br>

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