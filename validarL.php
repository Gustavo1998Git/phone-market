<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="CSS/animacion.css">
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
                <a href="index.php"><span class="icon-home"></span> Inicio</a>
                <a href="login.php"><span class="icon-user"></span>Ingresar</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <div style="width: 1000px; height: 500px;"> 
</br></br></br></br>
<?php 

$usu=$_POST["usuario"];
$con=$_POST["contra"];
session_start();
$_SESSION['usuario']=$usu;

$mysql = new mysqli("localhost", "root", "", "phone-market");
$Query = "select * from usuarios where  Usuario='$usu' && Contrasena='$con'";
$Result = $mysql->query( $Query );

$filas=mysqli_num_rows($Result);

if($filas>0){
    header("location:Principal.php");
}
else{
  	print("El usuario o contraseña incorrectos");

}

	 
   ?>
</div>
<?php
    include("pie.php");
   ?>
    </body>
</body>
</html>