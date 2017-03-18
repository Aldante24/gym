<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GYM</title>
  </head>
  <body>
<form id="frmpersonal">
      <label> Nombre Completo: </label>
      <input type="text" name="nombre" />

      <label> Sexo: </label>
      <input type="radio" name="sexo" value="f" /> Femenino
      <input type="radio" name="sexo" value="m" /> Masculino

      <label> Direccion: </label>
      <input type="text" name="direccion" />

      <label> Correo electronico: </label>
      <input type="text" name="email" />

      <label> Telefono: </label>
      <input type="text" name="telefono" />

      <label> Fecha de Ingreso: </label>
      <input type="date" name="fechain" />

      <label for="imagen">Imagen:</label>
      <button type="button" name="button" target="_blank" onclick="window.open(this.href='webcamjs/camara/camara.html',this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Tomar Foto</button>
      <input name="imagen" size="30" type="file" />

      <label> Puesto: </label>
      <input type="text" name="puesto" />

      <input id="enviar" type="button" value="Enviar" />
      <!-- Comenzamos con JQUERY -->
      <script type="text/javascript" src='vista/js/jquery-1.7.2.min.js' ></script>
      <script type="text/javascript">
      $(document).ready(function(){
  $("#enviar").click(function(){
    var formulario = $("#frmpersonal").serializeArray();
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "vista/guardar.php",
      data: formulario,
    }).done(function(respuesta){
      $("#mensaje").html(respuesta.mensaje);
    });
  });

    function limpiarformulario(formulario){

  $(formulario).find('input').each(function() {
      switch(this.type) {
          case 'password':
        case 'text':
                $(this).val('');
              break;
          case 'checkbox':
          case 'radio':
              this.checked = false;
          }
      });

      $(formulario).find('select').each(function() {
          $("#"+this.id + " option[value=0]").attr("selected",true);

    });
  }
  });
  </script>
    </form>
  </body>
</html>
