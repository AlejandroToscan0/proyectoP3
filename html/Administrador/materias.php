<?php
include('../../php/conexion.php');

// Consulta SQL para obtener los valores de las tablas relevantes
$query_carreras = "SELECT ID_CARRERA FROM carrera";
$query_franjas = "SELECT ID_FRANJA FROM franja_horaria";
$query_labs = "SELECT ID_LAB FROM laboratorio";

try {
    // Preparar y ejecutar la consulta para carreras
    $statement_carreras = $conn->prepare($query_carreras);
    $statement_carreras->execute();
    $carreras = $statement_carreras->fetchAll(PDO::FETCH_ASSOC);

    // Preparar y ejecutar la consulta para franjas horarias
    $statement_franjas = $conn->prepare($query_franjas);
    $statement_franjas->execute();
    $franjas = $statement_franjas->fetchAll(PDO::FETCH_ASSOC);

    // Preparar y ejecutar la consulta para laboratorios
    $statement_labs = $conn->prepare($query_labs);
    $statement_labs->execute();
    $labs = $statement_labs->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Manejar errores de consulta
    echo "Error al consultar la base de datos: " . $e->getMessage();
}
?>
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
    <!-- pageContent -->
    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h2 class="text-center tittles2" style="color: #31470b;">AGREGAR NUEVA MATERIA</h2>
            <!-- Formulario para agregar nueva materia -->
            <form action="../../php/subject_conn.php" method="post" id="agregarMateriaForm">
                <label for="id_materia">ID Materia:</label>
                <select name="id_materia" id="id_materia" required>
                    <?php foreach ($franjas as $franja) : ?>
                        <option value="<?php echo $franja['ID_FRANJA']; ?>">
                            <?php echo $franja['ID_FRANJA']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="id_franja">ID Franja:</label>
                <select name="id_franja" id="id_franja" required>
                    <?php foreach ($franjas as $franja) : ?>
                        <option value="<?php echo $franja['ID_FRANJA']; ?>">
                            <?php echo $franja['ID_FRANJA']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="id_lab">ID Laboratorio:</label>
                <select name="id_lab" id="id_lab" required>
                    <?php foreach ($labs as $lab) : ?>
                        <option value="<?php echo $lab['ID_LAB']; ?>">
                            <?php echo $lab['ID_LAB']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="id_carrera">ID Carrera:</label>
                <select name="id_carrera" id="id_carrera" required>
                    <?php foreach ($carreras as $carrera) : ?>
                        <option value="<?php echo $carrera['ID_CARRERA']; ?>">
                            <?php echo $carrera['ID_CARRERA']; ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="nombre_materia">Nombre Materia:</label>
                <input type="text" id="nombre_materia" name="nombre_materia" required><br>

                <label for="Nrc">NRC:</label><br>
                <input type="text" id="Nrc" name="Nrc" required><br>

                <label for="docente_acargo">Docente a Cargo:</label>
                <input type="text" id="docente_acargo" name="docente_acargo" required><br>

                <input type="submit" value="Agregar Materia">
            </form>
            <button class="logout-button" onclick="location.href='administrador.html'">
                <i class="fas fa-backward fa-2x"></i></button>
        </section>

        <button class="logout-button" onclick="location.href='administrador.html'">
            <i class="fas fa-backward fa-2x"></i></button>
    </section>

</body>

</html>