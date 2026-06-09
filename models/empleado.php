<?php

/**
 * Modelo de Empleado - Sistema de Recursos Humanos
 *
 * Este archivo contiene la clase Empleado que gestiona todas las operaciones
 * relacionadas con empleados en la base de datos, incluyendo CRUD completo,
 * conteos y consultas especializadas.
 *
 * @file empleado.php
 * @package Models
 * @category Database Management
 * @version 1.0.0
 */

require_once __DIR__ . '/../config/conexion.php';

/**
 * Clase Empleado
 *
 * Proporciona métodos estáticos para gestionar operaciones CRUD y consultas
 * relacionadas con empleados en la base de datos. Utiliza prepared statements
 * para prevenir inyecciones SQL.
 *
 * @class Empleado
 * @static
 */
class Empleado
{
    /**
     * Obtiene todos los empleados con estatus activo
     *
     * Realiza una consulta a la base de datos para obtener todos los empleados
     * que tienen estatus 'activo', ordenados por ID en orden descendente.
     *
     * @static
     * @access public
     * @return mysqli_result Objeto resultado de la consulta con los registros de empleados activos
     */
    public static function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM empleados WHERE estatus='activo' ORDER BY id DESC";
        return $conn->query($sql);
    }

    /**
     * Obtiene un empleado específico por su ID
     *
     * Busca un empleado en la base de datos utilizando su identificador único (ID)
     * mediante un prepared statement para seguridad.
     *
     * @static
     * @access public
     * @param int $id ID del empleado a buscar
     * @return array|null Arreglo asociativo con los datos del empleado o null si no existe
     */
    public static function getById($id)
    {
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM empleados WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    /**
     * Crea un nuevo registro de empleado
     *
     * Inserta un nuevo empleado en la base de datos con todos sus datos personales,
     * laborales y de contacto. Utiliza prepared statements para prevenir inyecciones SQL.
     *
     * @static
     * @access public
     * @param array $data Arreglo asociativo con los datos del empleado. Debe contener:
     *                     - compania (string): Nombre de la compañía
     *                     - nombre (string): Nombre completo del empleado
     *                     - puesto (string): Puesto laboral
     *                     - telefono (string): Número de teléfono
     *                     - banco (string): Nombre del banco para transferencias
     *                     - cuenta_clabe (string): CLABE bancaria
     *                     - salario (double): Salario mensual
     *                     - sdi (double): Salario Diario Integrado
     *                     - salario_letra (string): Salario escrito en letra
     *                     - curp (string): CURP del empleado
     *                     - fecha_nacimiento (string): Fecha de nacimiento (YYYY-MM-DD)
     *                     - edad (int): Edad actual
     *                     - sexo (string): Sexo (M/F)
     *                     - estado_civil (string): Estado civil
     *                     - estado_nacimiento (string): Estado donde nació
     *                     - rfc (string): RFC del empleado
     *                     - nss (string): Número de Seguro Social
     *                     - calle (string): Nombre de la calle
     *                     - num_exterior (string): Número exterior
     *                     - colonia (string): Colonia o barrio
     *                     - municipio (string): Municipio
     *                     - estado (string): Estado
     *                     - cp (string): Código postal
     *                     - fecha_ingreso (string): Fecha de ingreso (YYYY-MM-DD)
     *                     - nombre_obra (string): Nombre de la obra asignada
     *                     - pago (string): Tipo de pago
     * @return bool true si la inserción fue exitosa, false en caso contrario
     * @throws Exception Se detiene la ejecución si hay error en prepare o execute
     */
    public static function create($data)
    {
        global $conn;

        $sql = "INSERT INTO empleados (
            compania, nombre, puesto, telefono,
            banco, cuenta_clabe,
            salario, sdi, salario_letra,
            curp, fecha_nacimiento, edad, sexo,
            estado_civil, estado_nacimiento,
            rfc, nss,
            calle, num_exterior, colonia, municipio, estado, cp,
            fecha_ingreso, nombre_obra, pago
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error en prepare: " . $conn->error);
        }

        $stmt->bind_param(
            "ssssssddsssissssssssssssss",
            $data['compania'],
            $data['nombre'],
            $data['puesto'],
            $data['telefono'],
            $data['banco'],
            $data['cuenta_clabe'],
            $data['salario'],
            $data['sdi'],
            $data['salario_letra'],
            $data['curp'],
            $data['fecha_nacimiento'],
            $data['edad'],
            $data['sexo'],
            $data['estado_civil'],
            $data['estado_nacimiento'],
            $data['rfc'],
            $data['nss'],
            $data['calle'],
            $data['num_exterior'],
            $data['colonia'],
            $data['municipio'],
            $data['estado'],
            $data['cp'],
            $data['fecha_ingreso'],
            $data['nombre_obra'],
            $data['pago']

        );

        if (!$stmt->execute()) {
            die("Error al insertar: " . $stmt->error);
        }

        return true;
    }

    /**
     * Actualiza los datos de un empleado existente
     *
     * Modifica todos los campos de un empleado identificado por su ID. Los datos
     * se actualizan mediante un prepared statement para garantizar seguridad.
     *
     * @static
     * @access public
     * @param int $id ID del empleado a actualizar
     * @param array $data Arreglo asociativo con los datos a actualizar (ver documentación de create())
     * @return bool true si la actualización fue exitosa, false en caso contrario
     * @throws Exception Se detiene la ejecución si hay error en prepare o execute
     */
    public static function update($id, $data)
    {
        global $conn;

        $sql = "UPDATE empleados SET
            compania=?, nombre=?, puesto=?, telefono=?,
            banco=?, cuenta_clabe=?,
            salario=?, sdi=?, salario_letra=?,
            curp=?, fecha_nacimiento=?, edad=?, sexo=?,
            estado_civil=?, estado_nacimiento=?,
            rfc=?, nss=?,
            calle=?, num_exterior=?, colonia=?, municipio=?, estado=?, cp=?,
            fecha_ingreso=?, nombre_obra=?, pago=?
            WHERE id=?";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error en prepare: " . $conn->error);
        }

        $stmt->bind_param(
            "ssssssddsssissssssssssssssi",
            $data['compania'],
            $data['nombre'],
            $data['puesto'],
            $data['telefono'],
            $data['banco'],
            $data['cuenta_clabe'],
            $data['salario'],
            $data['sdi'],
            $data['salario_letra'],
            $data['curp'],
            $data['fecha_nacimiento'],
            $data['edad'],
            $data['sexo'],
            $data['estado_civil'],
            $data['estado_nacimiento'],
            $data['rfc'],
            $data['nss'],
            $data['calle'],
            $data['num_exterior'],
            $data['colonia'],
            $data['municipio'],
            $data['estado'],
            $data['cp'],
            $data['fecha_ingreso'],
            $data['nombre_obra'],
            $data['pago'],
            $id
        );

        if (!$stmt->execute()) {
            die("Error al actualizar: " . $stmt->error);
        }

        return true;
    }

    /**
     * Realiza un soft delete de un empleado (baja lógica)
     *
     * No elimina el registro de la base de datos, sino que marca el empleado como
     * 'inactivo' y registra la fecha de baja en la columna fecha_baja. Esto preserva
     * la integridad referencial y el historial de datos.
     *
     * @static
     * @access public
     * @param int $id ID del empleado a dar de baja
     * @return bool true si la operación fue exitosa, false en caso contrario
     */
    public static function delete($id)
    {
        global $conn;

        $stmt = $conn->prepare("
        UPDATE empleados 
        SET estatus='inactivo', fecha_baja=CURDATE() 
        WHERE id=?
    ");

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    /**
     * Guarda la ruta del contrato de un empleado
     *
     * Actualiza el campo contrato_path del empleado con la ruta del archivo de contrato
     * generado. Utilizado después de crear documentos en PDF.
     *
     * @static
     * @access public
     * @param int $id ID del empleado
     * @param string $ruta Ruta del archivo de contrato (ruta relativa o absoluta)
     * @return bool true si la actualización fue exitosa, false en caso contrario
     */
    public static function guardarContrato($id, $ruta)
    {
        global $conn;

        $stmt = $conn->prepare("UPDATE empleados SET contrato_path=? WHERE id=?");
        $stmt->bind_param("si", $ruta, $id);

        return $stmt->execute();
    }

    /**
     * Cuenta el número de empleados activos
     *
     * Realiza un COUNT(*) de la base de datos para obtener el total de empleados
     * con estatus 'activo'. Utilizado para estadísticas y dashboards.
     *
     * @static
     * @access public
     * @return int Número total de empleados activos
     */
    public static function contarActivos()
    {
        global $conn;

        $result = $conn->query("SELECT COUNT(*) AS total FROM empleados");

        $row = $result->fetch_assoc();

        return $row['total'];
    }


    /**
     * Cuenta el número total de empleados
     *
     * Realiza un COUNT(*) de la base de datos para obtener el número total de
     * empleados, incluyendo activos e inactivos.
     *
     * @static
     * @access public
     * @return int Número total de empleados en la base de datos
     * @note Esta función es similar a contarActivos() pero sin filtro de estatus
     */
    public static function contarTotal()
    {
        global $conn;

        $result = $conn->query("SELECT COUNT(*) AS total FROM empleados");
        $row = $result->fetch_assoc();

        return $row['total'];
    }

    /**
     * Obtiene todos los empleados inactivos
     *
     * Recupera de la base de datos todos los empleados marcados como 'inactivos'.
     * Estos son empleados dados de baja mediante el método delete().
     *
     * @static
     * @access public
     * @return mysqli_result Objeto resultado de la consulta con los registros de empleados inactivos
     */
    public static function getInactivos()
    {
        global $conn;

        return $conn->query("SELECT * FROM empleados WHERE estatus='inactivo'");
    }

    /**
     * Obtiene la lista de compañías únicas con empleados activos
     *
     * Retorna un listado de todas las compañías que tienen empleados activos,
     * ordenadas alfabéticamente. Utilizado para filtros y selecciones en formularios.
     *
     * @static
     * @access public
     * @return mysqli_result Objeto resultado con las compañías DISTINTAS ordenadas ascendentemente
     */
    public static function getCompanias()
    {
        global $conn;

        $result = $conn->query("
        SELECT DISTINCT compania 
        FROM empleados 
        WHERE estatus = 'activo'
        ORDER BY compania ASC
    ");

        return $result;
    }

    public static function getObras()
    {
        global $conn;

        $result = $conn->query("
        SELECT DISTINCT nombre_obra 
        FROM empleados 
        WHERE estatus = 'activo'
        ORDER BY nombre_obra ASC
    ");

        return $result;
    }

    /**
     * Genera un código automático basado en el nombre de la obra
     *
     * Crea un código corto extrayendo las primeras letras de cada palabra
     * del nombre de la obra, en mayúsculas.
     *
     * @static
     * @access public
     * @param string $nombre_obra Nombre de la obra
     * @return string Código generado (ej: "OP" para "Obra Peñascos")
     */
    public static function generarCodigoObra($nombre_obra)
    {
        $mapaObras = [

            'EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954 (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 1, UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO'
            => 'EDIF - POLÍGONO 1',

            'EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180 (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 3, UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO'
            => 'EDIF - POLÍGONO 3',

            'EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260 (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2, UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO'
            => 'EDIF - RESERVA 2',

            'INFONAVIT LOS PEÑASCOS, UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C. P. 42855, HIDALGO'
            => 'INFO - LOS PEÑASCOS',

        ];

        return $mapaObras[$nombre_obra] ?? $nombre_obra; // Retorna el código mapeado o el nombre original si no hay mapeo

    }
}
