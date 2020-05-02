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
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../CSS/tabla.css">
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

<h1>Eliminar Administrador </h1>
<br><br><br>
<h2>Haga clic en el Nombre del Administrador a eliminar</h2>
<br><br><br>
<?php 
$mysql = new mysqli("localhost", "root", "", "phone-market");
$Query = "select * from administradores";
$Result = $mysql->query( $Query );
	 $numeroRegistros=$Result->num_rows;   if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
       <table  style="margin: auto;">
		<?php
        while($row =$Result->fetch_array()) {
            $nom=$row["Nombre"];
           
           ?>
		   <tr>
		   <td> <a href="eliminacionAdmi.php?Nombre=<?php print($nom); ?>"> <?php print($nom); ?> </a>  </td>
		   
           </tr>
<?php	
}
}
?>
</table>
</body>
</html>
