<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar reservacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=" bg bg-secondary bg-gradient bg-opacity-50">
<header>
<div class="container mt-3">
  <div class="mt-4 p-5 bg-dark text-white rounded">
    <h1>Modificar datos de la reservacion</h1> 
  </div>
</header><br><br>

<main class="container">
    <form action="<?php echo base_url('modificar_reservacion')?>" method="post" >
    <div class="mb-3">
            <label for="txtIdReservacion" class="form-label">ID de reservación</label>
            <input type="number" class="form-control" name="txtIdReservacion" id="txtIdReservacion" value="<?=$datos['reservacion_id']; ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="txtFecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="txtFecha" id="txtFecha" value="<?=$datos['fecha']; ?>">
        </div>

        <div class="mb-3">
            <label for="txtClienteId" class="form-label">ID de cliente</label>
            <input type="number" class="form-control" name="txtClienteId" id="txtClienteId" value="<?=$datos['cliente_id']; ?>">
        </div>


        <div class="mb-3">
            <label for="txtHotelId" class="form-label">ID del hotel</label>
            <input type="number" class="form-control" name="txtHotelId" id="txtHotelId" value="<?=$datos['hotel_id']; ?>">
        </div>

        <div class="mb-3">
            <label for="txtDescripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="txtDescripcion" id="txtDescripcion" value="<?=$datos['descripcion']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtUsuarioId" class="form-label">ID de usuario</label>
            <input type="number" class="form-control" name="txtUsuarioId" id="txtUsuarioId" value="<?=$datos['usuario_id']; ?>">
        <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Modificar registro">
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>