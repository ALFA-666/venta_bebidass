<?php
connection_aborted( );
include("config/conectar.php");
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conectar, $consulta);
if (!$resultado) {
 
       die("Error en la consulta: " . mysqli_error($conectar));

    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color:rgb(199, 38, 38);
        }
    </style>
</head>
<body>
    <h1>Inventario de Productos</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>precio</th>
                <th>stock</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                    <td><?php echo $fila['stock']; ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

