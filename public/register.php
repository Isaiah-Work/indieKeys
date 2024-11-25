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
        <div class="form-group mx-auto" style="max-width: 400px;">
            <div class="mb-4">
                <h2 class="fw-bold">Crear Cuenta</h2>
                <p>Crea tu propia cuenta de indieKeys para empezar a ganar puntos en tus compras.</p>
            </div>
            <form action="registeraccept.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuario:</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Introduce tu nombre de usuario">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Introduce tu email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Introduce tu contraseña">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Dirección:</label>
                    <input class="form-control" type="text" name="address" id="address" placeholder="Introduce tu dirección">
                </div>
                <div class="mb-3">
                    <label for="bday" class="form-label">Fecha de nacimiento:</label>
                    <input class="form-control" type="date" name="bday" id="bday">
                </div>
                <button class="c-card__button btn w-100 mt-3 mb-3" type="submit">Crear Cuenta</button>
            </form>
            <p class="mt-2">Dando click en "Crear Cuenta", soy consciente de las <a href="#">Políticas de Privacidad</a> y <a href="#">Condiciones de Uso</a>.</p>
            <p>ó</p>
            <a href="login.php" class="c-card__button btn w-100 ">Inicia Sesión</a>
        </div>
    </div>
</div>

<?php 
    include "../templates/footer.php"
?>