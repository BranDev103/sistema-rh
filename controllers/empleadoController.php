<?php
require_once __DIR__ . '/../models/empleado.php';
require_once __DIR__ . '/../helpers/funciones.php';
require_once __DIR__ . '/../helpers/contrato.php';
require_once __DIR__ . '/../helpers/auth.php';


class EmpleadoController
{


    public static function store()
    {
          $ultimo = Empleado::getUltimoFolio();
                $folio =generarFolio($ultimo);
        
        $salario_letra = numeroALetras($_POST['sdi']);

        $data = [
            'compania' => $_POST['compania'],
            'nombre' => $_POST['nombre'],
            'puesto' => $_POST['puesto'],
            'telefono' => $_POST['telefono'],

            'banco' => $_POST['banco'],
            'cuenta_clabe' => $_POST['cuenta_clabe'],

            'salario' => $_POST['salario'],
            'sdi' => $_POST['sdi'],
            'salario_letra' => $salario_letra,

            'curp' => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
            'edad' => $_POST['edad'],
            'sexo' => $_POST['sexo'] ?? '',

            'estado_civil' => $_POST['estado_civil'],
            'estado_nacimiento' => $_POST['estado_nacimiento'],

            'rfc' => $_POST['rfc'],
            'nss' => $_POST['nss'],

            'calle' => $_POST['calle'],
            'num_exterior' => $_POST['num_exterior'],
            'colonia' => $_POST['colonia'],
            'municipio' => $_POST['municipio'],
            'estado' => $_POST['estado'],
            'cp' => $_POST['cp'],

            'fecha_ingreso' => $_POST['fecha_ingreso'],
            'nombre_obra' => $_POST['nombre_obra'],
            'pago' => $_POST['pago'],
            'folio' => $folio
        ];

        Empleado::create($data);

        global $conn;
        $id = $conn->insert_id;

        $empleado = Empleado::getById($id);

        require_once __DIR__ . '/../helpers/contrato.php';
        $ruta = generarContrato($empleado);

        Empleado::guardarContrato($id, $ruta);

        header("Location: ../views/empleados/index.php");
        exit;
    }

    public static function update()
    {

        $salario_letra = numeroALetras($_POST['sdi']);

        $data = [
            'compania' => $_POST['compania'],
            'nombre' => $_POST['nombre'],
            'puesto' => $_POST['puesto'],
            'telefono' => $_POST['telefono'],

            'banco' => $_POST['banco'],
            'cuenta_clabe' => $_POST['cuenta_clabe'],

            'salario' => $_POST['salario'],
            'sdi' => $_POST['sdi'],
            'salario_letra' => $salario_letra,

            'curp' => $_POST['curp'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
            'edad' => $_POST['edad'],
            'sexo' => $_POST['sexo'],


            'estado_civil' => $_POST['estado_civil'],
            'estado_nacimiento' => $_POST['estado_nacimiento'],

            'rfc' => $_POST['rfc'],
            'nss' => $_POST['nss'],

            'calle' => $_POST['calle'],
            'num_exterior' => $_POST['num_exterior'],
            'colonia' => $_POST['colonia'],
            'municipio' => $_POST['municipio'],
            'estado' => $_POST['estado'],
            'cp' => $_POST['cp'],

            'fecha_ingreso' => $_POST['fecha_ingreso'],
            'nombre_obra' => $_POST['nombre_obra'],
            'pago' => $_POST['pago']
        ];

        Empleado::update($_POST['id'], $data);

        header("Location: ../views/empleados/show.php?id=" . $_POST['id'] . "&updated=1");
        exit;
    }




    public static function delete()
    {

        if (!esAdmin()) {
            die("Acceso denegado");
        }

        Empleado::delete($_GET['id']);

        header("Location: ../views/empleados/index.php");
        exit;
    }

    /**********************************************************************/

    public static function generarContrato()
    {

        if (!isset($_GET['id'])) {
            die("ID no proporcionado");
        }

        $empleado = Empleado::getById($_GET['id']);

        if (!$empleado) {
            die("Empleado no encontrado");
        }

        $ruta = generarContrato($empleado);


        if (!$ruta || !file_exists($ruta)) {
            die("Error al generar contrato");
        }


        while (ob_get_level()) {
            ob_end_clean();
        }


        header("Content-Description: File Transfer");
        header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: attachment; filename=\"" . basename($ruta) . "\"");
        header("Content-Length: " . filesize($ruta));

        readfile($ruta);
        exit;
    }

    public static function descargarContrato()
    {
        if (!esAdmin()) {
            echo "<script>
            alert('No tienes los permisos para realizar esta acción');
            window.location.href = '../views/contratos/index.php';
        </script>";
            exit;
        }

        $empleado = Empleado::getById($_GET['id']);

        $ruta = $empleado['contrato_path'];

        if (!$ruta || !file_exists($ruta)) {
            die("Contrato no disponible");
        }

        while (ob_get_level()) ob_end_clean();

        header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        header("Content-Disposition: attachment; filename=\"" . basename($ruta) . "\"");
        header("Content-Length: " . filesize($ruta));

        readfile($ruta);
        exit;
    }

}


/********************************************************************** */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        EmpleadoController::update();
    } else {
        EmpleadoController::store();
    }
}

/****************************************************************** */
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    EmpleadoController::delete();
}

/***************************************************************** */
if (isset($_GET['action']) && $_GET['action'] === 'contrato') {
    EmpleadoController::generarContrato();
}

/**************************************************************** */
if (isset($_GET['action']) && $_GET['action'] === 'descargarContrato') {
    EmpleadoController::descargarContrato();
}
