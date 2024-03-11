<?php 
    include('conexion.php');

    // Perfiles
    try {
        $query = "SELECT * FROM perfil";
    
        $statement = $conn->prepare($query);
        $statement->execute();
    
        $perfiles = array();
    
        while($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
            $perfiles[] = $fila;
        }
        echo "<br> PERFILES <br>";
        foreach ($perfiles as $perfil) {
            echo "ID: " . $perfil['id'] . ", Nombre: " . $perfil['nombre'] . ", USUARIO: " . $perfil['usuario'] . ", PASSWORD: " . $perfil['password'] . ", ROL: " . $perfil['rol'] . ", CORREO: " . $perfil['correo'] . ", CEDULA: " . $perfil['cedula'] . "<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
?>