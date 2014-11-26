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
        <li class="active"><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Secci&oacute;n 4</a></li>
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

<form name="formulario" action="../control/form4_save" method="POST">
  <input type="hidden" name="id_empresa" value="<?php echo $id; ?>">


<!--============================================================================-->
<!--============================================================================-->
<!--============================ SECCIÓN 4 =====================================-->
<!--============================================================================-->
<!--============================================================================-->
<!--============================================================================-->

<center><br><h3>Secci&oacute;n 4: Desempe&ntilde;o de la Empresa</h3><br></center>

<fieldset>
  <legend> </legend>
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="400">Pregunta</th>
        <th width="60"><center>0-15%</center></th>
        <th width="60"><center>16-30%</center></th>
        <th width="60"><center>31-45%</center></th>
        <th width="60"><center>46-60%</center></th>
        <th width="60"><center>61-75%</center></th>
        <th width="60"><center>76-90%</center></th>
        <th width="60"><center>91-100%</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 1. Margen sobre ventas (se calcula dividiendo utilidad neta entre  ventas totales)</td>
        <td><center><input type="radio" name="DP1" value="1" ></center></td>
        <td><center><input type="radio" name="DP1" value="2" ></center></td>
        <td><center><input type="radio" name="DP1" value="3" ></center></td>
        <td><center><input type="radio" name="DP1" value="4" ></center></td>
        <td><center><input type="radio" name="DP1" value="5" ></center></td>
        <td><center><input type="radio" name="DP1" value="6" ></center></td>
        <td><center><input type="radio" name="DP1" value="7" ></center></td>
      </tr>
      <tr>
        <td>2. Porcentaje de crecimiento de las ventas del &uacute;ltimo a&ntilde;o.</td>
        <td><center><input type="radio" name="DP2" value="1" ></center></td>
        <td><center><input type="radio" name="DP2" value="2" ></center></td>
        <td><center><input type="radio" name="DP2" value="3" ></center></td>
        <td><center><input type="radio" name="DP2" value="4" ></center></td>
        <td><center><input type="radio" name="DP2" value="5" ></center></td>
        <td><center><input type="radio" name="DP2" value="6" ></center></td>
        <td><center><input type="radio" name="DP2" value="7" ></center></td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped">
    <thead>
      <tr>
        <th width="400">Pregunta</th>
        <th width="60"><center>1-10%</center></th>
        <th width="60"><center>11-20%</center></th>
        <th width="60"><center>21-30%</center></th>
        <th width="60"><center>31-40%</center></th>
        <th width="60"><center>41-50%</center></th>
        <th width="60"><center>51-60%</center></th>
        <th width="60"><center>60% o m&aacute;s</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> 3. ROE (Retuns on equity o rentabilidad financiera se calcula como el Beneficio  neto despu&eacute;s de Impuestos/Fondos propios).</td>
        <td><center><input type="radio" name="DP3" value="1" ></center></td>
        <td><center><input type="radio" name="DP3" value="2" ></center></td>
        <td><center><input type="radio" name="DP3" value="3" ></center></td>
        <td><center><input type="radio" name="DP3" value="4" ></center></td>
        <td><center><input type="radio" name="DP3" value="5" ></center></td>
        <td><center><input type="radio" name="DP3" value="6" ></center></td>
        <td><center><input type="radio" name="DP3" value="7" ></center></td>
      </tr>
      <tr>
        <td> 4. ROI (Return on Investment o Retorno sobre la inversi&oacute;n se calcula dividiendo el Beneficio neto despu&eacute;s de Impuestos/Activo Total).</td>
        <td><center><input type="radio" name="DP4" value="1" ></center></td>
        <td><center><input type="radio" name="DP4" value="2" ></center></td>
        <td><center><input type="radio" name="DP4" value="3" ></center></td>
        <td><center><input type="radio" name="DP4" value="4" ></center></td>
        <td><center><input type="radio" name="DP4" value="5" ></center></td>
        <td><center><input type="radio" name="DP4" value="6" ></center></td>
        <td><center><input type="radio" name="DP4" value="7" ></center></td>
      </tr>
    </tbody>
  </table>


  <table class="table table-striped">
    <thead>
      <tr>
        <th width="600"></th>
        <th width="200"></th>
      </tr>
    </thead>
      <tbody>
        <tr>
        <td> 5. Beneficio neto (se obtiene al restar del ingreso total por ventas los costos, los gasto, intereses e impuestos).</td>
        <td><input type="text" name="DP5" size="40"></td>
      </tr>
      </tbody>
  </table>
</fieldset>

<br><br>

<fieldset>
  <legend>Satisfacci&oacute;n con el desempe&ntilde;o de mi empresa </legend>
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
        <td> 6. Considero que en mi empresa se han logrado los objetivos previamente fijados.</td>
        <td><center><input type="radio" name="DP6" value="1" ></center></td>
        <td><center><input type="radio" name="DP6" value="2" ></center></td>
        <td><center><input type="radio" name="DP6" value="3" ></center></td>
        <td><center><input type="radio" name="DP6" value="4" ></center></td>
        <td><center><input type="radio" name="DP6" value="5" ></center></td>
      </tr>
      <tr>
        <td> 7. Considero que mi empresa ha tenido &eacute;xito de los nuevos productos lanzados al exterior.</td>
        <td><center><input type="radio" name="DP7" value="1" ></center></td>
        <td><center><input type="radio" name="DP7" value="2" ></center></td>
        <td><center><input type="radio" name="DP7" value="3" ></center></td>
        <td><center><input type="radio" name="DP7" value="4" ></center></td>
        <td><center><input type="radio" name="DP7" value="5" ></center></td>
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
