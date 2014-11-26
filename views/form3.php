<?php
  session_start();
  $id = $_SESSION['user_id'];
?>
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
        <li><a><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Registro</a></li>
        <li class="active"><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Secci&oacute;n 3</a></li>
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
    <center><h3>Instrucciones:</h3></center>
    <p>Eval&uacute;e la importancia de los siguientes factores. Se&ntilde;ale la valoraci&oacute;n que considere oportuna. Si se considera que no est&aacute; en absoluto de acuerdo se&ntilde;ale  1 y cuando est&eacute; totalmente de acuerdo se&ntilde;ale 5.</p>
  </div>
</div>

<div class="col-md-10-offset-3 container" style="position: middle;">

<form name="formulario" action="../control/form3_save" method="POST">
  <input type="hidden" name="id_empresa" value="<?php echo $id; ?>">



<!--============================================================================-->
<!--============================================================================-->
<!--===========================| SECCIÓN 3 |====================================-->
<!--============================================================================-->
<!--============================================================================-->
<!--============================================================================-->


<center><br><h3> Secci&oacute;n 3: Desempe&ntilde;o Innovador</h3><br></center>

<fieldset>
  <legend>Eficacia de la innovaci&oacute;n de los productos:</legend>
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="900">Pregunta</th>
        <th width="40"><center>1</center></th>
        <th width="40"><center>2</center></th>
        <th width="40"><center>3</center></th>
        <th width="40"><center>4</center></th>
        <th width="40"><center>5</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 1. Reemplazo de los productos desfasados.</td>
        <td><center><input type="radio" name="CP1" value="1" ></center></td>
        <td><center><input type="radio" name="CP1" value="2" ></center></td>
        <td><center><input type="radio" name="CP1" value="3" ></center></td>
        <td><center><input type="radio" name="CP1" value="4" ></center></td>
        <td><center><input type="radio" name="CP1" value="5" ></center></td>
      </tr>
      <tr>
        <td> 2. Ampliaci&oacute;n de la gama de productos.</td>
        <td><center><input type="radio" name="CP2" value="1" ></center></td>
        <td><center><input type="radio" name="CP2" value="2" ></center></td>
        <td><center><input type="radio" name="CP2" value="3" ></center></td>
        <td><center><input type="radio" name="CP2" value="4" ></center></td>
        <td><center><input type="radio" name="CP2" value="5" ></center></td>
      </tr>
      <tr>
        <td> 3. Desarrollo de nuevas gamas de productos.</td>
        <td><center><input type="radio" name="CP3" value="1" ></center></td>
        <td><center><input type="radio" name="CP3" value="2" ></center></td>
        <td><center><input type="radio" name="CP3" value="3" ></center></td>
        <td><center><input type="radio" name="CP3" value="4" ></center></td>
        <td><center><input type="radio" name="CP3" value="5" ></center></td>
      </tr>
      <tr>
        <td> 4. Desarrollo de productos respetuosos con el medio ambiente.</td>
        <td><center><input type="radio" name="CP4" value="1" ></center></td>
        <td><center><input type="radio" name="CP4" value="2" ></center></td>
        <td><center><input type="radio" name="CP4" value="3" ></center></td>
        <td><center><input type="radio" name="CP4" value="4" ></center></td>
        <td><center><input type="radio" name="CP4" value="5" ></center></td>
      </tr>
      <tr>
        <td> 5. Evoluci&oacute;n de la cuota de mercado</td>
        <td><center><input type="radio" name="CP5" value="1" ></center></td>
        <td><center><input type="radio" name="CP5" value="2" ></center></td>
        <td><center><input type="radio" name="CP5" value="3" ></center></td>
        <td><center><input type="radio" name="CP5" value="4" ></center></td>
        <td><center><input type="radio" name="CP5" value="5" ></center></td>
      </tr>
      <tr>
        <td> 6. Apertura de nuevos mercados exteriores</td>
        <td><center><input type="radio" name="CP6" value="1" ></center></td>
        <td><center><input type="radio" name="CP6" value="2" ></center></td>
        <td><center><input type="radio" name="CP6" value="3" ></center></td>
        <td><center><input type="radio" name="CP6" value="4" ></center></td>
        <td><center><input type="radio" name="CP6" value="5" ></center></td>
      </tr>
      <tr>
        <td> 7. Apertura de nuevos mercados nacionales</td>
        <td><center><input type="radio" name="CP7" value="1" ></center></td>
        <td><center><input type="radio" name="CP7" value="2" ></center></td>
        <td><center><input type="radio" name="CP7" value="3" ></center></td>
        <td><center><input type="radio" name="CP7" value="4" ></center></td>
        <td><center><input type="radio" name="CP7" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Eficacia de la innovaci&oacute;n de los procesos:</legend>
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="900">Pregunta</th>
        <th width="40"><center>1</center></th>
        <th width="40"><center>2</center></th>
        <th width="40"><center>3</center></th>
        <th width="40"><center>4</center></th>
        <th width="40"><center>5</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 8. Mejora de la flexibilidad productiva</td>
        <td><center><input type="radio" name="CP8" value="1" ></center></td>
        <td><center><input type="radio" name="CP8" value="2" ></center></td>
        <td><center><input type="radio" name="CP8" value="3" ></center></td>
        <td><center><input type="radio" name="CP8" value="4" ></center></td>
        <td><center><input type="radio" name="CP8" value="5" ></center></td>
      </tr>
      <tr>
        <td> 9. Disminuci&oacute;n de los costos de producci&oacute;n mediante reducci&oacute;n de los costos  labores por unidad.</td>
        <td><center><input type="radio" name="CP9" value="1" ></center></td>
        <td><center><input type="radio" name="CP9" value="2" ></center></td>
        <td><center><input type="radio" name="CP9" value="3" ></center></td>
        <td><center><input type="radio" name="CP9" value="4" ></center></td>
        <td><center><input type="radio" name="CP9" value="5" ></center></td>
      </tr>
      <tr>
        <td> 10. Disminuci&oacute;n de los costos de producci&oacute;n mediante recortes en los consumos de materiales.</td>
        <td><center><input type="radio" name="CP10" value="1" ></center></td>
        <td><center><input type="radio" name="CP10" value="2" ></center></td>
        <td><center><input type="radio" name="CP10" value="3" ></center></td>
        <td><center><input type="radio" name="CP10" value="4" ></center></td>
        <td><center><input type="radio" name="CP10" value="5" ></center></td>
      </tr>
      <tr>
        <td> 11. Disminuci&oacute;n de los costos de producci&oacute;n mediante recortes en el consumo de energ&iacute;a.</td>
        <td><center><input type="radio" name="CP11" value="1" ></center></td>
        <td><center><input type="radio" name="CP11" value="2" ></center></td>
        <td><center><input type="radio" name="CP11" value="3" ></center></td>
        <td><center><input type="radio" name="CP11" value="4" ></center></td>
        <td><center><input type="radio" name="CP11" value="5" ></center></td>
      </tr>
      <tr>
        <td> 12. Disminuci&oacute;n de los costos de producci&oacute;n mediante reducci&oacute;n de la tasa de producci&oacute;n rechazada.</td>
        <td><center><input type="radio" name="CP12" value="1" ></center></td>
        <td><center><input type="radio" name="CP12" value="2" ></center></td>
        <td><center><input type="radio" name="CP12" value="3" ></center></td>
        <td><center><input type="radio" name="CP12" value="4" ></center></td>
        <td><center><input type="radio" name="CP12" value="5" ></center></td>
      </tr>
      <tr>
        <td> 13. Disminuci&oacute;n de los costes de producci&oacute;n mediante reducci&oacute;n de los costos de dise&ntilde;o.</td>
        <td><center><input type="radio" name="CP13" value="1" ></center></td>
        <td><center><input type="radio" name="CP13" value="2" ></center></td>
        <td><center><input type="radio" name="CP13" value="3" ></center></td>
        <td><center><input type="radio" name="CP13" value="4" ></center></td>
        <td><center><input type="radio" name="CP13" value="5" ></center></td>
      </tr>
      <tr>
        <td> 14. Disminuci&oacute;n de los costos de producci&oacute;n mediante reducci&oacute;n del ciclo de fabricaci&oacute;n.</td>
        <td><center><input type="radio" name="CP14" value="1" ></center></td>
        <td><center><input type="radio" name="CP14" value="2" ></center></td>
        <td><center><input type="radio" name="CP14" value="3" ></center></td>
        <td><center><input type="radio" name="CP14" value="4" ></center></td>
        <td><center><input type="radio" name="CP14" value="5" ></center></td>
      </tr>
      <tr>
        <td> 15. Mejora de la calidad del producto.</td>
        <td><center><input type="radio" name="CP15" value="1" ></center></td>
        <td><center><input type="radio" name="CP15" value="2" ></center></td>
        <td><center><input type="radio" name="CP15" value="3" ></center></td>
        <td><center><input type="radio" name="CP15" value="4" ></center></td>
        <td><center><input type="radio" name="CP15" value="5" ></center></td>
      </tr>
      <tr>
        <td> 16. Mejora de las condiciones laborales.</td>
        <td><center><input type="radio" name="CP16" value="1" ></center></td>
        <td><center><input type="radio" name="CP16" value="2" ></center></td>
        <td><center><input type="radio" name="CP16" value="3" ></center></td>
        <td><center><input type="radio" name="CP16" value="4" ></center></td>
        <td><center><input type="radio" name="CP16" value="5" ></center></td>
      </tr>
      <tr>
        <td> 17. Reducci&oacute;n de los da&ntilde;os medio-ambientales. </td>
        <td><center><input type="radio" name="CP17" value="1" ></center></td>
        <td><center><input type="radio" name="CP17" value="2" ></center></td>
        <td><center><input type="radio" name="CP17" value="3" ></center></td>
        <td><center><input type="radio" name="CP17" value="4" ></center></td>
        <td><center><input type="radio" name="CP17" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Eficacia de la innovaci&oacute;n de productos: </legend>
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="900">Pregunta</th>
        <th width="40"><center>1</center></th>
        <th width="40"><center>2</center></th>
        <th width="40"><center>3</center></th>
        <th width="40"><center>4</center></th>
        <th width="40"><center>5</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 18. Duraci&oacute;n media de los proyectos de innovaci&oacute;n (p.e nuevos productos, nuevos componentes).</td>
        <td><center><input type="radio" name="CP18" value="1" ></center></td>
        <td><center><input type="radio" name="CP18" value="2" ></center></td>
        <td><center><input type="radio" name="CP18" value="3" ></center></td>
        <td><center><input type="radio" name="CP18" value="4" ></center></td>
        <td><center><input type="radio" name="CP18" value="5" ></center></td>
      </tr>
      <tr>
        <td> 19. Dedicaci&oacute;n para el desarrollo de proyectos de innovaci&oacute;n (horas de trabajo de todas las personas implicadas).</td>
        <td><center><input type="radio" name="CP19" value="1" ></center></td>
        <td><center><input type="radio" name="CP19" value="2" ></center></td>
        <td><center><input type="radio" name="CP19" value="3" ></center></td>
        <td><center><input type="radio" name="CP19" value="4" ></center></td>
        <td><center><input type="radio" name="CP19" value="5" ></center></td>
      </tr>
      <tr>
        <td> 20. Costos medios por proyecto de innovaci&oacute;n.</td>
        <td><center><input type="radio" name="CP20" value="1" ></center></td>
        <td><center><input type="radio" name="CP20" value="2" ></center></td>
        <td><center><input type="radio" name="CP20" value="3" ></center></td>
        <td><center><input type="radio" name="CP20" value="4" ></center></td>
        <td><center><input type="radio" name="CP20" value="5" ></center></td>
      </tr>
      <tr>
        <td> 21. Grado de satisfacci&oacute;n general con la eficiencia de los proyectos de innovaci&oacute;n.</td>
        <td><center><input type="radio" name="CP21" value="1" ></center></td>
        <td><center><input type="radio" name="CP21" value="2" ></center></td>
        <td><center><input type="radio" name="CP21" value="3" ></center></td>
        <td><center><input type="radio" name="CP21" value="4" ></center></td>
        <td><center><input type="radio" name="CP21" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>


<input type="submit" class="btn btn-default btn-lg" value="Siguiente secci&oacute;n">
</div>


</form>

<!-- Se hacen saltos de línea en caso de que el footer -->
<!-- se coma parte del espacio del contenido. -->
<br><br><br><br><br><br><br>
<!--============================================================================-->
<!--================================= Footer ===================================-->
<!--============================================================================-->
  </div> <!-- div principal -->

<footer>
  <div class="container">
  <p>Facultad de Ciencias Administrativas UABC 2014 <a href="#"> copyright</a></p>
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
