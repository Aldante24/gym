<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="vista/js/script.js"></script>
    <title>GYM</title>
  </head>
  <body>
<div class="">

      <label> Nombre Completo: </label>
      <input type="text" name="nombre" id="nombre" />

      <label> Sexo: </label>
      <select name="sexo" id="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>

      <label> Direccion: </label>
      <input type="text" name="direccion" id="direccion" />

      <label> Correo electronico: </label>
      <input type="text" name="email" id="email" />

      <label> Telefono: </label>
      <input type="text" name="telefono" id="telefono" />

      <label> Fecha de Ingreso: </label>
      <input type="date" name="fechain" id="fechain" />

      <label for="imagen">Imagen:</label>
      <button type="button" name="button" target="_blank" onclick="window.open(this.href='webcamjs/camara/camara.html',this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Tomar Foto</button>
      <input name="imagen" id="imagen" size="30" type="file" />

      <label> Puesto: </label>
      <input type="text" name="puesto" id="puesto" />

      <input type="submit" name="enviar" value="Enviar" id="enviar" />

      <div id="resultado"></div>


    </div>
  </body>
</html>
