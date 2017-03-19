<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="vista/js/script.js"></script> -->
    <script>
      $(document).on("ready",function(){
        enviarDatos();
      });

      function enviarDatos(){
        $("#frm").on("submit", function(e){
          e.preventDefault();
          var nombre_ = $("#nombre").val();
          var sexo_ = $("#sexo").val();
          var dir_ = $("#direccion").val();
          var email_ = $("#email").val();
          var tel_ = $("#telefono").val();
          var fin_ = $("#fechain").val();
          var img_ = $("#imagen").val();
          var puesto_ = $("#puesto").val();
          $.post("vista/guardar.php", {nombre:nombre_, sexo:sexo_, direccion:dir_, email:email_, telefono:tel_, fechain:fin_, imagen:img_, puesto:puesto_},
          function(datos){
            $("#resultado").html(datos)
              });
        });
      };

    </script>
    <title>GYM</title>
  </head>
<body>
<div id="contenido">
  <div id="formulario">
    <form id="frm" method="post">

      <label> Nombre Completo: </label>
      <input type="text" name="nombre" id="nombre" required />

      <label> Sexo: </label>
      <select name="sexo" id="sexo">
        <option value="">Selecciona...</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>

      <label> Direccion: </label>
      <input type="text" name="direccion" id="direccion" />

      <label> Correo electronico: </label>
      <input type="text" name="email" id="email" />

      <label> Telefono: </label>
      <input type="text" name="telefono" id="telefono" />

      <!-- <label> Fecha de Ingreso: </label>
      <input type="date" name="fechain" id="fechain" /> -->

      <label for="imagen">Imagen:</label>
      <button type="button" name="button" target="_blank" onclick="window.open(this.href='webcamjs/camara/camara.html',this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Tomar Foto</button>
      <input name="imagen" id="imagen" size="30" type="file" />

      <label> Puesto: </label>
      <input type="text" name="puesto" id="puesto" />

      <input type="submit" name="enviar" value="Enviar"/>
    </form>
    <div id="resultado"></div>
    </div>
  </div>
</body>
</html>
