<?php
//Reportar errores del tipo http
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Iniciar Sesion
session_start();

require "../src/controllers/conexion.php";

$username = mysqli_real_escape_string($conexion, $_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE usuario = '$username';";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);
    // checar contraseña
    if(password_verify($password, $usuario['contrasena'])){
        $_SESSION['usuario'] = $username;
        $_SESSION['correo'] = $usuario['correo'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        echo "Inicio de sesión existoso. Bienvenido $username. Tu email es " . $_SESSION['correo'];
        header('Location: /public/catalogo.php');
    }else{
        echo "Contraseña incorrecta.";
        header('Location: /public/login.php');
    }
} else{
    echo "Usuario no encontrado.";
    header('Location: /public/login.php');
}

mysqli_close($conexion);



?>