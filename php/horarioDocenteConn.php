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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //SELECCIONA EL IDE DE LA MATERIA SELECCIONADA
        $idMateria = $_POST['materiaSelected'];
        echo "El ID de la materia seleccionada es: $idMateria";
        
    }
    
    
?>