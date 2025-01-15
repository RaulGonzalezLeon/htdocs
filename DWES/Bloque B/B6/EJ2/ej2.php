<?php
// Definimos un array asociativo con las ciudades y sus respectivas direcciones
$cities  = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC'    => '1242 7th Street, 10492',
    'Tokio'  => '1242 7th Street, 10492',
];

// Obtenemos el valor de 'city' de la URL utilizando la superglobal $_GET
// Si no existe el parámetro 'city', se asigna un valor vacío por defecto
$city = $_GET['city'] ?? '';

// Verificamos si se seleccionó una ciudad
if ($city) {
    // Si se seleccionó una ciudad, buscamos la dirección correspondiente en el array
    $address = $cities[$city];
} else {
    // Si no se seleccionó una ciudad, mostramos un mensaje pidiendo que se seleccione una
    $address = 'Please select a city';
}
?>

<?php include 'includes/header.php' ?> 

<?php foreach ($cities as $key => $value) { ?>
  <!-- Recorremos el array $cities y generamos un enlace para cada ciudad -->
  <a href="ej2.php?city=<?= $key ?>"><?= $key ?></a>
<?php } ?>

<!-- Mostramos el nombre de la ciudad seleccionada -->
<h1><?= $city ?></h1>
<!-- Mostramos la dirección correspondiente a la ciudad seleccionada, o el mensaje por defecto -->
<p><?= $address ?></p>

<?php include 'includes/footer.php' ?> 
