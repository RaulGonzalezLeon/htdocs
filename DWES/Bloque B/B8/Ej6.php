<?php
// Definir zonas horarias
$tz_MEX = new DateTimeZone('America/Mexico_City');
$tz_NYC = new DateTimeZone('America/New_York');
$tz_TYO = new DateTimeZone('Asia/Tokyo');

// Fecha del evento en México
$fechaEvento = '2025-02-11 14:00:00';
$eventoMEX = new DateTime($fechaEvento, $tz_MEX);

// Clonar y convertir a otras zonas horarias
$eventoNYC = clone $eventoMEX;
$eventoNYC->setTimezone($tz_NYC);

$eventoTYO = clone $eventoMEX;
$eventoTYO->setTimezone($tz_TYO);

// Obtener información de cada zona horaria
$info_MEX = $tz_MEX->getLocation();
$info_NYC = $tz_NYC->getLocation();
$info_TYO = $tz_TYO->getLocation();

// Obtener transiciones de horario de verano
$trans_MEX = $tz_MEX->getTransitions();
$trans_NYC = $tz_NYC->getTransitions();
$trans_TYO = $tz_TYO->getTransitions();
?>

<?php include 'includes/header.php'; ?> 

<h1>Evento Programado</h1>

<p><b>Evento Original (MEX): <?= $eventoMEX->format('Y-m-d g:i a') ?></b> 
   (UTC <?= ($eventoMEX->getOffset() / 3600) ?>)</p>

<p><b>NYC: <?= $eventoNYC->format('Y-m-d g:i a') ?></b> 
   (UTC <?= ($eventoNYC->getOffset() / 3600) ?>)</p>

<p><b>TYO: <?= $eventoTYO->format('Y-m-d g:i a') ?></b> 
   (UTC <?= ($eventoTYO->getOffset() / 3600) ?>)</p>

<h1>Información de Zonas Horarias</h1>

<h2>México (<?= $tz_MEX->getName() ?>)</h2>
<p><b>Ubicación:</b> Latitud <?= $info_MEX['latitude'] ?>, Longitud <?= $info_MEX['longitude'] ?></p>
<h3>Transiciones de Horario de Verano</h3>
<ul>
    <?php foreach ($trans_MEX as $transicion): ?>
        <li><?= date('Y-m-d g:i a', $transicion['ts']) ?> - UTC <?= $transicion['offset'] / 3600 ?></li>
    <?php endforeach; ?>
</ul>

<h2>New York (<?= $tz_NYC->getName() ?>)</h2>
<p><b>Ubicación:</b> Latitud <?= $info_NYC['latitude'] ?>, Longitud <?= $info_NYC['longitude'] ?></p>
<h3>Transiciones de Horario de Verano</h3>
<ul>
    <?php foreach ($trans_NYC as $transicion): ?>
        <li><?= date('Y-m-d g:i a', $transicion['ts']) ?> - UTC <?= $transicion['offset'] / 3600 ?></li>
    <?php endforeach; ?>
</ul>

<h2>Tokio (<?= $tz_TYO->getName() ?>)</h2>
<p><b>Ubicación:</b> Latitud <?= $info_TYO['latitude'] ?>, Longitud <?= $info_TYO['longitude'] ?></p>
<h3>Transiciones de Horario de Verano</h3>
<ul>
    <?php foreach ($trans_TYO as $transicion): ?>
        <li><?= date('Y-m-d g:i a', $transicion['ts']) ?> - UTC <?= $transicion['offset'] / 3600 ?></li>
    <?php endforeach; ?>
</ul>

<?php include 'includes/footer.php'; ?>


