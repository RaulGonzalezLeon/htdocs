<?php
require_once 'includes/sessions.php';

// Si el usuario ya está logueado, redirigimos a la cuenta
if (is_logged_in()) {
    header("Location: account.php");
    exit();
}

$errorMessage = "";

// Procesar el formulario cuando se envíe por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los valores de email y password
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Credenciales "hard-coded" (simulando una base de datos)
    $correctEmail = "raul@gmail.com";
    $correctPassword = "12345";

    // Verificamos credenciales
    if ($email === $correctEmail && $password === $correctPassword) {
        // Marcamos que el usuario está logueado
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email'] = $email;

        // Redirigir a la página de cuenta
        header("Location: account.php");
        exit();
    } else {
        $errorMessage = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>

<?php include 'includes/header-member.php'; ?>

<h1>Iniciar Sesión</h1>

<?php if (!empty($errorMessage)): ?>
    <p style="color:red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>

<form action="login.php" method="post">
    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" required><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" name="password" id="password" required><br><br>

    <button type="submit">Iniciar Sesión</button>
</form>

<?php include 'includes/footer.php'; ?>
