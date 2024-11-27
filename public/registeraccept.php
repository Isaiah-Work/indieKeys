<?php
    require "../src/controllers/conexion.php";
    if(!$conexion){
        die("Error de conexión: " . mysqli_connect_error());
    }


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


    //Registro en la tabla
    $sql = "INSERT INTO usuario (usuario, correo, contrasena, fecha_nac, direccion) VALUES 
            ('$username', '$email', '$password_hash', '$bday', '$address');";

    // Verificar Si la conexión fue exitosa y subirla
    if (mysqli_query($conexion, $sql)) {
        echo "Usuario registrado exitosamente.";
        session_start();
        $sqllogin = "SELECT * FROM usuario WHERE usuario = '$username'";
        $reslogin = mysqli_query($conexion, $sqllogin); 
        $usuarioData = mysqli_fetch_array($reslogin);
        $_SESSION['usuario'] = $usuarioData['usuario'];
        $_SESSION['correo'] = $usuarioData['correo'];
        $_SESSION['id_usuario'] = $usuarioData['id_usuario'];

    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
    

    mysqli_close($conexion);
    header('Location: /public/login.php');
    exit;
?>