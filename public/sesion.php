<?php

    include "../templates/header.php";
    session_start();
    require "../src/controllers/conexion.php";
            if(!$conexion){
                die("Error de conexión: " . mysqli_connect_error());
            }
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
    $res = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_assoc($res);

    $sqlreq = "SELECT p.foto, p.nombre, h.cantidad, h.total FROM historial_compras h, producto p WHERE 
                id_producto = id_juego AND id_usuario = '$id_usuario'";

    $resreq = mysqli_query($conexion,$sqlreq);
    $tablaHistorial = mysqli_fetch_all( $resreq, MYSQLI_ASSOC);
?>
    <div class="c-container">
    <div class="container text-center">
        <div class="row">
            
            <div class="col-12 col-md-4 mb-4">
                <h2 class="text-center pt-4 pb-4 fw-bold">Sesión del usuario</h2>
                <h4>Nombre del Usuario</h4>
                <p><?php echo $row['usuario']; ?></p>
                <h4>Correo</h4>
                <p><?php echo $row['correo']; ?></p>
                <h4>Fecha de Nacimiento</h4>
                <p><?php echo $row['fecha_nac']; ?></p>
                <h4>Dirección</h4>
                <p><?php echo $row['direccion']; ?></p>
                <form action="closesession.php" method="POST">
                    <button class="c-card__button btn mb-4" name="btnAccion" value="Agregar" type="submit">
                        Cerrar Sesión
                    </button>
                </form>
            </div>


            <div class="col-12 col-md-8">
                <div class="table-responsive mt-4 mb-4">
                    <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tablaHistorial as $historial) { ?>
                                <tr>
                                    <td>
                                        <img 
                                            title="<?php echo $historial['nombre']; ?>"
                                            alt="<?php echo $historial['nombre']; ?>"
                                            class="img-fluid img-thumbnail"
                                            style="max-width: 100px; height: auto;" 
                                            src="data:image/jpeg;base64, <?php echo $historial['foto']; ?>">
                                    </td>
                                    <td>
                                        <h6><?php echo $historial['nombre']; ?></h6>
                                    </td>
                                    <td>
                                        <h6><?php echo $historial['cantidad']; ?></h6>
                                    </td>
                                    <td>
                                        <h6>$<?php echo ($historial['total']); ?></h6>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
 
    
<?php
    include "../templates/footer.php";
?>