<?php include 'includes/header.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && !empty($_POST['position']) && !empty($_POST['email']) && !empty($_POST['email'])) {
        // Mostrar mensaje de éxito
        echo "<p>Formulario enviado correctamente. Gracias, " . htmlspecialchars($_POST['name']) . ".</p>";
    } else {
        // Mostrar mensaje de error
        echo "<p>Error: Por favor, completa todos los campos requeridos y acepta los términos.</p>";
    }
} else { ?>

<form action="registro_POST.php" method="POST">
  <p>Name:     <input type="text" name="name"></p>
  <p>Surname:  <input type="text" name="surname"></p>
  <p>Age:      <input type="text" name="age"></p>
  <p>Email:      <input type="text" name="email"></p>
  <p>Phone:      <input type="phone" name="phone"></p>
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