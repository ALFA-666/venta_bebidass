<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Recibo</title>
  <link rel="stylesheet" href="css/recibo.css">
</head>
<body>

  <div class="contenedor-formulario">
    <form action="Registro_recibo.php" name="registro_recibo" method="POST">
      <h1>Generar Recibo</h1>

      <label for="id_recibo">ID de Recibo</label>
      <input type="text" id="id_recibo" name="id_recibo" placeholder="ID del recibo" required>

      <label for="nombre_cliente">Nombre del Cliente</label>
      <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre del cliente" required>

      <label for="monto_pago">Monto Pagado</label>
      <input type="text" id="monto_pago" name="monto_pago" placeholder="Monto pagado" required>

      <label for="fecha_pago">Fecha de Pago</label>
      <input type="date" id="fecha_pago" name="fecha_pago" required>

      <label for="metodo_pago">Método de Pago</label>
      <select name="metodo_pago" id="metodo_pago" required>
        <option value="">Seleccione método de pago</option>
        <option value="Efectivo">Efectivo</option>
        <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
        <option value="Transferencia">Transferencia</option>
      </select>

      <button type="submit" name="generar_recibo">Generar Recibo</button>
    </form>
  </div>

</body>
</html>
