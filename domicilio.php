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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.css'>
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/carrito.css">
    <link rel="stylesheet" href="CSS/registro.css">
    <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>
    <title> Domicilio</title>
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
        <h2 style="white-space: pre;"> Ingresa los datos para confirmar envio</h2>

        <div class="content">
            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <h3>Llena el formulario </h3>
                    <form action="AgregarDomicilio.php" target="" method="POST">
                    <p>
                            <label>Nombre</label>
                            <input type="text" name="nom" required>
                        </p>
                         <p>
                            <label>Apellido Paterno</label>
                            <input type="text" name="appat" required>
                        </p>
                         <p>
                            <label>Apellido Materno</label>
                            <input type="text" name="apmat" required>
                        </p>
                        <p>
                            <label>Dirección </label>
                            <input type="text" name="dir" required>
                        </p>
                        <p>
                            <label>Codigo Postal </label>
                            <input type="text" name="pos" required>
                        </p>
                        <p>
                            <label>Telefono</label>
                            <input type="text" name="tel"required>
                        </p>
                        <p>
                            <label>Titular de la tarjeta </label required>
                            <input type="text" name="titu">
                        </p>
                         <p>
                            <label>Cuenta</label>
                            <input type="number" name="cuen" required pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35d{3})d{11})$
">
                        </p>
                        <p>
                            <label>Fecha de Vencimiento</label>
                            <label for="mes">Mes:</label>
                            <select name="mes" name="mes" required>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <label for="anio">Año:</label>
                            <select name="anio" name="anio" required>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </select>
                        </p>
                        <p>
                            <label>Codigo CCV</label>
                            <input type="number" name="ccv"  required>
                        </p>
                    <p class="block">
                            <button >
                            <input type=submit value="Terminar compra" >
                            </button>
                           
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </section>

    </main>
    
   <?php
    include("pie.php");
   ?>

</body>

</html>