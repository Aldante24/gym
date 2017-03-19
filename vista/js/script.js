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
