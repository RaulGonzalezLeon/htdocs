<?php
// Incluir la cabecera
include 'includes/header-member.php';
?>

<h1>Página de Inicio</h1>
<?php if (is_logged_in()): ?>
    <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['user_email'] ?? 'Usuario'); ?>!</p>
    <p><a href="account.php">Ir a mi cuenta</a></p>
<?php else: ?>
    <p>Por favor, <a href="login.php">inicia sesión</a> para continuar.</p>
<?php endif; ?>

<?php
// Incluir el pie de página
include 'includes/footer.php';
?>
