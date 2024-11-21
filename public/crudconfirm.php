<?php

    require '../src/controllers/conexion.php';

    // CREATE Pedir todos los valores del formulario
    $id_juego = mysqli_real_escape_string($conexion, $_POST['id_juego']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
    $foto = mysqli_real_escape_string($conexion, $_FILES['foto']);
    $imagenBase64 = base64_encode($foto);
    $inventario = mysqli_real_escape_string($conexion, $_POST['inventario']);
    $desarrollador = mysqli_real_escape_string($conexion, $_POST['desarollador']);
    $plataforma = mysqli_real_escape_string($conexion, $_POST['plataforma']);

    $id_delete = mysqli_real_escape_string($conexion, $_POST['id_delete']);

    $id_search = mysqli_real_escape_string($conexion, $_POST['id_search']);
    $nombre_search = mysqli_real_escape_string($conexion, $_POST['nombre_search']);
    
    // Verificación de Errores



    if(isset($_POST['create'])){

        // Verificación de campos faltantes
        if (empty($nombre) || empty($descripcion) || empty($precio) ||
        empty($foto) || empty($inventario) || empty($desarrollador) ||
        empty ($plataforma)){

            // Regresar Mensaje de error

        }else{

            $sql = "INSERT INTO producto (nombre, descripcion, precio, foto, inventario, desarollador, plataforma) 
                VALUES ($nombre, $descripcion, $precio, $imagenBase64, $inventario, $desarrollador, $plataforma);";

            $res = mysqli_query($conexion, $sql);
        }

    }elseif(isset($_POST['update'])){
       
        // Verificar si hay campos vacios
        if (empty($nombre) || empty($descripcion) || empty($precio) ||
        empty($foto) || empty($inventario) || empty($desarrollador) ||
        empty ($plataforma)){

            // Los campos vacios dejarlos como el DEFAULT

        }

        // Hacer el update
        $sql = "UPDATE producto SET nombre = $nombre, descripcion = $descripcion, precio = $precio
                foto = $foto, inventario = $inventario, desarrollador = $desarrollador, plataforma = $plataforma
                WHERE id_juego = $id_juego;";
        
        $res = mysqli_query($conexion, $sql);
    }elseif (isset($_POST['delete'])) {

        // Hacer la validación si existe ese producto

        $sql = "DELETE FROM producto WHERE id_juego = $id_delete;";
        $res = mysqli_query($conexion, $sql);

    }elseif(isset($_POST['read'])){

        $sql = "SELECT * FROM producto WHERE id_juego = $id_search;";
        $res = mysqli_query($conexion, $sql);
    }
?>