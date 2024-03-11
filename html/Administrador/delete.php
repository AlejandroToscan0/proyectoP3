<?php
include_once('../../php/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM `perfil` WHERE `id` = $id";

if (mysqli_query($conn, $sql)) {
    $response = [
        'status' => 'success',
        'message' => 'Registro borrado satisfactoriamente!'
    ];
    echo json_encode($response);
} else {
    $response = [
        'status' => 'error',
        'message' => 'Error al borrar el registro: ' . mysqli_error($conn)
    ];
    echo json_encode($response);
}
