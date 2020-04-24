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
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/carrito.css">
    <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>


    <title>Carrito de compras</title>
</head>

<body>
<div class="header">
        <h1 class="logo">Phone-Market</h1></br>
      
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                  <i class="fas fa-ellipsis-h"></i>
                </label>

            <ul class="menu">
            <a href="Principal.php"><span><i class="fas fa-home"></i>Inicio</span>
           <a href="celulares.php"><span><i class="fas fa-mobile-alt"></i>Smarphones </span>
           <a href="tablets.php"><span><i class="fas fa-tablet"></i>Tablets</span>
           <a href="accesorios.php"><span><i class="fas fa-headphones"></i>Accesorios</span>
           <a href="galeria.php"><span><i class="fas fa-images"></i>Galeria</span>
           <a href="busquedas.php"><span><i class="fas fa-search"></i>Busqueda</span>
           <a href="carrito.php"><span><i class="fas fa-shopping-cart"></i>Carrito</span>
           <a href="cerrar_s.php"><span><i class="fas fa-user-circle"></i></span><?php echo $_SESSION['usuario'] ?> : Salir</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>
    <main>
        <section>
            <div class="collection">

            <?php

                $mysql = new mysqli("localhost", "root", "", "phone-market");
                $Query = "select Id, Nombre, Img, Precio from productos where Tipo='accesorios'";
                $Result = $mysql->query( $Query );


                    $numeroRegistros=$Result->num_rows;
                if($numeroRegistros<=0) 
                { 
                    echo "<div align='center'>"; 
                    echo "<h2>No se encontraron resultados</h2>"; 
                    echo "</div><hr> "; 
                }else{
                    while($row =$Result->fetch_array()) {	
                        $id=$row["Id"];
                        $nom=$row["Nombre"]; 
                ?>

                <article>
                    <figure>
                        <figcaption><a href="Detalles.php?Nombre=<?php print($nom); ?>"> <?php print($nom); ?> </a></figcaption>
                        <?php printf("<img ".'src="todasim/'.$row["Img"].'" alt=""/>'); ?>
                        <p>$ <?php printf($row["Precio"]); ?></p>
                        <a href="carrito.php?id=<?php echo $id;?>" class="button green">
                            <span class="icon-cart"></span> Agregar
                        </a>
                    </figure>
                </article>

                <?php	
                        }
                }
                ?>

                </div>
        </section>

        </main>
   
  <?php
    include("pie.php");
   ?>


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?ver=1.11.2'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/spin.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.js'></script>
    <script src="scripts/carrito.js"></script>
</body>

</html>
