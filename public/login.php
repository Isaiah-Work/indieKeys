<?php 
    session_start();
    // Si la sesion ya esta iniciada entonces...
    if(isset($_SESSION['usuario'])){
        header('Location: ../public/sesion.php');
    }
    include "../templates/header.php"
?>

    <div class="c-container pt-5 pb-4">
        <div class="container text-center">
                <div class="form-group">

                    <h2>Bienvenido a indieKeys</h2>
                    <p>Inicia con tu cuenta de indieKeys</p>

                    <form action="loginaccept.php" method="POST">
                        Username:<input type="text" name="username" id="">
                        Password:<input type="password" name="password" id="">

                    <button>Iniciar Sesión</button>
                    </form>

                    <a href="register.php"><button>Crear Cuenta</button></a>
                </div>
        </div>
    </div>

<?php 
    include "../templates/footer.php"
?>