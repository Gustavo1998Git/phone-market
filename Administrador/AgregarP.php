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
    <link rel="stylesheet" href="../CSS/estilocom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="../CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">
     <title>Inicio</title>
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
                <a href="../Administrador/inicioAdmin.php"><span class="icon-home"></span> Inicio</a>
                <a href="../cerrar_s.php"><span class="icon-user"></span> <?php echo $_SESSION['usuario'] ?> : Salir</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                  </label>
            </ul>
    </div>





 <h1>Agregar producto - Administrador </h1> 
 <br>

 <form action="agregar.php" method="POST">

    <p> <h2>ID</h2> <input type="text" name="ID"></p>
    <p> <h2>Nombre del producto</h2> <input type="text" name="NomP"></p>
    <p> <h2>Descripcion</h2> <input type="text" name="Descr"></p>
    <p> <h2>Existencias</h2> <input type="text" name="Exis"></p>
    <p> <h2>Precio</h2> <input type="text" name="Pre"></p>
    <p> <h2>Imagen</h2> 

 <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
 <input type="file" name="imagen" accept="image/gif,image/png,image/jpg"  />
 <!--<p> <label>Imagen Informacion</label>
 <form name="subida-imagenes" type="POST" enctype="multipart/formdata" ><input type="file" name="imagen" />-->

 <p> <h2>Tipo:Celular/Tablet/Accesorios</h2> <input type="text" name="Tipo"></p>
     <input type="submit" value="Agregar Producto" id="boton">

 </form>



</body>
</html>