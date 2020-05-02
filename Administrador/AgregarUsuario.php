<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="../CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">
    <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>
    <title>Inicio</title>
  

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
    <div style="width: 1000px; height: 500px;"> 
</br></br></br></br>
<?php 



$mysql = new mysqli("localhost", "root", "", "phone-market");
         $Query= "INSERT INTO administradores  (Nombre,APaterno,AMaterno,CorreoElect,Telefono,Usuario,Contrasenia,SocioOempleado)VALUES ('".$_POST["nom"]."','".$_POST["appat"]."','".$_POST["apmat"]."','".$_POST["cor"]."','".$_POST["tel"]."','".$_POST["usu"]."','".$_POST["con"]."','".$_POST["tipo"]."')";

$Result = $mysql->query( $Query );

if($Result!=null){
   	print("Su Registro Fue exitoso, puede iniciar sesion");
}
else{
  	print("No se pudo agregar");

}

	 
   ?>
</div>
 </body>
</body>
</html>