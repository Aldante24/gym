<?php

$conexion = mysqli_connect ("localhost","root","admin","gym");

  $nombre = $_POST["nombre"];
  $sexo = $_POST["sexo"];
  $direccion = $_POST["direccion"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  // $fechain = $_POST["fechain"];
  $imagen = $_POST["imagen"];
  $puesto = $_POST["puesto"];

  $insertar = "INSERT INTO personal (nombre, sexo, direccion, correo, telefono, fecha_ingreso, url_foto, puesto)VALUES('$nombre','$sexo', '$direccion','$email', $telefono, current_timestamp(), IF(substr('$imagen',2)LIKE':%',concat('fotos/',substr('$imagen',11)),concat('fotos/','$imagen')), '$puesto')";
  $ejecutar = mysqli_query($conexion,$insertar);

  if ($ejecutar) {
    echo "<div class='alert alert-success' role='alert'>
    <strong>Exito!</strong> Tus datos se han guardado.
    </div>";
  }else {
    echo "<div class='alert alert-danger' role='alert'>
    <strong>Tus datos no se han guardado!</strong> Revisa tus campos.
    </div>";
  }

  // $consulta = "INSERT INTO gym.personal (nombre, sexo, direccion, correo, telefono, fecha_ingreso, url_foto, puesto)VALUES('$nombre','$sexo', '$direccion','$email', $telefono, '$fechain', '$imagen', '$puesto')";
  //
  // // $conexion = new mysqli("localhost","root","admin","gym",3306);
  //
  // $respuesta = new stdClass();
  //
  // if($conexion->query($consulta)){
  //   $respuesta->mensaje = "Se guardo correctamente";
  // }
  // else {
  //   $respuesta->mensaje = "Ocurrió un error";
  // }
  // echo json_encode($respuesta);


 ?>
