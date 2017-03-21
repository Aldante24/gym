<?php

$mysqli = new mysqli('localhost','root','admin', 'gym');
if ($mysqli->connect_errno):
  echo "Error al conectarse a la Base de Datos debido a un error ".$mysqli->connect_error;
endif;
 ?>
