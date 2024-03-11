<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/estilo_user.css">
    <script src="../../js/js_user.js" defer></script>

</head>

<body>
    <h1>LISTA DE USUARIOS</h1>
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

    if ($perfil_a_editar) {
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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/estilo_user.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../js/js_user.js" defer></script>
</head>

<body>
    <h1>LISTA DE USUARIOS</h1>
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
                <a href='javascript:void(0);' onclick='eliminarUsuario(" . $perfil['id'] . ")'>Eliminar</a>
                <a href='javascript:void(0);' onclick='editarUsuario(" . $perfil['id'] . ")'>Editar</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";

    if ($perfil_a_editar) {
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
    <script>
        $(document).ready(function() {
            employeeList();
        });

        function eliminarUsuario(id) {
            if (confirm("¿Estás seguro de eliminar este usuario?")) {
                $.ajax({
                    type: 'GET',
                    url: "crud/eliminar-usuario.php?id=" + id,
                    success: function(data) {
                        alert("Usuario eliminado exitosamente.");
                        // Refrescar la lista de usuarios después de eliminar uno
                        employeeList();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        alert("Error al intentar eliminar el usuario.");
                    }
                });
            }
        }

        function editarUsuario(id) {
            // Implementar la lógica para editar un usuario
            // Puedes usar AJAX para cargar los datos del usuario en un formulario de edición
        }

        function employeeList() {
            $.ajax({
                type: 'get',
                url: "crud/employee-list.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
                        var id = response[i].id;
                        var name = response[i].name;
                        var email = response[i].email;
                        var phone = response[i].phone;
                        var address = response[i].address;
                        var estado = (response[i].estado == 1) ? 'Activo' : 'Inactivo';
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + name + '</td>';
                        tr += '<td>' + email + '</td>';
                        tr += '<td>' + phone + '</td>';
                        tr += '<td>' + address + '</td>';
                        tr += '<td>' + response[i].created_at + '</td>';
                        tr += '<td>' + response[i].updated_at + '</td>';
                        tr += '<td>' + estado + '</td>'; // Agregar el estado aquí

                        tr += '<td><div class="d-flex">';
                        tr += '<a href="#viewEmployeeModal" class="m-1 view" data-toggle="modal" onclick=viewEmployee("' + id + '")><i class="fa" data-toggle="tooltip" title="view">&#xf06e;</i></a>';
                        tr += '<a href="#editEmployeeModal" class="m-1 edit" data-toggle="modal" onclick=viewEmployee("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                        tr += '<a href="#deleteEmployeeModal" class="m-1 delete" data-toggle="modal" onclick=$("#delete_id").val("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                        tr += '<a href="#" class="m-1 status" onclick="changeStatus(' + id + ', ' + response[i].estado + ')"><i class="material-icons" data-toggle="tooltip" title="' + ((response[i].estado == 1) ? 'Desactivar' : 'Activar') + '">' + ((response[i].estado == 1) ? 'block' : 'check_circle') + '</i></a>';
                        tr += '</div></td>';
                    }
                    $('.loading').hide();
                    $('#employee_data').html(tr);
                }
            });
        }

        function addEmployee() {
            var name = $('.add_epmployee #name_input').val();
            var email = $('.add_epmployee #email_input').val();
            var phone = $('.add_epmployee #phone_input').val();
            var address = $('.add_epmployee #address_input').val();

            $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                },
                url: "crud/employee-add.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('#addEmployeeModal').modal('hide');
                    employeeList();
                    alert(response.message);
                }

            })
        }

        function editEmployee() {
            var name = $('.edit_employee #name_input').val();
            var email = $('.edit_employee #email_input').val();
            var phone = $('.edit_employee #phone_input').val();
            var address = $('.edit_employee #address_input').val();
            var employee_id = $('.edit_employee #employee_id').val();

            $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    employee_id: employee_id,
                },
                url: "crud/employee-edit.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('#editEmployeeModal').modal('hide');
                    employeeList();
                    alert(response.message);
                }

            })
        }

        function viewEmployee(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud/employee-view.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('.edit_employee #name_input').val(response.name);
                    $('.edit_employee #email_input').val(response.email);
                    $('.edit_employee #phone_input').val(response.phone);
                    $('.edit_employee #address_input').val(response.address);
                    $('.edit_employee #employee_id').val(response.id);
                    $('.view_employee #name_input').val(response.name);
                    $('.view_employee #email_input').val(response.email);
                    $('.view_employee #phone_input').val(response.phone);
                    $('.view_employee #address_input').val(response.address);
                }
            })
        }

        function deleteEmployee() {
            var id = $('#delete_id').val();
            $('#deleteEmployeeModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud/employee-delete.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    employeeList();
                    alert(response.message);
                }
            })
        }

        function changeStatus(id, currentStatus) {
            $.ajax({
                type: 'post',
                data: {
                    id: id,
                    currentStatus: currentStatus
                },
                url: "crud/employee-status.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.status === 'success') {
                        employeeList();
                        alert(response.message);
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    </script>
</body>

</html>