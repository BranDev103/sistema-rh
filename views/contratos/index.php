<?php
require_once __DIR__ . '/../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
require_once __DIR__ . '/../../helpers/funciones.php';
require_once __DIR__ . '/../../controllers/empleadoController.php';
verificarSesion();

$empleados = Empleado::getAll();

?>

<link rel="stylesheet" href="../../public/css/contratos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<?php include("../layouts/header.php"); ?>
<h2>Lista de contratos</h2>
<a class="btn bi bi-arrow-left-square" href="../empleados/index.php"> Volver</a>

<div class="top-bar">
    <input type="text" id="busqueda" placeholder="Buscar...">
    <script src="../../public/js/buscar.js"></script>
</div>

<table id="tablaContratos" class="display" style="width: 60%;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Compañia</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Contrato</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $empleados->fetch_assoc()): ?>
            <tr>
                <td></td>
                <td><?= $row['compania'] ?></td>
                <td><?= mayusculas($row['nombre']) ?></td>
                <td><?= $row['puesto'] ?></td>
                <td>
                    <?php if (!empty($row['contrato_path'])): ?>
                        <?php if (!esAdmin()): ?>
                            <a class="descarga bi bi-arrow-down-circle" href="../../controllers/EmpleadoController.php?action=pdf&id=<?= $row['id'] ?>" target="_blank"> Imprimir</a>
                           
                                <?php else: (esAdmin()) ?>
                                    <a class="descarga bi bi-arrow-down-circle" href="../../controllers/EmpleadoController.php?action=contrato&id=<?= $row['id'] ?>"> Descargar</a>
                            <?php endif; ?>
                    <?php else: ?>
                        <span class="no-contrato">No disponible</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="../../public/js/dataTable.js"></script>

    </tbody>
</table>