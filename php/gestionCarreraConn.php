<?php
include('conexion.php');

// Carreras
try {
    $query = "SELECT * FROM carrera";

    $statement = $conn->prepare($query);
    $statement->execute();

    $carrera = array();

    while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
        $carrera[] = $fila;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Verificar si se ha enviado un ID para eliminar
if (isset($_GET['eliminar_id'])) {
    try {
        $eliminar_id = $_GET['eliminar_id'];

        $query = "DELETE FROM carrera WHERE ID_CARRERA = :id";

        $statement = $conn->prepare($query);
        $statement->bindParam(':id', $eliminar_id);
        $statement->execute();

        echo "Carrera eliminada exitosamente.";
    } catch (PDOException $e) {
        echo "Error al eliminar carrera: " . $e->getMessage();
    }
}

// Verificar si se ha enviado un ID para editar
if (isset($_GET['editar_id'])) {
    $editar_id = $_GET['editar_id'];

    // Buscar la carrera con el ID especificado
    $carrera_a_editar = null;
    foreach ($carrera as $carrera) {
        if ($carrera['ID_CARRERA'] == $editar_id) {
            $carrera_a_editar = $carrera;
            break;
        }
    }
}

// Guardar cambios
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id = $_POST['ID_CARRERA'];
        $id_dep = $_POST['ID_DEP'];
        $nombre = $_POST['NOMBRE_CARRERA'];
        $estado = $_POST['estado'];

        $query = "UPDATE carrera SET ID_DEP = :id_dep, NOMBRE_CARRERA = :nombre, estado = :estado WHERE ID_CARRERA = :id";

        $statement = $conn->prepare($query);
        $statement->bindParam(':id_carrera', $id);
        $statement->bindParam(':id_dep', $id_dep);
        $statement->bindParam(':nombre_carrea', $nombre);
        $statement->bindParam(':estado', $estado);
        $statement->execute();

        echo "Carrera actualizada exitosamente.";
    } catch (PDOException $e) {
        echo "Error al actualizar carrera: " . $e->getMessage();
    }
}
