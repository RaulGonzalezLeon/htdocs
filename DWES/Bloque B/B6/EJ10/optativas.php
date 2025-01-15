<?php
$optativas   = '';
$message = '';
$rango_optativas = ["Matematicas", "Fisica", "Historia", "Arte"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $optativas   = $_POST['optativas'] ?? '';
    $valid   = in_array($optativas, $rango_optativas);
    $message = $valid ? 'Thank you' : 'Select an option';
}
?>
<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="optativas.php" method="POST">
  Optativas:
  <?php foreach ($rango_optativas as $option) { ?>
      <?= $option ?> <input type="radio" name="optativas"
            value="<?= $option ?>"
            <?= ($optativas == $option) ? 'checked' : '' ?>>
  <?php } ?>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>