<?php
    include '../templates/headeradm.php';
?>

<div class="container text-center mt-4">
    <h1 class="fw-bold">READ - Producto</h1>

    <form action="read.php" method="GET" class="mt-4">
        <h2 class="fw-bold">Historial de compras de cada Usuario</h2>
        <div class="input-group mt-3 mb-3">
            <input type="text" name="id_usuario" class="form-control" placeholder="Ingrese ID del Usuario" required>
            <button type="submit" class="c-card__button btn ">Subir</button>
        </div>
    </form>

    <?php
        require "../src/controllers/conexion.php";
        if(!$conexion){
            die("Error de conexión: " . mysqli_connect_error());
        }

        
        if(isset($_GET['id_usuario'])){
            $id_usuario = mysqli_real_escape_string($conexion, $_GET['id_usuario']);
        }else{$id_usuario = null;}
        

        if ($id_usuario) {
            $sqlreq = "SELECT p.foto, p.nombre, h.cantidad, h.total FROM historial_compras h, producto p WHERE 
                        id_producto = id_juego AND id_usuario = '$id_usuario'";
            $resreq = mysqli_query($conexion, $sqlreq);
            $tablaHistorial = mysqli_fetch_all($resreq, MYSQLI_ASSOC);
        } else {
            $tablaHistorial = [];
        }
    ?>

    <?php if (!empty($tablaHistorial)) { ?>
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
                                    src=" <?php echo 'imagenesServidor/' . $historial['foto']; ?>">
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
    <?php } else { ?>
        <p class="mt-4">No se encontraron resultados para el ID ingresado.</p>
    <?php } ?>
</div>
