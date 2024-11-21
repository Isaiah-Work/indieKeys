<?php

 
require "../src/controllers/conexion.php";

// Verificar que el usuario este logeado
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: ../public/login.php');
}

// Logica de adición de productos
$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_POST['id_juego'];

// Hacer el Select del carrito de compras para los productos
$checksql = "SELECT cantidad FROM carrito_compras WHERE id_producto = $id_producto;";
$res = mysqli_query($conexion, $checksql);

// Verificar que boton se acciono: Catalogo, Agregar Producto, Quitar Producto.
if(isset($_POST['btnAccion'])){

    //Si no esta en el carrito agregarlo
    if(mysqli_num_rows($res) == 0){
        $sql = "INSERT INTO carrito_compras (id_usuario, id_producto, cantidad) VALUES
            ($id_usuario, $id_producto, 1);";
        mysqli_query($conexion, $sql);

    }else{ 

    //Si esta en el carrito añadir en la columna 
    // Se guarda en un array asociativo la tupla
    $row = mysqli_fetch_assoc($res);
    /* Obtenemos del array asociativo el valor de la tupla
     para guardarla en una variable y sumarle 1 */
        $nueva_cantidad = $row['cantidad'] + 1;
        $othersql = "UPDATE carrito_compras SET cantidad = $nueva_cantidad 
                WHERE id_usuario = $id_usuario AND 
                id_producto = $id_producto;";
        mysqli_query($conexion, $othersql);
    }

    header('Location: ../public/catalogo.php');

}elseif(isset($_POST['btnAccionSumar'])){
    // Modificar la cantidad de Productos a comprar
    $row = mysqli_fetch_assoc($res);
    $nueva_cantidad = $row['cantidad'] + 1;
    $othersql = "UPDATE carrito_compras SET cantidad = $nueva_cantidad 
                WHERE id_usuario = $id_usuario AND 
                id_producto = $id_producto;";
    mysqli_query($conexion, $othersql);

    header('Location: /public/carrito.php');

}elseif (isset($_POST['btnAccionRestar'])) {

    $row = mysqli_fetch_assoc($res);
    // SI es mayor a 1 entonces restale 1 
    if ($row['cantidad'] > 1 ) {
        $nueva_cantidad = $row['cantidad'] - 1;
        $othersql = "UPDATE carrito_compras SET cantidad = $nueva_cantidad 
                WHERE id_usuario = $id_usuario AND 
                id_producto = $id_producto;";
        mysqli_query($conexion, $othersql);
    // De otro modo, quitar la tupla
    }else{
        $othersql = "DELETE FROM carrito_compras 
        WHERE id_producto = $id_producto;";
        mysqli_query($conexion, $othersql);
        
    }
    
    header('Location: /public/carrito.php');
}










?>