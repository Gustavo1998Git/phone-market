<?php 
session_start();
include("conexion.php");
if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero=0;
    for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['Id']==$_GET['id']){
            $encontro=true;
            $numero=$i;

        }
    }
    if($encontro==true){
        $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
        $_SESSION['carrito']=$arreglo;
    }else{
        $nombre="";
        $precio=0;
        $img="";
        $re=mysqli_query($con,"select * from productos where Id=".$_GET['id']);
        while ($f=mysqli_fetch_array($re)){
            $nombre=$f['Nombre'];
            $precio=$f['Precio'];
            $img=$f['Img'];
        }
        $datosNuevos=array('Id'=>$_GET['id'],
                         'Nombre'=>$nombre,
                         'Precio'=>$precio,
                         'Img'=>$img,
                         'Cantidad'=>1);
        array_push($arreglo,$datosNuevos);
        $_SESSION['carrito']=$arreglo;
    }
 }
}else{
    if(isset($_GET['id'])){
        $nombre="";
        $precio=0;
        $img="";
        $re=mysqli_query($con,"select * from productos where Id=".$_GET['id']);
        while ($f=mysqli_fetch_array($re)){
            $nombre=$f['Nombre'];
            $precio=$f['Precio'];
            $img=$f['Img'];
        }
        $arreglo[]=array('Id'=>$_GET['id'],
                         'Nombre'=>$nombre,
                         'Precio'=>$precio,
                         'Img'=>$img,
                         'Cantidad'=>1);
        $_SESSION['carrito']=$arreglo;
    }

}
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>
    <title>Document</title>

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

    <?php
    $tol=0;
    if(isset($_SESSION['carrito'])){
        $datos=$_SESSION['carrito'];
        
        $tol=0;
        for($i=0;$i<count($datos);$i++){
            ?>
    
       <div class="producto">
            <center>
                <img src="todasim/<?php echo $datos[$i]['Img'];?>"><br>
                <span>Nombre: <?php echo $datos[$i]['Nombre'];?> </span><br>
                <span>Precio: <?php echo $datos[$i]['Precio'];?> </span><br>
                <span>
                Cantidad: 
                <input type="text" style="width: 50px; border: 3px solid; " value="<?php echo $datos[$i]['Cantidad'];?>"
                 data-precio="<?php echo $datos[$i]['Precio'];?>"
                 data-id="<?php echo $datos[$i]['Id'];?>"
                 class="cantidad">
                </span><br>
                <span class="subtotal">Subtotal: <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad']?> </span><br>
                <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id'] ?>">Eliminar</a>
            </center>            
       </div>
        <?php

            $tol=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$tol;
        }

    }else{
        echo '<center><h2>El carrito esta vacio</h2></center>';
    }
       
    echo '<center><h2 id="tol">Total:'.$tol.'</h2></center>';
    if($tol!=0){
        echo'<center><a href="domicilio.php" class="aceptar">Comprar</a></center>';
    }
    ?>

        </div>
  </section>


    </main>
 
    <?php
    include("pie.php");
   ?>


    
</body>

</html>
