<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/contacto.css">
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
        <section>
            <h2> Contactanos</h2>
            </br>
        </section>


        <div class="content">
            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <h3>Escribenos</h3>
                    <form action="">
                        <p>
                            <label>Nombre</label>
                            <input type="text" name="fullname">
                        </p>
                        <p>
                            <label>Email </label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Telefono</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="affair">
                        </p>
                        <p class="block">
                            <label>Mensaje</label>
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
                    </form>
                </div>

                <?php 

$mysql = new mysqli("localhost", "root", "", "phone-market");
$Query = "select * from Contacto";
$Result = $mysql->query( $Query );


	$numeroRegistros=$Result->num_rows;
   if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
   }else{
       ?>
       <div class="contact-info">
        <h4>Para más informacion, contactanos en nuestras sucursales  </h4>
            <?php
 
            while($row =$Result->fetch_array()) {	    
             ?>               
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <?php printf($row["Lugar"]); ?> </li>
                        <li><i class="fas fa-phone"></i>  <?php printf($row["Telefono"]); ?> </li>
                        <li><i class="fas fa-envelope-open-text"></i> <?php printf($row["Correo"]); ?> </li>
                        <li> <?php printf($row["Direccion"]); ?> </li>
                    </ul>
      
            
                   
                <?php	
                        }
                }
                ?>
                     </div>
                </div>

        </div>

    </main>
    <?php
    include("pie.php");
   ?>

</body>

</html>