<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../public/css/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
</head>
<body>

    

    <nav class="c-header navbar navbar-expand-md navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="../index.php">
             <h2>indieKeys</h2><!--<img clas="img" height="40" src="../public/images/Rocky_Linux_Logo.svg" alt="Company Logo">     -->
            </a>
           
            <!--Menu de hamburguesa en el Breakpoint md-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#custom-navbar" aria-controls="custom-navbar" 
            aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!--Items de La lista-->
            <div class="collapse navbar-collapse" id="custom-navbar">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item">
                    <a class="nav-link " href="../public/create.php" tabindex="-1" aria-disabled="true">Insertar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/edit.php"> Modificar Producto</a>
                </li>
                <li class="nav-item mr-5 pr-5">
                    <a href="../public/delete.php" class="nav-link">Eliminar Producto</a>
                </li>
                <li class="nav-item mr-5 pr-5">
                    <a href="../public/read.php" class="nav-link">Historial de compras</a>
                </li>
                </ul>

          </div>
        </div>
</nav>