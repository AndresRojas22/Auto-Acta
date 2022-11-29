<?php
session_start();
session_id();
$dbhost="localhost";
   $dbuser="root";
   $dbpassword="";
   $dbname="AutoAct";
   $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  if($conn -> connect_error)
  {
    die("No se pudo conectar al servidor".$conn->connect_error);
  }
  else{ echo("Conectado a la BD<br>");}
?>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
          .line{
              display: inline-block;
          }
      </style>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper orange darken-2 center-align">
              <a href="Index.html" class="brand-logo">Auto-Acta</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href=""><img src="" alt=""></a></li>
              </ul>
            </div>
          </nav> <br><br>


        <section class="container">
            <div class="center-align">
              <div class="row">
                <div class="col l4 offset-l4">
                  <div class="card orange darken-2 white-text" >
                    Metodo de pago
                  </div>
                  <div>
                      <form action="PagoCorrecto1.php">
                      <label for="Numero de tarjeta">Numero de tarjeta</label>
                      <input type="text" name="Numero de tarjeta" id="Numero de tarjeta" placeholder="Numero de tarjeta" maxlength="16" required pattern="[0-9]+">
                      <label for="cuentahabiente">Nombre del cuenta habiente</label>
                      <input type="text" name="cuentahabiente" id="cuentahabiente" placeholder="Nombre" required pattern="[A-Za-z ]+">
                      <label for="Expiracion">Expiracion</label>
                      <input type="month" name="Expiracion" id="Expiracion" required><br>
                      <label for="CCV" class="line">CCV</label>
                      <input type="text" name="CCV" id="CCV" placeholder="CCV" maxlength="3" required pattern="[0-9]+">
                      <input class="btn" type="submit" name="Buscar" id="Pagar" value="Pagar">
                  </form>
                  </div>
                </div>
              </div>
            </div>

        </section>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

  <?php
  if( $_POST["Buscar"] ){
  foreach($_POST as $campo => $valor) {
      $_SESSION['registro'][$campo] = $valor;

      echo $_SESSION['registro']['Nombre'];
      echo $_SESSION['registro']['ApellidoP'];
      echo $_SESSION['registro']['ApellidoM'];
      echo $_SESSION['registro']['Sexo'];
      echo $_SESSION['registro']['FechaNac'];
      echo $_SESSION['registro']['Estado'];
  }
}
  ?>