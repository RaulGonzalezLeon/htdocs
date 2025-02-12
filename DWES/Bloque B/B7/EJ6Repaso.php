<?php
$moved         = false;
$message       = '';
$error         = '';
$upload_path   = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
$max_size      = 5242880;
$allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
$allowed_exts  = ['jpeg', 'jpg', 'png', 'gif'];

$user    = ['name' => '', 'age' => '', 'terms' => '', 'apellidos' => '', 'correo' => '', 'telefono' => ''];
$errors  = ['name' => '', 'age' => '', 'terms' => false, 'apellidos' => '', 'correo' => '', 'telefono' => ''];

function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Function to create thumbnail
function create_thumbnail($source, $thumbpath)
{
    $image = new Imagick($source);                        // Object to represent image
    $image->thumbnailImage(200, 200, true);               // Create thumbnail
    $image->writeImage($thumbpath);                       // Save file
    return true;                                          // Return true to show success
}

// Function to create filename
function create_filename($filename, $upload_path)
{
    $basename   = pathinfo($filename, PATHINFO_FILENAME);      // Get basename
    $extension  = pathinfo($filename, PATHINFO_EXTENSION);     // Get extension
    $basename   = preg_replace('/[^A-z0-9]/', '-', $basename); // Clean basename
    $filename   = $basename . '.' . $extension;                // Add extension to clean basename
    $i          = 0;                                           // Counter
    while (file_exists($upload_path . $filename)) {            // If file exists
        $i        = $i + 1;                                    // Update counter 
        $filename = $basename . $i . '.' . $extension;         // New filepath
    }
    return $filename;                                          // Return filename
}

// Form validation filters
$validation_filters['name']['filter']              = FILTER_VALIDATE_REGEXP;
$validation_filters['name']['options']['regexp']   = '/^[A-z]{2,10}$/';
$validation_filters['age']['filter']               = FILTER_VALIDATE_INT;
$validation_filters['age']['options']['min_range'] = 16;
$validation_filters['age']['options']['max_range'] = 65;
$validation_filters['terms']                       = FILTER_VALIDATE_BOOLEAN;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = filter_input_array(INPUT_POST, $validation_filters);
    
    // Validate fields and store errors
    $errors['name']  = $user['name']  ? '' : 'El nombre debe tener entre 2 y 10 letras';
    $errors['age']   = $user['age']   ? '' : 'Debes tener entre 16 y 65 años';
    $errors['terms'] = $user['terms'] ? '' : 'Debes aceptar los términos y condiciones';

    // Sanitize additional fields
    $user['apellidos'] = sanitize_input($_POST['apellidos'] ?? '');
    $user['correo']    = sanitize_input($_POST['correo'] ?? '');
    $user['telefono']  = sanitize_input($_POST['telefono'] ?? '');
    
    // Handle file upload
    if ($_FILES['image']['error'] === 1) {
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
            $thumbpath   = $upload_path . 'thumb_' . $filename;
            $moved       = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $resized     = create_thumbnail($destination, $thumbpath);
        }
    }

    // If the file was uploaded and thumbnail created, display success
    if ($moved === true and $resized === true) {
        $message = 'Subida exitosa:<br><img src="uploads/thumb_' . $filename . '" alt="Examen">';
    } else {
        $message = '<b>No se pudo subir el archivo:</b> ' . $error;
    }
}
?>

<?php include 'includes/header.php' ?>

<?= $message ?>

<!-- Mostrar los datos del formulario -->
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$errors): ?>
    <h3>Datos del formulario:</h3>
    <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
    <p><strong>Apellidos:</strong> <?= htmlspecialchars($user['apellidos']) ?></p>
    <p><strong>Correo:</strong> <?= htmlspecialchars($user['correo']) ?></p>
    <p><strong>Teléfono:</strong> <?= htmlspecialchars($user['telefono']) ?></p>
    <p><strong>Edad:</strong> <?= htmlspecialchars($user['age']) ?></p>
    <p><strong>Aceptó los términos:</strong> <?= $user['terms'] ? 'Sí' : 'No' ?></p>
<?php endif; ?>

<form method="POST" action="" enctype="multipart/form-data">
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>">
    <span class="error"><?= $errors['name'] ?></span><br>
    
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" value="<?= htmlspecialchars($user['apellidos']) ?>">
    <span class="error"><?= $errors['apellidos'] ?></span><br>
    
    <label for="correo">Correo:</label>
    <input type="email" name="correo" value="<?= htmlspecialchars($user['correo']) ?>">
    <span class="error"><?= $errors['correo'] ?></span><br>
    
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" value="<?= htmlspecialchars($user['telefono']) ?>">
    <span class="error"><?= $errors['telefono'] ?></span><br>
    
    <label for="age">Edad:</label>
    <input type="text" name="age" value="<?= htmlspecialchars($user['age']) ?>">
    <span class="error"><?= $errors['age'] ?></span><br>
    
    <input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>> Acepto los términos y condiciones
    <span class="error"><?= $errors['terms'] ?></span><br>
    
    <label for="image">Subir archivo:</label>
    <input type="file" name="image" id="image"><br>
    <span><?= $error ?? '' ?></span><br>
    
    <input type="submit" value="Guardar">
</form>

<?php include 'includes/footer.php' ?>




