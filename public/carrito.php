<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require "../src/controllers/auth.php";
    verificarSesion();
    
    include "../templates/header.php";
?>
    <div class="c-container">
    <div class="container ">
        <h2>Carrito de Compras</h2>
        <?php 
            require "../src/controllers/conexion.php";
            session_start();
            $id_usuario = $_SESSION['id_usuario'];
            $sql = "SELECT p.nombre, p.precio, c.cantidad FROM carrito_compras as c, producto as p 
                    WHERE id_usuario = $id_usuario AND p.id_juego = c.id_producto;";
            $res = mysqli_query($conexion, $sql);
            $carritoProductos = mysqli_fetch_all($res, MYSQLI_ASSOC);

            foreach ($carritoProductos as $producto){?>

            <p>NOMBRE PRODUCTO: <?php echo $producto['nombre'];?></p>
            <p>PRECIO : <?php echo $producto['precio'];?></p>
            <p>CANTIDAD:</p>
            <label for=""> - </label><?php echo $producto['cantidad'];?><label for="">+</label>

        <?php } ?>

        
    </div>  
    </div>
<?php
    include "../templates/footer.php";
?>