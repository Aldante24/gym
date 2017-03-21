<?php
class conexion{
  function conectar(){
    return mysqli_connect("localhost","root","admin","gym");
  }
}

$conexion = mysqli_connect ("localhost","root","admin","gym");
/*$cnn = new conexion();
if($cnn->conectar()){
  echo "Conectado";
}else{
  echo "desconectado";
}*/
 ?>
