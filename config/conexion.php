<?php //Conexión con la base de datos

//Datos de acceso
$host = "localhost";
$usuario = "daznamx_admin";
$password = "EsrTtOtt&J;A";
$bd = "daznamx_registrObra";

$conn = mysqli_connect($host, $usuario, $password, $bd); 

if (!$conn) {
    die("Falla de conexión: " . mysqli_connect_error());
}

?>