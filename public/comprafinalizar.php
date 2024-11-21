<?php

session_start();

require "../src/controllers/conexion.php";

if(!$conexion){
    die("Error de conexión: " . mysqli_connect_error());
}
$id_usuario = ($_SESSION['id_usuario']);
$sql = "SELECT c.id_producto, p.nombre, p.precio, c.cantidad FROM carrito_compras as c, producto as p 
        WHERE id_usuario = $id_usuario AND p.id_juego = c.id_producto;";
$res = mysqli_query($conexion, $sql);
$carritoProductos = mysqli_fetch_all($res, MYSQLI_ASSOC);

foreach ($carritoProductos as $compra){
    $id_producto = $compra['id_producto'];
    $cantidad = $compra['cantidad'];
    $total = $cantidad * $compra['precio'];
    $sql = "INSERT INTO historial_compras (id_usuario, id_producto, cantidad, total) VALUES
            ('$id_usuario', '$id_producto', '$cantidad', '$total');";
    if (mysqli_query($conexion, $sql)) {
        echo "Producto creado exitosamente.";
    } else {
        echo "Error al crear el producto: " . mysqli_error($conexion);
    }
}


// Insertar compras
// Borrar Tabla de Carrito con el id
$sql = "DELETE FROM carrito_compras WHERE id_usuario = '$id_usuario';";
if (mysqli_query($conexion, $sql)) {
    echo "Producto creado exitosamente.";
} else {
    echo "Error al crear el producto: " . mysqli_error($conexion);
}
mysqli_close($conexion);
?>