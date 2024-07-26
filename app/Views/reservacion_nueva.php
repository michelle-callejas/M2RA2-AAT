<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva reservacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #barra {
            height: 20%;
            font-size: 30px;
            padding: 25px;
        }
    </style>
</head>
<body class=" bg bg-secondary bg-gradient bg-opacity-50">
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
                        <a class="nav-link " aria-current="page"
                            href="<?php echo base_url('ver_clientes') ?>">Clientes</a>
                    </li>
                    <li class="nav-item active">
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

<main class="container">
    <h1>Nueva reservación</h1><br><br>
    <form action="agregar_reservacion" method="post" >
        <div class="mb-3">
            <label for="txtIdReservacion" class="form-label">ID de reservación</label>
            <input type="number" class="form-control" name="txtIdReservacion" id="txtIdReservacion">
        </div>

        <div class="mb-3">
            <label for="txtFecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="txtFecha" id="txtFecha">
        </div>

        <div class="mb-3">
            <label for="txtClienteId" class="form-label">ID de cliente</label>
            <input type="number" class="form-control" name="txtClienteId" id="txtClienteId">
        </div>


        <div class="mb-3">
            <label for="txtHotelId" class="form-label">ID del hotel</label>
            <input type="number" class="form-control" name="txtHotelId" id="txtHotelId">
        </div>

        <div class="mb-3">
            <label for="txtDescripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion">
        </div>
        <div class="mb-3">
            <label for="txtUsuarioId" class="form-label">ID de usuario</label>
            <input type="number" class="form-control" name="txtUsuarioId" id="txtUsuarioId">
        </div>


        <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Enviar nuevo registro">
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>