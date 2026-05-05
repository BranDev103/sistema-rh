<?php //Conexión con la base de datos

//Datos de acceso
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "registro_obra";

$conn = mysqli_connect($host, $usuario, $password, $bd); 

if (!$conn) {
    die("Falla de conexión: " . mysqli_connect_error());
}

?>