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
        <li class="active"><a><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Secci&oacute;n 1</a></li>
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

<form name="formulario" action="../control/form1_save" method="POST">
  <input type="hidden" name="id_empresa" value="<?php echo $id; ?>">

<!--============================================================================-->
<!--============================================================================-->
<!--============================ SECCIÓN 1 =====================================-->
<!--============================================================================-->
<!--============================================================================-->
<!--============================================================================-->

<fieldset>
  <legend>A. Orientaci&oacute;n Emprendedora:</legend>
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
        <td> 1. Mi empresa pone &eacute;nfasis en la investigaci&oacute;n, desarrollo e innovaci&oacute;n de productos y/o tecnolog&iacute;as.</td>
        <td><center><input type="radio" name="AP1" value="1" ></center></td>
        <td><center><input type="radio" name="AP1" value="2" ></center></td>
        <td><center><input type="radio" name="AP1" value="3" ></center></td>
        <td><center><input type="radio" name="AP1" value="4" ></center></td>
        <td><center><input type="radio" name="AP1" value="5" ></center></td>
      </tr>
      <tr>
        <td> 2. En los &uacute;ltimos cinco a&ntilde;os mi empresa ha entrado en nuevos negocios y/o lanzado nuevos productos.</td>
        <td><center><input type="radio" name="AP2" value="1" ></center></td>
        <td><center><input type="radio" name="AP2" value="2" ></center></td>
        <td><center><input type="radio" name="AP2" value="3" ></center></td>
        <td><center><input type="radio" name="AP2" value="4" ></center></td>
        <td><center><input type="radio" name="AP2" value="5" ></center></td>
      </tr>
      <tr>
        <td> 3. Mi empresa realiza habitualmente cambios significativos en las l&iacute;neas de productos y/o servicios. </td>
        <td><center><input type="radio" name="AP3" value="1" ></center></td>
        <td><center><input type="radio" name="AP3" value="2" ></center></td>
        <td><center><input type="radio" name="AP3" value="3" ></center></td>
        <td><center><input type="radio" name="AP3" value="4" ></center></td>
        <td><center><input type="radio" name="AP3" value="5" ></center></td>
      </tr>
      <tr>
        <td> 4. Mi empresa suele responder a las acciones iniciadas por los competidores y rara vez es ella quien emprende las acciones inicialmente en el sector.</td>
        <td><center><input type="radio" name="AP4" value="1" ></center></td>
        <td><center><input type="radio" name="AP4" value="2" ></center></td>
        <td><center><input type="radio" name="AP4" value="3" ></center></td>
        <td><center><input type="radio" name="AP4" value="4" ></center></td>
        <td><center><input type="radio" name="AP4" value="5" ></center></td>
      </tr>
      <tr>
        <td> 5. Mi empresa suele ser pionera en el desarrollo de nuevos productos, t&eacute;cnicas o tecnolog&iacute;as.</td>
        <td><center><input type="radio" name="AP5" value="1" ></center></td>
        <td><center><input type="radio" name="AP5" value="3" ></center></td>
        <td><center><input type="radio" name="AP5" value="3" ></center></td>
        <td><center><input type="radio" name="AP5" value="4" ></center></td>
        <td><center><input type="radio" name="AP5" value="5" ></center></td>
      </tr>
      <tr>
        <td> 6. Mi empresa suele evitar el enfrentamiento con las empresas del sector, es decir, adopta una postura de &#8220;vive y deja vivir&#8220;.</td>
        <td><center><input type="radio" name="AP6" value="1" ></center></td>
        <td><center><input type="radio" name="AP6" value="2" ></center></td>
        <td><center><input type="radio" name="AP6" value="3" ></center></td>
        <td><center><input type="radio" name="AP6" value="4" ></center></td>
        <td><center><input type="radio" name="AP6" value="5" ></center></td>
      </tr>
      <tr>
        <td> 7. Debido al dinamismo del entorno, mi empresa prefiere realizar inversiones incrementales, empezando por peque&ntilde;as inversiones y aumentando gradualmente el compromiso de recursos.</td>
        <td><center><input type="radio" name="AP7" value="1" ></center></td>
        <td><center><input type="radio" name="AP7" value="2" ></center></td>
        <td><center><input type="radio" name="AP7" value="3" ></center></td>
        <td><center><input type="radio" name="AP7" value="4" ></center></td>
        <td><center><input type="radio" name="AP7" value="5" ></center></td>
      </tr>
      <tr>
        <td> 8. Mi empresa prefiere emprender proyectos de inversi&oacute;n de riesgo alto ya que las expectativas de ingresos son mayores.</td>
        <td><center><input type="radio" name="AP8" value="1" ></center></td>
        <td><center><input type="radio" name="AP8" value="2" ></center></td>
        <td><center><input type="radio" name="AP8" value="3" ></center></td>
        <td><center><input type="radio" name="AP8" value="4" ></center></td>
        <td><center><input type="radio" name="AP8" value="5" ></center></td>
      </tr>
      <tr>
        <td> 9. Cuando mi empresa se enfrenta a una decisi&oacute;n con  cierto grado de incertidumbre, suele adoptar una postura conservadora con el fin de minimizar el riesgo de una decisi&oacute;n equivocada.</td>
        <td><center><input type="radio" name="AP9" value="1" ></center></td>
        <td><center><input type="radio" name="AP9" value="2" ></center></td>
        <td><center><input type="radio" name="AP9" value="3" ></center></td>
        <td><center><input type="radio" name="AP9" value="4" ></center></td>
        <td><center><input type="radio" name="AP9" value="5" ></center></td>
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
