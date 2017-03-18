$(document).ready(function(){
  $("#enviar").click(function(){
      var nombre_ = $("#nombre").val();
      var sexo_ = $("#sexo").val();
      var dir_ = $("#direccion").val();
      var email_ = $("#email").val();
      var tel_ = $("#telefono").val();
      var fin_ = $("#fechain").val();
      var img_ = $("#imagen").val();
      var puesto_ = $("#puesto").val();

      $.post("vista/guardar.php", {nombre:nombre_, sexo:sexo_, direccion:dir_, email:email_, telefono:tel_, fechain:fin_, imagen:img_, puesto:puesto_}, function(datos){
        $("#resultado").html(datos)
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
        });
