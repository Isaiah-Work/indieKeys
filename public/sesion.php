<?php

    include "../templates/header.php";

?>
    <h2>Pagina de Usuario</h2>

    <form action="closesession.php" method="POST">
        <button name="btnAccion" value="Agregar" type="submit">Cerrar Sesion</button>
    </form>
<?php
    include "../templates/footer.php";
?>