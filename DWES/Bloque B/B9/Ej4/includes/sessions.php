<?php
// Iniciamos la sesión (asegúrate de llamarlo antes de cualquier salida de HTML)
session_start();

/**
 * Verifica si el usuario está logueado.
 * @return bool
 */
function is_logged_in() {
    return isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
}

/**
 * Redirige a login.php si el usuario no ha iniciado sesión.
 */
function require_login() {
    if (!is_logged_in()) {
        header("Location: login.php");
        exit();
    }
}
