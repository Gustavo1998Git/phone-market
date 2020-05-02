<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="../CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">

</head>

<body>

    <div class="header">
        <h1 class="logo">Phone-Market</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
           </label>
           <ul class="menu">
                <a href="../Administrador/inicioAdmin.php"><span class="icon-home"></span> Inicio</a>
                <a href="../cerrar_s.php"><span class="icon-user"></span> <?php echo $_SESSION['usuario'] ?> : Salir</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>

<?php 
$Nombre=$_POST["Nombre"];
$APaterno=$_POST["APaterno"];
$AMaterno=$_POST["AMaterno"];
$CorreoElect=$_POST["CorreoElect"];
$Telefono=$_POST["Telefono"];
$Usuario=$_POST["Usuario"];
$Contrasenia=$_POST["Contrasenia"];
$SocioOempleado=$_POST["tipo"];
$nombre2=$_POST["nombrev"];





$mysql = new mysqli("localhost", "root", "", "phone-market");


    $Query= "UPDATE administradores SET Nombre='$Nombre', APaterno='$APaterno', AMaterno='$AMaterno', CorreoElect='$CorreoElect',Telefono='$Telefono',Contrasenia='$Contrasenia',SocioOempleado='$SocioOempleado' WHERE Nombre='".$nombre2."'";

    $Result = $mysql->query( $Query );

    if($Result!=null){
   	    print("Se modifico");
    }else{
            print("No se pudo modificar");
        }
   
	 
   ?>

</body>
</html>