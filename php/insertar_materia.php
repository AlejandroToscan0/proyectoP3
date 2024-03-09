<?php
// Verificar si se enviaron datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    include('conexion.php');

    // Obtener los datos del formulario
    $id_materia = $_POST['id_materia'];
    $id_franja = $_POST['id_franja'];
    $id_lab = $_POST['id_lab'];
    $id_carrera = $_POST['id_carrera'];
    $nombre_materia = $_POST['nombre_materia'];
    $Nrc = $_POST['Nrc'];
    $docente_acargo = $_POST['docente_acargo'];

    // Consulta SQL para insertar una nueva materia en la tabla de materias
    $query = "INSERT INTO materia (ID_MATERIA, ID_FRANJA, ID_LAB, ID_CARRERA, NOMBRE_MATERIA, NRC, DOCENTE_ACARGO) 
              VALUES (:id_materia, :id_franja, :id_lab, :id_carrera, :nombre_materia, :Nrc, :docente_acargo)";

    // Preparar la consulta
    $statement = $conn->prepare($query);

    // Vincular parámetros
    $statement->bindParam(':id_materia', $id_materia);
    $statement->bindParam(':id_franja', $id_franja);
    $statement->bindParam(':id_lab', $id_lab);
    $statement->bindParam(':id_carrera', $id_carrera);
    $statement->bindParam(':nombre_materia', $nombre_materia);
    $statement->bindParam(':Nrc', $Nrc);
    $statement->bindParam(':docente_acargo', $docente_acargo);

    // Ejecutar la consulta
    if ($statement->execute()) {
        echo "Materia insertada correctamente.";
    } else {
        echo "Error al insertar la materia.";
    }
} else {
    // Si no se enviaron datos mediante POST, redirigir a una página de error
    header("Location: error.php");
}
