<?php

if(isset($_POST["nombre"]))
{
  $nombre = $_POST["nombre"];
  $sexo = $_POST["sexo"];
  $direccion = $_POST["direccion"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $fechain = $_POST["fechain"];
  $imagen = $_POST["imagen"];
  $puesto = $_POST["puesto"];

  $consulta = "INSERT INTO gym.personal (nombre, sexo, direccion, correo, telefono, fecha_ingreso, url_foto, puesto)VALUES('$nombre','$sexo', '$direccion','$email', $telefono, '$fechain', '$imagen', '$puesto')";

  $conexion = new mysqli("localhost","root","admin","gym",3306);

  $respuesta = new stdClass();

  if($conexion->query($consulta)){
    $respuesta->mensaje = "Se guardo correctamente";
  }
  else {
    $respuesta->mensaje = "Ocurrió un error";
  }
  echo json_encode($respuesta);

}

 ?>
