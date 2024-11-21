<?php
    //Reportar errores del tipo http
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    
    require "../src/controllers/conexion.php";
    if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
    }

    //Registro de usuario

    // Limpiar datos
    $username = mysqli_real_escape_string($conexion, $_POST['username']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $password = trim($_POST['password']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $bday = ($_POST['bday']);
    $address = mysqli_real_escape_string($conexion, $_POST['address']);

    // Verificar email y usuarios unicos
    $sqlcheck = "SELECT * FROM usuario 
                WHERE usuario = '$username' OR correo = '$email';";
    $res = mysqli_query($conexion, $sqlcheck);

    if(mysqli_num_rows($res) > 0){
        echo "Ya existe un correo o usuario.";
        exit;
    }

    if (empty($username) || empty($email) || empty($password) || empty($bday) || empty($address)) {
        
    }
    
    // Hacer la verificación de los datos usuario y correo único


    //Registro en la tabla
    $sql = "INSERT INTO usuario (usuario, correo, contrasena, fecha_nac, direccion) VALUES 
            ('$username', '$email', '$password_hash', '$bday', '$address');";

    // Verificar Si la conexión fue exitosa y subirla
    if (mysqli_query($conexion, $sql)) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    header('Location: /public/login.php');
    exit;
?>