<?php
  include 'BD/conexion.php';

  $id_empresa = $_POST['id_empresa'];
  $DP1=$_POST['DP1'];
  $DP2=$_POST['DP2'];
  $DP3=$_POST['DP3'];
  $DP4=$_POST['DP4'];
  $DP5=$_POST['DP5'];
  $DP6=$_POST['DP6'];
  $DP7=$_POST['DP7'];

  mysql_query('INSERT INTO secciond (id_empresa, DP1, DP2, DP3, DP4, DP5, DP6, DP7)
  VALUES (\''.$id_empresa.'\', \''.$DP1.'\', \''.$DP2.'\', \''.$DP3.'\',
  \''.$DP4.'\', \''.$DP5.'\', \''.$DP6.'\', \''.$DP7.'\')');

  echo "El formulario ya se subio a la base de datos";
  echo "<br>";
  echo "Gracias por contestar la encuesta :)";

  header("location:../views/form_success");
  exit();
?>
