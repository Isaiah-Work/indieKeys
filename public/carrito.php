<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "../src/controllers/auth.php";
    verificarSesion();
    
    include "../templates/header.php";
?>

<div class="c-container">
    <div class="container">
        <h2 class="text-center pt-4 fw-bold ">Carrito de Compras</h2>

        <?php 
            require "../src/controllers/conexion.php";
            if(!$conexion){
                die("Error de conexión: " . mysqli_connect_error());
            }

            $id_usuario = ($_SESSION['id_usuario']);
            $sql = "SELECT c.id_producto, p.nombre, p.precio, c.cantidad, p.foto 
                    FROM carrito_compras as c, producto as p 
                    WHERE id_usuario = $id_usuario AND p.id_juego = c.id_producto;";
            $res = mysqli_query($conexion, $sql);
            $carritoProductos = mysqli_fetch_all($res, MYSQLI_ASSOC); // Array Asociativo 
        ?>
        
        <div class="container mt-4">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Imagen</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($carritoProductos as $producto) { ?>
                            <form action="carritoadd.php" method="POST">
                                <input type="hidden" name="id_juego" value="<?php echo $producto['id_producto']; ?>">  
                                <tr>
                                    <td>
                                        <img 
                                            title="<?php echo $producto['nombre']; ?>"
                                            alt="<?php echo $producto['nombre']; ?>"
                                            class="img-fluid img-thumbnail"
                                            style="max-width: 100px; height: auto;" 
                                            src="data:image/jpeg;base64, <?php echo $producto['foto']; ?>">
                                    </td>
                                    <td>
                                        <h6><?php echo $producto['nombre']; ?></h6>
                                    </td>
                                    <td>
                                        <h6><?php echo $producto['cantidad']; ?></h6>
                                    </td>
                                    <td>
                                        <h6>$<?php echo ($producto['cantidad'] * $producto['precio']); ?></h6>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Modificar cantidad">
                                            <button name="btnAccionRestar" value="Restar" type="submit" class="btn btn-danger btn-sm">-</button>
                                            <button name="btnAccionSumar" value="Sumar" type="submit" class="btn btn-success btn-sm">+</button>
                                        </div>
                                    </td>
                                </tr>    
                            </form>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-4 pb-4">
            <form action="comprafinalizar.php" method="POST">
                <button name="btnComprar" class="c-card__button btn ">Finalizar Compra</button>
            </form>
        </div>
    </div>
</div>
<?php
    include "../templates/footer.php";
?>