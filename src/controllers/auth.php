<?php

    function verificarSesion(){
        session_start();

        if(!isset($_SESSION['id_usuario'])){
            header("Location: ../../public/login.php");
            exit();
        }
    }

?>