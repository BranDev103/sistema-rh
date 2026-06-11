<?php

/**
 * Controlador para la autenticación de usuarios.
 * Este controlador maneja el proceso de inicio de sesión, verificando las credenciales del usuario y estableciendo la sesión correspondiente.
 * @author BranDev10
 * @version 1.0
 * @since 11-04-2026
*/
require_once __DIR__ . '/../config/conexion.php';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_start();

$nombre = $_POST['nombre'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre=?");//Evitar inyección SQL
$stmt->bind_param("s", $nombre);
$stmt->execute();

$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

if ($usuario && password_verify($password, $usuario['password'])) {//Verificar contraseña

    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: ../views/empleados/index.php");
    exit;

} else {//Credenciales incorrectas
    echo "<script type='text/javascript'>";
    echo "alert('Credenciales incorrectas, intentelo de nuevo');";
    echo "window.location.href='/login.html';";
    echo "</script>";
    exit;
}