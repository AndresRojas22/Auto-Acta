<?php
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
        
        $FechaCas = $_POST['FechaCas'];
        
        $InstruccionSQL = ("SELECT * from ActMat where NombreE = '$Nombre' and ApellidoPE = '$ApellidoP' and ApellidoME = '$ApellidoM' and SexoE = '$Sexo' and FechaNacE = '$FechaNac' and EstadoRegE = '$Estado'
        and NombreA = '$NombreA' and ApellidoPA = '$ApellidoPA' and ApellidoMA = '$ApellidoMA' and SexoA = '$SexoA' and FechaNacA = '$FechaNacA' and EstadoRegA = '$EstadoA' and FechaCas = '$FechaCas'");
        $Resultado = mysqli_query($conn,$InstruccionSQL);
        
          $rs = mysqli_num_rows($Resultado);

          if($rs==1)
          {

            echo "<h1>Acta de matrimonio</h1><table border ='1'> 
            <tr>
            <td> Nombre esposo</td>
            <td> Apellido Paterno esposo </td>
            <td> Apellido Materno esposo </td>
            <td> Sexo esposo </td>
            <td> Fecha nacimiento esposo </td>
            <td> Estado de registro esposo<td>

            <td> Nombre esposa</td>
            <td> Apellido Paterno esposa </td>
            <td> Apellido Materno esposa </td>
            <td> Sexo esposa </td>
            <td> Fecha nacimiento esposa </td>
            <td> Estado de registro esposa<td>
            <td> Fecha de casamiento </td>
            </tr>

            <tr>
            <td> $Nombre </td>
            <td> $ApellidoP </td>
            <td> $ApellidoM </td>
            <td> $Sexo </td>
            <td> $FechaNac </td>
            <td> $Estado <td>

            <td> $NombreA</td>
            <td> $ApellidoPA</td>
            <td> $ApellidoMA</td>
            <td> $SexoA</td>
            <td> $FechaNacA</td>
            <td> $EstadoA<td>
            <td> $FechaCas</td>
            </tr>";


          }
          elseif($rs==0)
          {
            echo'El usuario no existe';
          }
        }
        ?>
</body>
</html>