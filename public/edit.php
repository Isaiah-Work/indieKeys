<?php
    include '../templates/headeradm.php';
?>

<div class="container mt-4">
    <h1 class="text-center fw-bold">UPDATE - Producto</h1>

    <form action="createaccept.php" enctype="multipart/form-data" method="POST" class="mt-4">
        <h2 class="fw-bold mb-4 text-center">Crear o Actualizar Producto</h2>

        <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input 
                type="text" 
                name="id_juego" 
                class="form-control" 
               >
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input 
                type="text"
                name="nombre" 
                class="form-control" 
                >
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea 
                name="descripcion" 
                class="form-control" 
                rows="3" 
                >
            </textarea>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input 
                type="number" 
                name="precio" 
                class="form-control"  
                >
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto (archivo):</label>
            <input 
                type="file" 
                name="foto" 
                class="form-control">
        </div>

        <div class="mb-3">
            <label for="inventario" class="form-label">Inventario:</label>
            <input 
                type="number" 
                name="inventario" 
                class="form-control" 
                >
        </div>

        <div class="mb-3">
            <label for="desarrollador" class="form-label">Desarrollador:</label>
            <input 
                type="text" 
                name="desarrollador" 
                class="form-control">
        </div>

        <div class="mb-3">
            <label for="plataforma" class="form-label">Plataforma:</label>
            <input 
                type="text" 
                name="plataforma" 
                class="form-control">
        </div>

        <div class="justify-content-center gap-3 mb-4 pb-4">
            <button type="submit" name="update" value="update" class="c-card__button btn ">
                Actualizar
            </button>
        </div>
    </form>
</div>
