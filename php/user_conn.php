<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave = base64_encode($_POST['clave']);
    $correo = $_POST['correo'];
    $rol = $_POST['rol'];
    $cedula = $_POST['cedula'];

    // Consulta SQL para insertar un nuevo usuario en la tabla perfil
    $query = "INSERT INTO perfil (nombre, usuario, password, correo, rol, cedula) VALUES (:nombre, :usuario, :clave, :correo, :rol, :cedula)";

    try {
        $statement = $conn->prepare($query);

        $statement->execute(array(':nombre' => $nombre, ':usuario' => $usuario, ':clave' => $clave, ':correo' => $correo, ':rol' => $rol, ':cedula' => $cedula));

        header("Location: ../html\Administrador\usuarios.html");
    } catch (PDOException $e) {
        // Manejar errores de inserción
        echo "Error al insertar usuario: " . $e->getMessage();
    }
}
