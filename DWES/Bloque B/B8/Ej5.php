<?php
$start = new DateTime('2025-02-15 10:00:00');
$end = (clone $start)->modify('+2 months');
$interval = new DateInterval('P7D'); // Repetir cada 7 días
$period = new DatePeriod($start, $interval, $end);
?>
<?php include 'includes/header.php'; ?>
  <p>
    <?php foreach ($period as $event) { ?>
      <b><?= $event->format('l') ?></b>, <?= $event->format('M j Y H:i:s') ?><br>
    <?php } ?>
  </p>
<?php include 'includes/footer.php'; ?>
