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
    <?php 
        $id=$_REQUEST['ID'];
        $nombre=$_REQUEST['NomP'];
        $descrip=$_REQUEST['Descr'];
        $existencias=$_REQUEST['Exis'];
        $precio=$_REQUEST['Pre'];
        
        $nombreimg=$_FILES['imagen']['name'];
        
        $archivo=$_FILES['imagen']['tmp_name'];
        $ruta="../todasim/".$nombreimg;
        move_uploaded_file($archivo,$ruta);

        $tipo=$_REQUEST['Tipo'];

        $mysql = new mysqli("localhost", "root", "", "phone-market");
        $Query= "INSERT INTO productos  (Id,Nombre,Descripcion,Existencias,Precio,Img,Tipo) VALUES('".$id."','".$nombre."','".$descrip."','".$existencias."','".$precio."','".$nombreimg."','".$tipo."')";


        $Result = $mysql->query($Query);

        if($Result!=null){
            print("Su Registro Fue exitoso");
        }
        else{
            print("No se pudo agregar");

        }

	 
   ?>
</body>
</html>
