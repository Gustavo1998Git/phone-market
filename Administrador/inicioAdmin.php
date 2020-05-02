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


    <main>
        <script type="text/javascript">
            /* Fecha y Hora By Chivi */

            /* COMIENZA EL SCRIPT DEL RELOJ */
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


            <h1>Bienvenido Administrador</h1>

            

            <section id="info">
                <br/><br/>
                <h3>Opciones de Productos</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <a href="../Administrador/AgregarP.php">
                        <img src="../imagenes/agregar.png" alt=""></a>
                        <h4>Agregar</h4>
                    </div>
                    <div class="info-pet">
                        <a href="../Administrador/modifica.php">
                        <img src="../imagenes/modificar.jpg" alt=""></a>
                        <h4>Modificar</h4>
                    </div>
                    <div class="info-pet">
                        <a href="../Administrador/eliminar.php">
                        <img src="../imagenes/eliminar.jpg" alt=""></a>
                        <h4>Eliminar</h4>
                  
                </div>
            </section>

            <section id="info2">
                <br/><br/>
                <h3>Opciones de UsuarioAdministrador</h3>
                <div class="contenedor">
                    <div class="info-pet">
                        <a href="../Administrador/Registrarse.php">
                        <img src="../imagenes/agregarUsu.jpg" alt=""></a>
                        <h4>Agregar nuevo administrador</h4>
                    </div>
                    <div class="info-pet">
                        <a href="../Administrador/modificaAdmi.php">
                        <img src="../imagenes/modificarUsu.jpg" alt=""></a>
                        <h4>Modificar Administrador</h4>
                    </div>
                    <div class="info-pet">
                        <a href="../Administrador/eliminarAdmi.php">
                        <img src="../imagenes/eliminarUsu.jpg" alt=""></a>
                        <h4>Eliminar Administrador</h4>
                  
                </div>
            </section>

            



    </main>
   

    </body>

</html>