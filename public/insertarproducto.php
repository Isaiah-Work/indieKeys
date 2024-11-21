<?php
    include '../templates/headeradm.php';

    require '../src/controllers/conexion.php';


    $nombre =
    $descripcion = 
    $precio =
    $foto = 
    $inventario =
    $desarrollador =
    $plataforma =



    $sql = "INSERT INTO producto (nombre, descripcion, precio, foto, inventario, desarrollador, plataforma
            VALUES ($nombre, $descripcion, $descripcion, $foto, $inventario, $desarrollador, $plataforma);";
    
    if (empty($nombre) || empty($descripcion) || empty($precio) ||
    empty($foto) || empty($inventario) || empty($desarrollador) ||
    empty ($plataforma)){
        die("Completa el campo faltante");
    } else { 
        mysqli_query($conexion, $sql);
    }
    
    

    


?>