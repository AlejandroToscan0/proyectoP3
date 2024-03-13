<?php
include('../../php/conexion.php');

// Recuperar datos de la base de datos para llenar las opciones del formulario
$query_carreras = "SELECT * FROM carrera";
$stmt_carreras = $conn->query($query_carreras);
$carreras = $stmt_carreras->fetchAll();

$query_departamentos = "SELECT * FROM departamento";
$stmt_departamentos = $conn->query($query_departamentos);
$departamentos = $stmt_departamentos->fetchAll();

$query_docentes = "SELECT * FROM docente";
$stmt_docentes = $conn->query($query_docentes);
$docentes = $stmt_docentes->fetchAll();

$query_periodos = "SELECT * FROM periodo";
$stmt_periodos = $conn->query($query_periodos);
$periodos = $stmt_periodos->fetchAll();

$query_materias = "SELECT * FROM materia";
$stmt_materias = $conn->query($query_materias);
$materias = $stmt_materias->fetchAll();

$query_laboratorios = "SELECT * FROM laboratorio";
$stmt_laboratorios = $conn->query($query_laboratorios);
$laboratorios = $stmt_laboratorios->fetchAll();

$query_franjas = "SELECT * FROM franja_horaria";
$stmt_franjas = $conn->query($query_franjas);
$franjas = $stmt_franjas->fetchAll();


// Recupera más datos necesarios para llenar otras opciones del formulario...

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $carrera = $_POST['carrera'];
    $departamento = $_POST['departamento'];
    $docente = $_POST['docente'];
    $periodo = $_POST['periodo'];
    $materia = $_POST['materia'];
    $laboratorio = $_POST['laboratorio'];
    $franja_horaria = $_POST['franja_horaria'];

    // Guarda los datos en la base de datos
    // Aquí deberías escribir el código para insertar los datos en la tabla correspondiente
    // Por ejemplo:
    /*
    $query_insertar = "INSERT INTO tabla (columna1, columna2, ...) VALUES (:valor1, :valor2, ...)";
    $stmt_insertar = $conn->prepare($query_insertar);
    $stmt_insertar->bindParam(':valor1', $valor1);
    $stmt_insertar->bindParam(':valor2', $valor2);
    ...
    $stmt_insertar->execute();
    */

    // Redirige o muestra el horario después de guardar los datos
    // Por ejemplo:
    // header("Location: horario.php");
    // exit;
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
    <!-- page content -->
    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h1>Crear Horario</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>">
                <label for="carrera">Carrera:</label>
                <select name="carrera" id="carrera">
                    <?php foreach ($carreras as $carrera) : ?>
                        <option value="<?php echo $carrera['ID_CARRERA']; ?>">
                            <?php echo $carrera['NOMBRE_CARRERA']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="departamento">Departamento:</label>
                <select name="departamento" id="departamento">
                    <?php foreach ($departamentos as $departamento) : ?>
                        <option value="<?php echo $departamento['ID_DEP']; ?>"><?php echo $departamento['NOMBRE_DEP']; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="docente">Docente:</label>
                <select name="docente" id="docente">
                    <?php foreach ($docentes as $docente) : ?>
                        <option value="<?php echo $docente['Id_docen']; ?>"><?php echo $docente['nombre_docen']; ?></option>
                    <?php endforeach; ?>
                </select>

                <button type="submit">Guardar</button>
            </form>
        </section>
    </section>
</body>

</html>