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

        $instruccion_SQL = "INSERT INTO ActMat (IdActa,NombreE,ApellidoPE,ApellidoME,SexoE,FechaNacE,EstadoRegE,
                                                NombreA,ApellidoPA,ApellidoMA,SexoA,FechaNacA,EstadoRegA,FechaCas)
                             VALUES (null,'$Nombre','$ApellidoP','$ApellidoM','$Sexo','$FechaNac','$Estado',
                             '$NombreA','$ApellidoPA','$ApellidoMA','$SexoA','$FechaNacA','$EstadoA','$FechaCas')";
        
    if($conn->query($instruccion_SQL) === true)
    {
        echo("Registro añadido");
        echo '<br><a href="Admin.html"<h1>Volver al inicio</h1></a>';
    }
    else
    {
        echo("Fallo al agregar");
    }
    }
   mysqli_close($conn);
    ?>
</body>
</html>