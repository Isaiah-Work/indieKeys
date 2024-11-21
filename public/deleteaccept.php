<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../src/controllers/conexion.php';

    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $id_delete = mysqli_real_escape_string($conexion, $_POST['id_delete']);
    // Hacer la validación si existe ese producto

    $sql = "DELETE FROM producto WHERE id_juego = $id_delete;";
    $res = mysqli_query($conexion, $sql);
    echo "Se pudo hacer el delete";
?>