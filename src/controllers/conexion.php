<?php
/*Verificar conexión con la Base de Datos*/ 
// Datos de la conexión
$host = 'localhost';
$user = '';
$pass = '';
$db = '';

// mysqli_connect habilita la conexión con labase
$conexion = mysqli_connect($host, $user,$pass, $db)

// Verificación de conexion

if(mysqli_connect_errno()){
    echo "Error al conectar a MYSQL: " . mysqli_connect_errno();
    exit();
}


try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false)
                );
    echo "<script>alert('Conectado...')</script>";
} catch (PDOException $e) {
    echo "<script>alert('Error...')</script>";
}

?>