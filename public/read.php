
<h1> READ - Producto</h1>
<!-- Formulario para Leer -->
<form action="crudconfirm.php" method="GET">
        <h2>Buscar Producto</h2>
        <label for="search_id">ID del Producto (Dejar vacío para ver todos):</label>
        <input type="text" id="search_id" name="id_search"><br><br>
        <label for="search_id">Nombre del Producto:</label>
        <input type="text" id="search_id" name="nombre_search"><br><br>
        <button type="submit" name="read" value="read">Buscar</button>
</form>