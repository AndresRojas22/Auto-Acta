<?php
session_start();
session_id();
$dbhost="localhost";
   $dbuser="root";
   $dbpassword="";
   $dbname="AutoActa";
   $conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

  if($conn -> connect_error)
  {
    die("No se pudo conectar al servidor".$conn->connect_error);
  }
  else{ echo("Conectado a la BD<br>");} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <?php

        

    if(isset($_POST['Nombre']))
    {
        $Nombre = $_POST["Nombre"];
        $ApellidoP = $_POST["ApellidoP"];
        $ApellidoM = $_POST["ApellidoM"];
        $Sexo = $_POST["Sexo"];
        $FechaNac = $_POST["FechaNac"];
        $Estado = $_POST["Estado"];

        $InstruccionSQL = ("SELECT * from ActNac where Nombre = '$Nombre' and ApellidoP = '$ApellidoP' and ApellidoM ='$ApellidoM' and Sexo = '$Sexo' and FechaNac = '$FechaNac' and EstadoReg = '$Estado'");
        $Resultado = mysqli_query($conn,$InstruccionSQL);
          $rs = mysqli_num_rows($Resultado);

          if($rs==1)
          {
            echo'<form action ="BusquedaCorrecta.php" method = "post">
            <input type = "submit" name = "Buscar" value = "Completar busqueda"/>
            </form>';
          }
          elseif($rs==0)
          {
            echo'<a href="BusquedaIncorrecta.html">Completar busqueda</a>';
          }
        }

        if( $_POST["Buscar"] ){
          foreach($_POST as $campo => $valor) {
              $_SESSION['registro'][$campo] = $valor;
          }
      }
        ?>
</body>
</html>