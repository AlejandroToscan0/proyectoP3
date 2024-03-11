<?php
include('../css_2/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idPeriodo = $_POST['id_periodo'];
    $horaInicio = $_POST['time1'];
    $horaFinal = $_POST['time2'];
    $dias = $_POST['dias'];

    // Consulta SQL para insertar una nueva franja horaria en la tabla franja_horaria
    $query = "INSERT INTO franja_horaria (ID_PERIODO, HORA_INICIO, HORA_FINAL, DIAS)
     VALUES (:idPeriodo, :horaInicio, :horaFinal, :dias)";

    try {
        $statement = $conn->prepare($query);

        $statement->execute(array(
            ':idPeriodo' => $idPeriodo,
            ':horaInicio' => $horaInicio,
            ':horaFinal' => $horaFinal,
            ':dias' => $dias
        ));
        header("Location: ../index.php");
    } catch (PDOException $e) {
        // Manejar errores de inserción
        echo "Error al insertar la franja horaria: " . $e->getMessage();
    }
}
?>
