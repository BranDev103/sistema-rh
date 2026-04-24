<?php
require_once __DIR__ . '/../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
require_once __DIR__ . '/../../controllers/empleadoController.php';
verificarSesion();

$empleados = Empleado::getInactivos();

?>

<link rel="stylesheet" href="../../public/css/contratos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<?php include("../layouts/header.php"); ?>
<h2>Lista de Bajas</h2>
<a class="btn bi bi-arrow-left-square" href="../empleados/index.php"> Volver</a>

<div class="top-bar">
    <input type="text" id="busqueda" placeholder="Buscar...">
    <script src="../../public/js/buscar.js"></script>
</div>

<table border="1">
    <thead>
        <tr>
            <th>Compañia</th>
            <th>Nombre</th>
            <th>Fecha de ingreso</th>
            <th>Fecha de baja</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $empleados->fetch_assoc()): ?>
            <tr>
                <td><?= $row['compania'] ?></td>
                <td><?= strtoupper($row['nombre']) ?></td>
                <td><?= date("d/M/Y", strtotime($row['fecha_ingreso'])) ?></td>
                <td><?= date("d/M/Y", strtotime($row['fecha_baja'])) ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

