<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "tienda_bebidas";
$port = 3307; // ⚠️ Usa 3307 si ese es tu puerto en XAMPP

$conectar = mysqli_connect($server, $user, $pass, $database, $port);

// Verifica la conexión
if (!$conectar) {
    die("❌ Error al conectar a la base de datos: " . mysqli_connect_error());
} 
// echo "✅ Conectado correctamente a la base de datos."; // puedes dejarlo en comentario
?>
