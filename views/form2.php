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
        <li class="active"><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Secci&oacute;n 2</a></li>
        <li><a><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Fin</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--============================================================================-->
<!--============================== Head del Sitio ==============================-->
<!--============================================================================-->
<div><!-- div principal -->

  <div class="col-md-10 ">
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

<form name="formulario" action="../control/form2_save" method="POST">
  <input type="hidden" name="id_empresa" value="<?php echo $id; ?>">

<!--============================================================================-->
<!--============================================================================-->
<!--============================ SECCIÓN 2 =====================================-->
<!--============================================================================-->
<!--============================================================================-->
<!--============================================================================-->


<center><h3>Secci&oacute;n 2: Capacidad de Aprendizaje organizativo</h3></center>
<br><br>

<fieldset>
  <legend>Con respecto a la aportaci&oacute;n de ideas, la experimentaci&oacute;n y la creatividad:</legend>
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
        <td>1. La gente recibe apoyo cuando presenta nuevas ideas.</td>
        <td><center><input type="radio" name="BP1" value="1" ></center></td>
        <td><center><input type="radio" name="BP1" value="2" ></center></td>
        <td><center><input type="radio" name="BP1" value="3" ></center></td>
        <td><center><input type="radio" name="BP1" value="4" ></center></td>
        <td><center><input type="radio" name="BP1" value="5" ></center></td>
      </tr>
      <tr>
        <td>2. La iniciativa recibe a menudo una respuesta favorable, por lo que la gente se siente animada a plantear nuevas ideas.</td>
        <td><center><input type="radio" name="BP2" value="1" ></center></td>
        <td><center><input type="radio" name="BP2" value="2" ></center></td>
        <td><center><input type="radio" name="BP2" value="3" ></center></td>
        <td><center><input type="radio" name="BP2" value="4" ></center></td>
        <td><center><input type="radio" name="BP2" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Con respecto a la aceptaci&oacute;n del riesgo:</legend>
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
        <td>3. Se estimula a los trabajadores para que acepten riesgos.</td>
        <td><center><input type="radio" name="BP3" value="1" ></center></td>
        <td><center><input type="radio" name="BP3" value="2" ></center></td>
        <td><center><input type="radio" name="BP3" value="3" ></center></td>
        <td><center><input type="radio" name="BP3" value="4" ></center></td>
        <td><center><input type="radio" name="BP3" value="5" ></center></td>
      </tr>
      <tr>
        <td>4. La gente a menudo se “lanza” hacia temas que desconoce.</td>
        <td><center><input type="radio" name="BP4" value="1" ></center></td>
        <td><center><input type="radio" name="BP4" value="2" ></center></td>
        <td><center><input type="radio" name="BP4" value="3" ></center></td>
        <td><center><input type="radio" name="BP4" value="4" ></center></td>
        <td><center><input type="radio" name="BP4" value="5" ></center></td>
      </tr>
      <tr>
        <td>5. Se presentan habitualmente ideas que todav&iacute;a no han sido probadas.</td>
        <td><center><input type="radio" name="BP5" value="1" ></center></td>
        <td><center><input type="radio" name="BP5" value="2" ></center></td>
        <td><center><input type="radio" name="BP5" value="3" ></center></td>
        <td><center><input type="radio" name="BP5" value="4" ></center></td>
        <td><center><input type="radio" name="BP5" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Con respecto al entorno:</legend>
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
        <td>6. Es parte del trabajo de todos recoger informaci&oacute;n sobre lo que pasa fuera de la empresa.</td>
        <td><center><input type="radio" name="BP6" value="1" ></center></td>
        <td><center><input type="radio" name="BP6" value="2" ></center></td>
        <td><center><input type="radio" name="BP6" value="3" ></center></td>
        <td><center><input type="radio" name="BP6" value="4" ></center></td>
        <td><center><input type="radio" name="BP6" value="5" ></center></td>
      </tr>
      <tr>
        <td>7. Tenemos sistemas y procedimientos para recibir, cotejar y compartir informaci&oacute;n del exterior de la empresa.</td>
        <td><center><input type="radio" name="BP7" value="1" ></center></td>
        <td><center><input type="radio" name="BP7" value="2" ></center></td>
        <td><center><input type="radio" name="BP7" value="3" ></center></td>
        <td><center><input type="radio" name="BP7" value="4" ></center></td>
        <td><center><input type="radio" name="BP7" value="5" ></center></td>
      </tr>
      <tr>
        <td>8. Se alienta la interacci&oacute;n con el entorno.</td>
        <td><center><input type="radio" name="BP8" value="1" ></center></td>
        <td><center><input type="radio" name="BP8" value="2" ></center></td>
        <td><center><input type="radio" name="BP8" value="3" ></center></td>
        <td><center><input type="radio" name="BP8" value="4" ></center></td>
        <td><center><input type="radio" name="BP8" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Con respecto al di&aacute;logo, la comunicaci&oacute;n y el trabajo en equipo:</legend>
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
        <td> 9. A los empleados se les anima a comunicarse entre s&iacute;.</td>
        <td><center><input type="radio" name="BP9" value="1" ></center></td>
        <td><center><input type="radio" name="BP9" value="2" ></center></td>
        <td><center><input type="radio" name="BP9" value="3" ></center></td>
        <td><center><input type="radio" name="BP9" value="4" ></center></td>
        <td><center><input type="radio" name="BP9" value="5" ></center></td>
      </tr>
      <tr>
        <td> 10. Hay una comunicaci&oacute;n abierta en los grupos de trabajo.</td>
        <td><center><input type="radio" name="BP10" value="1" ></center></td>
        <td><center><input type="radio" name="BP10" value="2" ></center></td>
        <td><center><input type="radio" name="BP10" value="3" ></center></td>
        <td><center><input type="radio" name="BP10" value="4" ></center></td>
        <td><center><input type="radio" name="BP10" value="5" ></center></td>
      </tr>
      <tr>
        <td> 11. Los directivos facilitan la comunicaci&oacute;n.</td>
        <td><center><input type="radio" name="BP11" value="1" ></center></td>
        <td><center><input type="radio" name="BP11" value="2" ></center></td>
        <td><center><input type="radio" name="BP11" value="3" ></center></td>
        <td><center><input type="radio" name="BP11" value="4" ></center></td>
        <td><center><input type="radio" name="BP11" value="5" ></center></td>
      </tr>
      <tr>
        <td> 12. El trabajo en equipo entre personas de distintos departamentos es una pr&aacute;ctica habitual.</td>
        <td><center><input type="radio" name="BP12" value="1" ></center></td>
        <td><center><input type="radio" name="BP12" value="2" ></center></td>
        <td><center><input type="radio" name="BP12" value="3" ></center></td>
        <td><center><input type="radio" name="BP12" value="4" ></center></td>
        <td><center><input type="radio" name="BP12" value="5" ></center></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Con respecto a la participaci&oacute;n</legend>
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
        <td> 13. Los directivos implican frecuentemente a los empleados en decisiones.</td>
        <td><center><input type="radio" name="BP13" value="1" ></center></td>
        <td><center><input type="radio" name="BP13" value="2" ></center></td>
        <td><center><input type="radio" name="BP13" value="3" ></center></td>
        <td><center><input type="radio" name="BP13" value="4" ></center></td>
        <td><center><input type="radio" name="BP13" value="5" ></center></td>
      </tr>
      <tr>
        <td> 14. La política de la empresa est&aacute; significativamente influida por las opiniones de los empleados.</td>
        <td><center><input type="radio" name="BP14" value="1" ></center></td>
        <td><center><input type="radio" name="BP14" value="2" ></center></td>
        <td><center><input type="radio" name="BP14" value="3" ></center></td>
        <td><center><input type="radio" name="BP14" value="4" ></center></td>
        <td><center><input type="radio" name="BP14" value="5" ></center></td>
      </tr>
      <tr>
        <td> 15. Toda la gente participa en la determinaci&oacute;n de la pol&iacute;tica y estrategia de la empresa.</td>
        <td><center><input type="radio" name="BP15" value="1" ></center></td>
        <td><center><input type="radio" name="BP15" value="2" ></center></td>
        <td><center><input type="radio" name="BP15" value="3" ></center></td>
        <td><center><input type="radio" name="BP15" value="4" ></center></td>
        <td><center><input type="radio" name="BP15" value="5" ></center></td>
      </tr>
      <tr>
        <td> 16. La gente se siente involucrada en las principales decisiones de la empresa.</td>
        <td><center><input type="radio" name="BP16" value="1" ></center></td>
        <td><center><input type="radio" name="BP16" value="2" ></center></td>
        <td><center><input type="radio" name="BP16" value="3" ></center></td>
        <td><center><input type="radio" name="BP16" value="4" ></center></td>
        <td><center><input type="radio" name="BP16" value="5" ></center></td>
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
