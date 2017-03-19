<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Assertive | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="stylesheet" href="css/micss.css" media="screen" title="no title">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>

            <!-- Top content -->
            <div class="top-content">

                <div class="inner-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 text">
                                <h1><strong>Assertive</strong> Inicio de Sesión</h1>
                                <div class="description">
                                	<p>
    	                            	Sistema de Reportes de CallCenter.
                              	  </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 form-box">
                            	<div class="form-top">
                            		<div class="form-top-left">
                            			<h3>Entra a nuestro sistema de reportes en linea</h3>
                                		<p>Usa tu Usuario y Password para entrar:</p>
                            		</div>
                            		<div class="form-top-right">
                            			<i class="fa fa-key"></i>
                            		</div>
                                </div>
                                <div class="form-bottom">
    			                    <form role="form" action="validar.php" method="post" class="login-form">
    			                    	<div class="form-group">
                                  <label for="inputEmail" class="sr-only">Email address</label>
                                  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
    			                        </div>
    			                        <div class="form-group">
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
    			                        </div>
    			                        <button id="enviar" type="submit" class="btn btn-lg btn-primary btn-block">Ingresar</button>
    			                    </form>

    		                    </div>
                            </div>

                        </div>

                    </div>
                    <br>
                    <div class="container" id="resultado"></div>
                </div>

            </div>

            <script src="assets/js/jquery-1.11.1.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/scripts.js"></script>
  </body>
</html>
