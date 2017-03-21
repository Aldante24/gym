jQuery(document).on('submit','#frmlogin', function(e){
  e.preventDefault();

  jQuery.ajax({
    url:'validar.php',
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize(),
    beforeSend: function(){
      $('.btn').val('Validando...');
    }
  })
  .done(function(respuesta){
    console.log(respuesta);
    if (!respuesta.error) {
      if (respuesta.tipo == 0) {
        location.href = 'registro.php';
      }else if (respuesta.tipo == 1) {
        location.href = '../model/'
      }
    }else {
      $("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso Denegado, </b>No se pudo comprobar el usuario</div>");
      $('.btn').val('Ingresar');
    }
  })
  .fail(function(resp){
    console.log(resp.responseText);
  })
  .always(function(){
    console.log("complete");
  });
});
