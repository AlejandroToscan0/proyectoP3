<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMS</title>
    <link href="../../css_2/estipru.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/boton.css">
    <link href="../../css_2/estipru.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css_form/normalize.css">
    <link rel="stylesheet" href="css_form/estilos.css">
    <link rel="stylesheet" href="css_form/material-design-iconic-font.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css_form/jquery.mCustomScrollbar.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js_form/material.min.js"></script>
    <script src="js_form/sweetalert2.min.js"></script>
    <script src="js_form/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js_form/Egreso.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    <link rel="icon" href="https://srvcas.espe.edu.ec/authenticationendpoint/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css_form/estilo_form.css">
    <link href="../css/css_crud.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- DIV ARRIBA -->
    <div class="full-width navBar">
        <div class="full-width navBar-options" style="background-color: rgb(101, 133, 122)">
            <i class='bx bx-menu btn-menu' id="btn-menu" style="padding-left: 10px;"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">

                    <li class="btn-exit" id="btn-exit">
                        <a href="../../index.html">
                            <i class='bx bx-log-out'></i>
                            <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                        </a>
                    </li>
                    <li class="text-condensedLight noLink"><small>Usuario</small></li>
                    <li class="noLink">
                        <figure>
                            <img src="../../img/avatar-male2.png" alt="Avatar" class="img-responsive">
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- DIV INICIO -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles" style="background-color: rgb(101, 133, 122)">
                <i class='bx btn-menu '>ADMINISTRACION</i>
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="../../img/avatar-male2.png" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <p>&nbsp;</p>
                    <p>ADMINISTRADOR</p>
                </figcaption>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu" style="background-color: rgb(101, 133, 122)">
                <i class='bx bx-desktop'></i><span class="hide-on-tablet">&nbsp; MENÚ</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="#" class="full-width active">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet active">GESTION USUARIOS</div>
                        </a>
                        <ul class="submenu desactivado">
                            <li><a href="usuarios.html">Agregar Usuario</a></li>
                            <li><a href="gestionUsuarios.php">Ver Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='fa-regular fa-calendar'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">GESTION PERIODO</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="regis_periodo.html">Agregar Periodo</a></li>
                            <li><a href="crud_periodo.html">Ver Periodos</a></li>
                        </ul>
                    </li>
                    <!--  <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-business-time"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">GESTION DEPARTAMENTO</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="#">Agregar Departamento</a></li>
                            <li><a href="#">Ver Departamentos</a></li>
                        </ul>
                    </li> -->
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION CARRERA</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="regis_carrera.html">Agregar Carrera</a></li>
                            <li><a href="crud_carrera.html">Ver Carrera</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION MATERIA</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="regis_materia.html">Agregar Usuario</a></li>
                            <li><a href="crud_materia.html">Ver Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION DOCENTES</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="regis_docen.html">Agregar Docente</a></li>
                            <li><a href="crud_docente.html">Ver Docentes</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION LABORATORIO</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="resgi_labo.html">Agregar Laboratorio</a></li>
                            <li><a href="crud_laboratorio.html">Ver Laboratorios</a></li>
                        </ul>
                    </li>
                    <li class=" full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION FRANJA HORARIA</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="regis_franhora.html">Agregar Franja Horaria</a></li>
                            <li><a href="#">Ver Franja Horaria</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">HORARIO</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="crear_horario.php">Agregar Horario</a></li>
                            <li><a href="#">Ver Horarios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- DIVS FIN -->
    <!-- Contenido principal -->
    <section class="full-width pageContent">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 style="color: #659F5A; text-align: center;"><b>USUARIOS</b></h3>
                            </div>
                            <div class="col-sm-6">
                                <a href="../Administrador/usuarios.html" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Nuevo Usuario</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Password</th>
                                <th>Rol</th>
                                <th>Correo</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="proyecto14768_data">
                            <!-- Aquí se cargarán los datos de los usuarios -->
                        </tbody>
                    </table>
                    <p class="loading">Cargando datos</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Scripts JavaScript -->
    <script>
        // Aquí deberías incluir tus scripts para manejar la funcionalidad de la aplicación

        // Función para editar un usuario
        function editarUsuario(id) {
            // Agregar código para editar un usuario
        }

        // Función para eliminar un usuario
        function eliminarUsuario(id) {
            // Agregar código para eliminar un usuario
        }

        // Función para cambiar el estado de un usuario
        function cambiarEstadoUsuario(id, estado) {
            // Agregar código para cambiar el estado de un usuario
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para cerrar sesión y redirigir al index
            function logout() {
                // Realizar aquí las acciones de cierre de sesión (limpiar cookies, eliminar tokens, etc.)
                // Por ejemplo, podrías hacer una solicitud AJAX al servidor para cerrar la sesión

                // Redirigir al index después de cerrar sesión
                window.location.href = ""; // Cambia "index.html" por la ruta de tu página de inicio
            }

            var btnMenu = document.getElementById('btn-menu');
            var navLateral = document.querySelector('.navLateral');
            var btnLogout = document.getElementById('btn-exit');

            btnMenu.addEventListener('click', function() {
                navLateral.classList.toggle('closed');
            });

            // Agregar evento de clic al botón de logout
            btnLogout.addEventListener('click', function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                logout(); // Llamar a la función logout al hacer clic en el botón de logout
            });
        });
    </script>
</body>

</html>