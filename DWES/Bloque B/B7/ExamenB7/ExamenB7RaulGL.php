<?php
$moved         = false;
$message       = '';
$error         = '';
$upload_path   = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'imagenes' . DIRECTORY_SEPARATOR;
$max_size      = 5242880;
$allowed_types = ['image/jpeg', 'image/png'];
$allowed_exts  = ['jpeg', 'png'];

$plato1    = ['name' => '', 'descripcion' => '', 'precio' => '' ];
$errors  = ['name' => '', 'descripcion' => '', 'precio' => ''];

$plato2    = ['name2' => '', 'descripcion2' => '', 'precio2' => ''];
$errors2  = ['name2' => '', 'descripcion2' => '', 'precio2' => ''];

$plato3    = ['name3' => '', 'descripcion3' => '', 'precio3' => ''];
$errors3  = ['name3' => '', 'descripcion3' => '', 'precio3' => ''];



// Function to create thumbnail
function create_thumbnail($source, $thumbpath)
{
    $image = new Imagick($source);                        
    $image->thumbnailImage(300, 300, true);               
    $image->writeImage($thumbpath);                       
    return true;                                          
}

// Function to create filename
function create_filename($filename, $upload_path)
{
    $basename   = pathinfo($filename, PATHINFO_FILENAME);      
    $extension  = pathinfo($filename, PATHINFO_EXTENSION);     
    $basename   = preg_replace('/[^A-z0-9]/', '-', $basename); 
    $filename   = $basename . '.' . $extension;                
    $i          = 0;                                           
    while (file_exists($upload_path . $filename)) {            
        $i        = $i + 1;                                    
        $filename = $basename . $i . '.' . $extension;         
    }
    return $filename;                                          
}

$validation_filters['name']['filter']              = FILTER_VALIDATE_REGEXP;
$validation_filters['name']['options']['regexp']   = '/^[A-z]{1,20}$/';
$validation_filters['descripcion']['filter']               = FILTER_VALIDATE_REGEXP;
$validation_filters['descripcion']['options']['regexp']   = '/^[A-z]{1,200}$/';
$validation_filters['precio']['filter'] = FILTER_VALIDATE_INT;

$validation_filters2['name2']['filter']              = FILTER_VALIDATE_REGEXP;
$validation_filters2['name2']['options']['regexp']   = '/^[A-z]{1,20}$/';
$validation_filters2['descripcion2']['filter']               = FILTER_VALIDATE_REGEXP;
$validation_filters2['descripcion2']['options']['regexp']   = '/^[A-z]{1,200}$/';
$validation_filters2['precio2']['filter'] = FILTER_VALIDATE_INT;

$validation_filters3['name3']['filter']              = FILTER_VALIDATE_REGEXP;
$validation_filters3['name3']['options']['regexp']   = '/^[A-z]{1,20}$/';
$validation_filters3['descripcion3']['filter']               = FILTER_VALIDATE_REGEXP;
$validation_filters3['descripcion3']['options']['regexp']   = '/^[A-z]{1,200}$/';
$validation_filters3['precio3']['filter'] = FILTER_VALIDATE_INT;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plato1 = filter_input_array(INPUT_POST, $validation_filters);
    $plato1 = filter_var_array($plato1, $validation_filters);

    $plato2 = filter_input_array(INPUT_POST, $validation_filters2);
    $plato2 = filter_var_array($plato2, $validation_filters2);

    $plato3 = filter_input_array(INPUT_POST, $validation_filters3);
    $plato3 = filter_var_array($plato3, $validation_filters3);

    // Validate fields and store errors
    $errors['name']  = $plato1['name']  ? '' : 'El nombre debe tener entre 1 y 20 caracteres';
    $errors['descripcion']   = $plato1['descripcion']   ? '' : 'Debes tener entre 1 y 200 caracteres';
    $errors['precio'] = $plato1['precio'] ? '' : 'Solo digitos';

    $errors2['name2']  = $plato2['name2']  ? '' : 'El nombre debe tener entre 1 y 20 caracteres';
    $errors2['descripcion2']   = $plato2['descripcion2']   ? '' : 'Debes tener entre 1 y 200 caracteres';
    $errors2['precio2'] = $plato2['precio2'] ? '' : 'Solo digitos';

    $errors3['name2']  = $plato3['name3']  ? '' : 'El nombre debe tener entre 1 y 20 caracteres';
    $errors3['descripcion2']   = $plato3['descripcion3']   ? '' : 'Debes tener entre 1 y 200 caracteres';
    $errors3['precio2'] = $plato3['precio3'] ? '' : 'Solo digitos';

    // Handle file upload
    if ($_FILES['image']['error'] === 1) {
        $error .= 'Archivo demasiado grande. ';
    }
    if ($_FILES['image2']['error'] === 1) {
        $error .= 'Archivo demasiado grande. ';
    }
    if ($_FILES['image3']['error'] === 1) {
        $error .= 'Archivo demasiado grande. ';
    }

    if ($_FILES['image']['error'] == 0) {
        $error  .= ($_FILES['image']['size'] <= $max_size) ? '' : 'Archivo demasiado grande. ';
        $type   = mime_content_type($_FILES['image']['tmp_name']);
        $error .= in_array($type, $allowed_types) ? '' : 'Tipo de archivo no permitido. ';
        $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $error .= in_array($ext, $allowed_exts) ? '' : 'Extensión de archivo no permitida. ';
        
        // If no error, create the new filename and try to upload
        if (!$error) {
            $filename    = create_filename($_FILES['image']['name'], $upload_path);
            $destination = $upload_path . $filename;
            $moved       = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $resized     = create_thumbnail($destination, $thumbpath);
        }
    }
    if ($_FILES['image2']['error'] == 0) {
        $error  .= ($_FILES['image2']['size'] <= $max_size) ? '' : 'Archivo demasiado grande. ';
        $type   = mime_content_type($_FILES['image2']['tmp_name']);
        $error .= in_array($type, $allowed_types) ? '' : 'Tipo de archivo no permitido. ';
        $ext    = strtolower(pathinfo($_FILES['image2']['name'], PATHINFO_EXTENSION));
        $error .= in_array($ext, $allowed_exts) ? '' : 'Extensión de archivo no permitida. ';
        
        // If no error, create the new filename and try to upload
        if (!$error) {
            $filename    = create_filename($_FILES['image2']['name'], $upload_path);
            $destination = $upload_path . $filename;
            $moved       = move_uploaded_file($_FILES['image2']['tmp_name'], $destination);
            $resized     = create_thumbnail($destination, $thumbpath);
        }
    }
    if ($_FILES['image3']['error'] == 0) {
        $error  .= ($_FILES['image3']['size'] <= $max_size) ? '' : 'Archivo demasiado grande. ';
        $type   = mime_content_type($_FILES['image3']['tmp_name']);
        $error .= in_array($type, $allowed_types) ? '' : 'Tipo de archivo no permitido. ';
        $ext    = strtolower(pathinfo($_FILES['image3']['name'], PATHINFO_EXTENSION));
        $error .= in_array($ext, $allowed_exts) ? '' : 'Extensión de archivo no permitida. ';
        
        // If no error, create the new filename and try to upload
        if (!$error) {
            $filename    = create_filename($_FILES['image3']['name'], $upload_path);
            $destination = $upload_path . $filename;
            $moved       = move_uploaded_file($_FILES['image3']['tmp_name'], $destination);
            $resized     = create_thumbnail($destination, $thumbpath);
        }
    }

    // If the file was uploaded and thumbnail created, display success
    if ($moved === true and $resized === true) {
        $message = 'Subida exitosa:<br><img src="imagenes' . $filename . '>';
    } else {
        $message = '<b>No se pudo subir el archivo:</b> ' . $error;
    }

    echo "<h1>Plato 1</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($plato1['name']) . "</p>";
    echo "<p><strong>Descripcion:</strong> " . htmlspecialchars($plato1['descripcion']) . "</p>";
    echo "<p><strong>Precio:</strong> " . htmlspecialchars($plato1['precio']) . "</p>";
    echo "<h1>Plato 2</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($plato2['name2']) . "</p>";
    echo "<p><strong>Descripcion:</strong> " . htmlspecialchars($plato2['descripcion2']) . "</p>";
    echo "<p><strong>Precio:</strong> " . htmlspecialchars($plato2['precio2']) . "</p>";
    echo "<h1>Plato3</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($plato3['name3']) . "</p>";
    echo "<p><strong>Descripcion:</strong> " . htmlspecialchars($plato3['descripcion3']) . "</p>";
    echo "<p><strong>Precio:</strong> " . htmlspecialchars($plato3['precio3']) . "</p>";
}
?>

<form method="POST" action="ExamenB7RaulGL.php" enctype="multipart/form-data">
    <h3>Primer Plato</h3>
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($plato1['name']) ?>">
    <span class="error"><?= $errors['name'] ?></span><br>
    
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" value="<?= htmlspecialchars($plato1['descripcion']) ?>">
    <span class="error"><?= $errors['descripcion'] ?></span><br>
    
    <label for="precio">Precio:</label>
    <input type="tel" name="precio" value="<?= htmlspecialchars($plato1['precio']) ?>">
    <span class="error"><?= $errors['precio'] ?></span><br>

    <label for="image">Subir archivo:</label>
    <input type="file" name="image" id="image"><br>

    
<h3>Segundo Plato</h3>
    <label for="name">Nombre:</label>
    <input type="text" name="name2" value="<?= htmlspecialchars($plato2['name2']) ?>">
    <span class="error"><?= $errors2['name2'] ?></span><br>
    
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion2" value="<?= htmlspecialchars($plato2['descripcion2']) ?>">
    <span class="error"><?= $errors2['descripcion2'] ?></span><br>
    
    <label for="precio">Precio:</label>
    <input type="tel" name="precio2" value="<?= htmlspecialchars($plato2['precio2']) ?>">
    <span class="error"><?= $errors2['precio2'] ?></span><br>

    <label for="image">Subir archivo:</label>
    <input type="file" name="image2" id="image2"><br>

    <h3>Postre</h3>
    <label for="name">Nombre:</label>
    <input type="text" name="name3" value="<?= htmlspecialchars($plato3['name3']) ?>">
    <span class="error"><?= $errors3['name3'] ?></span><br>
    
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion3" value="<?= htmlspecialchars($plato3['descripcion3']) ?>">
    <span class="error"><?= $errors3['descripcion3'] ?></span><br>
    
    <label for="precio">Precio:</label>
    <input type="tel" name="precio3" value="<?= htmlspecialchars($plato3['precio3']) ?>">
    <span class="error"><?= $errors3['precio3'] ?></span><br>

    <label for="image">Subir archivo:</label>
    <input type="file" name="image3" id="image3"><br>

    <h3>Bebida Incluida</h3>
    <select name="bebida_incluida">
            <option value="si">Si</option>
            <option value="no">No</option>
        </select></p>
    
    
    <input type="submit" value="Guardar">
</form>