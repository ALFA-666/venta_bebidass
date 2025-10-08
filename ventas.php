<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Ventas</title>
  <link rel="stylesheet" href="css/registroVentas.css">
</head>
<body>

  <div class="contenedor-formulario">
    <form action="Registro_ventas.php" name="registro_venta" method="POST">
      <h1>Registro de Venta</h1>

      <label for="id_venta">ID de Venta</label>
      <input type="text" id="id_venta" name="id_venta" placeholder="Ingrese el ID de la venta" required>

      <label for="id_producto">ID del Producto</label>
      <input type="text" id="id_producto" name="id_producto" placeholder="ID del producto" required>

      <label for="cantidad">Cantidad</label>
      <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad vendida" required>

      <label for="precio_venta">Precio de Venta</label>
      <input type="text" id="precio_venta" name="precio_venta" placeholder="Precio del producto" required>

      <label for="total">Total</label>
      <input type="text" id="total" name="total" placeholder="Total de la venta" required readonly>

      <button type="submit" name="guardar_venta">Registrar Venta</button>
    </form>
  </div>

</body>
</html>
