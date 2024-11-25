<?php
    include '../templates/headeradm.php';
?>

<div class="container text-center mt-4">
    <h1 class="fw-bold">DELETE - Producto</h1>

    <form action="deleteaccept.php" method="POST" class="mt-4">
        <h2 class="fw-bold">Eliminar Producto</h2>
        <div class="mb-3">
            <label for="delete_id" class="form-label">ID del Producto:</label>
            <input 
                type="text" 
                name="id_delete" 
                class="form-control" 
                placeholder="Ingrese el ID del Producto" 
                required>
        </div>
        <button type="submit" name="delete" value="delete" class="c-card__button btn ">
            Eliminar
        </button>
    </form>
</div>
