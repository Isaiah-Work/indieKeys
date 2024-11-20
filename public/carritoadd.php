<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../src/controllers/conexion.php";


session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: ../public/login.php');
}



$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_POST['id_juego'];

$checksql = "SELECT cantidad FROM carrito_compras WHERE id_producto = $id_producto;";
$res = mysqli_query($conexion, $checksql);

//Si no esta en el carrito agregarlo
if(mysqli_num_rows($res) == 0){
    $sql = "INSERT INTO carrito_compras (id_usuario, id_producto, cantidad) VALUES
        ($id_usuario, $id_producto, 1);";
    mysqli_query($conexion, $sql);
}else{
    // Guardamosen un array asociativo la tupla
    $row = mysqli_fetch_assoc($res);
    // Obtenemos del array asociativo el valor de la tupla para guardarla en una variable y sumarle 1
    $nueva_cantidad = $row['cantidad'] + 1;
    $othersql = "UPDATE carrito_compras SET cantidad = $nueva_cantidad 
                WHERE id_usuario = $id_usuario AND 
                id_producto = $id_producto;";
    mysqli_query($conexion, $othersql);
}

header('Location: /public/catalogo.php');




?>