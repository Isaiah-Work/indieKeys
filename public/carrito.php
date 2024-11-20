<?php
    include "../templates/header.php";
?>
    <form action="carritoadd.php" method="GET">
        <?php
            require "../src/controllers/conexion.php";

            
        ?>
            <input type="text" name="" id="">
        <button>Submit</button>
    </form>
<?php
    include "../templates/footer.php";
?>