<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto14768";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$titulo = $_POST['titulo'];
$fech = $_POST['fech'];
$responsable = $_POST['textfield'];
$descripcion = $_POST['descr'];
$laboratorio = $_POST['lab1'];

// Preparar la consulta SQL
$sql = "INSERT INTO novedad (novedad, fecha_hora, doc_responsa, descripcion, laboratorio) VALUES ('$titulo', '$fech', '$responsable', '$descripcion', '$laboratorio')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Novedad registrada exitosamente";
} else {
    echo "Error al registrar la novedad: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
