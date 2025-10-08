<?php
include("conectar.php");

// Obtener productos

if (isset($_POST['productos'])) {
    $resultado = $conexion->query("SELECT * FROM inventario ORDER BY id ASC")

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inventario</title>
<style>
body { font-family: Arial; padding: 20px; background: #f5f5f5; }
table { border-collapse: collapse; width: 100%; background: #fff; }
th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
th { background: #333; color: white; }
</style>
</head>
<body>
<h1>Inventario de Productos</h1>
<table>
<tr>
<th>id</th>
<th>nombre_producto</th>
<th>precio</th>
<th>stock</th>
</tr>
<?php while($row = $resultado->fetch_assoc()){ ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['nombre_producto']) ?></td>
<td><?= number_format($row['precio'],2) ?></td>
<td><?= $row['stock'] ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>
<?php $conexion->close(); ?>

