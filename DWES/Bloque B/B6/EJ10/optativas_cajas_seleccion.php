<?php
$optativas   = [];
$message = '';
$rango_optativas = ["Matematicas", "Fisica", "Historia", "Arte"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $optativas = $_POST['optativas'] ?? [];
    $valid = !empty(array_intersect($optativas, $rango_optativas));
    $message = $valid ? 'Thank you' : 'Select at least one option';
}
?>
<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="optativas_cajas_seleccion.php" method="POST">
  Optativas:
  <?php foreach ($rango_optativas as $option) { ?>
      <label>
          <?= $option ?>
          <input type="checkbox" name="optativas[]" value="<?= $option ?>" 
                <?= in_array($option, $optativas) ? 'checked' : '' ?>>
      </label>
  <?php } ?>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>
