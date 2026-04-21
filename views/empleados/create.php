<?php
require_once '../../models/empleado.php';
//require_once "../../middleware/auth.php";
require_once __DIR__ . '/../../helpers/auth.php';
verificarSesion();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/img/logo.ico">
    <link rel="stylesheet" href="../../public/css/registro.css">
    <title>Crear registro</title>
</head>
<?php include '../layouts/header.php'; ?>
<body>
    
    <div class="main-content">
        <div class="container">
            <h2>REGISTRAR TRABAJADOR</h2>

            <form id="formulario" action="../../controllers/empleadoController.php" method="POST">


                <div class="form-group">
                    <label>Compañia</label>
                    <select name="compania" required>
                        <option value="">Seleccione</option>
                        <option value="ABAD">ABAD</option>
                        <option value="CALIHUA">CALIHUA</option>
                        <option value="GONZALEZ">GONZALEZ</option>
                        <option value="ROMAN">ROMAN</option>
                        <option value="ERNESTO">ERNESTO</option>
                        <option value="PEREZ">PEREZ</option>
                        <option value="GARNICA">GARNICA</option>
                        <option value="CAMARGO">CAMARGO</option>
                        <option value="ROBERTO">ROBERTO</option>
                        <option value="TOPOGRAFIA">TOPOGRAFIA</option>
                        <option value="HILDA-GUSTAVO">HILDA-GUSTAVO</option>
                        <option value="TAYDE">TAYDE</option>
                        <option value="DAZNA SEMANAL">DAZNA SEMANAL</option>
                        <option value="DAZNA QUINCENAL">DAZNA QUINCENAL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nombre Completo</label>
                    <input type="text" name="nombre" required>
                </div>

                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                </div>

                <div class="form-group">
                    <label>Edad</label>
                    <input type="number" name="edad" id="edad" required>
                </div>

                <div class="form-group">
                    <label>Estado de nacimiento</label>
                    <select name="estado_nacimiento" required>
                        <option value="">Seleccione</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacan">Michoacan</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Sexo</label>
                    <select name="sexo">
                        <option value="">Seleccionar</option>
                        <option value="masculino">masculino</option>
                        <option value="femenino">femenino</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>CURP</label>
                    <input type="text" name="curp" required pattern="^[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[A-Z0-9]{2}$">
                </div>

                <div class="form-group">
                    <label>RFC</label>
                    <input type="text" name="rfc" pattern="^[A-ZÑ&]{3,4}[0-9]{6}[A-Z0-9]{3}$" required>
                </div>

                <div class="form-group">
                    <label>NSS</label>
                    <input type="text" name="nss" required pattern="^[0-9]{11}$">
                </div>

                <div class="form-group">
                    <label>Cuenta CLABE</label>
                    <input type="text" name="cuenta_clabe" required pattern="^[0-9]{18}$">
                </div>

                <div class="form-group">
                    <label>Banco</label>
                    <select required name="banco">
                        <option value="">Seleccione</option>
                        <option value="BBVA">BBVA</option>
                        <option value="SANTANDER">SANTANDER</option>
                        <option value="BANORTE">BANORTE</option>
                        <option value="AZTECA">AZTECA</option>
                        <option value="BANAMEX">BANAMEX</option>
                        <option value="HSBC">HSBC</option>
                        <option value="SCOTIABANK">SCOTIABANK</option>
                        <option value="INBURSA">INBURSA</option>
                        <option value="BANCOPPEL">BANCOPPEL</option>
                        <option value="BANREGIO">BANREGIO</option>
                        <option value="BANJERCITO">BANJERCITO</option>
                        <option value="CHEQUE">CHEQUE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Puesto</label>
                    <select required name="puesto">
                        <option value="">Seleccione</option>
                        <option value="ALBAÑIL">ALBAÑIL</option>
                        <option value="AYUDANTE GENERAL">AYUDANTE GENERAL</option>
                        <option value="ALUMINERO">ALUMINERO</option>
                        <option value="ALMACENISTA">ALMACENISTA</option>
                        <option value="AYUDANTE DE ALMACÉN">AYUDANTE DE ALMACÉN</option>
                        <option value="AUXILIAR DE TOPOGRAFIA">AUXILIAR DE TOPOGRAFIA</option>
                        <option value="AUXILIAR DE SEGURIDAD">AUXILIAR DE SEGURIDAD</option>
                        <option value="CARPINTERO">CARPINTERO</option>
                        <option value="CADENERO">CADENERO</option>
                        <option value="CONTROL DE OBRA">CONTROL DE OBRA</option>
                        <option value="COORDINADOR DE SEGURIDAD E HIGIENE">COORDINADOR DE SEGURIDAD E HIGIENE</option>
                        <option value="COORDINADOR DE OBRA">COORDINADOR DE OBRA</option>
                        <option value="ELÉCTRICO">ELÉCTRICO</option>
                        <option value="FIERRERO">FIERRERO</option>
                        <option value="LIMPIEZA">LIMPIEZA</option>
                        <option value="OPERADOR MAQUINARIA">OPERADOR MAQUINARIA</option>
                        <option value="OPERADOR PIPA">OPERADOR PIPA</option>
                        <option value="PLOMERO">PLOMERO</option>
                        <option value="RESIDENTE">RESIDENTE</option>
                        <option value="TABIQUERO">TABIQUERO</option>
                        <option value="TAYDE">TAYDE</option>
                        <option value="TOPOGRAFO">TOPOGRAFO</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tipo de pago</label>
                    <select name="pago" required>
                        <option value="">Seleccione</option>
                        <option value="semanalmente">semanalmente</option>
                        <option value="quincenalmente">quincenalmente</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="tel" name="telefono" pattern="^[0-9]{10}$" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label>Salario</label>
                    <input type="number" name="salario" required>
                </div>

                <div class="form-group">
                    <label>SDI</label>
                    <input type="number" step="0.01" name="sdi" required>
                </div>

                <!--
                <div class="form-group">
                    <label>Salario en letra</label>
                    <input type="text" name="salario_letra" required>
                </div>

-->
                <div class="form-group">
                    <label>Estado civil</label>
                    <select name="estado_civil" required>
                        <option value="">Seleccione</option>
                        <option value="soltero (a)">soltero (a)</option>
                        <option value="casado (a)">casado (a)</option>
                        <option value="divorciado (a)">divorciado (a)</option>
                        <option value="viudo (a)">viudo (a)</option>
                        <option value="concubinato">concubinato</option>
                        <option value="unión libre">unión libre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Calle</label>
                    <input type="text" name="calle" required>
                </div>

                <div class="form-group">
                    <label>No. exterior</label>
                    <input type="text" name="num_exterior" required>
                </div>

                <div class="form-group">
                    <label>Colonia</label>
                    <input type="text" name="colonia" required>
                </div>

                <div class="form-group">
                    <label>Municipio</label>
                    <input type="text" name="municipio" required>
                </div>

                <div class="form-group">
                    <label>Estado de Residencia</label>
                    <select name="estado" required>
                        <option value="">Seleccione</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacan">Michoacan</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" name="cp" pattern="^[0-9]{5}$" required>
                </div>

                <div class="form-group">
                    <label>Nombre de obra</label>
                    <select name="nombre_obra" required>
                        <option value="">Seleccione</option>
                        <option value="INFONAVIT LOS PEÑASCOS, UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C.P. 42855, HIDALGO.">"INFONAVIT LOS PEÑASCOS", UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C.P. 42855, HIDALGO.</option>
                        <option value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954  (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 1; UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954 (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 1; UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
                        <option value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180  (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180 (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
                        <option value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260  (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2 UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260 (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2 UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Fecha de ingreso</label>
                    <input type="date" name="fecha_ingreso" required>
                </div>

                <button type="submit" name="guardar">Guardar</button>
                <button type="reset" onclick="window.location.replace('../empleados/index.php')">Cancelar</button>
            </form>

        </div>
    </div>
    <script src="../../public/js/function.js"></script>
</body>

</html>