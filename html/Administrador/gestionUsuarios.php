<!DOCTYPE html>
<html lang="en">

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
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="bg-light p-2 m-2">
                        <h5 class="text-dark text-center">CRUD COMPLETO CON TRANSMISION ASINCRONICA</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Administracion <b>Usuarios</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Usuario</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Rol</th>
                            <th>Correo</th>
                            <th>Cedula</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="employee_data">
                        <!-- Aquí se cargarán los datos con JavaScript -->
                    </tbody>
                </table>
                <p class="loading">Cargando datos</p>
            </div>
        </div>
    </div>

    <!-- Agregar usuario -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body add_employee">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" id="address_input" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" id="phone_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" id="username_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" id="password_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Rol</label>
                        <select id="role_input" class="form-control" required>
                            <option value="administrador">Administrador</option>
                            <option value="laboratorista">Laboratorista</option>
                            <option value="docente">Docente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" id="cedula_input" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Agregar" onclick="addEmployee()">
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editProfileModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Perfil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edit_profile">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Clave</label>
                        <input type="password" id="clave" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" id="usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rol</label>
                        <select id="rol" class="form-control">
                            <option value="administrador">Administrador</option>
                            <option value="docente">Docente</option>
                            <option value="laboratorista">Laboratorista</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" id="correo" class="form-control" required>
                    </div>
                    <input type="hidden" id="id" class="form-control">
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="button" class="btn btn-info" onclick="editProfile()" value="Grabar">
                </div>
            </div>
        </div>
    </div>

    <!-- view modal -->
    <div id="viewEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ver Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body view_employee">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="name_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" id="address_input" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" id="phone_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" id="username_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Rol</label>
                        <input type="text" id="role_input" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Cédula</label>
                        <input type="text" id="cedula_input" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
                </div>
            </div>
        </div>
    </div>

    <!-- Eliminar usuario -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Borrar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Esta seguro de borrar este registro?</p>
                    <p class="text-warning"><small>Esta accion no se puede revertir.</small></p>
                </div>
                <input type="hidden" id="delete_id">
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-danger" onclick="deleteEmployee()" value="Borrar">
                </div>
            </div>
        </div>
    </div>



    <script>
        function addEmployee() {
            var name = $('.add_employee #name_input').val();
            var email = $('.add_employee #email_input').val();
            var phone = $('.add_employee #phone_input').val();
            var address = $('.add_employee #address_input').val();
            var username = $('.add_employee #username_input').val();
            var password = $('.add_employee #password_input').val();
            var role = $('.add_employee #role_input').val();
            var cedula = $('.add_employee #cedula_input').val();

            $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    username: username,
                    password: password,
                    role: role,
                    cedula: cedula
                },
                url: "add.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('#addEmployeeModal').modal('hide');
                    employeeList();
                    alert(response.message);
                }
            });
        }

        function editProfile() {
            var id = $('#id').val();
            var nombre = $('#nombre').val();
            var clave = $('#clave').val();
            var usuario = $('#usuario').val();
            var rol = $('#rol').val();
            var correo = $('#correo').val();

            $.ajax({
                type: 'POST',
                url: 'editar.php',
                data: {
                    id: id,
                    nombre: nombre,
                    clave: clave,
                    usuario: usuario,
                    rol: rol,
                    correo: correo
                },
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    console.log(response);
                    // Puedes mostrar un mensaje de éxito o recargar la página, etc.
                },
                error: function(xhr, status, error) {
                    // Manejar errores aquí
                    console.error(xhr.responseText);
                }
            });
        }

        function viewEmployee(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "view.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('.view_employee #name_input').val(response.name);
                    $('.view_employee #email_input').val(response.email);
                    $('.view_employee #phone_input').val(response.phone);
                    $('.view_employee #address_input').val(response.address);
                    $('.view_employee #username_input').val(response.username);
                    $('.view_employee #role_input').val(response.role);
                    $('.view_employee #cedula_input').val(response.cedula);
                }
            });
        }

        function deleteEmployee(id) {
            $('#deleteEmployeeModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "delete.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    employeeList();
                    alert(response.message);
                }
            });
        }

        function changeStatus(id, currentStatus) {
            $.ajax({
                type: 'post',
                data: {
                    id: id,
                    currentStatus: currentStatus
                },
                url: "status.php",
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