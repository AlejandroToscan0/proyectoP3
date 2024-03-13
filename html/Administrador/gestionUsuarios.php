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
    <link rel="stylesheet" href="css_form/jquery.mCustomScrollbar.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estilo_user.css">
    <script src="../../js/js_user.js" defer></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js_form/material.min.js"></script>
    <script src="js_form/sweetalert2.min.js"></script>
    <script src="js_form/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js_form/Egreso.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="https://srvcas.espe.edu.ec/authenticationendpoint/images/favicon.png" type="image/x-icon">
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
                            <li><a href="usuarios.html">Agregar Periodo</a></li>
                            <li><a href="gestionUsuarios.php">Ver Periodos</a></li>
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
                            <li><a href="usuarios.html">Agregar Departamento</a></li>
                            <li><a href="gestionUsuarios.php">Ver Departamentos</a></li>
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
                            <li><a href="usuarios.html">Agregar Carrera</a></li>
                            <li><a href="gestionUsuarios.php">Ver Carrera</a></li>
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
                            <li><a href="usuarios.html">Agregar Usuario</a></li>
                            <li><a href="gestionUsuarios.php">Ver Usuarios</a></li>
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
                            <li><a href="usuarios.html">Agregar Docente</a></li>
                            <li><a href="gestionUsuarios.php">Ver Docentes</a></li>
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
                            <li><a href="usuarios.html">Agregar Laboratorio</a></li>
                            <li><a href="gestionUsuarios.php">Ver Laboratorios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-landmark"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION AULA</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="usuarios.html">Agregar Aula</a></li>
                            <li><a href="gestionUsuarios.php">Ver Aulas</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl ">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet ">GESTION FRANJA HORARIA</div>
                        </a>
                        <ul class="submenu activado">
                            <li><a href="usuarios.html">Agregar Franja Horaria</a></li>
                            <li><a href="gestionUsuarios.php">Ver Franja Horaria</a></li>
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
                            <li><a href="usuarios.html">Agregar Horario</a></li>
                            <li><a href="gestionUsuarios.php">Ver Horarios</a></li>
                        </ul>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- DIVS FIN -->
    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h1 class="text-center tittles2" style="color: #31470b;">REGISTRAR NUEVO USUARIO</h1>
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
        </section>
    </section>

</body>

</html>