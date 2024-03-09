<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "proyecto14768";

try {
    // Crear una conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente a la base de datos";
} catch (PDOException $e) {
    // Manejar errores de conexión
    echo "Conexión fallida: " . $e->getMessage();
}
