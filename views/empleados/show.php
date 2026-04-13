<?php
require_once __DIR__ . '/../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
verificarSesion();

if (!isset($_GET['id'])) {
    die("ID no proporcionado");
}

$empleado = Empleado::getById($_GET['id']);

?>

<?php if (isset($_GET['updated'])): ?>
    <p style="color: green;">Empleado actualizado correctamente</p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/show.css">
    <link rel="icon" href="../../public/img/logo.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <title>Ver detalle</title>
</head>

<body>
    <h2>Detalles del trabajador</h2>

    <a class="btn bi bi-arrow-left-square" href="index.php"> Volver</a>
    <a class="btn bi-pencil-square" href="edit.php?id=<?= $empleado['id'] ?>"> Editar</a>
    <?php if(esAdmin()): ?>
    <a class="btn bi bi-file-word" href="../../controllers/empleadoController.php?action=contrato&id=<?= $empleado['id'] ?>"> Generar contrato</a>
    <?php endif; ?>
    <?php if (esAdmin()): ?>
        <a class="btn bi bi-trash" href="../../controllers/empleadoController.php?action=delete&id=<?= $empleado['id'] ?>"
            onclick="return confirm('¿Eliminar este registro?')"> Eliminar</a>
    <?php endif; ?>


    <div class="container">

        <div>
            <h3>Datos Generales</h3>
            <p><strong>Compañía:</strong> <?= $empleado['compania'] ?></p>
            <p><strong>Nombre:</strong> <?= $empleado['nombre'] ?></p>
            <p><strong>Puesto:</strong> <?= $empleado['puesto'] ?></p>
            <p><strong>Teléfono:</strong> <?= $empleado['telefono'] ?></p>

            <h3>Datos Personales</h3>
            <p><strong>CURP:</strong> <?= $empleado['curp'] ?></p>
            <p><strong>RFC:</strong> <?= $empleado['rfc'] ?></p>
            <p><strong>NSS:</strong> <?= $empleado['nss'] ?></p>
            <p><strong>Fecha de nacimiento:</strong> <?= date("d/M/Y", strtotime($empleado['fecha_nacimiento'])) ?></p>
            <p><strong>Edad:</strong> <?= $empleado['edad'] ?></p>
            <p><strong>Sexo:</strong> <?= $empleado['sexo'] ?></p>
            <p><strong>Estado civil:</strong> <?= $empleado['estado_civil'] ?></p>
            <p><strong>Estado de nacimiento:</strong> <?= $empleado['estado_nacimiento'] ?></p>

            <h3>Dirección</h3>
            <p>
                <?= $empleado['calle'] ?> #<?= $empleado['num_exterior'] ?>,
                <?= $empleado['colonia'] ?>,
                <?= $empleado['municipio'] ?>,
                <?= $empleado['estado'] ?>,
                CP <?= $empleado['cp'] ?>
            </p>
        </div>

        <div>

            <h3>Datos Bancarios</h3>
            <p><strong>Banco:</strong> <?= $empleado['banco'] ?></p>
            <p><strong>CLABE:</strong> <?= $empleado['cuenta_clabe'] ?></p>

            <h3>Datos Salariales</h3>
            <p><strong>Salario:</strong> $<?= $empleado['salario'] ?></p>
            <p><strong>Salario Diario Integral (SDI):</strong> $<?= $empleado['sdi'] ?></p>
            <p><strong>Salario en letra:</strong> <?= $empleado['salario_letra'] ?></p>
            <p><strong>Tipo de pago:</strong> <?= $empleado['pago'] ?></p>

            <h3>Datos Laborales</h3>
            <p><strong>Fecha de ingreso:</strong> <?= date("d/M/Y", strtotime($empleado['fecha_ingreso'])) ?></p>
            <p><strong>Obra:</strong> <?= $empleado['nombre_obra'] ?></p>
        </div>

    </div>

    <hr>
    
</body>

</html>