<?php
include("conectar.php");

//insertar registro
if (isset($_POST['registro'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['Celular'];
  $telefono = $_POST['Correo'];

  $insertar = "INSERT INTO registro_cliente (Nombre, Apellido, Celular, Correo) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";
  $resultado = mysqli_query($conectar, $insertar);
  if ($resultado) {
    echo "<script>alert('Registro exitoso');</script>";
  } else {
    echo "<script>alert('Error en el registro');</script>";
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

<form action="Registro_cliente.php" name="venta_bebidass" method="POST">
<label>Nombre</label>
<input type="text" name="Nombre" placecholder="Nombre">
<label>Apellido</label>
<input type="text" name="Apellido" placecholder="Apellido">
<label>Celular</label>
<input type="text" name="Celular" placecholder="Celular">
<label>Correo</label>
<input type="email" name="Correo" placecholder="Correo">
<input type="submit" name="registro_cliente" value="Registrar">
</form>
</body>
</html>



