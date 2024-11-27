<?php 
    session_start();
    // Si la sesion ya esta iniciada entonces...
    if(isset($_SESSION['usuario'])){
        header('Location: ../public/sesion.php');
    }
    include "../templates/header.php"
?>

<div class="c-container pt-5 pb-5">
    <div class="container text-center">

        <div class="mb-4">
            <h2 class="fw-bold">Bienvenido a indieKeys</h2>
            <p>Inicia sesión con tu cuenta</p>
        </div>

        <div class="form-group mx-auto" style="max-width: 400px;">
            <form action="loginaccept.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input class="form-control" type="text" name="username" placeholder="Introduce tu usuario" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password:</label>
                    <div class="input-group">
                        <input class="form-control" type="password" name="password"  placeholder="Introduce tu contraseña" required>
                    </div>
                </div>

                
                <button class="c-card__button btn w-100 mt-3 mb-3" type="submit">Iniciar Sesión</button>
            </form>
            <p>ó</p>
            <a href="register.php" class="c-card__button btn w-100 ">Crear Cuenta</a>
        </div>

    </div>
</div>


<?php 
    include "../templates/footer.php"
?>