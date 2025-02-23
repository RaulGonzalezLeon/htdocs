<?php
// Incluir archivo de sesiones (inicia la sesión y carga funciones)
require_once 'sessions.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio</title>
</head>
<body>
    <header>
        <nav>
            <?php if (is_logged_in()): ?>
                <a href="account.php">Mi Cuenta</a> |
                <a href="logout.php">Cerrar sesión</a>
            <?php else: ?>
                <a href="login.php">Iniciar sesión</a>
            <?php endif; ?>
        </nav>
    </header>
    <hr>
