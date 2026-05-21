<?php

/**
 * Contiene funciones auxiliares para el sistema de recursos humanos, como formateo de fechas, conversión de números a letras, generación de folios y manipulación de texto.
 * Estas funciones son utilizadas en diferentes partes del sistema para mantener el código organizado y reutilizable.
 */

/**
 * Convierte un número a letras
 *
 * @param float $numero Número a convertir
 * @return string Número en letras
 */
function numeroALetras($numero)
{

    if (!class_exists('NumberFormatter')) {
        return $numero . " PESOS";
    }

    $formatter = new NumberFormatter("es", NumberFormatter::SPELLOUT);//Crear instancia de NumberFormatter para español


    $partes = explode('.', number_format($numero, 2, '.', ''));

    $entero = (int)$partes[0];
    $decimal = $partes[1];


    $letras = ucfirst($formatter->format($entero));

    return $letras . " " . $decimal . "/100 pesos";
}

/********************************************************** */

/**
 * Formatea una fecha en el formato "día de mes del año" en español.
 *
 * @param string $fecha Fecha en formato "Y-m-d"
 * @return string Fecha formateada en español
 */

function formatearFechaContrato($fecha)
{

    $timestamp = strtotime($fecha);

    $dia = date('j', $timestamp);
    $mes = date('n', $timestamp);
    $anio = date('Y', $timestamp);

    $meses = [
        1 => 'enero',
        2 => 'febrero',
        3 => 'marzo',
        4 => 'abril',
        5 => 'mayo',
        6 => 'junio',
        7 => 'julio',
        8 => 'agosto',
        9 => 'septiembre',
        10 => 'octubre',
        11 => 'noviembre',
        12 => 'diciembre'
    ];

    return $dia . ' de ' . $meses[$mes] . ' del ' . $anio;
}

/**
 * Genera un folio con un formato específico
 *
 * @param int $total Total de registros existentes
 * @return string Folio generado
 */
function generarFolio($total)
{
    $numero = $total + 1;

    return str_pad($numero, 2, "0", STR_PAD_LEFT);
}

/**
 * Convierte un texto a mayúsculas
 *
 * @param string $texto Texto a convertir
 * @return string Texto en mayúsculas
 */
function mayusculas($texto)
{
    return mb_strtoupper($texto, 'UTF-8');
}
