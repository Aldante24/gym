$(document).on("ready",function(){
  enviarDatos();
});

function enviarDatos(){
  $("#insertar").on("submit", function(e){
    e.preventDefault();
    var nombre_ = $("#nombre").val();
    var email_ = $("#email").val();
    var usuario_ = $("#usuario").val();
    var pass_ = $("#pass").val();
    var pass2_ = $("#pass2").val();
    var priv_ = $("#priv").val();

    $.post("insertar.php", {nombre:nombre_, email:email_, usuario:usuario_, pass:pass_, pass2:pass2_, priv:priv_},
    function(datos){
      $("#resultado").html(datos)
        });
  });
};
