<?php
// Aquí se realizaría la conexión a la base de datos y se ejecutaría la consulta para recuperar las novedades
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "proyecto14768";

// Establecer conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Ejecutar consulta SQL para recuperar las novedades
$sql = "SELECT * FROM novedad";
$result = $conn->query($sql);
?>
