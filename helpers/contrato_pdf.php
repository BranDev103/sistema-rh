<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/funciones.php';

use Dompdf\Dompdf;

function generarContratoPDF($empleado)
{

    $dompdf = new Dompdf();

    ob_start();

    $nombreLimpio = 'Contrato - ' . mayusculas($empleado['nombre']);
?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="generator" content="LibreOffice 26.2.0.3 (Linux)" />
        <meta name="created" content="2026-04-06T15:53:00" />
        <meta name="changedby" content="Brandon González López" />
        <meta name="changed" content="2026-04-22T18:06:00" />
        <meta name="AppVersion" content="16.0000" />
        <style type="text/css">
            @page {
                size: 8.5in 11in;
                margin-left: 1.18in;
                margin-right: 0.79in;
                margin-top: 0.49in;
                margin-bottom: 0.49in
            }

            p {
             
                margin-bottom: 0.1in;
                widows: 2;
                orphans: 2;
                text-align: justify;
                line-height: 115%;
                background: transparent
            }
        </style>
    </head>

    <body lang="es-ES" link="#000080" vlink="#800000" dir="ltr">
        <div title="header">
            <p style="margin-bottom: 0.45in"><br />
                <br />

            </p>
        </div>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>CONTRATO INDIVIDUAL DE TRABAJO POR OBRA DETERMINADA, QUE CELEBRAN POR UNA PARTE LA PERSONA MORAL</b></font>
                DENOMINADA “</font>
            <font face="Arial, sans-serif"><b>CONSTRUCTORA
                    DAZNA S. A DE C.V</b></font>
            <font face="Arial, sans-serif">.,
                REPRESENTADA POR LA C. </font>
            <font face="Arial, sans-serif"><b>CARLOS
                    EDUARDO LUNA MORA</b></font>
            <font face="Arial, sans-serif">, QUE DE
                AHORA EN ADELANTE Y PARA EFECTOS DE ESTE CONTRATO SE LE DENOMINARÁ
            </font>
            <font face="Arial, sans-serif"><b>“EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">,
                Y POR LA OTRA, POR SU PROPIO DERECHO EL c. </font>
            <font face="Arial, sans-serif"><b>${nombre}</b></font>
            <font face="Arial, sans-serif">
                A QUIEN SE LE DENOMINARÁ EN LO SUCESIVO </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">. CONTRATO QUE
                SE SUJETARÁ AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS.</font>
        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DECLARACIONES</b></font>
        </p>
        <ol type="I">
            <li>
                <p align="justify" style="margin-bottom: 0.14in; border: none; padding: 0in">
                    <font color="#000000">“<font face="Arial, sans-serif"><b>EL
                                PATRÓN”</b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">
                            por conducto de su representante legal:</font>
                    </font>
                </p>
            </li>
        </ol>
        <ol type="A">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que su
                            representada es una Sociedad Anónima de Capital Variable,
                            debidamente constituida bajo las leyes mexicanas mediante el
                            Instrumento público número 18,959 (Dieciocho mil novecientos
                            cincuenta y nueve), Libro 479 (Cuatrocientos </font>
                    </font>
                    <font face="Arial, sans-serif">setenta
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">y nueve)
                            de fecha 10 de julio del 1996, otorgada ante la fe de la licenciada
                            Sara Cuevas Villalobos, titular de la Notaría Pública número 197
                            de la C. Madrid 19, Del Carmen, Benito Juárez, en el México D.F. </font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.39in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="A" start="2">
            <li>
                <p align="justify" style="margin-bottom: 0.14in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que su objetivo
                            principalmente es la compraventa, administración, arrendamiento,
                            subarrendamiento, promoción, proyecto, diseño, construcción,
                            reconstrucción, remodelación, adaptación, decoración,
                            fraccionamiento, lotificación, urbanización, supervisión y
                            mantenimiento de toda clase de bienes inmuebles, pavimentos, canales
                            y drenes de carácter urbano Que señala como su domicilio para
                            todos los efectos que se derivan del presente Contrato, el ubicado
                            en : BOULEVARD VALLE DE SAN JAVIER 3ER PISO VALLE DE SAN JAVIER
                            No.101 PACHUCA DE SOTO, C.P.42086.</font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="margin-bottom: 0.14in">
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">Estar
                            representada en este acto por el C. </font>
                    </font>
                    <font face="Arial, sans-serif">CARLOS
                        EDUARDO LUNA MORA</font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">
                            quien acredita su personalidad, </font>
                    </font>
                    <font face="Arial, sans-serif">mediante
                        el Instrumento público número 18.959 (Dieciocho mil novecientos
                        cincuenta y nueve), Libro 469 (Cuatrocientos sesenta y nueve) de
                        fecha 10 de julio del 1996, otorgada ante la fe de la Licenciada
                        Sara Cuevas Villalobos, titular de la Notaría Pública número 197
                        , del Estado de México D.F., </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">en
                            la que se señalan los poderes suficientes para obligar a su
                            representada en los términos que más adelante se precisan; y bajo
                            protesta de decir verdad, manifiesta que dichos poderes no le han
                            sido revocados ni restringidos en forma alguna, a la firma del
                            presente instrumento.</font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="margin-bottom: 0.14in">
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">Que
                            tiene la necesidad de contratar bajo la modalidad de </font>
                    </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif"><b>OBRA
                                DETERMINADA</b></font>
                    </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">
                            para los trabajos de </font>
                    </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif"><b>${nombre_obra}</b></font>
                    </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif">,
                            respecto de los servicios relacionados con las actividades de
                            construcción y administración, realizando las actividades propias
                            de dicho puesto y las demás que indique </font>
                    </font>
                    <font color="#0d0d0d">
                        <font face="Arial, sans-serif"><b>“EL
                                PATRÓN”.</b></font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="margin-bottom: 0.14in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que
                            es su voluntad celebrar el presente contrato individual de trabajo
                            por obra determinada con el C.</font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>
                                ${nombre}</b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,</font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>
                            </b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">para
                            que desempeñe el cargo de</font>
                    </font>
                    <font face="Arial, sans-serif">
                    </font>
                    <font face="Arial, sans-serif"><b>${puesto}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="margin-left: 0.3in; border: none; padding: 0in; margin-bottom: 0in; text-indent: -0.39in">
            <br />

        </p>
        <ol type="A" start="6">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Estar en común
                            acuerdo con </font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>“EL
                                TRABAJADOR”</b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">
                            para la celebración del presente contrato, mismo que conocen, han
                            pactado libremente su contenido y alcance legal.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.49in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="I" start="2">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">“</font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>EL
                                TRABAJADOR</b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">”
                            declara por su propio derecho y voluntad:</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="margin-left: 0.3in; border: none; padding: 0in; margin-bottom: 0in; text-indent: -0.39in">
            <br />

        </p>
        <ol type="A">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Llamarse como
                            ha quedado expresado al inicio de este contrato, estar en pleno uso
                            y goce de sus facultades físicas y mentales y que no ha sido
                            forzado a firmar el presente contrato.</font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Ser de
                            nacionalidad mexicana, de </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${edad}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">
                            años de edad, sexo</font>
                    </font>
                    <font face="Arial, sans-serif">
                    </font>
                    <font face="Arial, sans-serif"><b>${sexo}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                            estado civil</font>
                    </font>
                    <font face="Arial, sans-serif">
                    </font>
                    <font face="Arial, sans-serif"><b>${estado_civil}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                            NSS: </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${nss}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                            CURP: </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${curp}</b></font>
                    <font face="Arial, sans-serif">
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">y R.F.C.
                        </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${rfc}</b></font>
                    <font face="Arial, sans-serif">.</font>
                </p>
            </li>
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Con domicilio
                            en: C </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${calle}
                            ${num_exterior} ${colonia}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                            C.P</font>
                    </font>
                    <font face="Arial, sans-serif">. </font>
                    <font face="Arial, sans-serif"><b>${cp}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                        </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${municipio}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">,
                        </font>
                    </font>
                    <font face="Arial, sans-serif"><b>${estado}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
            <br />

        </p>
        <ol type="A" start="4">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Tener los
                            conocimientos y aptitudes necesarias para el desarrollo de ese
                            trabajo, contar con la documentación oficial que la habilita para
                            el desempeño de dicha actividad y que las referencias relacionadas
                            con su persona y experiencia son auténticas.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.39in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="A" start="5">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que cuenta con
                            cabal salud y no padece alguna enfermedad que le impida el desempeño
                            en la empresa, en el puesto de</font>
                    </font>
                    <font face="Arial, sans-serif">
                    </font>
                    <font face="Arial, sans-serif"><b>${puesto}</b></font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>.
                            </b></font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.39in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="A" start="6">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que, SI ( )
                            NO ( ) tiene contrato o crédito hipotecario vigente con el
                            INFONAVIT.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.39in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="A" start="7">
            <li>
                <p align="justify" style="margin-bottom: 0in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Que, SI ( ) NO
                            ( ) tiene una resolución judicial en contra, en materia de PENSIÓN
                            ALIMENTICIA.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="text-indent: -0.39in; margin-bottom: 0in; border: none; padding: 0in; margin-left: 0.3in">
            <br />

        </p>
        <ol type="A" start="8">
            <li>
                <p align="justify" style="margin-bottom: 0.14in; border: none; padding: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Estar en común
                            acuerdo con “</font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif"><b>EL
                                PATRÓN</b></font>
                    </font>
                    <font color="#000000">
                        <font face="Arial, sans-serif">”
                            para la celebración del presente contrato, por obra determinada,
                            mismo que conocen y han pactado libremente su contenido y alcance
                            legal.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">En virtud de lo
                    anterior, ambas partes aceptan celebrar el presente </font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif"><u><b>contrato
                            de trabajo por obra determinada</b></u></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">,
                    conforme a las siguientes:</font>
            </font>
        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>CLÁUSULAS</b></font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>PRIMERA. </b></font>
            <font face="Arial, sans-serif">El
                presente contrato lo celebran las partes por </font>
            <font face="Arial, sans-serif"><b>OBRA
                    DETERMINADA</b></font>
            <font face="Arial, sans-serif"> y sólo podrá
                ser modificado, suspendido, rescindido o terminado en los casos
                previstos en el presente y de conformidad con la Ley Federal del
                Trabajo artículos 35, 36 y 37 fracción I, la temporalidad de la
                contratación se relaciona con el tiempo que el</font>
            <font face="Arial, sans-serif"><b>
                    “EL PATRÓN” </b></font>
            <font face="Arial, sans-serif">requiera
                los servicios del trabajador como</font>
            <font face="Arial, sans-serif"><b>
                    ${puesto}.</b></font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in"><a name="_tu0tqlhfoa29"></a>
            <font face="Arial, sans-serif"><b>SEGUNDA. “EL TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">se
                obliga a prestar sus servicios a </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">, en el puesto
                denominado “</font>
            <font face="Arial, sans-serif"><b>${puesto}</b></font>
            <font face="Arial, sans-serif">”
                cuyas actividades principales de manera enunciativa más no
                limitativas, consistirán en lo establecido en el perfil de puestos
                de “</font>
            <font face="Arial, sans-serif"><b>CONSTRUCTORA DAZNA S.
                    A DE C.V</b></font>
            <font face="Arial, sans-serif">. dichas
                actividades se llevarán a cabo en el: Proyecto de obra Determinada a
                la</font>
            <font face="Arial, sans-serif"><b> ${nombre_obra}.</b></font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">Se hace constar que </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> celebra el
                presente contrato fundado en la declaración y documentación
                entregada por </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">, en el
                sentido de que éste tiene los conocimientos, las habilidades y la
                experiencia necesaria para desempeñar adecuadamente las actividades
                inherentes al cargo para el que se le contrata.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>TERCERA.</b></font>
            <font face="Arial, sans-serif">
                La determinación de los servicios que realice </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif"> se hace en
                forma enunciativa, y de ninguna manera limitativa, por lo que, se
                obliga llevar a cabo tanto en su preparación, como en su ejecución,
                todas las labores anexas y conexas con el trabajo principalmente
                contratado, por lo que se prohíbe a </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">que dentro de
                su jornada realice cualquier actividad que no esté relacionada con
                las labores contratadas.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>CUARTA. “EL TRABAJADOR”
                </b></font>
            <font face="Arial, sans-serif">desempeñará su trabajo en
                el domicilio de </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">, o en cualquier
                otro lugar o Estado de la República Mexicana que </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> determine, por
                lo tanto, </font>
            <font face="Arial, sans-serif"><b>“EL TRABAJADOR”
                </b></font>
            <font face="Arial, sans-serif">acepta y está de acuerdo
                en que </font>
            <font face="Arial, sans-serif"><b>“EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">
                lo cambie de ubicación de centro de trabajo, derivado de la
                necesidad del propio servicio, ello en el momento que sea requerido,
                lo cual se llevará a cabo previo aviso por escrito, con anticipación
                razonable.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>QUINTA. </b></font>
            <font face="Arial, sans-serif">La
                duración de la jornada de trabajo será de ocho horas diarias máximo
                de lunes a viernes de las 8:00 a 18:00 con una hora y media para
                tomar sus alimentos fuera de las instalaciones y los sábados de las
                8:00 a 13:00. En caso de que por las necesidades del servicio se
                requiera la prestación de sus labores en forma extraordinaria,
                dichas horas tendrán que ser informadas previamente a la Dirección
                Administrativa y Dirección Operativa, por conducto de sus
                representantes. </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>SEXTA. “EL TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">
                deberá presentarse puntualmente a sus labores en el horario de
                trabajo establecido y firmar las listas de asistencia, o registrar su
                asistencia en los dispositivos que la empresa disponga para tales
                efectos. De igual forma, </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif"> se obliga a
                cumplir con cualquier medio de control y supervisión que </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">, ponga en
                vigencia con el objeto de verificar las horas de entrada y salida. En
                caso de retardos, o faltas de asistencia injustificadas, podrá </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> imponer las
                sanciones y descuentos salariales, por los días no trabajados o por
                la acumulación de retardos en un mes, de acuerdo al Reglamento
                Interior de Trabajo.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>SÉPTIMA. “EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">
                cubrirá a </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">, por los
                servicios que proporcionará de conformidad con este contrato, </font>
            <font color="#000000">
                <font face="Arial, sans-serif">un
                    salario diario de </font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif"><b>$$</b></font>
            </font>
            <font face="Arial, sans-serif"><b>{sdi}</b></font>
            <font color="#000000">
                <font face="Arial, sans-serif"><b>
                        (</b></font>
            </font>
            <font face="Arial, sans-serif"><b>${salario_letra}</b></font>
            <font color="#000000">
                <font face="Arial, sans-serif"><b>),
                    </b></font>
            </font>
            <font face="Arial, sans-serif">menos los descuentos
                y retenciones de Ley correspondientes. Con fundamento en lo dispuesto
                por artículo 101, párrafo segundo de la Ley Federal del Trabajo, el
                salario será depositado ${pago}, mediante transferencia electrónica,
                en la cuenta bancaria que </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">proporcionará
                para tal efecto (</font>
            <font face="Arial, sans-serif"><b>Anexo 1</b></font>
            <font face="Arial, sans-serif">),
                quedando obligado éste a firmar los recibos o comprobantes que
                requiera la empresa.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>OCTAVA.</b></font>
            <font face="Arial, sans-serif">
                Las partes reconocen que dentro del monto del Salario queda incluido
                el salario diario, el día de descanso (o descansos) semanal, todos
                los días de descanso obligatorios establecidos en el artículo 74 de
                la Ley Federal del Trabajo y todos los días de descanso en que </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> suspenda sus
                actividades, así como cualquier otro beneficio que señale la Ley
                Federal del Trabajo.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>NOVENA. “EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">
                otorgará a </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">a más tardar
                el día 20 de diciembre de cada año, por concepto del aguinaldo, una
                cantidad equivalente a 15 días de salario, siempre y cuando </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">tenga un año
                cumplido de servicios, de conformidad con lo dispuesto por el
                Artículo 87 de la Ley Federal del Trabajo.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">En caso de que </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">no haya
                cumplido un año de servicio, </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> le pagará una
                cantidad proporcional a la cantidad arriba mencionada, de acuerdo con
                el tiempo efectivamente laborado, igualmente de conformidad con lo
                dispuesto por el artículo citado.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA.</b></font>
            <font face="Arial, sans-serif">
            </font>
            <font face="Arial, sans-serif"><b>&quot;EL TRABAJADOR&quot;</b></font>
            <font face="Arial, sans-serif">
                tendrá derecho a disfrutar de un periodo anual de vacaciones según
                lo establecido en el artículo 76 de la Ley Federal del Trabajo,
                tomando en consideración la antigüedad en el trabajo, así como a
                disfrutar del salario que le corresponda. De igual modo recibirá la
                Prima Vacacional respectiva, equivalente al 25% del importe pagado
                por vacaciones de acuerdo al artículo 80 de la Ley citada</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA PRIMERA. “EL TRABAJADOR”
                </b></font>
            <font face="Arial, sans-serif">reconoce que son propiedad
                exclusiva de </font>
            <font face="Arial, sans-serif"><b>“EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">
                todos los uniformes y sus aditamentos incluyendo chamarras, chalecos,
                caretas protectoras, equipamiento, documentos, credenciales e
                información que se le proporcionen con motivo de la relación de
                trabajo, así como los productos, bitácoras, así como los
                documentos, programas de cómputo, o cualquier creación que el
                propio trabajador</font>
            <font face="Arial, sans-serif"><b>
                </b></font>
            <font face="Arial, sans-serif">desarrolle, prepare o
                formule en relación o conexión con sus servicios, por los que se
                obliga a conservarlos en buen estado y a entregarlos a </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> en el momento en
                que este lo requiera, o bien al terminar el presente contrato, por el
                motivo que sea.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA SEGUNDA. </b></font>
            <font face="Arial, sans-serif">De
                conformidad con el artículo 134 fracción XIII de la Ley Federal del
                Trabajo, </font>
            <font face="Arial, sans-serif"><b>“EL TRABAJADOR”
                </b></font>
            <font face="Arial, sans-serif">se obliga a no divulgar
                ninguno de los aspectos de los negocios de </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">, ni proporcionar
                a terceras personas verbalmente o por escrito, directa o
                indirectamente, información alguna sobre los sistemas, procesos
                internos, información de directivos o empleados, así como de los
                clientes y formas de trabajo de </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">. Si </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">deja de
                cumplir con las disposiciones de esta cláusula, quedará sujeto a la
                responsabilidad laboral y civil por daños y perjuicios que cause a
            </font>
            <font face="Arial, sans-serif"><b>“EL PATRÓN”</b></font>
            <font face="Arial, sans-serif">
                y a las sanciones penales a que se pueda hacer acreedor.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA TERCERA. </b></font>
            <font face="Arial, sans-serif">Conforme
                a lo dispuesto por la fracción X del Artículo 134 de la Ley Federal
                del Trabajo el </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">se someterá
                a los exámenes de aptitudes, destrezas y habilidades, psicológicos,
                médicos y toxicológicos que disponga </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> las veces que
                sea necesario, en la inteligencia de que el responsable de
                practicarlos será designado y retribuido por </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">. </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA CUARTA. &quot;EL
                    TRABAJADOR&quot;</b></font>
            <font face="Arial, sans-serif"> deberá
                cumplir todo lo contenido en el Reglamento Interior de Trabajo con
                que cuenta la empresa y que tiene fijado en las áreas de mayor
                visibilidad. </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>DÉCIMA
                        QUINTA. </b></font>
            </font>
            <font face="Arial, sans-serif"><b>&quot;EL
                    TRABAJADOR&quot;</b></font>
            <font face="Arial, sans-serif"> deberá
                integrarse a los Planes, Programas y Comisiones Mixtas de
                Capacitación y Adiestramiento, así como a los de Seguridad e
                Higiene en el Trabajo que tiene constituidos la empresa tomando parte
                activa dentro de los mismos según los cursos establecidos y medidas
                preventivas de riesgos de trabajo. Asimismo, deberá acatar las
                medidas sanitarias expedidas por las autoridades de Salud Federal o
                Estatal según corresponda.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>&quot;EL TRABAJADOR&quot;</b></font>
            <font face="Arial, sans-serif">
                se obliga a participar en todos y cada uno de los programas de
                capacitación, adiestramiento y productividad que se establezca en el
                centro de trabajo, ya sea en forma activa (impartiendo cursos) o
                recibiéndolos. Las partes convienen que la capacitación podrá
                hacerse dentro o fuera de los horarios de trabajo, indistintamente,
                en cumplimiento del Capítulo III Bis, de la Ley Federal del Trabajo.
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>DÉCIMA
                        SEXTA. </b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">Ambas
                    partes están de acuerdo que en caso de fuerza mayor debidamente
                    acreditada y de ser posible, el trabajo en la modalidad de presencial
                    será cambiado a teletrabajo de acuerdo a lo estipulado en el
                    artículo 330-G de la Ley Federal del Trabajo y una vez que termine
                    la causa que originó dicho cambio se podrá dar la reversibilidad a
                    la modalidad presencial.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>DÉCIMA
                        SÉPTIMA. </b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">Para
                    los efectos del artículo 501 de la Ley Federal del Trabajo, </font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif"><b>“EL
                        TRABAJADOR”</b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">
                    manifiesta expresamente que, en caso de su fallecimiento, por el
                    motivo que sea, el o los beneficiarios de sus derechos laborales
                    serán los manifestados en el </font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif"><b>Anexo
                        2</b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">
                    de este contrato.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>DÉCIMA
                        OCTAVA. </b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">Declara
                </font>
            </font>
            <font face="Arial, sans-serif"><b>“EL PATRÓN” </b></font>
            <font face="Arial, sans-serif">que
                la información personal que proporcionó </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif"> fue utilizada
                para celebrar el presente Contrato, así como para generar un
                expediente laboral e ir incorporando a éste, cualquier incidencia,
                modificación o actualización que se presente durante la existencia
                del vínculo laboral. Si bien estos datos pueden ser considerados
                como sensibles según la </font>
            <font color="#000000">
                <font face="Arial, sans-serif">Ley
                    Federal de Protección de Datos Personales en Posesión de
                    Particulares, la empresa se compromete a que los mismos serán
                    tratados bajo las más estrictas medidas de seguridad que garanticen
                    su confidencialidad. </font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif"><b>DÉCIMA NOVENA. “EL PATRÓN”
                </b></font>
            <font face="Arial, sans-serif">podrá dar por rescindido
                el presente contrato sin responsabilidad alguna, cuando el trabajador
                incurra en alguna de las causales establecidas por el artículo 47 y
                185 de la Ley Federal del Trabajo y las que se consideren como falta
                de probidad en razón de la importancia del cumplimiento o realice
                cualquiera de los actos prohibidos por las políticas, el Reglamento
                Interno o los Manuales de la empresa. </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            “<font face="Arial, sans-serif"><b>EL PATRÓN” </b></font>
            <font face="Arial, sans-serif">podrá
                rescindir la relación de trabajo con </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">, sin
                responsabilidad dentro de los primeros treinta días posteriores a su
                contratación, si éste lo engaña con certificados falsos o
                referencias, en los que se atribuya la profesión, capacidad,
                conocimientos, aptitudes o facultades de que carezca.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">En caso de que </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">desee
                rescindir la relación laboral con </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif">, de conformidad
                con lo dispuesto en el artículo 46 de la Ley Federal del Trabajo,
                deberá dar a aviso por escrito a </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> con un mínimo
                de 15 días hábiles de anticipación a la fecha en que desee
                rescindir, con la finalidad de dar por terminada la relación laboral
                y que </font>
            <font face="Arial, sans-serif"><b>“EL TRABAJADOR”</b></font>
            <font face="Arial, sans-serif">
                devuelva los documentos, equipo de cómputo, materiales, uniformes y
                demás recursos que la empresa le haya proporcionado para el
                desempeño de sus funciones dentro de la empresa. </font>
        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>VIGÉSIMA.</b></font>
            </font>
            <font face="Arial, sans-serif"><b>
                    “EL PATRÓN”</b></font>
            <font face="Arial, sans-serif"> contará
                en el centro de trabajo con el número suficiente de asientos o
                sillas con respaldo a disposición de todas las personas trabajadoras
                para el descanso periódico durante la jornada laboral. Es decir que
            </font>
            <font face="Arial, sans-serif"><b>“EL TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">tendrá
                derecho de tomar asiento periódicamente, en la medida de que el
                desempeño de sus funciones se lo permitan, por lo que no permanecerá
                de pie durante la totalidad de la jornada laboral. </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>VIGÉSIMA
                        PRIMERA.</b></font>
            </font>
            <font face="Arial, sans-serif"><b> </b></font>
            <font face="Arial, sans-serif">Las
                modificaciones de cualquier índole relacionadas a los puestos y las
                percepciones salariales que pudieran corresponderle a </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">se
                establecerán por escrito debidamente firmado por las partes. El
                presente contrato constituye el único acuerdo vigente entre las
                partes, en relación con el objeto mismo y deja sin efecto cualquier
                otra negociación, obligación o comunicación entre estas, ya sea
                oral o escrita realizada con anterioridad.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>VIGÉSIMA
                        SEGUNDA. </b></font>
            </font>
            <font color="#000000">
                <font face="Arial, sans-serif">El
                    Trabajador se obliga a prestar sus servicios exclusivamente para el
                    Patrón, </font>
            </font>
            <font face="Arial, sans-serif">quedando</font>
            <font color="#000000">
                <font face="Arial, sans-serif">
                    estrictamente prohibido dedicarse a otras actividades por su propia
                    cuenta o prestar sus servicios para cualquier tercero y se obliga a
                    no competir con el negocio del Patrón y se obliga asimismo a no
                    prestar servicios o facilitar a terceros cualquier servicio o
                    información que provea una competencia desleal para el Patrón.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">El Trabajador no
                    podrá revelar, publicar, divulgar, apoderarse o usar directa o
                    indirectamente, los secretos industriales y comerciales propiedad del
                    Patrón, ni de cualquiera de sus filiales y/o subsidiarias, ni
                    cualquier conocimiento o información sobre la naturaleza,
                    características o finalidades de los productos, procedimientos
                    industriales, métodos o procesos de producción o medio o formas de
                    distribución o comercialización de productos de servicios, que el
                    Patrón utilice, así como planes de expansión o fabricación de
                    nuevos productos que conozca, con el propósito de obtener un
                    beneficio económico para sí, para un tercero o con el fin de
                    causarle un perjuicio al Patrón, a sus filiales y/o subsidiarias o a
                    su usuario autorizado, durante el tiempo en que preste servicios con
                    el Patrón ni posteriormente.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">Asimismo, el
                    Trabajador tampoco podrá revelar, publicar, divulgar, apoderarse o
                    usar, directa o indirectamente, los secretos industriales y
                    comerciales y en general la información que haya sido confiada por
                    el Patrón con motivo de sus labores, en los términos del párrafo
                    anterior.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">El Trabajador no
                    podrá utilizar ni hacer del conocimiento de terceros, derechos de
                    propiedad Industrial e Intelectual del Patrón, de sus filiales y/o
                    subsidiarias, que desde ahora reconoce como propiedad única y
                    exclusiva del mismo, como son marcas, nombre y avisos comerciales,
                    patentes, certificados de invención modelos de utilidad, diseños
                    industriales, así como derechos de autor, en los términos plazos y
                    condiciones establecidos en la legislación aplicable.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">En el caso de
                    que el Trabajador incumpliere con las obligaciones contenidas en el
                    presente instrumento, el Patrón tendrá en los términos de Ley la
                    facultad de presentar las acciones penales y civiles que se derivarán
                    por su conducta ilícita en base a lo señalado en los Artículos
                    213, 221, 223, 224 y 226 de la Ley de la Propiedad Industrial 213 del
                    Código Penal para el Distrito Federal en materia común y para toda
                    la República en materia Federal y demás disposiciones aplicables,
                    sin perjuicio de solicitar la reparación y el pago de daños y
                    perjuicios sufridos con motivo de la comisión de dichos delitos.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">El Trabajador
                    tiene la obligación de hacer del conocimiento de su nuevo patrón,
                    el presente instrumento con el objeto de que éste conozca las
                    limitaciones en cuanto a su actividad laboral.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">El Trabajador
                    deberá devolver, cualquiera de los medios materiales en donde conste
                    la información, tales como documentos, medios electrónicos,
                    magnéticos, discos ópticos, microfilmes, películas u otros
                    instrumentos similares que le haya confiado el Patrón con motivo de
                    sus labores. Así como también los diarios, memorias, notas,
                    correspondencia, dibujos, planos, especificaciones y otros documentos
                    relacionados directa o indirectamente con la información que haya
                    elaborado, recopilado u obtenido del Patrón, de sus subsidiarias y/o
                    filiales o de cualquier tercero relacionado con éste.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">El Trabajador no
                    podrá utilizar la información confidencial que haya adquirido,
                    obtenido o generado durante su permanencia con el Patrón ya sea que
                    esta información sea propia o que haya sido confiada por terceros,
                    al emplearse por cuenta propia o como funcionario, miembro, empleado,
                    accionista, consultor, prestador de servicios, representante o asesor
                    de otra persona física o moral.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">No podrá, por
                    lo tanto, contribuir con dichos conocimientos e información
                    confidencial en labores de comercialización, desarrollo, producción
                    o investigación, de carácter industrial o comercial, o en ventas
                    relacionadas con cualquier producto, equipo, proceso o materiales que
                    tengan conexión con las labores que haya desempeñado con el Patrón.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif">Ambas partes
                    convienen en que la presente Cláusula estará vigente durante la
                    prestación de servicios del Trabajador al Patrón y se extenderá
                    por un plazo de 2 años contados a partir de que la relación laboral
                    entre las Partes concluya por cualquier causa.</font>
            </font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font color="#000000">
                <font face="Arial, sans-serif"><b>VIGÉSIMA
                        TERCERA. </b></font>
            </font>
            <font face="Arial, sans-serif">El
                Trabajador se obliga a cumplir con las disposiciones legales en
                materia de prevención y combate a la corrupción, así como a evitar
                incurrir en conductas de soborno y corrupción, implementando los
                procedimientos que al efecto sean necesarios para prevenir las
                conductas referidas.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">El Trabajador manifiesta que en el
                desarrollo de su labor, no incurrirá en ninguna de las prácticas
                antes referidas, y se compromete a no realizar ningún pago o
                transferencias de valor, ofertas o promesas ni otorgar ninguna
                ventaja financiera ni de otro tipo, hacer ningún requerimiento,
                acordar o recibir y aceptar ninguna ventaja financiera o de otro
                tipo, ya sea directa o indirectamente, cuando tenga el propósito o
                resultado de, o que significaría la aceptación, ya sea directa o
                indirectamente, de consentir en:</font>
        </p>
        <ol type="a">
            <li>
                <p align="justify" style="border: none; padding: 0in; margin-top: 0.17in; margin-bottom: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Soborno público
                            o comercial;</font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="border: none; padding: 0in; margin-bottom: 0in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">Otros medios
                            ilegales o impropios de obtener o retener negocios o ventajas
                            comerciales; o</font>
                    </font>
                </p>
            </li>
            <li>
                <p align="justify" style="border: none; padding: 0in; margin-bottom: 0.14in">
                    <font color="#000000">
                        <font face="Arial, sans-serif">El desempeño
                            impropio de cualquier función o actividad.</font>
                    </font>
                </p>
            </li>
        </ol>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">Derivado de lo anterior, el Trabajador
                informará al Patrón oportunamente y por escrito cualquier
                incumplimiento de esta Cláusula, así como todos los requerimientos
                o demandas de cualquier ventaja financiera o de cualquier otro tipo
                que indebidamente hayan recibido en conexión con las obligaciones
                contraídas en este Contrato. Por lo cual el Patrón podrá rescindir
                el presente Contrato inmediatamente en caso de que el Trabajador
                incumpla con cualquiera de las obligaciones estipuladas en esta
                cláusula</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <font face="Arial, sans-serif">Leído integralmente el presente
                contrato y entendido de su valor, alcance y fuerza legal, </font>
            <font face="Arial, sans-serif"><b>“EL
                    TRABAJADOR” </b></font>
            <font face="Arial, sans-serif">y el
                representante de </font>
            <font face="Arial, sans-serif"><b>“EL
                    PATRÓN”</b></font>
            <font face="Arial, sans-serif"> lo ratifican y
                firman de conformidad por duplicado, quedando uno en poder de cada
                una de las partes, en Tepeji del río de Ocampo, Estado de Hidalgo a
                ${fecha_ingreso}.</font>
        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <table width="671" cellpadding="7" cellspacing="0">
            <col width="336" />
            <col width="307" />
            <tr valign="top">
                <td width="336" height="43" style="border: none; padding: 0in">
                    <p align="center" style="margin-bottom: 0.14in; margin-left: -0.2in"><a name="_8jxapn7mftel"></a>
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>EL
                                    PATRÓN</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in"><br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in"><br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>____________________________</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-right: 0.15in; margin-bottom: 0in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>C.
                                    CARLOS EDUARDO LUNA MORA</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-right: 0.15in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>REPRESENTANTE
                                    LEGAL DE “CONSTRUCTORA DAZNA”<br />
                                    S.A. DE C.V.</b></font>
                        </font>
                    </p>
                </td>
                <td width="307" style="border: none; padding: 0in">
                    <p align="center" style="margin-bottom: 0.14in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>EL
                                    TRABAJADOR</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in"><br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in"><br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>__________________________</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>C.
                                    ${nombre}</b></font>
                        </font>
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="336" style="border: none; padding: 0in">
                    <p align="center" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>TESTIGO
                                    1</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
                        <br />
                        <br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>____________________________</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>NOMBRE
                                    Y FIRMA</b></font>
                        </font>
                    </p>
                </td>
                <td width="307" style="border: none; padding: 0in">
                    <p align="center" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>TESTIGO
                                    2</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in">
                        <br />
                        <br />

                    </p>
                    <p align="center" style="margin-bottom: 0in; margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>__________________________</b></font>
                        </font>
                    </p>
                    <p align="center" style="margin-left: -0.2in">
                        <font face="Arial, sans-serif">
                            <font size="2" style="font-size: 10pt"><b>NOMBRE
                                    Y FIRMA</b></font>
                        </font>
                    </p>
                </td>
            </tr>
        </table>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0.14in; margin-left: -0.2in">
            <br />
            <br />

        </p>
        <p align="right" style="margin-top: 0.17in; margin-bottom: 0.14in; margin-left: -0.2in; page-break-before: always">
            <font face="Arial, sans-serif">${fecha_ingreso}</font>
        </p>
        <center>
            <table width="698" cellpadding="7" cellspacing="0">
                <col width="144" />
                <col width="112" />
                <col width="83" />
                <col width="87" />
                <col width="4362" />
                <col width="71" />
                <col width="4367" />
                <col width="96" />
                <tr>
                    <td colspan="8" width="682" valign="top" bgcolor="#000000" style="background: #000000; border-top: 1px dashed #a6a6a6; border-bottom: 1px solid #000000; border-left: 1px dashed #a6a6a6; border-right: 1px dashed #a6a6a6; padding: 0in 0.08in">
                        <p align="center" style="text-indent: -0.25in; margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Nombre
                                        del Trabajador</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${nombre}</p>
                    </td>
                </tr>
                <tr>
                    <td width="144" height="18" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Fecha
                                        de Nacimiento:</span></font>
                            </font>
                        </p>
                    </td>
                    <td width="112" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${fecha_nacimiento}</p>
                    </td>
                    <td width="83" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Estado
                                        Civil</b></font>
                            </font>
                        </p>
                    </td>
                    <td width="87" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p>
                            ${estado_civil}</p>
                    </td>
                    <td colspan="3" width="90" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff"><b>Nacionalidad</b></font>
                        </p>
                    </td>
                    <td width="96" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p>
                            Mexicano</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Domicilio
                                    </span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">C
                                    ${calle}</font>
                            </font>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Colonia</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">${colonia}</font>
                            </font>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Municipio
                                        / Alcaldía</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">${municipio}</font>
                            </font>
                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>C.P.:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${cp}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Estado</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${estado}</p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Contacto
                                        de Emergencia 1</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${telefono}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Contacto
                                        de Emergencia 2</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Puesto</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${puesto}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in; margin-left: 0.25in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Área</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            OBRA TEPEJI DEL RIO</p>
                    </td>
                </tr>
            </table>
        </center>
        <p align="justify" style="line-height: 100%; margin-top: 0.08in; margin-bottom: 0in">
            Con fundamento en el artículo 101 de la Ley Federal de Trabajo, SÍ
            autorizo mediante este documento que el pago de mis salarios y
            prestaciones devengadas me sea depositado vía transferencia
            electrónica a la cuenta bancaria:</p>
        <p align="justify" style="line-height: 100%; margin-top: 0.08in; margin-bottom: 0in">
            <br />

        </p>
        <p align="justify" style="line-height: 100%; margin-top: 0.08in; margin-bottom: 0in">
            <br />

        </p>
        <center>
            <table width="349" cellpadding="7" cellspacing="0">
                <col width="135" />
                <col width="185" />
                <tr valign="top">
                    <td width="135" height="15" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-right: 0.01in; margin-bottom: 0.14in">
                            <font color="#000000">
                                <font size="3" style="font-size: 12pt"><span style="font-weight: normal">BANCO:</span></font>
                            </font>
                        </p>
                        <p align="center" style="margin-bottom: 0.14in; margin-right: 0.01in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="margin-right: 0.01in; margin-left: 0.02in">
                            <font color="#000000">
                                <font size="3" style="font-size: 12pt">${banco}</font>
                            </font>
                        </p>
                    </td>
                    <td width="185" style="background: transparent; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="text-indent: 0.03in; margin-right: -0.16in; margin-bottom: 0.14in">
                            <font color="#000000">
                                <font size="3" style="font-size: 12pt"><span style="font-weight: normal">NÚMERO
                                        DE CUENTA:</span></font>
                            </font>
                        </p>
                        <p align="center" style="margin-bottom: 0.14in; margin-right: -0.16in; text-indent: 0.03in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="text-indent: 0.03in; margin-right: 0.02in">
                            <font color="#000000">
                                <font size="3" style="font-size: 12pt">${cuenta_clabe}</font>
                            </font>
                        </p>
                    </td>
                </tr>
            </table>
        </center>
        <p align="justify" style="margin-bottom: 0in; line-height: 100%; background: #ffffff">
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0in; line-height: 100%; background: #ffffff">
            <br />

        </p>
        <p align="justify" style="margin-bottom: 0in; line-height: 100%; background: #ffffff">
            <br />

        </p>
        <center>
            <table width="293" cellpadding="7" cellspacing="0">
                <col width="4" />
                <col width="241" />
                <col width="4" />
                <tr valign="top">
                    <td width="4" height="129" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="241" style="background: transparent; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <br />
                            <br />

                        </p>
                        <p style="margin-top: 0.08in; margin-bottom: 0.14in"><br />
                            <br />

                        </p>
                        <p style="margin-top: 0.08in; margin-bottom: 0.14in"><br />
                            <br />

                        </p>
                        <p style="margin-top: 0.08in; margin-bottom: 0.14in"><br />
                            <br />

                        </p>
                        <p style="margin-top: 0.08in"><br />

                        </p>
                    </td>
                    <td width="4" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="4" height="26" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="241" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <font color="#ffffff">
                                <font face="Calibri, sans-serif">
                                    <font size="3" style="font-size: 12pt">Nombre
                                        y firma del Titular</font>
                                </font>
                            </font>
                        </p>
                    </td>
                    <td width="4" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <font color="#ffffff">
                                <font size="1" style="font-size: 7pt">}</font>
                            </font>
                        </p>
                        <p style="margin-top: 0.08in; margin-bottom: 0.14in"><br />
                            <br />

                        </p>
                        <p style="margin-top: 0.08in"><br />

                        </p>
                    </td>
                </tr>
            </table>
        </center>
        <p align="right" style="line-height: 100%; margin-bottom: 0in; margin-left: -0.2in; page-break-before: always">
            <font face="Arial, sans-serif">${fecha_ingreso}</font>
        </p>
        <p align="right" style="margin-bottom: 0in; margin-left: -0.2in; line-height: 100%">
            <br />

        </p>
        <center>
            <table width="698" cellpadding="7" cellspacing="0">
                <col width="144" />
                <col width="112" />
                <col width="83" />
                <col width="87" />
                <col width="4362" />
                <col width="71" />
                <col width="4367" />
                <col width="96" />
                <tr>
                    <td colspan="8" width="682" valign="top" bgcolor="#000000" style="background: #000000; border-top: 1px dashed #a6a6a6; border-bottom: 1px solid #000000; border-left: 1px dashed #a6a6a6; border-right: 1px dashed #a6a6a6; padding: 0in 0.08in">
                        <p align="center" style="text-indent: -0.25in; margin-right: -0.16in"><a name="_pito82dglccv"></a>
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Nombre
                                        del Trabajador</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${nombre}</p>
                    </td>
                </tr>
                <tr>
                    <td width="144" height="8" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Fecha
                                        de Nacimiento:</span></font>
                            </font>
                        </p>
                    </td>
                    <td width="112" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${fecha_nacimiento}</p>
                    </td>
                    <td width="83" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Estado
                                        Civil</b></font>
                            </font>
                        </p>
                    </td>
                    <td width="87" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p>
                            ${estado_civil}</p>
                    </td>
                    <td colspan="3" width="90" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff"><b>Nacionalidad</b></font>
                        </p>
                    </td>
                    <td width="96" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p>
                            Mexicano</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Domicilio
                                    </span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">C
                                    ${calle}</font>
                            </font>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Colonia</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">${colonia}</font>
                            </font>
                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" height="5" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Municipio
                                        / Alcaldía</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font face="Arial, sans-serif">
                                <font size="2" style="font-size: 9pt">${municipio}</font>
                            </font>
                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>C.P.:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${cp}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" height="5" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="text-indent: 0.03in; margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Estado</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${estado}</p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Contacto
                                        de Emergencia 1</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${telefono}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Contacto
                                        de Emergencia 2</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="4" width="317" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                    <td width="71" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="justify" style="text-indent: -0in; margin-left: 0.03in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><b>Teléfono:</b></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="2" width="108" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Puesto</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            ${puesto}</p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="144" height="2" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in; margin-left: 0.25in">
                            <font color="#ffffff">
                                <font size="2" style="font-size: 10pt"><span style="font-weight: normal">Área</span></font>
                            </font>
                        </p>
                    </td>
                    <td colspan="7" width="524" style="border: 1px solid #000000; padding: 0in 0.08in">
                        <p style="margin-right: -0.16in">
                            OBRA TEPEJI DEL RIO</p>
                    </td>
                </tr>
            </table>
        </center>
        <p align="justify" style="line-height: 100%; margin-bottom: 0in">Con
            fundamento en el artículo 25 fracción X de la Ley Federal del
            Trabajo, designo mediante este documento, para el pago de mis
            salarios y prestaciones devengadas y no cobradas al día de mi
            muerte, o las que se generen por mi fallecimiento o desaparición,
            derivada de un acto delincuencial a las siguientes personas:</p>
        <p align="justify" style="line-height: 100%; margin-bottom: 0in"><br />

        </p>
        <table width="627" cellpadding="7" cellspacing="0">
            <colgroup>
                <col width="284" />
                <col width="106" />
            </colgroup>
            <colgroup>
                <col width="121" />
            </colgroup>
            <colgroup>
                <col width="60" />
            </colgroup>
            <tr>
                <td colspan="4" width="613" height="5" valign="top" bgcolor="#000000" style="background: #000000; border-top: 1px dashed #000000; border-bottom: 1px solid #000000; border-left: 1px dashed #000000; border-right: none; padding-top: 0in; padding-bottom: 0in; padding-left: 0.07in; padding-right: 0in">
                    <p align="center" style="margin-right: -0.17in">
                        <font size="2" style="font-size: 10pt"><b> </b></font>
                        <font color="#ffffff">
                            <font size="3" style="font-size: 12pt"><b>DESIGNACIÓN
                                    DE BENEFICIARIOS</b></font>
                        </font>
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="284" height="4" bgcolor="#bfbfbf" style="background: #bfbfbf; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.07in">
                    <p align="center" style="margin-right: -0.17in">
                        <font color="#ffffff">
                            <font size="2" style="font-size: 10pt"><b>Nombre
                                    del Beneficiario</b></font>
                        </font>
                    </p>
                </td>
                <td width="106" bgcolor="#bfbfbf" style="background: #bfbfbf; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p style="margin-right: -0.17in">
                        <font color="#ffffff">
                            <font size="2" style="font-size: 10pt">Parentesco</font>
                        </font>
                    </p>
                </td>
                <td width="121" bgcolor="#bfbfbf" style="background: #bfbfbf; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p style="margin-right: -0.17in">
                        <font color="#ffffff">
                            <font size="2" style="font-size: 10pt">Fecha
                                de Nacimiento</font>
                        </font>
                    </p>
                </td>
                <td width="60" bgcolor="#bfbfbf" style="background: #bfbfbf; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p style="margin-right: -0.17in">
                        <font color="#ffffff">
                            <font size="2" style="font-size: 10pt">Porcentaje</font>
                        </font>
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="284" height="6" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="106" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="121" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="60" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="284" height="6" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="106" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="121" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="60" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="284" height="6" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.07in">
                    <p align="justify" style="margin-right: -0.17in; margin-left: 0.25in">

                    </p>
                </td>
                <td width="106" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="121" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
                <td width="60" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="text-indent: 0.03in; margin-right: -0.17in">

                    </p>
                </td>
            </tr>
            <tr valign="top">
                <td width="284" height="6" bgcolor="#ffffff" style="background: #ffffff; border: none; padding: 0in">
                    <p align="justify" style="margin-left: 0.03in">

                    </p>
                </td>
                <td width="106" style="background: transparent; border-top: none; border-bottom: none; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="margin-left: 0.03in">

                    </p>
                </td>
                <td width="121" bgcolor="#000000" style="background: #000000; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="center" style="margin-left: 0.03in">
                        <font color="#ffffff">
                            <font size="2" style="font-size: 10pt">Total</font>
                        </font>
                    </p>
                </td>
                <td width="60" style="background: transparent; border-top: none; border-bottom: 1px solid #000000; border-left: none; border-right: 1px solid #000000; padding-top: 0in; padding-bottom: 0in; padding-left: 0in; padding-right: 0.07in">
                    <p align="justify" style="margin-left: 0.03in">

                    </p>
                </td>
            </tr>
        </table>
        <p align="justify" style="line-height: 100%; margin-bottom: 0in; background: #ffffff">
            <b>En el entendido de que los beneficiarios deberán tramitar un
                juicio de Designación de Beneficiarios ante el Tribunal Laboral,
                para poder realizar el cobro de dichas prestaciones, como lo
                establece el artículo 501 de la Ley Federal de Trabajo.</b>
        </p>
        <p align="justify" style="margin-bottom: 0in; background: #ffffff">
        </p>
        <p align="justify" style="line-height: 100%; margin-bottom: 0in; background: #ffffff">
            <font size="2" style="font-size: 10pt"><b>Nota importante:</b></font>
            <font size="2" style="font-size: 10pt">
                En todas las designaciones, en el caso de que se desee nombrar
                beneficiarios a menores de edad, se estará a lo dispuesto en la
                Legislación Civil Vigente.</font>
        </p>
        <p align="justify" style="margin-bottom: 0in; line-height: 100%; background: #ffffff">
            <br />

        </p>
        <center>
            <table width="661" cellpadding="7" cellspacing="0">
                <col width="181" />
                <col width="9" />
                <col width="195" />
                <col width="11" />
                <col width="193" />
                <tr valign="top">
                    <td width="181" style="background: transparent; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="9" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="195" style="background: transparent; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="margin-top: 0.08in; margin-bottom: 0.14in">
                            <br />
                            <br />

                        </p>
                        <p align="center" style="margin-top: 0.08in"><br />

                        </p>
                    </td>
                    <td width="11" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="193" style="background: transparent; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td width="181" height="24" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <font color="#ffffff">
                                <font size="1" style="font-size: 8pt">Nombre
                                    y Firma del Responsable de Recursos Humanos</font>
                            </font>
                        </p>
                    </td>
                    <td width="9" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="195" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <font color="#ffffff">
                                <font size="1" style="font-size: 8pt">Nombre
                                    y firma del Titular</font>
                            </font>
                        </p>
                    </td>
                    <td width="11" bgcolor="#ffffff" style="background: #ffffff; border-top: none; border-bottom: none; border-left: 1px solid #000000; border-right: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <br />

                        </p>
                    </td>
                    <td width="193" bgcolor="#a6a6a6" style="background: #a6a6a6; border: 1px solid #000000; padding: 0in 0.08in">
                        <p align="center" style="margin-top: 0.08in">
                            <font color="#ffffff">
                                <font size="1" style="font-size: 8pt">Nombre
                                    y firma del testigo</font>
                            </font>
                        </p>
                    </td>
                </tr>
            </table>
        </center>
        <p align="justify" style="margin-bottom: 0in; line-height: 100%; background: #ffffff">
            <br />

        </p>
        <div title="footer">
            <p align="right" style="border: none; padding: 0in; margin-top: 0.45in; margin-bottom: 0.14in">
                <font color="#000000"><span style="background: #c0c0c0">
                        <sdfield type=PAGE subtype=RANDOM format=PAGE>0</sdfield>
                    </span></font>
            </p>
        </div>
    </body>

    </html>
<?php

    $html = ob_get_clean();

    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter');

    $dompdf->render();


    $ruta = __DIR__ . '/../uploads/contratos/' . $nombreLimpio . '.pdf';

    file_put_contents($ruta, $dompdf->output());

    return $ruta;
}
