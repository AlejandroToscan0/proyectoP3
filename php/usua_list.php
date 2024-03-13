<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Consulta SQL para seleccionar todos los datos de la tabla excepto la contraseña
$sql = "SELECT id, nombre, usuario, rol, correo, cedula, telefono, estado FROM perfil";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Verificar si se obtuvieron resultados
if ($result) {
    // Crear un array para almacenar los datos de los usuarios
    $data = array();

    // Recorrer los resultados y almacenarlos en el array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Imprimir los datos en formato JSON
    echo json_encode($data);
} else {
    // Si ocurre un error en la consulta, imprimir un mensaje de error
    echo "Error al obtener los datos de los usuarios: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
