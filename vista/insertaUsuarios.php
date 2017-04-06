<?php
include('header.php')
 ?>
  <body>
    <form id="insertar"  method="post">
      <h1 class="text-center">Formulario para Alta de usuarios</h1>
      <hr>
      <div class="row">

      <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
        <br>
      <label>Nombre Completo: </label>
      <input type="text" class ="form-control" name="nombre" id="nombre" required />
    </div>
    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
    <label>Correo: </label>
    <input type="text" class ="form-control" name="email" id="email" />
  </div>
  <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
    <br>
  <label>Usuario: </label>
  <input type="text" class ="form-control" name="usuario" id="usuario" required />
</div>
<div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
  <br>
<label>Password: </label>
<input type="password" class ="form-control" name="pass" id="pass" required />
</div>
<div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
  <br>
<label>Repite tu Password: </label>
<input type="password" class ="form-control" name="pass2" id="pass2" required />
</div>
<div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
  <br>
<label>Privilegios:</label>
<select class ="form-control" name="priv" id="priv">
    <option value="">Selecciona...</option>
    <option value="0">Administrador</option>
    <option value="1">Usuario</option>
  </select>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
  <br><br><br>
<input class="btn btn-primary btn-success btn-lg" type="submit" class ="form-control" name="enviar" value="Guardar Datos"/>
<input class="btn btn-primary btn-danger btn-lg" type="reset" class ="form-control" name="reset" value="Limpiar Datos"/>
</div>
</div>
<section class="container">
  <div id="resultado"></div>
</section>
    </form>
  </section>
  </body>


  <?php
    include('footer.php')
   ?>
