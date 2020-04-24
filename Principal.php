<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fonts/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet"> 
   <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>

</head>

<body>

    <div class="header">
        <h1 class="logo">Phone-Market</h2>
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
           <a href="cerrar_s.php"><span><i class="fas fa-user-circle"></i>Salir</span>
                 </label>
            </ul>
    </div>


    <main>
        <script type="text/javascript">
            /* Fecha y Hora By Chivi */

            /* COMIENZA EL SCRIPT DEL RELOJ *
            function actualizaReloj() {

                /* CAPTURAMOS LA HORA, LOS MINUTOS Y LOS SEGUNDOS */
                marcacion = new Date()

                /* CAPTURAMOS LA HORA */
                Hora = marcacion.getHours()

                /* CAPTURAMOS LOS MINUTOS */
                Minutos = marcacion.getMinutes()

                /* CAPTURAMOS LOS SEGUNDOS */
                Segundos = marcacion.getSeconds()

                /* SI LA HORA, LOS MINUTOS O LOS SEGUNDOS 
                SIN MENORES O IGUAL A 9, LE AÑADIMOS UN 0 */

                if (Hora <= 9)
                    Hora = "0" + Hora

                if (Minutos <= 9)
                    Minutos = "0" + Minutos

                if (Segundos <= 9)
                    Segundos = "0" + Segundos
                    /* TERMINA EL SCRIPT DEL RELOJ */

                /* COMIENZA EL SCRIPT DE LA FECHA */
                var Dia = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",

                    "Domingo");
                var Mes = new

                    Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                var Hoy = new Date();
                var Anio = Hoy.getFullYear();
                var Fecha = "Orizaba Veracruz \n" + Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de  " + Anio + ".Hora local: ";
                /* TERMINA EL SCRIPT DE LA FECHA */

                /* CREAMOS 4 VARIABLES PARA DARLE FORMATO A NUESTRO SCRIPT */
                var Inicio, Script, Final, Total

                /* EN INICIO LE INDICAMOS UN COLOR DE FUENTE Y UN TAMAÑO */
                Inicio = " "

                /* EN RELOJ LE INDICAMOS LA HORA, LOS MINUTOS Y LOS SEGUNDOS */
                Script = Fecha + Hora + ":" + Minutos + ":" + Segundos

                /* EN FINAL CERRAMOS EL TAG DE LA FUENTE */
                Final = " "

                /* EN TOTAL FINALIZAMOS EL RELOJ UNIENDO LAS VARIABLES */
                Total = Inicio + Script + Final

                /* CAPTURAMOS UNA CELDA PARA MOSTRAR EL RELOJ */
                document.getElementById('Fecha_Reloj').innerHTML = Total

                /* INDICAMOS QUE NOS REFRESQUE EL RELOJ CADA 1 SEGUNDO */
                setTimeout("actualizaReloj()", 1000)
            }
        </script>

        </head>

        <body onload="actualizaReloj()">

            <table>
                <tr>
                    <td id="Fecha_Reloj"></td>
                </tr>
            </table>
            
            


            <section id="ban">
                <div class="slider">
                    <ul>

                        <li><img src="imagenes/3iphones.jpg"></li>
                        <li><img src="imagenes/2332993-5.jpg" alt=""></li>
                        <li><img src="imagenes/450_1000.jpg" alt=""></li>
                        <li><img src="imagenes/iphone11pro.jpg" alt=""></li>
                    </ul>
                </div>

            </section>

         
            <section id="info">
                <br/><br/>
                <h3>Lo más vendido</h3>
                
                <div class="contenedor">
                    <?php 
                        $mysql = new mysqli("localhost", "root", "", "phone-market");
                        $Query = "select Img,Nombre from productos order by rand() limit 4";
                        $Result = $mysql->query( $Query );
                        
                        
                             $numeroRegistros=$Result->num_rows;   if($numeroRegistros<=0) 
                           { 
                             echo "<div align='center'>"; 
                             echo "<h2>No se encontraron resultados</h2>"; 
                             echo "</div><hr> "; 
                           }else{
                            while($row =$Result->fetch_array()) {	
                    ?>

                    <div class="info-pet">
                        <a href="#"><?php printf("<img ".'src="todasim/'.$row["Img"].'" width="90" height="90"  alt=""/>'); ?></a>
                        <h4><?php printf($row["Nombre"]); ?> </h4>
                    </div>

                    <?php	}
                    }
                    ?>
                </div>
            </section>

            <section id="info2">
                <br/><br/>
                <a href="#">
                    <h3>Lo m&aacute;s nuevo</h3>
                </a>
                
                <div class="contenedor">
                    <?php 
                        $mysql = new mysqli("localhost", "root", "", "phone-market");
                        $Query = "select Img,Nombre,Precio from productos order by rand() limit 4";
                        $Result = $mysql->query( $Query );
                        
                        
                             $numeroRegistros=$Result->num_rows;   if($numeroRegistros<=0) 
                           { 
                             echo "<div align='center'>"; 
                             echo "<h2>No se encontraron resultados</h2>"; 
                             echo "</div><hr> "; 
                           }else{
                            while($row =$Result->fetch_array()) {
                    ?>

                    <div class="info-pet2">
                        <a href="#"><?php printf("<img ".'src="todasim/'.$row["Img"].'" width="80" height="80"  alt=""/>'); ?></a>
                        <h4><?php printf($row["Nombre"]); ?> <br/>  $ <?php printf($row["Precio"]);?> </h4>
                    </div>

                    <?php	}
                    }
                    ?>
                </div>

            </section>




    </main>
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

</html>