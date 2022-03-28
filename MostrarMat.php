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
<h1 >Acta de nacimiento</h1>
    <table>
        <tr>

            <td>Nombre esposo</td>
            <td>Apellido paterno esposo</td>
            <td>Apellido materno esposo</td>
            <td>Sexo esposo</td>
            <td>Fecha de nacimiento esposo</td>
            <td>Estado esposo</td>
            <td>Nombre esposa</td>
            <td>Apellido paterno esposa</td>
            <td>Apellido materno esposa</td>
            <td>Sexo esposa</td>
            <td>Fecha de nacimiento esposa</td>
            <td>Estado esposa</td>
        </tr>

        <?php
        $sql="SELECT * FROM ActMat";
        $result = mysqli_query($conn,$sql);

        while($mostrar=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <td><?php echo $mostrar['NombreE']?></td>
            <td><?php echo $mostrar['ApellidoPE']?></td>
            <td><?php echo $mostrar['ApellidoME']?></td>
            <td><?php echo $mostrar['SexoE']?></td>
            <td><?php echo $mostrar['FechaNacE']?></td>
            <td><?php echo $mostrar['EstadoRegE']?></td>

            <td><?php echo $mostrar['NombreA']?></td>
            <td><?php echo $mostrar['ApellidoPA']?></td>
            <td><?php echo $mostrar['ApellidoMA']?></td>
            <td><?php echo $mostrar['SexoA']?></td>
            <td><?php echo $mostrar['FechaNacA']?></td>
            <td><?php echo $mostrar['EstadoRegA']?></td>
        </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>