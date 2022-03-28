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

        $instruccion_SQL = "DELETE FROM ActNac WHERE Nombre = '$Nombre' and ApellidoP = '$ApellidoP' and ApellidoM ='$ApellidoM' and Sexo = '$Sexo' and FechaNac = '$FechaNac' and EstadoReg = '$Estado'";
        
    

    if($conn->query($instruccion_SQL) === true)
    {
        echo("Registro eliminado");

        echo '<br><a href="Admin.html"<h1>Volver al inicio</h1></a>';
    }
    else
    {
        echo("Fallo al eliminar");
    }
    }
   mysqli_close($conn);
    ?>
</body>
</html>