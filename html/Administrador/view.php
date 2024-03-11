<?php
include_once('connection.php');

$id = $_POST['id'];
$currentStatus = $_POST['currentStatus'];

// Cambiar el estado según el estado actual
$newStatus = ($currentStatus == 'activo') ? 'inactivo' : 'activo';

$sql = "UPDATE perfil SET estado='$newStatus' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    $response = [
        'status' => 'success',
        'message' => 'Estado cambiado satisfactoriamente.'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error al cambiar el estado: ' . mysqli_error($conn)
    ];
}

echo json_encode($response);
