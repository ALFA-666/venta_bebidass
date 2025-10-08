<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Productos</title>
  <link rel="stylesheet" href="css/registroProductos.css">
</head>
<body>

  <div class="contenedor-formulario">
    <form action="Registro_productos.php" name="venta_bebidass" method="POST">
      <h1>Registro de Producto</h1>

      <label for="id">ID Producto</label>
      <input type="text" id="id" name="id" placeholder="Ingrese el ID del producto" required>

      <label for="nombre_producto">Nombre del Producto</label>
      <input type="text" id="nombre_producto" name="nombre_producto" placeholder="Nombre del producto" required>

      <label for="precio">Precio</label>
      <input type="text" id="precio" name="precio" placeholder="Ingrese el precio" required>

      <label for="stock">Stock</label>
      <input type="text" id="stock" name="stock" placeholder="Ingrese el stock" required>

      <button type="submit" name="Guardar">Guardar</button>
    </form>
  </div>

</body>
</html>
