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
</head>
<body>

    

    <nav class="c-header navbar navbar-expand-md navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="">
                <img clas="img" height="40" src="../public/images/Rocky_Linux_Logo.svg" alt="Company Logo">    
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

                <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Steam</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link " href="../public/catalogo.php" tabindex="-1" aria-disabled="true">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/carrito.php">
                        <i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i> Mi carrito
                    </a>
                </li>
                <li class="nav-item mr-5 pr-5">
                    <a href="../public/login.php" class="nav-link">Login</a>
                </li>
                </ul>

            <!--Barra de Busqueda-->
                <!-- <form class="d-flex">

                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="c-header__button btn mr-5" type="submit">Search</button>

                </form> -->

          </div>
        </div>
</nav>