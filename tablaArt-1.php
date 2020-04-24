<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="CSS/estilotablaArt-1.css">
<link rel="stylesheet" href="CSS/estilos.css">
<link rel="stylesheet" href="CSS/lightbox.css">
<link rel="stylesheet" href="fonts/style.css">
<script src="CSS/lightbox.css" type="text/javascript"></script>
<script src="busqueda.js"></script>
<script src="https://kit.fontawesome.com/31c84912e2.js" crossorigin="anonymous"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Ladda/0.9.8/ladda.min.css'>
<link rel="stylesheet" href="CSS/carrito.css">
<link rel="stylesheet" href="CSS/estilocom.css">
<style>
       *{ 
           font-family: 'Quicksand', sans-serif;   
       } </style>
<title>Documento sin t&iacute;tulo</title>
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
           <a href="cerrar_s.php"><span><i class="fas fa-user-circle"></i></span><?php echo $_SESSION['usuario'] ?> : Salir</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
    </div>
    


<?php 
$cri=$_POST ['criterio'];

$mysql = new mysqli("localhost", "root", "", "phone-market");
$Query = "select Id,Nombre,Descripcion,Existencias,Precio,Img from Productos  WHERE Nombre LIKE '%".$cri."%'";
$Result = $mysql->query( $Query );


	$numeroRegistros=$Result->num_rows;
   if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
       <table id="regTable">
       <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th></th>

            </tr>

        </thead>

		
		</tr>
		<?php
        while($row =$Result->fetch_array()) {
            $id=$row["Id"];	 
            $nom=$row["Nombre"];   
           ?>
		   <tr>
		   <td><a href="Detalles.php?Nombre=<?php print($nom); ?>"> <?php print($nom); ?> </a>  </td>
		   <td> <?php printf($row["Descripcion"]); ?>   </td>
		   <td> <?php printf($row["Existencias"]); ?>   </td>
		   <td> <p>$<?php printf($row["Precio"]); ?>  </p> </td>
           <td> <?php printf("<img ".'src="todasim/'.$row["Img"].'" width="80" height="80"  alt=""/>'); ?>   </td>
           <td>
           <a href="carrito.php?id=<?php echo $id;?>" class="button green">
                            <span class="icon-cart"></span> Agregar
                        </a>
            </td>
		   

           </tr>
<?php	
        }
   }
?>
</table>
<section class="paginacion">
        <ul>
         <!--    <li><a href="tablaArt-1.php">0</a></li>
           <li><a href="tabla1.php">1</a></li>
            <li><a href="tabla2.php">2</a></li>
            <li><a href="tabla3.php">3</a></li>
            <li><a href="tabla4.php">4</a></li>
            <li><a href="tabla5.php">5</a></li>
            <li><a href="tabla6.php">6</a></li>
            <li><a href="tabla7.php">7</a></li>
            <li><a href="tabla8.php">8</a></li>-->
        </ul>
    </section>

    <?php
    include("pie.php");
   ?>
</body>
</html>