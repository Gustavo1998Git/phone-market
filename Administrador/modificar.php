<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link rel="stylesheet" href="../CSS/tabla.css">
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="../CSS/animacion.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">

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

    </br>
</br>
</br>
</br>

<?php 
$nom=$_GET['Nombre'];
$nom2=$nom;
$mysql = new mysqli("localhost", "root", "", "phone-market");
$Query = "select * from productos where Nombre='".$nom."'";
$Result = $mysql->query( $Query );

while($row =$Result->fetch_array()) {	    
    ?>

   <form action="guardarCambios.php" target="" method="POST">
            <TABLE  ALIGN="CENTER"  style="margin: auto;" >
                <TR>
                    <th><strong>Id:</strong> </th>
                    <td><input type=text size=40 name="Id" value="<?php printf($row["Id"]); ?>"></td>
                </TR>
               
                <TR>
                    <th><strong>Nombre:</strong> </th>
                    <td><input type=text size=40 name="Nombre" value=" <?php printf($row["Nombre"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Descripcion:</strong> </th>
                    <td><input type=text size=40 name="Descripcion" value=" <?php printf($row["Descripcion"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Existencias: </strong> </th>
                    <td><input type=text size=40 name="Existencias" value=" <?php printf($row["Existencias"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Precio: </strong> </th>
                    <td><input type=text size=40 name="Precio" value=" <?php printf($row["Precio"]); ?>  "></td>
                </TR>
                 <TR>
                    <th><strong>Tipo: </strong> </th>
                    <td><input type=text size=40 name="Tipo" value=" <?php printf($row["Tipo"]); ?>  ">
                    <input type="hidden" name="nombrev" value="<?php printf($nom); ?>">
                    </td>
                </TR>
                
                
            </TABLE>
            <BR>
                <BR>
            <center> <input type=submit value="Modicar" id="boton"></center>
                        
        </form>
        
<?php	
}
 
?>


</body>
</html>
