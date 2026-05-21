<?php
/**
 * Controlador para manejar el cierre de sesión de los usuarios.
 * Este script destruye la sesión actual, borra las cookies de sesión y redirige al usuario a la página de inicio de sesión.
 */
session_start();
session_unset(); 
session_destroy(); 

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: 0");

$_SESSION = [];
session_destroy();

header("Location: login.html");
exit;
