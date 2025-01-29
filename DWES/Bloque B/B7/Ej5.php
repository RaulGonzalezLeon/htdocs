<?php 
$moved = false;
$mensaje = '';
$error = '';
$ruta_actualizada = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads'  . DIRECTORY_SEPARATOR;;
$tamaño_maximo = 5242880;
$tipos_permitidos = ['image/jpeg', 'image/png', 'image/gif'];
$extensiones_permitidas = ['jpeg', 'jpg', 'png', 'gif'];

function crear_archivo($nombre_archivo, $ruta_actualizada){
    $nombre_base = pathinfo($nombre_archivo, PATHINFO_FILENAME);
    $extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
    $nombre_base = preg_replace('/[^A-z0-9]/', '-', $nombre_base);
    $i = 0;
    $nombre_archivo = $nombre_base . '.' . $extension;
    while (file_exists($ruta_actualizada . $nombre_archivo)){
        $i++;
        $nombre_archivo = $nombre_base . $i . '.' . $extension;
    }
    return $nombre_archivo;
}

function redimensionar_imagick($ruta_origen, $ruta_nueva, $maximo_ancho, $maximo_largo){
    try {
        $imagen = new Imagick($ruta_origen);
        $imagen->thumbnailImage($maximo_ancho, $maximo_largo, true);
        $imagen->writeImage($ruta_nueva);
        $imagen->clear();
        $imagen->destroy();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = ($_FILES['image']['error'] === 1) ? 'El archivo es demasiado grande. ' : '';

    if ($_FILES['image']['error'] == 0) {
        $error .= ($_FILES['image']['size'] <= $tamaño_maximo) ? '' : 'El archivo supera el tamaño máximo permitido. ';
        $type = mime_content_type($_FILES['image']['tmp_name']);
        $error .= in_array($type, $tipos_permitidos) ? '' : 'Formato de archivo no permitido. ';
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $error .= in_array($ext, $extensiones_permitidas) ? '' : 'Extensión de archivo no permitida. ';

        if (!$error) {
            $nombre_archivo = crear_archivo($_FILES['image']['name'], $ruta_actualizada);
            $destino = $ruta_actualizada . $nombre_archivo;
            $thumbpath = $ruta_actualizada . 'thumb_' . $nombre_archivo;
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destino);
            $resized = redimensionar_imagick($destino, $thumbpath, 200, 200);
        }
    }

    if ($moved === true && $resized === true) {
        $mensaje = '<img src="' . $thumbpath . '">';
    } else {
        $mensaje = '<b>No se pudo subir el archivo.</b> ' . $error;
    }
}
?>
<?php include 'includes/header.php'; ?>
<?= $mensaje; ?>
<form method="POST" action="Ej5.php" enctype="multipart/form-data">
    <label for="image"><b>Subir archivo:</b></label>
    <input type="file" name="image" accept="image/*" id="image"><br>
    <input type="submit" value="Subir">
</form>
<?php include 'includes/footer.php'; ?>
