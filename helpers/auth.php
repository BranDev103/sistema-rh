
<?php
session_start();

function verificarSesion()
{
    if (!isset($_SESSION['usuario'])) {
        header("Location: /sistema_rh/login.html");
        exit;
    }
}

function esAdmin()
{
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}
