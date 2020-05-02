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
$Query = "select * from administradores where Nombre='".$nom."'";

$Result = $mysql->query( $Query );

while($row =$Result->fetch_array()) {	    
    ?>

   <form action="guardarCambiosAdmi.php" target="" method="POST">
  

            <TABLE  ALIGN="CENTER"  style="margin: auto;" >
              
                <TR>
                    <th><strong>Nombre:</strong> </th>
                    <td><input type=text size=40 name="Nombre" value=" <?php printf($row["Nombre"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Apellido Paterno:</strong> </th>
                    <td><input type=text size=40 name="APaterno" value=" <?php printf($row["APaterno"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Apellido Materno: </strong> </th>
                    <td><input type=text size=40 name="AMaterno" value=" <?php printf($row["AMaterno"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>CorreoElect: </strong> </th>
                    <td><input type=text size=40 name="CorreoElect" value=" <?php printf($row["CorreoElect"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Telefono: </strong> </th>
                    <td><input type=text size=40 name="Telefono" value=" <?php printf($row["Telefono"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Usuario: </strong> </th>
                    <td><input type=text size=40 name="Usuario" value=" <?php printf($row["Usuario"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Contraseña: </strong> </th>
                    <td><input type=text size=40 name="Contrasenia" value=" <?php printf($row["Contrasenia"]); ?>  "></td>
                </TR>
                <TR>
                    <th><strong>Tipo de Administrador: </strong> </th>
                    <td>
                        <input type=text size=40 name="tipo" value=" <?php printf($row["SocioOempleado"]); ?>  " readonly>
                        <select name="tipo" id="tipo">
                            <option value="Socio">Socio</option>
                            <option value="Empleado Administrador">Empleado Administrador</option>
                        </select>
                        <input type="hidden" name="nombrev" value="<?php printf($nom); ?>">

                    </td>
                </TR>

                

            </TABLE>
            <BR>
                <BR>
            <center> <input type=submit value="Modicar" Id="boton"></center>
                        
        </form>
        
<?php	
}
 
?>


</body>
</html>
