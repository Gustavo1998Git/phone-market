<?php

    $mysql = new mysqli("localhost", "root", "", "phone-market");
            $Query= "INSERT INTO quienrecibe  (Nombre, APaterno, AMaterno, Direccion, CP, Telefono, TitularCard, Cuenta, FechaVencimiento, CodigoCCV)VALUES ('".$_POST["nom"]."','".$_POST["appat"]."','".$_POST["apmat"]."','".$_POST["dir"]."','".$_POST["pos"]."','".$_POST["tel"]."','".$_POST["titu"]."','".$_POST["cuen"]."','".$_POST["mes"]."/".$_POST["anio"]."','".$_POST["ccv"]."')";

    $Result = $mysql->query( $Query );

    if($Result!=null){
        header("Location:compras.php");

    }
    else{
        echo '<script language="javascript">alert("No se pudo agregar");</script>';
   
    }

	 
   ?>