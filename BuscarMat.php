<?php
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

        $NombreA = $_POST["NombreA"];
        $ApellidoPA = $_POST["ApellidoPA"];
        $ApellidoMA = $_POST["ApellidoMA"];
        $SexoA = $_POST["SexoA"];
        $FechaNacA = $_POST["FechaNacA"];
        $EstadoA = $_POST["EstadoA"];
        $FechaCas = $_POST["FechaCas"];
        
        $InstruccionSQL = ("SELECT * from ActMat where NombreE = '$Nombre' and ApellidoPE = '$ApellidoP'");
        $Resultado = mysqli_query($conn,$InstruccionSQL);
          $rs = mysqli_num_rows($Resultado);
          if($rs==1)
          {
            echo'<a href="BusquedaCorrecta.html">Completar busqueda</a>';
          }
          elseif($rs==0)
          {
            echo'<a href="BusquedaIncorrecta.html">Completar busqueda</a>';
          }
        }
        ?>
</body>
</html>