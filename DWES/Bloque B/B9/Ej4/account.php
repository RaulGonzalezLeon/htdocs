<?php
require_once 'includes/sessions.php';

// Verifica si el usuario está logueado, si no, lo redirige a login.php
require_login();
?>

<?php include 'includes/header-member.php'; ?>

<h1>Mi Cuenta</h1>
<p>Hola, <?php echo htmlspecialchars($_SESSION['user_email'] ?? 'Usuario'); ?>!</p>
<p>Esta es tu página de cuenta, solo visible si iniciaste sesión.</p>

<?php include 'includes/footer.php'; ?>
