<?php
require_once '../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
require_once __DIR__ . '/../../controllers/empleadoController.php';
$empleados = Empleado::getAll();

?>
<?php include("../layouts/header.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/lista.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title></title>
</head>

<body>
    <div class="top-bar">
        <h2>Lista de Trabajadores</h2>
        <a class="btn_registro bi bi-plus-square" href=" create.php"> Nuevo Empleado</a>
        <input type="text" id="busqueda" placeholder="Buscar...">
        <script src="../../public/js/buscar.js"></script>
    </div>

    <table id="tablaEmpleados" class="display" style="width:98%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Compañia</th>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Teléfono</th>
                <th>Salario</th>
                <th>SDI</th>
                <th>Estado Civil</th>
                <th>Obra</th>
                <th>Fecha Ingreso</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php while ($row = $empleados->fetch_assoc()): ?>
                <tr>
                    <td></td>
                    <td><?= $row['compania'] ?></td>
                    <td><?= strtoupper($row['nombre']) ?></td>
                    <td><?= $row['puesto'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                    <td><?= $row['salario'] ?></td>
                    <td><?= $row['sdi'] ?></td>
                    <td><?= $row['estado_civil'] ?></td>
                    <td title="<?= $row['nombre_obra'] ?>">
                        <?= strlen($row['nombre_obra']) > 30
                            ? substr($row['nombre_obra'], 0, 30) . '...'
                            : $row['nombre_obra'] ?>
                    </td>
                    <td><?= date("d/M/Y", strtotime($row['fecha_ingreso'])) ?>
                    </td>

                    <td>
                        <div class="wrapper">

                            <div class="icon">
                                <a class="icono bi bi-eye" href="show.php?id=<?= $row['id'] ?>"></a>
                                <span class="tooltip">Detalle</span>
                            </div>
                            <div class="icon">
                                <a class="icono bi bi-pencil-square" href="edit.php?id=<?php echo $row['id']; ?>"></a>
                                <span class="tooltip">Editar</span>
                            </div>
                            <div class="icon">
                                <?php if (esAdmin()): ?>
                                    <a class="icono bi bi-trash" href="../../controllers/empleadoController.php?action=delete&id=<?= $row['id'] ?>" " onclick=" return confirm('¿Eliminar este registro?')"></a>
                                    <span class="tooltip">Eliminar</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function() {

            var table = $('#tablaEmpleados').DataTable({
                pageLength: 15,
                searching: false,
                scrollX: false,
                autoWidth: false,
                dom: 'tip',
                ordering: false,
                language: {
                    info: "",
                    zeroRecords: "No se encontraron resultados",
                    infoEmpty: "",
                    paginate: {
                        previous: "<<",
                        next: ">>"
                    }
                },
                columnDefs: [{
                    orderable: false,
                    targets: 0
                }],
                order: [
                    [1, 'asc']
                ],
                select: true,
            });

            table.on('order.dt search.dt draw.dt', function() {
                let pageInfo = table.page.info();

                table.column(0, {
                    page: 'current'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1 + pageInfo.start;
                });
            }).draw();

        });
    </script>


</body>

</html>