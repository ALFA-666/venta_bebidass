<?php
$conexion = new mysqli("localhost", "root", "", "bdarchivos"); // Ajusta bdarchivos si tu DB se llama diferente
if ($conexion->connect_errno) {
    die("Error al conectar: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>
