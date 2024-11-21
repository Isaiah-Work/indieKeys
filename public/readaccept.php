<?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    
        require '../src/controllers/conexion.php';
    
        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }
    
        
        $id_search = mysqli_real_escape_string($conexion, $_POST['id_search']);
        $nombre_search = mysqli_real_escape_string($conexion, $_POST['nombre_search']);
        $sql = "SELECT * FROM producto WHERE id_juego = $id_search;";
        $res = mysqli_query($conexion, $sql);
?>