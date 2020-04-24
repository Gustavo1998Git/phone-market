<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <a href="Principal.php"><span class="icon-home"></span> Inicio</a>
                <a href="celulares.php"><span class="icon-mobile"></span>Smartphones</a>
                <a href="tablets.php"><span class="icon-tablet"></span>Tablets</a>
                <a href="accesorios.php"><span class="icon-headphones"></span>Accesorios</a>
                <a href="galeria.php"><span class="icon-images"></span>Galeria</a>
                <a href="busquedas.php" class="icon-search"></span>Buscar</a>
                <a href="carrito.php" class="icon-cart"></span>Carrito</a>
                <a href="cerrar_s.php"><span class="icon-user"></span> <?php echo $_SESSION['usuario'] ?> : Salir</a>
                

                <label for="chk" class="hide-menu-btn">
                                <i class="fas fa-times"></i>
                              </label>
            </ul>
    </div>


    <main>
        <div style="font-size: 40px; text-align: center; color:blueviolet;">
            <p>Mapa de sitio</p>
        </div>

        <div style="padding: 0px; float: right; right:50px ; width: 45%; text-align: justify;">
            <p><a href="#">Accesorios</a></p><br/>
            <ul>
                <li><a href="#">Nuevos productos</a></li>
                <li><a href="#">LMás vendido</a></li>
                <li><a href="#">Ofertas</a></li>

            </ul>
            <br/><br/><br/>

            <p><a href="#">Ingresar</a></p><br/>
            <ul>
                <li><a href="#">Registrarse</a></li>
                <li><a href="#">Recuperar contraseña</a></li>


            </ul>
            <br/><br/><br/>
            <p><a href="#">Redes</a></p><br/>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twiter</a></li>

            </ul>
            <br/><br/><br/>
        </div>

        <div style="padding: 10px; float: right; width: 45%; text-align: justify;">
            <p><a href="#">Inicio</a></p><br/>
            <ul>
                <li><a href="#">Nuevos productos</a></li>
                <li><a href="#">LMás vendido</a></li>
                <li><a href="#">Ofertas</a></li>

            </ul>
            <br/><br/><br/>

            <p><a href="#">Telefonos y Smartphone</a></p><br/>
            <ul>
                <li><a href="#">Nuevos productos</a></li>
                <li><a href="#">LMás vendido</a></li>
                <li><a href="#">Ofertas</a></li>

            </ul>
            <br/><br/><br/>
            <p><a href="#">Tablets</a></p><br/>
            <ul>
                <li><a href="#">Nuevos productos</a></li>
                <li><a href="#">LMás vendido</a></li>
                <li><a href="#">Ofertas</a></li>

            </ul>
            <br/><br/><br/>
        </div>

        <br/><br/><br/><br/><br/>
    </main>
    <?php
    include("pie.php");
   ?>

</body>

</html>