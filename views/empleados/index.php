<link rel="stylesheet" href="../../public/css/lista.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<?php
require_once '../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
verificarSesion();


$empleados = Empleado::getAll();

$limite = 10;

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

if ($pagina < 1) $pagina = 1;

$offset = ($pagina - 1) * $limite;

$empleados = Empleado::getPaginado($limite, $offset);
$total = Empleado::contarTotal();

$totalPaginas = ceil($total / $limite);
?>
<?php include("../layouts/header.php"); ?>




<div class="top-bar">
    <h2>Lista de Trabajadores</h2>
    <a class="btn_registro bi bi-plus-square"" href=" create.php"> Nuevo Empleado</a>
    <input type="text" id="busqueda" placeholder="Buscar...">
    <script src="../../public/js/buscar.js"></script>
</div>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Compañia</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Teléfono</th>
            <th>Salario</th>
            <th>SDI</th>
            <th>Estado Civil</th>
            <th>Obra</th>
            <th>Fecha ingreso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $empleados->fetch_assoc()): ?>
            <tr>
                <td><?= $row['folio'] ?></td>
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

<div class="paginacion" style="margin-top:20px; Text-align: center;">

    <?php if ($pagina > 1): ?>
        <a class="bi bi-arrow-left" href="?pagina=<?= $pagina - 1 ?>"></a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
        <a href="?pagina=<?= $i ?>"
            style="<?= $i == $pagina ? 'font-weight:bolder; text-decoration: none;' : '' ?>">
            <?= $i ?>
        </a>
    <?php endfor; ?>

    <?php if ($pagina < $totalPaginas): ?>
        <a class="bi bi-arrow-right" href="?pagina=<?= $pagina + 1 ?>"></a>
    <?php endif; ?>

</div>