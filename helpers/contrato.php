<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/funciones.php';

use PhpOffice\PhpWord\TemplateProcessor;

function generarContrato($empleado)
{

    //Ruta de plantilla
    $templatePath = __DIR__ . '/../templates/contrato.docx';

    //Nombre del archivo (limpio)
    $nombreLimpio = 'Contrato - ' . $empleado['nombre'];

    $outputPath = __DIR__ . '/../uploads/contratos/' . $nombreLimpio . '.docx';

    //Crear instancia
    $template = new TemplateProcessor($templatePath);

    //Reemplazar datos
    $template->setValue('nombre', $empleado['nombre']);
    $template->setValue('compania', $empleado['compania']);
    $template->setValue('puesto', $empleado['puesto']);
    $template->setValue('sdi', $empleado['sdi']);
    $template->setValue('salario_letra', $empleado['salario_letra']);
    $template->setValue('curp', $empleado['curp']);
    $template->setValue('rfc', $empleado['rfc']);
    $template->setValue('nss', $empleado['nss']);

    $fechaFormateada = formatearFechaContrato($empleado['fecha_ingreso']);
    $template->setValue('fecha_ingreso', $fechaFormateada);

    $template->setValue('nombre_obra', $empleado['nombre_obra']);
    $template->setValue('sexo', $empleado['sexo']);
    $template->setValue('pago', $empleado['pago']);

    //Guardar archivo
    $template->saveAs($outputPath);

    return $outputPath;
}
