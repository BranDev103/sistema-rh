<?php
//require_once '../../models/empleado.php';
require_once __DIR__ . '/../../models/empleado.php';
require_once __DIR__ . '/../../helpers/auth.php';
verificarSesion();

$empleado = Empleado::getById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../../public/img/logo.ico">
  <link rel="stylesheet" href="../../public/css/registro.css">
  <title>Editar registro</title>
</head>

<body>
  <?php include '../layouts/header.php'; ?>
  <div class="main-content">
    <div class="container">
      <h2>EDITAR REGISTRO</h2>
      <form action="../../controllers/empleadoController.php" method="POST">
        <input type="hidden" name="id" value="<?= $empleado['id'] ?>">
        <div class="form-group">
          <label>Compañia</label>
          <select name="compania" required>
            <option value="">Seleccione</option>
            <option value="ABAD" <?php if ($empleado['compania'] == "ABAD") echo "selected"; ?>>ABAD</option>
            <option value="CALIHUA" <?php if ($empleado['compania'] == "CALIHUA") echo "selected"; ?>>CALIHUA</option>
            <option value="GONZALEZ" <?php if ($empleado['compania'] == "GONZALEZ") echo "selected"; ?>>GONZALEZ</option>
            <option value="ROMAN" <?php if ($empleado['compania'] == "ROMAN") echo "selected"; ?>>ROMAN</option>
            <option value="ERNESTO" <?php if ($empleado['compania'] == "ERNESTO") echo "selected"; ?>>ERNESTO</option>
            <option value="PEREZ" <?php if ($empleado['compania'] == "PEREZ") echo "selected"; ?>>PEREZ</option>
            <option value="GARNICA" <?php if ($empleado['compania'] == "GARNICA") echo "selected"; ?>>GARNICA</option>
            <option value="CAMARGO" <?php if ($empleado['compania'] == "CAMARGO") echo "selected"; ?>>CAMARGO</option>
            <option value="ROBERTO" <?php if ($empleado['compania'] == "ROBERTO") echo "selected"; ?>>ROBERTO</option>
            <option value="TOPOGRAFIA" <?php if ($empleado['compania'] == "TOPOGRAFIA") echo "selected"; ?>>TOPOGRAFIA</option>
            <option value="HILDA-GUSTAVO" <?php if ($empleado['compania'] == "HILDA-GUSTAVO") echo "selected"; ?>>HILDA-GUSTAVO</option>
            <option value="TAYDE" <?php if($empleado['compania'] == "TAYDE") echo "selected"; ?>>TAYDE</option>
            <option value="DAZNA SEMANAL" <?php if ($empleado['compania'] == "DAZNA SEMANA") echo "selected"; ?>>DAZNA SEMANAL</option>
            <option value="DAZNA QUINCENAL" <?php if ($empleado['compania'] == "DAZNA QUINCENAL") echo "selected"; ?>>DAZNA QUINCENAL</option>
          </select>
        </div>

        <div class="form-group">
          <label>Nombre Completo</label>
          <input type="text" name="nombre" value="<?= $empleado['nombre']; ?>">
        </div>

        <div class="form-group">
          <label>Fecha de nacimiento</label>
          <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?= $empleado['fecha_nacimiento']; ?>" required>
        </div>

        <div class="form-group">
          <label>Edad</label>
          <input type="number" name="edad" id="edad" value="<?= $empleado['edad']; ?>" readonly>
        </div>

        <div class="form-group">
          <label>Estado de nacimiento</label>
          <select name="estado_nacimiento" required>
            <option value="">Seleccione</option>
            <option value="Aguascalientes" <?php if ($empleado['estado_nacimiento'] == "Aguascalientes") echo "selected"; ?>>Aguascalientes</option>
            <option value="Baja California" <?php if ($empleado['estado_nacimiento'] == "Baja California") echo "selected"; ?>>Baja California</option>
            <option value="Baja California Sur" <?php if ($empleado['estado_nacimiento'] == "Baja California Sur") echo "selected"; ?>>Baja California Sur</option>
            <option value="Campeche" <?php if ($empleado['estado_nacimiento'] == "Campeche") echo "selected"; ?>>Campeche</option>
            <option value="Chiapas" <?php if ($empleado['estado_nacimiento'] == "Chiapas") echo "selected"; ?>>Chiapas</option>
            <option value="Chihuahua" <?php if ($empleado['estado_nacimiento'] == "Chihuahua") echo "selected"; ?>>Chihuahua</option>
            <option value="Ciudad de México" <?php if ($empleado['estado_nacimiento'] == "Ciudad de México") echo "selected"; ?>>Ciudad de México</option>
            <option value="Coahuila" <?php if ($empleado['estado_nacimiento'] == "Coahuila") echo "selected"; ?>>Coahuila de Zaragoza</option>
            <option value="Colima" <?php if ($empleado['estado_nacimiento'] == "Colima") echo "selected"; ?>>Colima</option>
            <option value="Durango" <?php if ($empleado['estado_nacimiento'] == "Durango") echo "selected"; ?>>Durango</option>
            <option value="Estado de México" <?php if ($empleado['estado_nacimiento'] == "Estado de México") echo "selected"; ?>>Estado de México</option>
            <option value="Guanajuato" <?php if ($empleado['estado_nacimiento'] == "Guanajuato") echo "selected"; ?>>Guanajuato</option>
            <option value="Guerrero" <?php if ($empleado['estado_nacimiento'] == "Guerrero") echo "selected"; ?>>Guerrero</option>
            <option value="Hidalgo" <?php if ($empleado['estado_nacimiento'] == "Hidalgo") echo "selected"; ?>>Hidalgo</option>
            <option value="Jalisco" <?php if ($empleado['estado_nacimiento'] == "Jaliso") echo "selected"; ?>>Jalisco</option>
            <option value="Michoacan" <?php if ($empleado['estado_nacimiento'] == "Michoacan") echo "selected"; ?>>Michoacan</option>
            <option value="Morelos" <?php if ($empleado['estado_nacimiento'] == "Morelos") echo "selected"; ?>>Morelos</option>
            <option value="Nayarit" <?php if ($empleado['estado_nacimiento'] == "Nayarit") echo "selected"; ?>>Nayarit</option>
            <option value="Nuevo León" <?php if ($empleado['estado_nacimiento'] == "Nuevo León") echo "selected"; ?>>Nuevo León</option>
            <option value="Oaxaca" <?php if ($empleado['estado_nacimiento'] == "Oaxaca") echo "selected"; ?>>Oaxaca</option>
            <option value="Puebla" <?php if ($empleado['estado_nacimiento'] == "Puebla") echo "selected"; ?>>Puebla</option>
            <option value="Querétaro" <?php if ($empleado['estado_nacimiento'] == "Querétaro") echo "selected"; ?>>Querétaro</option>
            <option value="Quintana Roo" <?php if ($empleado['estado_nacimiento'] == "Quintana Roo") echo "selected"; ?>>Quintana Roo</option>
            <option value="San Luis Potosí" <?php if ($empleado['estado_nacimiento'] == "San Luis Potosí") echo "selected"; ?>>San Luis Potosí</option>
            <option value="Sinaloa" <?php if ($empleado['estado_nacimiento'] == "Sinaloa") echo "selected"; ?>>Sinaloa</option>
            <option value="Sonora" <?php if ($empleado['estado_nacimiento'] == "Sonora") echo "selected"; ?>>Sonora</option>
            <option value="Tabasco" <?php if ($empleado['estado_nacimiento'] == "Tabasco") echo "selected"; ?>>Tabasco</option>
            <option value="Tamaulipas" <?php if ($empleado['estado_nacimiento'] == "Tamaulipas") echo "selected"; ?>>Tamaulipas</option>
            <option value="Tlaxcala" <?php if ($empleado['estado_nacimiento'] == "Tlaxcala") echo "selected"; ?>>Tlaxcala</option>
            <option value="Veracruz" <?php if ($empleado['estado_nacimiento'] == "Veracruz") echo "selected"; ?>>Veracruz</option>
            <option value="Yucatán" <?php if ($empleado['estado_nacimiento'] == "Yucatán") echo "selected"; ?>>Yucatán</option>
            <option value="Zacatecas" <?php if ($empleado['estado_nacimiento'] == "Zacatecas") echo "selected"; ?>>Zacatecas</option>
          </select>
        </div>

        <div class="form-group">
          <label>Sexo</label>
          <select name="sexo">
            <option value="">Seleccionar</option>
            <option value="Masculino" <?= $empleado['sexo'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
            <option value="Femenino" <?= $empleado['sexo'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
          </select>

        </div>



        <div class="form-group">
          <label>CURP</label>
          <input type="text" name="curp" value="<?= $empleado['curp']; ?>" pattern="^[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[A-Z0-9]{2}$" required>
        </div>

        <div class="form-group">
          <label>RFC</label>
          <input type="text" name="rfc" value="<?= $empleado['rfc']; ?>" pattern="^[A-ZÑ&]{3,4}[0-9]{6}[A-Z0-9]{3}$" required>
        </div>

        <div class="form-group">
          <label>NSS</label>
          <input type="text" name="nss" value="<?= $empleado['nss']; ?>" pattern="^[0-9]{11}$" required>
        </div>

        <div class="form-group">
          <label>Cuenta CLABE</label>
          <input type="text" name="cuenta_clabe" value="<?= $empleado['cuenta_clabe']; ?>" pattern="^[0-9]{18}$" required>
        </div>

        <div class="form-group">
          <label>Banco</label>
          <select required name="banco">
            <option value="">Seleccione</option>
            <option value="BBVA" <?php if ($empleado['banco'] == "BBVA") echo "selected"; ?>>BBVA</option>
            <option value="SANTANDER" <?php if ($empleado['banco'] == "SANTANDER") echo "selected"; ?>>SANTANDER</option>
            <option value="BANORTE" <?php if ($empleado['banco'] == "BANORTE") echo "selected"; ?>>BANORTE</option>
            <option value="AZTECA" <?php if ($empleado['banco'] == "AZTECA") echo "selected"; ?>>AZTECA</option>
            <option value="BANAMEX" <?php if ($empleado['banco'] == "BANAMEX") echo "selected"; ?>>BANAMEX</option>
            <option value="HSBC" <?php if ($empleado['banco'] == "HSBC") echo "selected"; ?>>HSBC</option>
            <option value="SCOTIABANK" <?php if ($empleado['banco'] == "SCOTIABANK") echo "selected"; ?>>SCOTIABANK</option>
            <option value="INBURSA" <?php if ($empleado['banco'] == "INBURSA") echo "selected"; ?>>INBURSA</option>
            <option value="BANCOPPEL" <?php if ($empleado['banco'] == "BANCOPPEL") echo "selected"; ?>>BANCOPPEL</option>
            <option value="BANREGIO" <?php if ($empleado['banco'] == "BANREGIO") echo "selected"; ?>>BANREGIO</option>
            <option value="BANJERCITO" <?php if ($empleado['banco'] == "BANJERCITO") echo "selected"; ?>>BANJERCITO</option>
            <option value="CHEQUE" <?php if ($empleado['banco'] == "CHEQUE") echo "selected"; ?>>CHEQUE</option>
          </select>
        </div>

        <div class="form-group">
          <label>Puesto</label>
          <select required name="puesto">
            <option value="">Seleccione</option>
            <option value="ALBAÑIL" <?php if ($empleado['puesto'] == "ALBAÑIL") echo "selected"; ?>>ALBAÑIL</option>
            <option value="AYUDANTE GENERAL" <?php if ($empleado['puesto'] == "AYUDANTE GENERAL") echo "selected"; ?>>AYUDANTE GENERAL</option>
            <option value="ALUMINERO" <?php if ($empleado['puesto'] == "ALUMINERO") echo "selected"; ?>>ALUMINERO</option>
            <option value="ALMACENISTA" <?php if ($empleado['puesto'] == "ALMACENISTA") echo "selected"; ?>>ALMACENISTA</option>
            <option value="AYUDANTE DE ALMACÉN" <?php if ($empleado['puesto'] == "AYUDANTE DE ALMACÉN") echo "selected"; ?>>AYUDANTE DE ALMACÉN</option>
            <option value="AUXILIAR DE TOPOGRAFIA" <?php if ($empleado['puesto'] == "AUXILIAR DE TOPOGRAFIA") echo "selected"; ?>>AUXILIAR DE TOPOGRAFIA</option>
            <option value="AUXILIAR DE SEGURIDAD" <?php if ($empleado['puesto'] == "AUXILIAR DE SEGURIDAD") echo "selected"; ?>>AUXILIAR DE SEGURIDAD</option>
            <option value="CARPINTERO" <?php if ($empleado['puesto'] == "CARPINTERO") echo "selected"; ?>>CARPINTERO</option>
            <option value="CADENERO" <?php if ($empleado['puesto'] == "CADENERO") echo "selected"; ?>>CADENERO</option>
            <option value="CONTROL DE OBRA" <?php if ($empleado['puesto'] == "CONTROL DEOBRA") echo "selected"; ?>>CONTROL DE OBRA</option>
            <option value="COORDINADOR DE SEGURIDAD E HIGIENE" <?php if ($empleado['puesto'] == "COORDINADOR DE SEGURIDAD E HIGIENE") echo "selected"; ?>>COORDINADOR DE SEGURIDAD E HIGIENE</option>
            <option value="COORDINADOR DE OBRA" <?php if ($empleado['puesto'] == "COORDINADOR DE OBRA") echo "selected"; ?>>COORDINADOR DE OBRA</option>
            <option value="ELÉCTRICO" <?php if ($empleado['puesto'] == "ELÉCTRICO") echo "selected"; ?>>ELÉCTRICO</option>
            <option value="FIERRERO" <?php if ($empleado['puesto'] == "FIERRERO") echo "selected"; ?>>FIERRERO</option>
            <option value="LIMPIEZA" <?php if ($empleado['puesto'] == "LIMPIEZA") echo "selected"; ?>>LIMPIEZA</option>
            <option value="OPERADOR MAQUINARIA" <?php if ($empleado['puesto'] == "OPERADOR MAQUINARIA") echo "selected"; ?>>OPERADOR MAQUINARIA</option>
            <option value="OPERADOR PIPA" <?php if ($empleado['puesto'] == "OPERADOR PIPA") echo "selected"; ?>>OPERADOR PIPA</option>
            <option value="PLOMERO" <?php if ($empleado['puesto'] == "PLOMERO"); ?>>PLOMERO</option>
            <option value="RESIDENTE" <?php if ($empleado['puesto'] == "RESIDENTE") echo "selected"; ?>>RESIDENTE</option>
            <option value="TABIQUERO" <?php if ($empleado['puesto'] == "TABIQUERO") echo "selected"; ?>>TABIQUERO</option>
            <option value="TAYDE" <?php if ($empleado['puesto'] == "TAYDE") echo "selected"; ?>>TAYDE</option>
            <option value="TOPOGRAFO" <?php if ($empleado['puesto'] == "TOPOGRAFO") echo "selected"; ?>>TOPOGRAFO</option>
          </select>
        </div>

        <div class="form-group">
          <label>Tipo de pago</label>
          <select name="pago" required>
            <option value="">Seleccione</option>
            <option value="semanalmente" <?php if ($empleado['pago'] == "semanalmente") echo "selected"; ?>>semanalmente</option>
            <option value="quincenalmente" <?php if ($empleado['pago'] == "quincenalmente") echo "selected"; ?>>quincenalmente</option>
          </select>
        </div>

        <div class="form-group">
          <label>Teléfono</label>
          <input type="tel" name="telefono" value="<?= $empleado['telefono']; ?>" pattern="^[0-9]{10}$" maxlength="10" required>
        </div>

        <div class="form-group">
          <label>Salario</label>
          <input type="number" name="salario" value="<?= $empleado['salario']; ?>" required>
        </div>

        <div class="form-group">
          <label>SDI</label>
          <input type="number" step="0.01" name="sdi" value="<?= $empleado['sdi']; ?>" required>
        </div>

        <!--
        <div class="form-group">
          <label>Salario en letra</label>
          <input type="text" name="salario_letra" value="<?= $empleado['sdi']; ?>" required>
        </div>
-->

        <div class="form-group">
          <label>Estado civil</label>
          <select name="estado_civil" required>
            <option value="">Seleccione</option>
            <option value="soltero (a)" <?php if ($empleado['estado_civil'] == "soltero (a)") echo "selected"; ?>>soltero (a)</option>
            <option value="casado (a)" <?php if ($empleado['estado_civil'] == "casado (a)") echo "selected"; ?>>casado (a)</option>
            <option value="divorciado (a)" <?php if ($empleado['estado_civil'] == "divorciado (a)") echo "selected"; ?>>divorciado (a)</option>
            <option value="viudo (a)" <?php if ($empleado['estado_civil'] == "viudo (a)") echo "selected"; ?>>viudo (a)</option>
            <option value="concubinato" <?php if ($empleado['estado_civil'] == "concubinato") echo "selected"; ?>>concubinato</option>
            <option value="unión libre" <?php if ($empleado['estado_civil'] == "unión libre") echo "selected"; ?>>unión libre</option>
          </select>
        </div>

        <div class="form-group">
          <label>Calle</label>
          <input type="text" name="calle" value="<?= $empleado['calle']; ?>" required>
        </div>

        <div class="form-group">
          <label>No. exterior</label>
          <input type="text" name="num_exterior" value="<?= $empleado['num_exterior']; ?>" required>
        </div>

        <div class="form-group">
          <label>Colonia</label>
          <input type="text" name="colonia" value="<?= $empleado['colonia']; ?>" required>
        </div>

        <div class="form-group">
          <label>Municipio</label>
          <input type="text" name="municipio" value="<?= $empleado['municipio']; ?>" required>
        </div>

        <div class="form-group">
          <label>Estado</label>
          <select name="estado" required>
            <option value="">Seleccione</option>
            value="Aguascalientes" <?php if ($empleado['estado_nacimiento'] == "Aguascalientes") echo "selected"; ?>>Aguascalientes</option>
            <option value="Baja California" <?php if ($empleado['estado_nacimiento'] == "Baja California") echo "selected"; ?>>Baja California</option>
            <option value="Baja California Sur" <?php if ($empleado['estado_nacimiento'] == "Baja California Sur") echo "selected"; ?>>Baja California Sur</option>
            <option value="Campeche" <?php if ($empleado['estado_nacimiento'] == "Campeche") echo "selected"; ?>>Campeche</option>
            <option value="Chiapas" <?php if ($empleado['estado_nacimiento'] == "Chiapas") echo "selected"; ?>>Chiapas</option>
            <option value="Chihuahua" <?php if ($empleado['estado_nacimiento'] == "Chihuahua") echo "selected"; ?>>Chihuahua</option>
            <option value="Ciudad de México" <?php if ($empleado['estado_nacimiento'] == "Ciudad de México") echo "selected"; ?>>Ciudad de México</option>
            <option value="Coahuila" <?php if ($empleado['estado_nacimiento'] == "Coahuila") echo "selected"; ?>>Coahuila de Zaragoza</option>
            <option value="Colima" <?php if ($empleado['estado_nacimiento'] == "Colima") echo "selected"; ?>>Colima</option>
            <option value="Durango" <?php if ($empleado['estado_nacimiento'] == "Durango") echo "selected"; ?>>Durango</option>
            <option value="Estado de México" <?php if ($empleado['estado_nacimiento'] == "Estado de México") echo "selected"; ?>>Estado de México</option>
            <option value="Guanajuato" <?php if ($empleado['estado_nacimiento'] == "Guanajuato") echo "selected"; ?>>Guanajuato</option>
            <option value="Guerrero" <?php if ($empleado['estado_nacimiento'] == "Guerrero") echo "selected"; ?>>Guerrero</option>
            <option value="Hidalgo" <?php if ($empleado['estado_nacimiento'] == "Hidalgo") echo "selected"; ?>>Hidalgo</option>
            <option value="Jalisco" <?php if ($empleado['estado_nacimiento'] == "Jaliso") echo "selected"; ?>>Jalisco</option>
            <option value="Michoacan" <?php if ($empleado['estado_nacimiento'] == "Michoacan") echo "selected"; ?>>Michoacan</option>
            <option value="Morelos" <?php if ($empleado['estado_nacimiento'] == "Morelos") echo "selected"; ?>>Morelos</option>
            <option value="Nayarit" <?php if ($empleado['estado_nacimiento'] == "Nayarit") echo "selected"; ?>>Nayarit</option>
            <option value="Nuevo León" <?php if ($empleado['estado_nacimiento'] == "Nuevo León") echo "selected"; ?>>Nuevo León</option>
            <option value="Oaxaca" <?php if ($empleado['estado_nacimiento'] == "Oaxaca") echo "selected"; ?>>Oaxaca</option>
            <option value="Puebla" <?php if ($empleado['estado_nacimiento'] == "Puebla") echo "selected"; ?>>Puebla</option>
            <option value="Querétaro" <?php if ($empleado['estado_nacimiento'] == "Querétaro") echo "selected"; ?>>Querétaro</option>
            <option value="Quintana Roo" <?php if ($empleado['estado_nacimiento'] == "Quintana Roo") echo "selected"; ?>>Quintana Roo</option>
            <option value="San Luis Potosí" <?php if ($empleado['estado_nacimiento'] == "San Luis Potosí") echo "selected"; ?>>San Luis Potosí</option>
            <option value="Sinaloa" <?php if ($empleado['estado_nacimiento'] == "Sinaloa") echo "selected"; ?>>Sinaloa</option>
            <option value="Sonora" <?php if ($empleado['estado_nacimiento'] == "Sonora") echo "selected"; ?>>Sonora</option>
            <option value="Tabasco" <?php if ($empleado['estado_nacimiento'] == "Tabasco") echo "selected"; ?>>Tabasco</option>
            <option value="Tamaulipas" <?php if ($empleado['estado_nacimiento'] == "Tamaulipas") echo "selected"; ?>>Tamaulipas</option>
            <option value="Tlaxcala" <?php if ($empleado['estado_nacimiento'] == "Tlaxcala") echo "selected"; ?>>Tlaxcala</option>
            <option value="Veracruz" <?php if ($empleado['estado_nacimiento'] == "Veracruz") echo "selected"; ?>>Veracruz</option>
            <option value="Yucatán" <?php if ($empleado['estado_nacimiento'] == "Yucatán") echo "selected"; ?>>Yucatán</option>
            <option value="Zacatecas" <?php if ($empleado['estado_nacimiento'] == "Zacatecas") echo "selected"; ?>>Zacatecas</option>
          </select>
        </div>

        <div class="form-group">
          <label>Código Postal</label>
          <input type="text" name="cp" value="<?= $empleado['cp']; ?>" pattern="^[0-9]{5}$" required>
        </div>

        <div class="form-group">
          <label>Nombre de obra</label>
          <select name="nombre_obra" required>
            <option value="">Seleccione</option>
            <option <?php if ($empleado['nombre_obra'] == "INFONAVIT LOS PEÑASCOS, UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C.P. 42855, HIDALGO") echo "selected"; ?> value="INFONAVIT LOS PEÑASCOS, UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C.P. 42855, HIDALGO">"INFONAVIT LOS PEÑASCOS", UBICADO EN AV. MELCHOR OCAMPO, TEPEJI DEL RÍO, C.P. 42855, HIDALGO.</option>
            <option <?php if ($empleado['nombre_obra'] == "EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954  (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO"); ?>
              value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954  (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 1; UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 954 (NOVECIENTAS CINCUENTA Y CUATRO) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO 1; UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
            <option <?php if ($empleado['nombre_obra'] == "EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180  (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO") echo "selected"; ?>
              value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180  (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 180 (CIENTO OCHENTA) VIVIENDAS EN EL PROYECTO PRELIMINAR POLÍGONO UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
            <option <?php if ($empleado['nombre_obra'] == "EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260  (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2 UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO") echo "selected"; ?>
              value="EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260  (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2 UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO">EDIFICACIÓN DESTINADO A LA EDIFICACIÓN DE 260 (DOSCIENTAS SESENTA) VIVIENDAS EN EL PROYECTO RESERVA 2 UBICADO EN EL MUNICIPIO DE TEPEJI DEL RÍO DE OCAMPO, EN HIDALGO</option>
          </select>
        </div>

        <div class="form-group">
          <label>Fecha de ingreso</label>
          <input type="date" name="fecha_ingreso" value="<?= $empleado['fecha_ingreso'] ?>" required>
        </div>

        <button type="submit" name="action" value="update">Actualizar</button>
        <button type="reset" onclick="window.location.replace('../empleados/index.php')">Cancelar</button>
      </form>
    </div>
  </div>

  <script src="../../public/js/function.js"></script>
</body>

</html>