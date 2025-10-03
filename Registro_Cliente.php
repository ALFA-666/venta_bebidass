<?php
include("conectar.php");

//insertar registro 
if (isset($_POST['registro_cliente'])) {

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Celular = $_POST['Celular'];
    $Correo = $_POST['Correo'];
    $insertar = "INSERT INTO registro_cliente (Nombre, Apellido, Celular, Correo) VALUES ('$Nombre', '$Apellido', '$Celular', '$Correo')";
    $resultado = mysqli_query($conectar, $insertar);
  
    }   
  
?>
