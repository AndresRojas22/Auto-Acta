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
        $id;
        $Nombre = $_POST["Nombre"];
        $ApellidoP = $_POST["ApellidoP"];
        $ApellidoM = $_POST["ApellidoM"];
        $Sexo = $_POST["Sexo"];
        $FechaNac = $_POST["FechaNac"];
        $Estado = $_POST["Estado"];

        $instruccion_SQL = "INSERT INTO ActNac (IdActa,Nombre,ApellidoP,ApellidoM,Sexo,FechaNac,EstadoReg)
                             VALUES (null,'$Nombre','$ApellidoP','$ApellidoM','$Sexo','$FechaNac','$Estado')";
    

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