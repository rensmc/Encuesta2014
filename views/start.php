<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Encuesta FCA</title>
    <link rel="stylesheet" href="../resources/css/style.css" />
    <link rel="stylesheet" href="../resources/css/style.min.css" />
    <link rel="stylesheet" href="../resources/css/style.css.map" />
    <link rel="stylesheet" href="../resources/css/style-theme.css" />
    <link rel="stylesheet" href="../resources/css/style-theme.min.css" />
    <link rel="stylesheet" href="../resources/css/style-theme.min.map" />
  </head>
  <body>
<!--============================================================================-->
<!--============================ Barra de Navegación ===========================-->
<!--============================================================================-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="http://fca.mxl.uabc.mx/fca">Facultad de Ciencias Administrativas</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Bienvenida</a></li>
        <li class="active"><a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Registro</a></li>
        <li><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Encuesta</a></li>
        <li><a><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Fin</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--============================================================================-->
<!--============================== Head del Sitio ==============================-->
<!--============================================================================-->
<div><!-- div principal -->

  <div class="col-md-10">
    <img alt="" src="../resources/img/uabc.png" style="line-height: 20.799999237060px; float: left; width: 100px; height: 144px;" />
    <h3>Universidad Aut&oacute;noma de Baja California</h3>
    <h4>Coordinaci&oacute;n de Posgrado e Investigaci&oacute;n</h4>
  </div>

<!--============================================================================-->
<!--================================= Contenido ================================-->
<!--============================================================================-->
  <div>

    <div class="col-md-10-offset-3 container" style="position: middle;">
      <h1>Datos de la empresa</h1>
      <p>Para iniciar con la encuesta es necesario identificarse primero, por favor llene el siguiente formulario para continuar. La encuesta consta de 4 secciones las cuales ir&aacute; contestando progresivamente.</p>
    </div>

</div>

<div class="col-md-10-offset-3 container" style="position: middle;">
<form name="formulario" action="../control/start_save" method="POST">
  <input type="hidden" value="<?php echo $_GET[id_usuario]?>"  name="id_empresa" />

<!--============================================================================-->
<!--========================== Form registro empresa ===========================-->
<!--============================================================================-->

    <fieldset>
      <legend>Datos de contacto</legend>
      <label>Nombre de la empresa:</label>
      <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de la Empresa" size="100" style="height:35" required>
      <br>
      <label>Correo Electr&oacute;nico: </label><input type="text" class="form-control" name="mail" placeholder="ejemplo@correo.com" size="100" style="height:35" required>
    </fieldset>

  <fieldset>
    <legend>Datos Generales</legend>
    <table>
      <thead>
        <tr>
          <th width="25%"></th>
          <th width="25%"></th>
          <th width="25%"></th>
          <th width="25%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Actividad principal:</td>
          <td><input type="text" class="form-control" name="actPrincipal" placeholder="Actividad Principal" required></td></td>
          <td> Numero de empleados: </td>
          <td><input type="text" class="form-control" name="numEmpleados" placeholder="N&uacute;mero de empleados" required></td></td>
        </tr>
        <tr>
          <td> Subsector:</td>
          <td>
            <select class="form-control" name="subsector" required>
              <option selected="selected" value="0">-Seleccione el subsector-</option>
              <option value="1">Alimentos, Bebidas y Tabacos</option>
              <option value="2">Textiles, prendas de vestir e industria del cuero</option>
              <option value="3">Industria de la madera y productos de madera</option>
              <option value="4">Papel, productos del papel y editoriales</option>
              <option value="5">Sustancias qu&iacute;micas, derivados del petr&oacute;lero, productos del caucho y pl&aacute;stico</option>
              <option value="6">Productos minerales no met&aacute;licos, exceptuando derivados del petr&oacute;leo y carb&oacute;n</option>
              <option value="7">Industrias Met&aacute;licas b&aacute;sicas</option>
              <option value="8">Productos met&aacute;licos, maquinaria y equipo</option>
              <option value="9">Otras Industrias manufactureras</option>
            </select>
          </td>
          <td> Tama&ntilde;o:</td>
          <td><input type="text" class="form-control" name="tamano" placeholder="Tama&ntilde;o" required></td>
        </tr>
        <tr>
          <td> Nivel de ventas:</td>
          <td><input type="text" class="form-control" name="nvlVentas" placeholder="Nivel de ventas" required></td>
          <td>A&ntilde;o de creaci&oacute;n:</td>
          <td><input type="text" class="form-control" name="fechaCreacion" placeholder="A&ntilde;o de creaci&oacute;n" required></td>
        </tr>
        <tr>
          <td> Raz&oacute;n social:</td>
          <td><input type="text" class="form-control" name="razonSocial" placeholder="Raz&oacute;n social" required></td>
          <td>Puesto de quien responde la encuesta:</td>
          <td><input type="text" class="form-control" name="puestoEncuestado" placeholder="Puesto encuestado" required></td>
        </tr>
        <tr>
          <td> Origen del Capital:</td>
          <td>
            <select name="origenCapital" class="form-control" required>
                  <option value="AF">Afganist&aacute;n</option>
                  <option value="AL">Albania</option>
                  <option value="DE">Alemania</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Ant&aacute;rtida</option>
                  <option value="AG">Antigua y Barbuda</option>
                  <option value="AN">Antillas Holandesas</option>
                  <option value="SA">Arabia Saud&iacute;</option>
                  <option value="DZ">Argelia</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaiy&aacute;n</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrein</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BE">B&eacute;lgica</option>
                  <option value="BZ">Belice</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermudas</option>
                  <option value="BY">Bielorrusia</option>
                  <option value="MM">Birmania</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia y Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brasil</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="BT">But&aacute;n</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Camboya</option>
                  <option value="CM">Camer&uacute;n</option>
                  <option value="CA">Canad&aacute;</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CY">Chipre</option>
                  <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comores</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, Rep&uacute;blica Democr&aacute;tica del</option>
                  <option value="KR">Corea</option>
                  <option value="KP">Corea del Norte</option>
                  <option value="CI">Costa de Marf&iacute;l</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croacia (Hrvatska)</option>
                  <option value="CU">Cuba</option>
                  <option value="DK">Dinamarca</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egipto</option>
                  <option value="SV">El Salvador</option>
                  <option value="AE">Emiratos &Aacute;rabes Unidos</option>
                  <option value="ER">Eritrea</option>
                  <option value="SI">Eslovenia</option>
                  <option value="ES">Espa&ntilde;a</option>
                  <option value="US">Estados Unidos</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Etiop&iacute;a</option>
                  <option value="FJ">Fiji</option>
                  <option value="PH">Filipinas</option>
                  <option value="FI">Finlandia</option>
                  <option value="FR">Francia</option>
                  <option value="GA">Gab&oacute;n</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GD">Granada</option>
                  <option value="GR">Grecia</option>
                  <option value="GL">Groenlandia</option>
                  <option value="GP">Guadalupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GY">Guayana</option>
                  <option value="GF">Guayana Francesa</option>
                  <option value="GN">Guinea</option>
                  <option value="GQ">Guinea Ecuatorial</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="HT">Hait&iacute;</option>
                  <option value="HN">Honduras</option>
                  <option value="HU">Hungr&iacute;a</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IQ">Irak</option>
                  <option value="IR">Ir&aacute;n</option>
                  <option value="IE">Irlanda</option>
                  <option value="BV">Isla Bouvet</option>
                  <option value="CX">Isla de Christmas</option>
                  <option value="IS">Islandia</option>
                  <option value="KY">Islas Caim&aacute;n</option>
                  <option value="CK">Islas Cook</option>
                  <option value="CC">Islas de Cocos o Keeling</option>
                  <option value="FO">Islas Faroe</option>
                  <option value="HM">Islas Heard y McDonald</option>
                  <option value="FK">Islas Malvinas</option>
                  <option value="MP">Islas Marianas del Norte</option>
                  <option value="MH">Islas Marshall</option>
                  <option value="UM">Islas menores de Estados Unidos</option>
                  <option value="PW">Islas Palau</option>
                  <option value="SB">Islas Salom&oacute;n</option>
                  <option value="SJ">Islas Svalbard y Jan Mayen</option>
                  <option value="TK">Islas Tokelau</option>
                  <option value="TC">Islas Turks y Caicos</option>
                  <option value="VI">Islas V&iacute;rgenes (EE.UU.)</option>
                  <option value="VG">Islas V&iacute;rgenes (Reino Unido)</option>
                  <option value="WF">Islas Wallis y Futuna</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italia</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Jap&oacute;n</option>
                  <option value="JO">Jordania</option>
                  <option value="KZ">Kazajist&aacute;n</option>
                  <option value="KE">Kenia</option>
                  <option value="KG">Kirguizist&aacute;n</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="LA">Laos</option>
                  <option value="LS">Lesotho</option>
                  <option value="LV">Letonia</option>
                  <option value="LB">L&iacute;bano</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libia</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lituania</option>
                  <option value="LU">Luxemburgo</option>
                  <option value="MG">Madagascar</option>
                  <option value="MY">Malasia</option>
                  <option value="MW">Malawi</option>
                  <option value="MV">Maldivas</option>
                  <option value="ML">Mal&iacute;</option>
                  <option value="MT">Malta</option>
                  <option value="MA">Marruecos</option>
                  <option value="MQ">Martinica</option>
                  <option value="MU">Mauricio</option>
                  <option value="MR">Mauritania</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX" selected>M&eacute;xico</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldavia</option>
                  <option value="MC">M&oacute;naco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MZ">Mozambique</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">N&iacute;ger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk</option>
                  <option value="NO">Noruega</option>
                  <option value="NC">Nueva Caledonia</option>
                  <option value="NZ">Nueva Zelanda</option>
                  <option value="OM">Om&aacute;n</option>
                  <option value="NL">Pa&iacute;ses Bajos</option>
                  <option value="PA">Panam&aacute;</option>
                  <option value="PG">Pap&uacute;a Nueva Guinea</option>
                  <option value="PK">Paquist&aacute;n</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Per&uacute;</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PF">Polinesia Francesa</option>
                  <option value="PL">Polonia</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="UK">Reino Unido</option>
                  <option value="CF">Rep&uacute;blica Centroafricana</option>
                  <option value="CZ">Rep&uacute;blica Checa</option>
                  <option value="ZA">Rep&uacute;blica de Sud&aacute;frica</option>
                  <option value="DO">Rep&uacute;blica Dominicana</option>
                  <option value="SK">Rep&uacute;blica Eslovaca</option>
                  <option value="RE">Reuni&oacute;n</option>
                  <option value="RW">Ruanda</option>
                  <option value="RO">Rumania</option>
                  <option value="RU">Rusia</option>
                  <option value="EH">Sahara Occidental</option>
                  <option value="KN">Saint Kitts y Nevis</option>
                  <option value="WS">Samoa</option>
                  <option value="AS">Samoa Americana</option>
                  <option value="SM">San Marino</option>
                  <option value="VC">San Vicente y Granadinas</option>
                  <option value="SH">Santa Helena</option>
                  <option value="LC">Santa Luc&iacute;a</option>
                  <option value="ST">Santo Tom&eacute; y Pr&iacute;ncipe</option>
                  <option value="SN">Senegal</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leona</option>
                  <option value="SG">Singapur</option>
                  <option value="SY">Siria</option>
                  <option value="SO">Somalia</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="PM">St. Pierre y Miquelon</option>
                  <option value="SZ">Suazilandia</option>
                  <option value="SD">Sud&aacute;n</option>
                  <option value="SE">Suecia</option>
                  <option value="CH">Suiza</option>
                  <option value="SR">Surinam</option>
                  <option value="TH">Tailandia</option>
                  <option value="TW">Taiw&aacute;n</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TJ">Tayikist&aacute;n</option>
                  <option value="TF">Territorios franceses del Sur</option>
                  <option value="TP">Timor Oriental</option>
                  <option value="TG">Togo</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad y Tobago</option>
                  <option value="TN">T&uacute;nez</option>
                  <option value="TM">Turkmenist&aacute;n</option>
                  <option value="TR">Turqu&iacute;a</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UA">Ucrania</option>
                  <option value="UG">Uganda</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekist&aacute;n</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="YE">Yemen</option>
                  <option value="YU">Yugoslavia</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabue</option>
                </select>
              </td>
              <td> Sexo: </td>
              <td>
                <select name="sexo" class="form-control" required>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                </select>
              </td>
            </tr>
          </tbody>
        </table>
      </fieldset>
      <br><br><br>
      <input type="submit" class="btn btn-default btn-lg" value="Siguiente secci&oacute;n">
    </form>

  </div>

  </div>

  <!-- Se hacen saltos de línea en caso de que el footer -->
  <!-- se coma parte del espacio del contenido. -->
  <br><br><br><br><br><br><br>
<!--============================================================================-->
<!--================================= Footer ===================================-->
<!--============================================================================-->
  </div> <!-- div principal -->

  <footer>
    <div class="container">
    <p>Facultad de Ciencias Administrativas UABC 2014 <a href=""> copyright</a></p>
    </div>
  </footer>

  <script src="../resources/js/style.js"></script>
  <script src="../resources/js/style.min.js"></script>
  <script src="../resources/js/npm.js"></script>
  <script>
    $('.dropdown-toggle').dropdown()
  </script>
  </body>
</html>
