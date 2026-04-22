<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/funciones.php';

use PhpOffice\PhpWord\TemplateProcessor;

function generarContrato($empleado)
{

    //Ruta de plantilla
    $templatePath = __DIR__ . '/../templates/contrato.docx';

    //Nombre del archivo (limpio)
    $nombreLimpio = 'Contrato - ' . mayusculas($empleado['nombre']);

    $outputPath = __DIR__ . '/../uploads/contratos/' . $nombreLimpio . '.docx';

    //Crear instancia
    $template = new TemplateProcessor($templatePath);

    //Reemplazar datos



    $template->setValue('nombre', mayusculas($empleado['nombre']));
    $template->setValue('puesto', mayusculas($empleado['puesto']));
    $template->setValue('compania', mayusculas($empleado['compania']));
    $template->setValue('nombre_obra', mayusculas($empleado['nombre_obra']));
    $template->setValue('sdi', $empleado['sdi']);
    $template->setValue('salario_letra', $empleado['salario_letra']);
    $template->setValue('curp', $empleado['curp']);
    $template->setValue('rfc', $empleado['rfc']);
    $template->setValue('nss', $empleado['nss']);
    $template->setValue('edad', $empleado['edad']);
    $template->setValue('estado_nacimiento', mayusculas($empleado['estado_nacimiento']));
    $template->setValue('fecha_nacimiento', date("d/M/Y", strtotime($empleado['fecha_nacimiento'])));
    $template->setValue('telefono', $empleado['telefono']);
    $template->setValue('sexo', $empleado['sexo']);
    $template->setValue('estado_civil', $empleado['estado_civil']);

    $template->setValue('calle', mayusculas($empleado['calle']));
    $template->setValue('num_exterior', $empleado['num_exterior']);
    $template->setValue('colonia', mayusculas($empleado['colonia']));
    $template->setValue('municipio', mayusculas($empleado['municipio']));
    $template->setValue('estado', mayusculas($empleado['estado']));
    $template->setValue('cp', $empleado['cp']);
    $template->setValue('banco', $empleado['banco']);
    $template->setValue('cuenta_clabe', $empleado['cuenta_clabe']);



    $fechaFormateada = formatearFechaContrato($empleado['fecha_ingreso']);
    $template->setValue('fecha_ingreso', $fechaFormateada);

    $template->setValue('nombre_obra', $empleado['nombre_obra']);
    $template->setValue('sexo', $empleado['sexo']);
    $template->setValue('pago', $empleado['pago']);

    //Guardar archivo
    $template->saveAs($outputPath);

    return $outputPath;
}
