<?php
include("conexion.php");

if (isset($_POST['registro'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $celular = $_POST['Celular'];


  $insertar = "INSERT INTO clientes (Nombre, Apellido, Celular)
               VALUES ('$nombre', '$apellido', '$celular')";
  $resultado = mysqli_query($conectar, $insertar);

  if ($resultado) {
    echo "<script>alert('✅ Registro exitoso');</script>";
  } else {
    echo "<script>alert('❌ Error en el registro');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
</head>
<body>

<h1><a href="inventario.php">Ir a inventario</a></h1>

<form action="index.php" method="POST">
  <label>Nombre</label>
  <input type="text" name="nombre" placeholder="Nombre">

  <label>Apellido</label>
  <input type="text" name="apellido" placeholder="Apellido">

  <label>Celular</label>
  <input type="text" name="Celular" placeholder="Celular">

  <label>Correo</label>
  <input type="email" name="Correo" placeholder="Correo">

  <button type="submit" name="registro">Registrar</button>
</form>

</body>
</html>


