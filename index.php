<?php
session_start();
if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"])) {
  include ('vista/registro.php');

}else {
  echo "<meta http-equiv='refresh' content='0;url=vista/login.php'>";
}

 ?>
