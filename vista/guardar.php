<?php

  include ('../model/conexion.php');

  $nombre = $_POST["nombre"];
  $sexo = $_POST["sexo"];
  $direccion = $_POST["direccion"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  // $fechain = $_POST["fechain"];
  $imagen = $_POST["imagen"];
  $membresia = $_POST["membresia"];

  $insertar = "INSERT INTO personal (nombre, sexo, direccion, correo, telefono, fecha_ingreso, url_foto, tipo_mem)
                VALUES('$nombre','$sexo', '$direccion','$email', $telefono, current_timestamp(),
                IF(substr('$imagen',2)LIKE':%',concat('fotos/',substr('$imagen',11)),concat('fotos/','$imagen')), '$membresia')";

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


 ?>
