
<?php
define('TIEMPO_EXPIRACION', 900); //15 minutos
session_start();

if (isset($_SESSION['ultima_actividad'])) {

    $inactivo = time() - $_SESSION['ultima_actividad'];

    if ($inactivo > TIEMPO_EXPIRACION) {

        session_unset();
        session_destroy();

        header("Location: /interno/rh/login.html");
        exit;

    }
    
}

$_SESSION['ultima_actividad'] = time();

function verificarSesion()
{
    if (!isset($_SESSION['usuario'])) {
        header("Location: /interno/rh/login.html");
        exit;
    }
}

function esAdmin()
{
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}
