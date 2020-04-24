<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estiloDebusquedas.css">
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="CSS/estilocom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <h1 class="logo">Phone-Market</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
            <a href="Principal.php"><span>  <i class="fas fa-home"></i> Inicio </span>
           <a href="celulares.php"><span>  <i class="fas fa-mobile-alt"></i> Smarphones </span>
           <a href="tablets.php"><span> <i class="fas fa-tablet"></i>  Tablets </span>
           <a href="accesorios.php"><span> <i class="fas fa-headphones"></i> Accesorios</span>
           <a href="galeria.php"><span> <i class="fas fa-images"></i>  Galeria</span>
           <a href="busquedas.php"><span><i class="fas fa-search"></i>  Busqueda</span>
           <a href="carrito.php"><span><i class="fas fa-shopping-cart"></i> Carrito</span>
           <a href="cerrar_s.php"><span><i class="fas fa-user-circle"></i></span><?php echo $_SESSION['usuario'] ?> : Salir</a>
                               <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <main>
        <div class="uno">
            <form  action="tablaArt-1.php" method="post" target="_self">
                Introduce el movil que buscas 
                <input type="text" name="criterio"><br>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </form>
        </div>


       
        </div>

    </main>
    
   <?php
    include("pie.php");
   ?>
