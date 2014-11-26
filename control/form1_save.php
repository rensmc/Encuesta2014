<?php
  include 'BD/conexion.php';

  $id_empresa = $_POST['id_empresa'];
  $AP1=$_POST['AP1'];
  $AP2=$_POST['AP2'];
  $AP3=$_POST['AP3'];
  $AP4=$_POST['AP4'];
  $AP5=$_POST['AP5'];
  $AP6=$_POST['AP6'];
  $AP7=$_POST['AP7'];
  $AP8=$_POST['AP8'];
  $AP9=$_POST['AP9'];

  mysql_query('INSERT INTO secciona (id_empresa, AP1, AP2, AP3, AP4, AP5, AP6, AP7, AP8, AP9)
  VALUES (\''.$id_empresa.'\', \''.$AP1.'\', \''.$AP2.'\', \''.$AP3.'\',
  \''.$AP4.'\', \''.$AP5.'\', \''.$AP6.'\', \''.$AP7.'\',
  \''.$AP8.'\',\''.$AP9.'\')');

  echo "El formulario ya se subio a la base de datos";
  echo "<br>";
  echo "Gracias por contestar la encuesta :)";

  header("location:../views/form2");
  exit();
?>
