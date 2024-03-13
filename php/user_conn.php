<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave = base64_encode($_POST['clave']);
    $correo = $_POST['correo'];
    $tele = $_POST['tele']; // Aquí corregí la variable de $tele a $tele
    $rol = $_POST['rol'];
    $cedula = $_POST['cedula'];

    // Consulta SQL para insertar un nuevo usuario en la tabla perfil
    $query = "INSERT INTO perfil (nombre, usuario, password, correo, rol, cedula, telefono) VALUES (:nombre, :usuario, :clave, :correo, :rol, :cedula, :telefono)";

    try {
        $statement = $conn->prepare($query);

        // Corregí la variable de $tel a $tele en el array de parámetros
        $statement->execute(array(':nombre' => $nombre, ':usuario' => $usuario, ':clave' => $clave, ':correo' => $correo, ':rol' => $rol, ':cedula' => $cedula, ':telefono' => $tele));

        header("Location: ../usuarios.html");
    } catch (PDOException $e) {
        // Manejar errores de inserción
        echo "Error al insertar usuario: " . $e->getMessage();
    }
}
?>

}