<?php
//Reportar errores del tipo http
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Iniciar Sesion
session_start();

require "../src/controllers/conexion.php";
if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
}

// Limpiar datos 
$username = mysqli_real_escape_string($conexion, $_POST['username']);
$password = mysqli_real_escape_string($conexion, $_POST['password']);

// Verificacion
if(empty($username) || empty($password)){
    echo "Debe rellenar todos los campos.";
    header('Location: /public/login.php');
    exit;
}


$sql = "SELECT * FROM usuario WHERE usuario = '$username';";
$res = mysqli_query($conexion, $sql);

if(mysqli_num_rows($res) == 1) {
    $usuario = mysqli_fetch_assoc($res);
    // checar contraseña
    if(password_verify($password, $usuario['contrasena'])){
        $_SESSION['usuario'] = $username;
        $_SESSION['correo'] = $usuario['correo'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        echo "Inicio de sesión existoso. Bienvenido $username. Tu email es " . $_SESSION['correo'];
        header('Location: /public/catalogo.php');
        exit;
    }else{
        echo "Contraseña incorrecta.";
        header('Location: /public/login.php');
        exit;
    }
} else{
    echo "Usuario no encontrado.";
    header('Location: /public/login.php');
    exit;
}

mysqli_close($conexion);



?>