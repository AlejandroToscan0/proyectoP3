<?php 
    include('conexion.php');

    // Materias
    try {
        $query = "SELECT * FROM materia";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $materias = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $materias[] = $fila;
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    //ACTUALIZAR MATERIA CON EL NOMBRE DEL DOCENTE
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start(); 
        //SELECCIONA EL IDE DE LA MATERIA SELECCIONADA
        $materiaSelected = $_POST['materiaSelected'];
        echo "El nombre de la materia seleccionada es: $materiaSelected";
        
        $nombre = $_SESSION['nombre'];
        echo "Nombre: $nombre";
    
        try {
            // Preparar la consulta SQL
            $query = "UPDATE materia SET DOCENTE_ACARGO = :docente WHERE NOMBRE_MATERIA = :materiaSelected";
    
            // Preparar la consulta
            $statement = $conn->prepare($query);
    
            // Ejecutar la consulta
            $statement->execute(array(':docente' => $nombre, ':materiaSelected' => $materiaSelected));
    
            // Comprobar si se actualizó correctamente
            if ($statement->rowCount() > 0) {
                echo "El docente asignado a la materia '$materiaSelected' se actualizó correctamente a '$nombre'.";
            } else {
                echo "No se pudo actualizar el docente asignado a la materia '$materiaSelected'.";
            }
        } catch (PDOException $e) {
            echo "Error al actualizar el docente: " . $e->getMessage();
        }
    }
    
    
?>