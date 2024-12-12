<?php
// Define un array de elementos
$items = ["Elemento 1", "Elemento 2", "Elemento 3", "Elemento 4"];

// Función para generar una lista (ul o ol)
function generarLista($items, $tipo = "ul") {
    // Verifica que el tipo de lista sea válido
    if ($tipo !== "ul" && $tipo !== "ol") {
        return "<p>Error: Tipo de lista no válido.</p>";
    }

    // Comienza la lista
    $html = "<$tipo>";

    // Itera sobre el array y genera los elementos de la lista
    foreach ($items as $item) {
        $html .= "<li>$item</li>";
    }

    // Cierra la lista
    $html .= "</$tipo>";

    return $html;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Generador de Listas</title>
</head>

<body>
    <h1>Ejemplo de generación de listas</h1>

    <h2>Lista desordenada (ul)</h2>
    <?php echo generarLista($items, "ul"); ?>

    <h2>Lista ordenada (ol)</h2>
    <?php echo generarLista($items, "ol"); ?>
</body>

</html>



