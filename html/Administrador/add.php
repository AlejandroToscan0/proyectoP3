<?php
include_once('../../php/conexion.php');

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO perfil (nombre, usuario, password, rol, correo, cedula, telefono, estado, created_at) 
        VALUES ('$nombre', '$usuario', '$password', '$rol', '$correo', '$cedula', '$telefono', 'activo')";

if (mysqli_query($conn, $sql)) {
    $response = [
        'status' => 'success',
        'message' => 'Registro creado satisfactoriamente.'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error al crear el registro: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
