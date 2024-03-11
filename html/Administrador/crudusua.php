<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud usuario</title>
	
    <!-- Agregar enlaces a tus archivos CSS -->
	<link rel="stylesheet" href="../../css_2/estilos.css">
    <link rel="stylesheet" href="../../css_2/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../css_2/main.css">
    <link rel="stylesheet" href="../../css_2/material.min.css">
    <link rel="stylesheet" href="../../css_2/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css_2/normalize.css">
    <link rel="stylesheet" href="../../css_2/sweetalert2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="../../css_2/estipru.css" rel="stylesheet" type="text/css">

    <script src="../../js/material.min.js"></script>
    <script src="../../js/sweetalert2.min.js"></script>
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/main(1).js"></script>

    <!-- Agregamos una fuente de iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    <link href="../../css_2/css_crud.css" rel="stylesheet" type="text/css">
</head>

<body onload="cargarApp()">
    <!-- Navbar -->
    <div class="full-width navBar">
        <!-- Contenido de la barra de navegación -->
		<div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class='bx bx-menu btn-menu' id="btn-menu"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class='bx bx-bell'></i>
                        <!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
                        <div class="mdl-tooltip" for="notifications">Notifications</div>
                    </li>
                   <li class="btn-exit" id="btn-exit">
    <a href="salida_sislog.php">
        <i class='bx bx-log-out'></i>
        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
    </a>
</li>
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
    </div>

    <!-- NavLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class='bx bx-x btn-menu'></i>ADMIN
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
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class='bx bx-desktop'></i><span class="hide-on-tablet">&nbsp; MENÚ</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="horario.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-home'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">HORARIO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="usuarios.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">USUARIO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="materias.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-book'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">MATERIA</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="regis_docen.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">DOCENTE</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-time'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">PERIODO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="regis_franhora.php" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">FRAN.HORARIA</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="resgi_labo.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bxl-flask'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">LABORATORIO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>

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
                                <a href="../Administrador/usuarios.html" class="btn btn-success" data-toggle="modal"><i
                                        class="material-icons">&#xE147;</i><span>Nuevo Usuario</span></a>
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
        document.addEventListener('DOMContentLoaded', function () {
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

            btnMenu.addEventListener('click', function () {
                navLateral.classList.toggle('closed');
            });

            // Agregar evento de clic al botón de logout
            btnLogout.addEventListener('click', function (event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                logout(); // Llamar a la función logout al hacer clic en el botón de logout
            });
        });
    </script>
</body>

</html>

