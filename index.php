<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <title>Mensaje</title>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Correo Electrónico</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href=#>Inicio</a></li>
        <li><a href=#>Mensajes</a></li>
        <li><a href=#>Login</a></li>
      </ul>
    </div>
    </nav>
    <br>
    <div class="container">
    <form action="index.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder=" " name="para" type="email" class="validate">
                <label for="Para">Para</label>
            </div>
            <div class="input-field col s6">
                <input placeholder=" " name="asunto" type="text" class="validate">
                <label for="Asunto">Asunto</label>
            </div>
        </div>
        <div class="row">
 
      <div class="row">
        <div class="input-field col s12">
          <textarea name="mensaje" class="materialize-textarea"></textarea>
          <label for="textarea1">Redactar correo</label>
        </div>
      </div>
  </div>
        <button type="submit" name="btnenviar" class="btn red lighten-2">Enviar >></button>
    </form>
    </div>
    
    <?php
        error_reporting(0);
        $enviar = $_POST['btnenviar'];
        $para = $_POST['para'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        if (isset($enviar)){
            if(mail($para,$asunto,$mensaje)){
                echo "Enviado";
            }else{
                echo "No se envio";
            }
        }
    ?>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>