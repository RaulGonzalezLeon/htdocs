<?php include 'includes/header.php'; ?>
<?php
$age = '';

function is_number($number, int $min = 0, int $max = 100): bool
{
    return ($number >= $min && $number <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $position = $_POST['position'] ?? '';

    if (!empty($name) && !empty($surname) && !empty($age) && !empty($position) && !empty($email)) {
        if (is_number((int)$age, 8, 16)) {
            // Mostrar mensaje de éxito
            echo "<p>Formulario enviado correctamente. Gracias, " . htmlspecialchars($name) . ".</p>";
        } else {
            // Mostrar mensaje de error si la edad no es válida
            echo "<p>Error: La edad debe estar entre 8 y 16 años.</p>";
        }
    } else {
        // Mostrar mensaje de error si faltan campos
        echo "<p>Error: Por favor, completa todos los campos requeridos.</p>";
    }
} else { ?>

<form action="registro_POST.php" method="POST">
  <p>Name:     <input type="text" name="name"></p>
  <p>Surname:  <input type="text" name="surname"></p>
  <p>Age:      <input type="text" name="age" value="<?= htmlspecialchars($age) ?>"></p>
  <p>Email:    <input type="text" name="email"></p>
  <p>Phone:    <input type="phone" name="phone"></p>
  <p>Position:
    <select name="position">
      <option value="delantero">Delantero</option>
      <option value="defensa">Defensa</option>
      <option value="portero">Portero</option>
    </select></p>
  <p><input type="submit" value="Save"></p>
</form>

<?php } ?>
<?php include 'includes/footer.php'; ?>
