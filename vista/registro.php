<?php
include('header.php')
 ?>
         <script src="js/script.js"></script>
<body>
    <form id="frm" method="post">
      <h1 class="text-center">Formulario de Registro</h1>
      <hr>
      <div class="row">

      <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
        <br>
      <label>Nombre Completo: </label>
      <input type="text" class ="form-control" name="nombre" id="nombre" required />
    </div>
      <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
        <br>
      <label>Sexo:</label>
      <select class ="form-control" name="sexo" id="sexo">
          <option value="">Selecciona...</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
        </select>
      </div>

      <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
        <br>
      <label> Direccion: </label>
      <input type="text" class ="form-control" name="direccion" id="direccion" />
      <br>
    </div>

    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label> Correo electronico: </label>
      <input type="text" class ="form-control" name="email" id="email" />
    </div>

    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label> Telefono: </label>
      <input type="text" class ="form-control" name="telefono" id="telefono" />

      <!-- <label> Fecha de Ingreso: </label>
      <input type="date" class ="form-control" name="fechain" id="fechain" /> -->
    </div>
    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label>Membresia:</label>
      <select class ="form-control" name="membresia" id="membresia">
          <option value="">Selecciona...</option>
          <option value="Oro">Oro</option>
          <option value="Plata">Plata</option>
          <option value="Bronce">Bronce</option>
        </select>
      <br>
    </div>

    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label for="fechafin">Fecha de Vencimiento:</label><br>
      <input type="date" class ="form-control" name="fechafin" id="fechafin" />
    </div>

    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label for="imagen">Imagen:</label><br>
      <button type="button" class="btn btn-info" name="button" target="_blank" onclick="window.open(this.href='webcamjs/camara/camara.html',this.target,'width=800,height=600,top=100,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Tomar Foto</button>
    </div>

    <div class="col-xs-4 col-sm-12 col-md-4 col-lg-4">
      <br>
      <label>Adunta la imagen para el registro:</label>
      <input class ="form-control" name="imagen" id="imagen" size="30" type="file" />
    </div>


      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <br>
      <input class="btn btn-primary btn-success btn-lg" type="submit" class ="form-control" name="enviar" value="Guardar Datos"/>
      <input class="btn btn-primary btn-danger btn-lg" type="reset" class ="form-control" name="reset" value="Limpiar Datos"/>
    </div>
  </div>
  <section>
         <div id="resultado"></div>
  </section>

    </form>
  </body>
</section>

<?php
  include('footer.php')
 ?>
