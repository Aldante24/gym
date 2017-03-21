<?php

require '../model/conexion1.php';
sleep(2);
$usuarios = $mysqli->query("SELECT nombre, privilegios
  FROM login
  WHERE usuario = '".$_POST['usuario']."'
  AND pass = '".md5($_POST['pass'])."' ");

  if($usuarios->num_rows == 1):
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['privilegios']));
  else:
    echo json_encode(array('error' => true));
  endif;

  $mysqli->close();

 ?>
