<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
    <title>Inicio</title>
    <style>
        #barra {
            height: 20%;
            font-size: 30px;
            padding: 25px;
        }

        li {
            padding: 15px;
        }

        .carousel {
            width: 100%;
            height: 40%;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar  navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark" id="barra">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img
                        src="https://caminoreal.com.gt/wp-content/uploads/2018/04/logo-westing_camino_real-e1522887041389.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="<?php echo base_url('ver_clientes') ?>">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('ver_hoteles') ?>">Hoteles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('ver_reservaciones') ?>">Reservaciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header><br><br>

    <main class="container ">
        <h1 class="text-center">Bienvenidos</h1><br><br>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/509957921.jpg?k=cd6cb6f7a90d9241592d3c5cd5a31d1fd3a0c9ce3ff0087e78b1c4ae710eb7f7&o=&hp=1"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/509957920.jpg?k=5ec1f23fa54c2188cd8eafbbebd64451366951a4356d76f221c20694a59da08c&o=&hp=1"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/462626476.jpg?k=99217f5c880d61a9498eaefdf48a2c248deb98723d9395a5ac93ec97d8aa5bc5&o=&hp=1"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>