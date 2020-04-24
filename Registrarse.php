<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/registro.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <div class="header">
        <h1 class="logo">Phone-Market</h1>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
                        <i class="fas fa-ellipsis-h"></i>
                   </label>
        <ul class="menu">
            <a href="index.html"><span class="icon-home"></span> Inicio</a>
            <a href="login.html"><span class="icon-user"></span>Ingresar</a>
            <label for="chk" class="hide-menu-btn">
                            <i class="fas fa-times"></i>
                         </label>
        </ul>
    </div>


    <main>
        <section>
            <h2> Registrate</h2>
            </br>
        </section>


        <div class="content">
            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <h3>Llena el formulario de datos</h3>
                    <form action="AgregarUsuario.php" target="" method="POST">
                        <p>
                            <label>Nombre</label>
                            <input type="text" name="nom">
                        </p>
                         <p>
                            <label>Apellido Paterno</label>
                            <input type="text" name="appat">
                        </p>
                         <p>
                            <label>Apellido Materno</label>
                            <input type="text" name="apmat">
                        </p>
                        <p>
                            <label>Correo Electronico </label>
                            <input type="email" name="cor">
                        </p>
                        <p>
                            <label>Telefono</label>
                            <input type="tel" name="tel">
                        </p>
                        <p>
                            <label>Usuario</label>
                            <input type="text" name="usu">
                        </p>
                         <p>
                            <label>Contraseña</label>
                            <input type="password" name="con">
                        </p>
                    <p class="block">
                            <button>
                                Registrarme
                            </button>
                        </p>
                    </form>
                </div>
            </div>

        </div>

    </main>
  
    <?php
    include("pie.php");
   ?>


</body>

</html>