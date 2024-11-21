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

                

                    <div>
                        <h2>Bienvenido a indieKeys</h2>
                        <p>Inicia con tu cuenta de indieKeys</p>
                    </div>
                    
                <div class="form-group">
                    <form action="loginaccept.php" method="POST">
                        <div class="mb-3">
                        <label for="" class="form-label">Username:</label>
                        <input class="form-control" type="text" name="username" id="">
                        </div>
                        <div class="mb-3">
                        <label class="form-label" for="">Password:</label>
                        <input class="form-control"type="password" name="password" id="">
                        </div>
                    <button>Iniciar Sesión</button>
                    </form>



                    <a href="register.php"><button>Crear Cuenta</button></a>
                </div>
        </div>
    </div>

<?php 
    include "../templates/footer.php"
?>