<?php

  include ('../model/conexion.php');

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $usuario = $_POST["usuario"];
  $pass = md5($_POST["pass"]);
  $pass2 = md5($_POST["pass2"]);
  $priv = $_POST["priv"];

  if ($pass == $pass2) {
    $insertar = "INSERT INTO login (usuario, pass, nombre, correo, privilegios)
                  VALUES('$usuario','$pass', '$nombre','$email', '$priv')";

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
  }else{

    echo "<div class='alert alert-danger' role='alert'>
    <strong>Tu password no coincide!</strong> Revisa tus campos.
    </div>";

}


 ?>
