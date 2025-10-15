<?php
session_start();
include("conexion.php"); // Archivo donde conectas a tu BD

// Inicializar carrito si no existe
if(!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Agregar producto al carrito
if(isset($_POST['agregar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Revisar si el producto ya está en el carrito
    if(isset($_SESSION['carrito'][$id])){
        $_SESSION['carrito'][$id]['cantidad'] += $cantidad;
    } else {
        $_SESSION['carrito'][$id] = array(
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        );
    }
}

// Eliminar producto del carrito
if(isset($_GET['eliminar'])){
    $id = $_GET['eliminar'];
    unset($_SESSION['carrito'][$id]);
}

// Vaciar carrito
if(isset($_GET['vaciar'])){
    $_SESSION['carrito'] = array();
}

// Guardar venta
if(isset($_POST['comprar'])){
    $total = 0;
    foreach($_SESSION['carrito'] as $id => $producto){
        $total += $producto['precio'] * $producto['cantidad'];
    }

    // Guardar venta en BD
    $sql = "INSERT INTO ventas (fecha, total) VALUES (NOW(), $total)";
    mysqli_query($conn, $sql);
    $venta_id = mysqli_insert_id($conn);

    foreach($_SESSION['carrito'] as $id => $producto){
        $nombre = $producto['nombre'];
        $precio = $producto['precio'];
        $cantidad = $producto['cantidad'];
        $subtotal = $precio * $cantidad;
        mysqli_query($conn, "INSERT INTO venta_detalle (venta_id, nombre, precio, cantidad, subtotal) VALUES ($venta_id, '$nombre', $precio, $cantidad, $subtotal)");
    }

    // Vaciar carrito
    $_SESSION['carrito'] = array();

    header("Location: recibo.php?id=$venta_id");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrito de Compras</title>
<style>
body{font-family:Arial,sans-serif;background:#f5f5f5;margin:0;padding:20px;color:#333;}
h1{text-align:center;}
table{width:100%;border-collapse:collapse;margin-top:20px;}
th, td{padding:10px;border:1px solid #ccc;text-align:center;}
button{padding:5px 10px;margin:5px;background:#28a745;color:#fff;border:none;cursor:pointer;}
button:hover{background:#218838;}
</style>
</head>
<body>
<h1>Carrito de Compras</h1>

<?php if(count($_SESSION['carrito']) == 0): ?>
    <p>Tu carrito está vacío.</p>
<?php else: ?>
<form method="post">
<table>
    <tr>
        <th>Producto</th>
        <th>Precio (Bs)</th>
        <th>Cantidad</th>
        <th>Subtotal (Bs)</th>
        <th>Acción</th>
    </tr>
    <?php 
    $total = 0;
    foreach($_SESSION['carrito'] as $id => $producto): 
        $subtotal = $producto['precio'] * $producto['cantidad'];
        $total += $subtotal;
    ?>
    <tr>
        <td><?php echo $producto['nombre']; ?></td>
        <td><?php echo $producto['precio']; ?></td>
        <td><?php echo $producto['cantidad']; ?></td>
        <td><?php echo $subtotal; ?></td>
        <td><a href="?eliminar=<?php echo $id; ?>">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3"><strong>Total</strong></td>
        <td colspan="2"><strong><?php echo $total; ?> Bs</strong></td>
    </tr>
</table>
<br>
<button type="submit" name="comprar">Comprar</button>
<a href="?vaciar=1"><button type="button">Vaciar Carrito</button></a>
</form>
<?php endif; ?>
</body>
</html>
