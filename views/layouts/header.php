<?php
require_once '../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
require_once __DIR__ . '/../../controllers/empleadoController.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAZNA - RH</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="icon" href="../../public/img/logo.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <header>
        <a href="../empleados/index.php"> <img src="../../public/img/logo_header.png"></a>
        <nav>
            <a href="../empleados/index.php">HOME</a>
            <a href="../contratos/index.php">CONTRATOS</a>
             <?php if (esAdmin()): ?>
            <a href="../empleados/bajas.php">BAJAS</a>
            <?php endif; ?>
            <a href="/interno/rh/logout.php" onclick="return confirm('¿Deseas Cerrar Sesión?')">CERRAR SESIÓN</a>
        </nav>
    </header>
    

</body>

</html>