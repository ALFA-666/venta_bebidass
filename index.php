<?php
$servidor = "localhost";
$usuario= "root";
$clave = "";
$baseDeDatos = "archivos";
$enlace =mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
</head>
<body>

</form action="#" name="archivos" method="post">

<input type="text" name="nombre" placecholder="nombre">
<input type="email" name="correo" placecholder="correo">
<input type="text" name="telefono" placecholder="telefono">

<input type="submit" name="registro">
<input type="reset">
</body>
</html>