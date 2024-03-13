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
                            <li><a href="registro_periodo.html">Agregar Periodo</a></li>
                            <li><a href="#">Ver Periodos</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
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
                    </li>
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
                            <li><a href="#">Ver Carrera</a></li>
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
                            <li><a href="materias.php">Ver Usuarios</a></li>
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
                            <li><a href="#">Ver Docentes</a></li>
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
                            <li><a href="#">Ver Laboratorios</a></li>
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
                            <li><a href="horario.php">Agregar Horario</a></li>
                            <li><a href="#">Ver Horarios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- DIVS FIN -->
    <!-- page content -->
    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h1 class="text-center tittles2" style="color: #31470b;">REGISTRAR NUEVO USUARIO</h1>
            <!-- Aquí se mostrará el formulario cuando se seleccione "Gestor Perfiles" -->
            <form action="../../php/user_conn.php" method="POST" id="crearUsuarioForm">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required><br>
                <label for="clave">Clave:</label>
                <input type="password" id="clave" name="clave" required><br>
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required><br>
                <label for="cedula">Cedula:</label>
                <input type="number" id="cedula" name="cedula" required><br>
                <label for="rol">Rol:</label><br>
                <select id="rol" name="rol">
                    <option value="administrador">Administrador <i class='bx bx-user'></i></option>
                    <option value="docente">Docente <i class='bx bx-book-reader'></i></option>
                    <option value="laboratorista">Laboratorista <i class='bx bx-flask'></i></option>
                </select><br><br>
                <input type="submit" value="Registrar Usuario">
            </form>
            <button class="logout-button" onclick="location.href='administrador.html'">
                <i class="fas fa-backward fa-2x"></i></button>
        </section>
    </section>

</body>

</html>