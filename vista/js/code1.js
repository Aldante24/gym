$(document).ready(ini);

function ini(){
  $("#btnregistrar").click(enviarDatos);

  //Formulario login validacion
var form = $(".login-form");
form.bind("submit",function(){

  $.ajax({
    type: form.attr('method'),
    url: form.attr('action'),
    data: form.serialize(),

    beforeSend:function(){
      //que hacer mientras se envia
      $("#enviar").text("Validando...");
      $("#enviar").attr("disabled", true);
    },
    complete:function(data){
      //que hacer si se completo
      $("#enviar").text("Ingresar");
      $("#enviar").attr("disabled", false);
    },
    success:function(data){
      //que hacer si la peticion se cumplio
      if(data == "true"){
        document.location.href="../vista/registro.php";
      }else{
        $("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso Denegado, </b>No se pudo comprobar el usuario</div>");
      }
    },
    error:function(data){
      //que hacer si no se cumplio la peticion
    }
  });
  return false; //Para que el form no se envie
});
}
function enviarDatos(){
  var usuario = $("#usuario").val();
  var pass = $("#pass").val();
  $.ajax({
    url:"insertar.php",
    success:function(result){
      if(result == "true"){
        $("#resultado").html("Se ha registrado el usuario correctamente");
      }else{
        $("#resultado").html("No se ha registrado el usuario correctamente");
      }
    },
    data:{
        usuario:usuario,
        pass:pass
    },
    type:"POST"
  });
}
