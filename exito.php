<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estiloCel.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="CSS/estilocom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.css'>
    <link rel="stylesheet" href="CSS/carrito.css">



    
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
                <a href="celulares.php"><span class="icon-mobile"></span>Teléfonos y smartphones</a>
                <a href="tablets.php"><span class="icon-tablet"></span>Tablets</a>
                <a href="accesorios.php"><span class="icon-headphones"></span>Accesorios</a>
                <a href="galeria.php"><span class="icon-images"></span>Galeria</a>
                <a href="busquedas.php" class="icon-search"></span>Buscar</a>
                <a href="cerrar_s.php"><span class="icon-user"></span>Salir</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <main>

    <h1>Compra Exitosa</h1>
</main>
<?php
    include("pie.php");
   ?>

   
</body>

</html>
