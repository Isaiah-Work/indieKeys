<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../src/controllers/conexion.php';

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // CREATE Pedir todos los valores del formulario
    $id_juego = mysqli_real_escape_string($conexion, $_POST['id_juego'] ?? '');
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
    $inventario = mysqli_real_escape_string($conexion, $_POST['inventario']);
    $desarrollador = mysqli_real_escape_string($conexion, $_POST['desarrollador']);
    $plataforma = mysqli_real_escape_string($conexion, $_POST['plataforma']);
    
    $imagenBase64 = null;

    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
        $imagenBase64 = base64_encode($foto);
    }
    
    if(isset($_POST['create'])){
            $sql = "INSERT INTO producto (nombre, descripcion, precio, foto, inventario, desarrollador, plataforma) 
                    VALUES ('$nombre', '$descripcion', $precio, '$imagenBase64', $inventario, '$desarrollador', '$plataforma')";

            $res = mysqli_query($conexion, $sql);
            if (mysqli_query($conexion, $sql)) {
                echo "Producto creado exitosamente.";
            } else {
                echo "Error al crear el producto: " . mysqli_error($conexion);
            }
            mysqli_close($conexion);
        //}

    }elseif(isset($_POST['update'])){
        if(!empty($id_juego)) {
            $sql = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio',
                foto = '$imagenBase64', inventario = '$inventario', desarrollador = '$desarrollador', plataforma = '$plataforma'
                WHERE id_juego = '$id_juego';";
            if (mysqli_query($conexion, $sql)) {
                echo "Producto actualizado exitosamente.";
            } else {
                echo "Error al actualizar el producto: " . mysqli_error($conexion);
            }
        }else {
            echo "ID de juego no proporcionado para la actualización.";
        }
        mysqli_close($conexion);
    }
    
    
?>