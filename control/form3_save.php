<?php
  include 'BD/conexion.php';

  $id_empresa = $_POST['id_empresa'];
  $CP1=$_POST['CP1'];
  $CP2=$_POST['CP2'];
  $CP3=$_POST['CP3'];
  $CP4=$_POST['CP4'];
  $CP5=$_POST['CP5'];
  $CP6=$_POST['CP6'];
  $CP7=$_POST['CP7'];
  $CP8=$_POST['CP8'];
  $CP9=$_POST['CP9'];
  $CP10=$_POST['CP10'];
  $CP11=$_POST['CP11'];
  $CP12=$_POST['CP12'];
  $CP13=$_POST['CP13'];
  $CP14=$_POST['CP14'];
  $CP15=$_POST['CP15'];
  $CP16=$_POST['CP16'];
  $CP17=$_POST['CP17'];
  $CP18=$_POST['CP18'];
  $CP19=$_POST['CP19'];
  $CP20=$_POST['CP20'];
  $CP21=$_POST['CP21'];

  mysql_query('INSERT INTO seccionc (id_empresa, CP1, CP2, CP3, CP4, CP5, CP6, CP7, CP8, CP9, CP10, CP11, CP12, CP13, CP14, CP15, CP16, CP17, CP18, CP19, CP20, CP21)
  VALUES (\''.$id_empresa.'\', \''.$CP1.'\', \''.$CP2.'\', \''.$CP3.'\',
  \''.$CP4.'\', \''.$CP5.'\', \''.$CP6.'\', \''.$CP7.'\',
  \''.$CP8.'\',\''.$CP9.'\',\''.$CP10.'\',\''.$CP11.'\',\''.$CP12.'\',\''.$CP13.'\',\''.$CP14.'\',\''.$CP15.'\',\''.$CP16.'\',\''.$CP17.'\',\''.$CP18.'\',\''.$CP19.'\',\''.$CP20.'\',\''.$CP21.'\')');

  echo "El formulario ya se subio a la base de datos";
  echo "<br>";
  echo "Gracias por contestar la encuesta :)";

  header("location:../views/form4");
  exit();
?>
