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
                    <h2>Crear Cuenta</h2>
                    <p>Crea tu propia cuenta de indieKeys para empezar a ganar puntos en tus compras.</p>

                    <form action="registeraccept.php" method="POST">
                        Usuario : <input type="text" name="username" id="">
                        Email :<input type="email" name="email" id="">
                        Password :<input type="password" name="password" id="">
                        Address: <input type="text" name="address" id="">
                        BDay :<input type="date" name="bday" id="">
                        

                        <button>Submit</button>
                        <p>Dando Click a "Crear Cuenta", soy consciente de las Politicas de Privacidad, 
                            Condiciones de Uso.</p>
                    </form>
                        <a href="login.php"><button>Inicia Sesión</button></a>
        </div>
    </div>

<?php 
    include "../templates/footer.php"
?>