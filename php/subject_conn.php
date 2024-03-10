<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idMateria = $_POST['id_materia'];
    $idFranja = $_POST['id_franja'];
    $idLab = $_POST['id_lab'];
    $idCarrera = $_POST['id_carrera'];
    $nombreMateria = $_POST['nombre_materia'];
    $nrc = $_POST['Nrc'];
    $docenteAcargo = $_POST['docente_acargo'];

    // Consulta SQL para insertar una nueva materia en la tabla materia
    $query = "INSERT INTO materia (ID_MATERIA, ID_FRANJA, ID_LAB, ID_CARRERA, NOMBRE_MATERIA, NRC, DOCENTE_ACARGO)
     VALUES (:idMateria, :idFranja, :idLab, :idCarrera, :nombreMateria, :nrc, :docenteAcargo)";

    try {
        $statement = $conn->prepare($query);

        $statement->execute(array(
            ':idMateria' => $idMateria,
            ':idFranja' => $idFranja,
            ':idLab' => $idLab,
            ':idCarrera' => $idCarrera,
            ':nombreMateria' => $nombreMateria,
            ':nrc' => $nrc,
            ':docenteAcargo' => $docenteAcargo
        ));
        header("Location: ../index.php");
    } catch (PDOException $e) {
        // Manejar errores de inserción
        echo "Error al insertar usuario: " . $e->getMessage();
    }
}
