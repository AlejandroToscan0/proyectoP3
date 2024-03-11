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
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Verificar si se ha enviado un ID para eliminar
    if(isset($_GET['eliminar_id'])) {
        try {
            $eliminar_id = $_GET['eliminar_id'];
            
            $query = "DELETE FROM perfil WHERE id = :id";
        
            $statement = $conn->prepare($query);
            $statement->bindParam(':id', $eliminar_id);
            $statement->execute();
            
            echo "Usuario eliminado exitosamente.";
            
        } catch (PDOException $e) {
            echo "Error al eliminar usuario: " . $e->getMessage();
        }
    }

    // Verificar si se ha enviado un ID para editar
    if(isset($_GET['editar_id'])) {
        $editar_id = $_GET['editar_id'];

        // Buscar el perfil con el ID especificado
        $perfil_a_editar = null;
        foreach ($perfiles as $perfil) {
            if($perfil['id'] == $editar_id) {
                $perfil_a_editar = $perfil;
                break;
            }
        }
    }

    // Guardar cambios
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $usuario = $_POST['usuario'];
            $rol = $_POST['rol'];
            $correo = $_POST['correo'];
            $cedula = $_POST['cedula'];

            // Verificar si la clave está establecida y no está vacía
            if(isset($_POST['clave']) && !empty($_POST['clave'])) {
                $clave = base64_encode($_POST['clave']);
                // Actualizar el perfil en la base de datos con la nueva clave
                $query = "UPDATE perfil SET nombre = :nombre, usuario = :usuario, rol = :rol, correo = :correo, cedula = :cedula, password = :clave WHERE id = :id";
            } else {
                // Actualizar el perfil en la base de datos sin cambiar la clave
                $query = "UPDATE perfil SET nombre = :nombre, usuario = :usuario, rol = :rol, correo = :correo, cedula = :cedula WHERE id = :id";
            }
            
            $statement = $conn->prepare($query);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':usuario', $usuario);
            $statement->bindParam(':rol', $rol);
            $statement->bindParam(':correo', $correo);
            $statement->bindParam(':cedula', $cedula);
            // Si la clave está establecida y no está vacía, vincularla al parámetro
            if(isset($clave)) {
                $statement->bindParam(':clave', $clave);
            }
            $statement->execute();
            
            echo "Usuario actualizado exitosamente.";
            
        } catch (PDOException $e) {
            echo "Error al actualizar usuario: " . $e->getMessage();
        }
    }
    
?>