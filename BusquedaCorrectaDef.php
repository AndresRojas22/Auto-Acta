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
          .Check{
            margin-top: 50px;
          }
      </style>
    </head>

    <body class="grey lighten-4">
        <nav>
            <div class="nav-wrapper orange darken-2 center-align">
              <a href="Index.html" class="brand-logo">Auto-Acta</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href=""><img src="" alt=""></a></li>
              </ul>
            </div>
          </nav>

          <section class="Container">
              <div class="Center-align">
                <img class="Check" src="./Img/Check_green_icon.svg.png" alt="" width="35%">
                <h3>Busqueda correcta!<br> De click en el boton para realizar el pago</h3>
                <form action="PagoDef.php" method="post">
                    <input class="btn big" name="Buscar" type="submit" value="Pagar">
                </form>
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
  }

  echo $_SESSION['registro']['FechaDef'];
}
  ?>