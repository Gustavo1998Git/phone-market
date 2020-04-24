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
                <a href="Login.php"><span class="icon-user"></span>Ingresar</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <div style="width: 1000px; height: 500px;"> 
</br></br></br></br>
<?php 



$mysql = new mysqli("localhost", "root", "", "phone-market");
         $Query= "INSERT INTO usuarios  (Nombre,APaterno,AMaterno,Correo,Telefono,Usuario,Contrasena)VALUES ('".$_POST["nom"]."','".$_POST["appat"]."','".$_POST["apmat"]."','".$_POST["cor"]."','".$_POST["tel"]."','".$_POST["usu"]."','".$_POST["con"]."')";

$Result = $mysql->query( $Query );

if($Result!=null){
   	print("Su Registro Fue exitoso, puede iniciar sesion");
}
else{
  	print("No se pudo agregar");

}

	 
   ?>
</div>
<footer>
        <div class="contenedor">
            <p class="copy">Phone-Market &copy; 2019</p>
            <a class="link" href="MapS.php">   Mapa de sitio</a>
            <a class="link" href="contacto.php">   Contacto</a>
            <a class="link" href="Librocom.php"> Libro de Opiniones</a>
            <div class="sociales">
                <a class="icon-facebook2" href="#"></a>
                <a class="icon-twitter" href="#"></a>
                <a class="icon-instagram" href="#"></a>
                <a class="icon-google-plus3" href="#"></a>
            </div>
        </div>
    </footer>
    </body>
</body>
</html>