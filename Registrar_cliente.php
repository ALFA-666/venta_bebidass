<?php
include("conexion.php");

$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];

$sql = "INSERT INTO clientes (nit, nombre, apellido, celular)
        VALUES ('$nit', '$nombre', '$apellido', '$celular')";

if (mysqli_query($conectar, $sql)) {
    echo "<script>
            alert('✅ Cliente registrado correctamente');
            window.location.href = 'registroclientes.html';
          </script>";
} else {
    echo "❌ Error: " . mysqli_error($conectar);
}
?>
