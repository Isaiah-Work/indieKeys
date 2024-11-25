<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../src/controllers/conexion.php';

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
    
        // CREATE Pedir todos los valores del formulario
        $id_juego = mysqli_real_escape_string($conexion, $_POST['id_juego'] ?? '');
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
        $inventario = mysqli_real_escape_string($conexion, $_POST['inventario']);
        $desarrollador = mysqli_real_escape_string($conexion, $_POST['desarrollador']);
        $plataforma = mysqli_real_escape_string($conexion, $_POST['plataforma']);
        
        $imagen = $_FILES['foto'];

        $carpetaImagen = __DIR__ . '/imagenesServidor/';

        // Verifica si la carpeta existe
        if (!is_dir($carpetaImagen)) {
            die("La carpeta '$carpetaImagen' no existe. Por favor, crea la carpeta o verifica la ruta.");
        }

        // Verifica si el script tiene permisos de escritura
        if (!is_writable($carpetaImagen)) {
            die("La carpeta '$carpetaImagen' no tiene permisos de escritura.");
        }

        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        move_uploaded_file($imagen['tmp_name'],  $carpetaImagen . $nombreImagen);


    }
    
    if(isset($_POST['create'])){
            $sql = "INSERT INTO producto (nombre, descripcion, precio, foto, inventario, desarrollador, plataforma) 
                    VALUES ('$nombre', '$descripcion', '$precio', '$nombreImagen ', '$inventario', '$desarrollador', '$plataforma')";

            
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
                 foto = '$nombreImagen', inventario = '$inventario', desarrollador = '$desarrollador', plataforma = '$plataforma'
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