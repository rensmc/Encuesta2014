<?php
  include 'BD/conexion.php';

  $id_empresa = $_POST['id_empresa'];
  $BP1=$_POST['BP1'];
  $BP2=$_POST['BP2'];
  $BP3=$_POST['BP3'];
  $BP4=$_POST['BP4'];
  $BP5=$_POST['BP5'];
  $BP6=$_POST['BP6'];
  $BP7=$_POST['BP7'];
  $BP8=$_POST['BP8'];
  $BP9=$_POST['BP9'];
  $BP10=$_POST['BP10'];
  $BP11=$_POST['BP11'];
  $BP12=$_POST['BP12'];
  $BP13=$_POST['BP13'];
  $BP14=$_POST['BP14'];
  $BP15=$_POST['BP15'];
  $BP16=$_POST['BP16'];

  mysql_query('INSERT INTO seccionb (id_empresa, BP1, BP2, BP3, BP4, BP5, BP6, BP7, BP8, BP9, BP10, BP11, BP12, BP13, BP14, BP15, BP16)
  VALUES (\''.$id_empresa.'\', \''.$BP1.'\', \''.$BP2.'\', \''.$BP3.'\',
  \''.$BP4.'\', \''.$BP5.'\', \''.$BP6.'\', \''.$BP7.'\',
  \''.$BP8.'\',\''.$BP9.'\',\''.$BP10.'\',\''.$BP11.'\',\''.$BP12.'\',\''.$BP13.'\',\''.$BP14.'\',\''.$BP15.'\',\''.$BP16.'\')');

  echo "El formulario ya se subio a la base de datos";
  echo "<br>";
  echo "Gracias por contestar la encuesta :)";

  header("location:../views/form3");
  exit();
?>
