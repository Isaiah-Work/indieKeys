<?php
    include '../templates/header.php';
?>

    <h1>CRUD - Producto</h1>

    <!-- Formulario para Crear o Actualizar -->
    <form action="producto_crud.php" method="POST">
        <h2>Crear o Actualizar Producto</h2>
        <label for="id">ID (solo para actualizar):</label>
        <input type="text" id="id" name="id_juego" placeholder="Dejar vacío para crear"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <label for="foto">Foto (URL):</label>
        <input type="file" id="foto" name="foto"><br><br>

        <label for="inventario">Inventario:</label>
        <input type="number" id="inventario" name="inventario" required><br><br>

        <label for="desarrollador">Desarrollador:</label>
        <input type="text" id="desarrollador" name="desarrollador"><br><br>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma"><br><br>

        <button type="submit" name="create" value="create">Crear</button>
        <button type="submit" name="update" value="update">Actualizar</button>
    </form>

    <hr>

    <!-- Formulario para Eliminar -->
    <form action="producto_crud.php" method="POST">
        <h2>Eliminar Producto</h2>
        <label for="delete_id">ID del Producto:</label>
        <input type="text" id="delete_id" name="id_delete" required><br><br>
        <button type="submit" name="delete" value="delete">Eliminar</button>
    </form>

    <hr>

    <!-- Formulario para Leer -->
    <form action="producto_crud.php" method="GET">
        <h2>Buscar Producto</h2>
        <label for="search_id">ID del Producto (Dejar vacío para ver todos):</label>
        <input type="text" id="search_id" name="id_search"><br><br>
        <label for="search_id">Nombre del Producto:</label>
        <input type="text" id="search_id" name="nombre_search"><br><br>
        <button type="submit" name="read" value="read">Buscar</button>
    </form>