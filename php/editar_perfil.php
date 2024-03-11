<?php
include('conexion.php');

// Obtener datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$usuario = $_POST['usuario'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];

// Preparar la consulta SQL para actualizar el perfil
$query = "UPDATE perfil SET nombre = :nombre, password = :password, usuario = :usuario, rol = :rol, correo = :correo WHERE id = :id";

try {
    // Preparar la consulta
    $statement = $conn->prepare($query);

    // Ejecutar la consulta
    $statement->execute(array(
        ':id' => $id,
        ':nombre' => $nombre,
        ':password' => $password,
        ':usuario' => $usuario,
        ':rol' => $rol,
        ':correo' => $correo
    ));

    // Preparar la respuesta
    $response = [
        'status' => 'success',
        'message' => 'Perfil actualizado exitosamente.'
    ];

    // Enviar respuesta como JSON
    echo json_encode($response);
} catch (PDOException $e) {
    // Si hay un error, preparar la respuesta de error
    $response = [
        'status' => 'error',
        'message' => 'Error al actualizar el perfil: ' . $e->getMessage()
    ];

    // Enviar respuesta de error como JSON
    echo json_encode($response);
}
