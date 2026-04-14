<?php
require_once __DIR__ . '/../config/conexion.php';

class Empleado
{


    public static function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM empleados WHERE estatus='activo'";
        return $conn->query($sql);
    }


    public static function getById($id)
    {
        global $conn;

        $stmt = $conn->prepare("SELECT * FROM empleados WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }


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
            fecha_ingreso, nombre_obra, pago, folio
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error en prepare: " . $conn->error);
        }

        $stmt->bind_param(
            "ssssssddsssisssssssssssssss",
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
            $data['folio']
        );

        if (!$stmt->execute()) {
            die("Error al insertar: " . $stmt->error);
        }

        return true;
    }


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


    public static function delete($id)
    {
        global $conn;

        $stmt = $conn->prepare("UPDATE empleados SET estatus='inactivo' WHERE id=?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

    public static function guardarContrato($id, $ruta)
    {
        global $conn;

        $stmt = $conn->prepare("UPDATE empleados SET contrato_path=? WHERE id=?");
        $stmt->bind_param("si", $ruta, $id);

        return $stmt->execute();
    }

    public static function getUltimoFolio() {
    global $conn;

    $result = $conn->query("SELECT folio FROM empleados ORDER BY id DESC LIMIT 1");

    if ($row = $result->fetch_assoc()) {
        return $row['folio'];
    }

    return null;
}
}
