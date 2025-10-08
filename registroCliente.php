<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="css/formulario.css">
</head>
<body>

  <form action="Registro_cliente.php" name="venta_bebidass" method="POST">
    <h1>Formulario de Registro</h1>

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="Nombre" placeholder="Tu nombre" required>

    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="Apellido" placeholder="Tu apellido" required>

    <label for="celular">Celular</label>
    <input type="text" id="celular" name="Celular" placeholder="Tu celular" required>

    <label for="correo">Correo</label>
    <input type="email" id="correo" name="Correo" placeholder="Tu correo electrónico" required>

    <button type="submit" name="registro">Registrar</button>
  </form>

</body>
</html>
