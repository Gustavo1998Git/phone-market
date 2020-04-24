<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/estilocom.css">

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


                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <main>
        <h2>Iniciar Sesion</h2>
        <form name=form action="validarL.php" target="" method="POST">
            <div class="imgcontainer">
                <img src="imagenes/avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Usuario</b></label>
                <input id="usuario" name="usuario" type="text" class="Input" value="" size="20" />
                <label for="psw"><b>Contraseña</b></label>
                <input id="contra" name="contra" type="password" class="Input" value="" size="20" />
                <input value="Entrar" type="submit" class="boton" />
            </div>
            <div class="der">

                <span>Eres nuevo, <a href="Registrarse.php"> registrate.</a></span> </br>
                <span>Has olvidado la <a href="#"> contraseña?</a></span>
            </div>
        </form>
    </main>
    <?php
    include("pie.php");
   ?>
</body>

</html>