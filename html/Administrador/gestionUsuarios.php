<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    <h1>Lista usauarios</h1>
<?php 
    include('../../php/gestionUsuarioConn.php');   
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Correo</th>
            <th>Cedula</th>
            <th>Acciones</th>
        </tr>";
        
    foreach ($perfiles as $perfil) {
        echo "<tr>";
        echo "<td>" . $perfil['id'] . "</td>";
        echo "<td>" . $perfil['nombre'] . "</td>";
        echo "<td>" . $perfil['usuario'] . "</td>";
        echo "<td>" . $perfil['rol'] . "</td>";
        echo "<td>" . $perfil['correo'] . "</td>";
        echo "<td>" . $perfil['cedula'] . "</td>";
        echo "<td>
                <a href='?eliminar_id=" . $perfil['id'] . "'>Eliminar</a>
                <a href='?editar_id=" . $perfil['id'] . "'>Editar</a>
              </td>";
        echo "</tr>";
    }
    
    echo "</table>";    

    if($perfil_a_editar) {
        // Mostrar formulario de edición con los datos del perfil
        echo "<section class='full-width pageContent'>
                <section class='full-width text-center' style='padding: 40px 0;'>
                <h1 class='text-center tittles2' style='color: #31470b;'>Editar USUARIO</h1>";
        echo "<form action='' method='POST'>";
            echo "<label for='id'>ID:</label>";
            echo "<input type='text' name='id' value='" . $perfil_a_editar['id'] . "' readonly><br>";

            echo "<label for='cedula'>Cedula:</label>";
            echo "<input type='text' name='cedula' value='" . $perfil_a_editar['cedula'] . "' readonly><br>";
        
            echo "<label for='nombre'>Nombre:</label>";
            echo "<input type='text' name='nombre' required value='" . $perfil_a_editar['nombre'] . "'><br>";

            echo "<label for='clave'>Clave:</label>";
            echo "<input type='password' id='clave' name='clave'><br>";

            echo "<label for='usuario'>Usuario:</label>";
            echo "<input type='text' name='usuario' value='" . $perfil_a_editar['usuario'] . "'><br>";

            echo "<label for='rol'>Rol:</label><br>";
            echo "<select id='rol' name='rol'>
                    <option value='administrador'>Administrador <i class='bx bx-user'></i></option>
                    <option value='docente'>Docente <i class='bx bx-book-reader'></i></option>
                    <option value='laboratorista'>Laboratorista <i class='bx bx-flask'></i></option>
                </select><br>";

            echo "<label for='correo'>Correo:</label>";
            echo "<input type='text' name='correo' value='" . $perfil_a_editar['correo'] . "'><br>";

        
            echo " <input type='submit' value='Registrar Usuario'>";
        echo "</form>";
        echo "</section>
        </section>";
    }
    
?>

</body>
</html>