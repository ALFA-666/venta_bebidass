<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO productos (nombre, categoria, precio, cantidad)
            VALUES ('$nombre', '$categoria', '$precio', '$cantidad')";
    
    $resultado = mysqli_query($conectar, $sql);

    if (mysqli_query($conectar, $sql)) {
    echo "<script>
            alert('✅ Producto registrado correctamente');
            window.location.href = 'registroproductos.html';
          </script>";
}

}
?>
