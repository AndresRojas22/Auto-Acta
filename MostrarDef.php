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
<h1 >Acta de defunción</h1>
    <table>
        <tr>

            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Sexo</td>
            <td>Fecha de nacimiento</td>
            <td>Estado</td>
            <td>Fecha de defunción</td>
        </tr>

        <?php
        $sql="SELECT * FROM ActDef";
        $result = mysqli_query($conn,$sql);

        while($mostrar=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <td><?php echo $mostrar['Nombre']?></td>
            <td><?php echo $mostrar['ApellidoP']?></td>
            <td><?php echo $mostrar['ApellidoM']?></td>
            <td><?php echo $mostrar['Sexo']?></td>
            <td><?php echo $mostrar['FechaNac']?></td>
            <td><?php echo $mostrar['EstadoReg']?></td>
            <td><?php echo $mostrar['FechaDef']?></td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>