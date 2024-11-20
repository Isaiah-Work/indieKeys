<?php
/*Verificar conexión con la Base de Datos*/ 
// Datos de la conexión
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'TiendaEnLinea';
    
    // mysqli_connect habilita la conexión con labase
    $conexion = mysqli_connect($host, $user, $pass, $db);
    
    // Verificación de conexion
    
    if (!$conexion) {
        die("Error de conexión a MySQL: " . mysqli_connect_error());
    }
?>
