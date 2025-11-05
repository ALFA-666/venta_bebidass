<?php
include("conexion.php");

// Verificar si el formulario fue enviado
if (isset($_POST['registrar_cliente'])) {
    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];

    // Consulta SQL
    $sql = "INSERT INTO cliente (NIT, Nombre, Apellido, Celular) 
            VALUES ('$nit', '$nombre', '$apellido', '$celular')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conectar, $sql);

    if ($resultado) {
        echo "<script>alert('✅ Cliente registrado correctamente'); window.location='registro_cliente.html';</script>";
    } else {
        echo "<script>alert('❌ Error al registrar el cliente'); window.history.back();</script>";
    }
}
?>
