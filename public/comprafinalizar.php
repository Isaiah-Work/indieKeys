<?php
    session_start();

    require "../src/controllers/conexion.php";

    if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
    }

    $id_usuario = ($_SESSION['id_usuario']);

    $sql = "SELECT c.id_producto, p.nombre, p.precio, c.cantidad, p.inventario FROM carrito_compras as c, producto as p 
            WHERE id_usuario = $id_usuario AND p.id_juego = c.id_producto;";
    $res = mysqli_query($conexion, $sql);

    $carritoProductos = mysqli_fetch_all($res, MYSQLI_ASSOC);

    foreach ($carritoProductos as $compra){
        $id_producto = $compra['id_producto'];
        $cantidad = $compra['cantidad'];
        $inventario = $compra['inventario'];
        $total = $cantidad * $compra['precio'];

    
        // Si hay suficiente inventario entonces
        if($inventario >= $cantidad ){

            $sql = "INSERT INTO historial_compras (id_usuario, id_producto, cantidad, total) VALUES
                ('$id_usuario', '$id_producto', '$cantidad', '$total');";

            if (mysqli_query($conexion, $sql)) {
                echo "Se Realizo la compra exitosamente.";

                // Actualizar inventario
                $nueva_cantidad = $inventario - 1;
                $sqlupdate = "UPDATE producto SET inventario = $nueva_cantidad 
                                WHERE id_juego = '$id_producto';";
                    if(mysqli_query($conexion, $sqlupdate)){
                        echo "Se resto en el stock '$nueva_cantidad'";
                        $_SESSION['alerta'] = "Compra finalizada";
                    } else {
                        echo "Error al eliminar un producto";
                    }
            } else {
                    echo "Error al crear el producto: " . mysqli_error($conexion);
            }
        } else {
            $_SESSION['alerta'] = "No hay suficiente inventario de " . $compra['nombre'];
            header('Location: carrito.php');
            exit;
        }

        }
        // Borrar Tabla de Carrito con el id
        $sql = "DELETE FROM carrito_compras WHERE id_usuario = '$id_usuario';";
        if (mysqli_query($conexion, $sql)) {
            echo "Se elimino la tabla";
        } else {
            echo "Error al eliminar los producto: " . mysqli_error($conexion);
        }

        mysqli_close($conexion);
        header('Location: catalogo.php');
        exit;
?>