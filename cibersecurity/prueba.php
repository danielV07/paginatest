<?php

include 'cn.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["contrasena"];
$celular = $_POST["celular"];

$insertar = "INSERT INTO Usuarios_DG(nombre, apellido, correo, usuario, clave, telefono) VALUES ('$nombre','$apellidos','$correo','$usuario','$clave','$celular')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo 'Error al registrarse';
}else{
    echo 'Usuarios registrado exitosamente';
}

mysqli_close($conexion);