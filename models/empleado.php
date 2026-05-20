<?php
require_once __DIR__ . '/../config/conexion.php';

class Empleado
{
    /**
     * Modelo de acceso a datos para la tabla empleados.
     *
     * Provee métodos estáticos para operaciones CRUD, conteo y consultas
     * auxiliares relacionadas con empleados activos e inactivos.
     */

    /**
     * Obtiene todos los empleados activos ordenados por id descendente.
     *
     * @return mysqli_result Resultado de la consulta con los empleados activos.
     */
    public static function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM empleados WHERE estatus='activo' ORDER BY id DESC";
        return $conn->query($sql);
    }

    /**
     * Obtiene un empleado por su identificador.
     *
     * @param int $id Identificador del empleado.
     * @return array|null Fila asociativa del empleado o null si no existe.
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
     * Inserta un nuevo empleado en la base de datos.
     *
     * @param array $data Datos del empleado que serán guardados.
     * @return bool Retorna true cuando la inserción se realizó correctamente.
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
     * Actualiza los datos de un empleado existente.
     *
     * @param int   $id   Identificador del empleado a actualizar.
     * @param array $data Nuevos datos del empleado.
     * @return bool Retorna true cuando la actualización se realizó correctamente.
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
     * Marca un empleado como inactivo y registra la fecha de baja.
     *
     * @param int $id Identificador del empleado a desactivar.
     * @return bool Resultado de la ejecución del query.
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
     * Actualiza la ruta del contrato asociado a un empleado.
     *
     * @param int    $id    Identificador del empleado.
     * @param string $ruta  Ruta del archivo de contrato.
     * @return bool Resultado de la ejecución del query.
     */
    public static function guardarContrato($id, $ruta)
    {
        global $conn;

        $stmt = $conn->prepare("UPDATE empleados SET contrato_path=? WHERE id=?");
        $stmt->bind_param("si", $ruta, $id);

        return $stmt->execute();
    }

    /**
     * Cuenta el número total de empleados en la base de datos.
     *
     * @return int Total de empleados.
     */
    public static function contarActivos()
    {
        global $conn;

        $result = $conn->query("SELECT COUNT(*) AS total FROM empleados");

        $row = $result->fetch_assoc();

        return $row['total'];
    }

    /**
     * Cuenta el número total de empleados en la base de datos.
     *
     * Nota: actualmente es equivalente a contarActivos().
     *
     * @return int Total de empleados.
     */
    public static function contarTotal()
    {
        global $conn;

        $result = $conn->query("SELECT COUNT(*) AS total FROM empleados");
        $row = $result->fetch_assoc();

        return $row['total'];
    }

    /**
     * Obtiene los empleados que están marcados como inactivos.
     *
     * @return mysqli_result Resultado de la consulta con empleados inactivos.
     */
    public static function getInactivos()
    {
        global $conn;

        return $conn->query("SELECT * FROM empleados WHERE estatus='inactivo'");
    }

    /**
     * Obtiene la lista de compañías distintas de empleados activos.
     *
     * @return mysqli_result Resultado con las compañías activas ordenadas alfabéticamente.
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
}
