<?php
function numeroALetras($numero)
{

    if (!class_exists('NumberFormatter')) {
        return $numero . " PESOS";
    }

    $formatter = new NumberFormatter("es", NumberFormatter::SPELLOUT);


    $partes = explode('.', number_format($numero, 2, '.', ''));

    $entero = (int)$partes[0];
    $decimal = $partes[1];


    $letras = ucfirst($formatter->format($entero));

    return $letras . " " . $decimal . "/100 pesos";
}

/********************************************************** */

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

function generarFolio($total)
{
    $numero = $total + 1;

    return str_pad($numero, 2, "0", STR_PAD_LEFT);
}

function mayusculas($texto)
{
    return mb_strtoupper($texto, 'UTF-8');
}
