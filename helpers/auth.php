<?php

/**
 * Maneja la autenticación y el control de sesiones para el sistema de recursos humanos.
 * 
 */

define('TIEMPO_EXPIRACION', 900); //15 minutos
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

if (isset($_SESSION['ultima_actividad'])) {//Verificar inactividad

    $inactivo = time() - $_SESSION['ultima_actividad'];

    if ($inactivo > TIEMPO_EXPIRACION) {

        session_unset();
        session_destroy();

       header("Location: /interno/rh/login.html");
        exit;

    }
}

$_SESSION['ultima_actividad'] = time();

function verificarSesion()//Verificar si el usuario ha iniciado sesión
{
    if (!isset($_SESSION['usuario'])) {
        header("Location: /interno/rh/login.html");
        exit;
    }
}

function esAdmin()//Verificar si el usuario tiene rol de admin
{
    return isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin';
}
