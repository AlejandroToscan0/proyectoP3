<?php
session_start();

// Verificar si se enviaron datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    include('conexion.php');

    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave']; // No necesitas codificar la contraseña ingresada en base64

    // Consulta SQL para verificar las credenciales en la base de datos
    $query = "SELECT * FROM perfil WHERE usuario = :usuario";

    // Preparar la consulta
    $statement = $conn->prepare($query);

    // Ejecutar la consulta
    $statement->execute(array(':usuario' => $usuario));

    // Obtener el resultado de la consulta
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    // Verificar si se encontraron resultados
    if ($result) {
        // Decodificar la contraseña almacenada en base64
        $password_from_db = base64_decode($result['password']);

        // Verificar si la contraseña ingresada coincide con la contraseña almacenada
        if ($clave == $password_from_db) {
            // Iniciar sesión y almacenar el nombre de usuario en la variable de sesión
            $_SESSION['id'] = $result['id'];
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['usuario'] = $result['usuario'];
            $_SESSION['rol'] = $result['rol'];
            
            if ($result['rol'] == 'administrador') {
                header("Location: ../html/administrador/administrador.html");
            } elseif ($result['rol'] == 'docente') {
                header("Location: ../html/docente/docente.html");
            } elseif ($result['rol'] == 'laboratorista') {
                header("Location: ../html/laboratorista/laboratorista.html");
            }
        } else {
            // Si las contraseñas no coinciden, redirigir a una página de error
            header("Location: error.php");
        }
    } else {
        // Si no se encuentra el usuario en la base de datos, redirigir a una página de error
        header("Location: error.php");
    }
} else {
    // Si no se enviaron datos de inicio de sesión, mostrar un mensaje de error
    echo "Usuario o contraseña incorrectos";
}
