<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class=" bg bg-secondary bg-gradient bg-opacity-50">
<header>
<div class="container mt-3">
  <div class="mt-4 p-5 bg-dark text-white rounded">
    <h1>Modificar datos del cliente</h1> 
  </div>
</header><br><br>

<main class="container">
    <form action="<?php echo base_url('modificar_hotel')?>" method="post" >
    <div class="mb-3">
            <label for="txtIdHotel" class="form-label">ID del hotel</label>
            <input type="number" class="form-control" name="txtIdHotel" id="txtIdHotel" value="<?=$datos['hotel_id']; ?>"  readonly>
        </div>

        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="<?=$datos['nombre']; ?>">
        </div>

        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" value="<?=$datos['correoelectronico']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" value="<?=$datos['telefono']; ?>">
        </div>

        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" value="<?=$datos['direccion']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtCiudadId" class="form-label">ID de Ciudad</label>
            <input type="number" class="form-control" name="txtCiudadId" id="txtCiudadId" value="<?=$datos['ciudad_id']; ?>">
        </div>

        <div class="mb-3">
            <label for="txtCategoriaId" class="form-label">ID de Categoría</label>
            <input type="number" class="form-control" name="txtCategoriaId" id="txtCategoriaId" value="<?=$datos['categoria_id']; ?>" >
        </div>

        <div class="mb-3">
            <label for="txtUsuarioId" class="form-label">ID de Usuario</label>
            <input type="number" class="form-control" name="txtUsuarioId" id="txtUsuarioId" value="<?=$datos['usuario_id']; ?>">
        </div>

        <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Modificar registro">
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>