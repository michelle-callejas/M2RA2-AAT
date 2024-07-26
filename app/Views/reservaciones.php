<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Reservaciones</title>
    <style>
        #barra {
            height: 20%;
            font-size: 30px;
            padding: 25px;
        }
    </style>
</head>


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
</header>

<main class="container">
    <h1 class="text-center">Reservaciones</h1>
    <a href="nueva_reservacion" class="btn btn-dark">Agregar reservacion</a><br><br>
    <table class="table table-dark">
        <thead class="text-center">
            <tr>
                <th>ID reservación</th>
                <th>Fecha</th>
                <th>Cliente ID</th>
                <th>Hotel ID</th>
                <th>Descripción</th>
                <th>Usuario ID</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $reservacion):
                ?>
                <tr>
                    <td><?php echo $reservacion['reservacion_id']; ?></td>
                    <td><?php echo $reservacion['fecha']; ?></td>
                    <td><?php echo $reservacion['cliente_id']; ?></td>
                    <td><?php echo $reservacion['hotel_id']; ?></td>
                    <td><?php echo $reservacion['descripcion']; ?></td>
                    <td><?php echo $reservacion['usuario_id']; ?></td>
                    <td>
                        <a href="<?= base_url('buscar_reservacion/') . $reservacion['reservacion_id'] ?>" class="btn btn-success "> <i <i
                                class="bi bi-pencil">Actualizar</i>
                            <a href="<?= base_url('eliminar_reservacion/') . $reservacion['reservacion_id'] ?>" class="btn btn-danger ">
                                <i class="bi bi-x-circle-fill">Eliminar</i>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>