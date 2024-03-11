<?php
include_once('../../php/conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];

$sql = "UPDATE perfil SET nombre='$nombre', usuario='$usuario', password='$password', rol='$rol', correo='$correo', cedula='$cedula', telefono='$telefono' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    $response = [
        'status' => 'success',
        'message' => 'Registro actualizado satisfactoriamente.'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error al actualizar el registro: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
