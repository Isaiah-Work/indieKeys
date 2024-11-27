<?php
    include '../templates/headeradm.php';
?>

<body>
    

<div class="container-fluid mt-5">
        <div class=" p-5 text-center ">
            <h1 class="fw-bold mb-4" ">Panel de Administración</h1>
            <p class="mb-5">
                Bienvenido al lugar donde puedes gestionar todos los productos de IndieKeys. Realiza operaciones de creación, edición y eliminación de productos de forma rápida y sencilla.
            </p>

            <div class="d-grid gap-4 d-md-flex justify-content-center">
                <a href="create.php" class="c-card__button btn btn-lg">Agregar Producto</a>
                <a href="edit.php" class="c-card__button btn btn-lg">Editar Producto</a>
                <a href="delete.php" class="c-card__button btn btn-lg">Eliminar Producto</a>
                <a href="read.php" class="c-card__button btn btn-lg">Historial de Compras</a>
            </div>
        </div>
    </div>

</body>
    <?php include '../templates/footer.php'; ?>