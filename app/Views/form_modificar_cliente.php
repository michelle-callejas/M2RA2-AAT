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
    <h1>Modificar datos cliente</h1> 
  </div>
</header><br><br>

<main class="container">
    <form action="<?= base_url('modificar_cliente')?>" method="post" >
        <div class="mb-3">
            <label for="txtIdCliente" class="form-label">ID de cliente</label>
            <input type="number" class="form-control" name="txtIdCliente" id="txtIdCliente"  value="<?=$datos['cliente_id'];?>" readonly>
        </div>

        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="<?=$datos['nombre'];?>">
        </div>

        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="txtApellido" id="txtApellido" value="<?= $datos['apellido'];?>">
        </div>


        <div class="mb-3">
            <label for="txtNit" class="form-label">NIT</label>
            <input type="number" class="form-control" name="txtNit" id="txtNit" value="<?= $datos['nit'];?>">
        </div>

        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" value="<?= $datos['telefono'];?>">
        </div>

        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" value="<?= $datos['correo_electronico'];?>">
        </div>
        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" value="<?=$datos['direccion'];?>">
        </div>
        <div class="mb-3">
            <label for="txtContra" class="form-label">Contraseña</label>
            <input type="text" class="form-control" name="txtContra" id="txtContra" value="<?=$datos['contrasenia'];?>">
        </div>


        <input type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-dark" value="Modificar registro">
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>