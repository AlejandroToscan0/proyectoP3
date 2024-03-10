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
    <title>Materia</title>
    <link rel="stylesheet" href="../../css_2/estilos.css">
    <link rel="stylesheet" href="../../css_2/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../css_2/main.css">
    <link rel="stylesheet" href="../../css_2/material.min.css">
    <link rel="stylesheet" href="../../css_2/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css_2/normalize.css">
    <link rel="stylesheet" href="../../css_2/sweetalert2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="../../css_2/estipru.css" rel="stylesheet" type="text/css">
</head>

<body onload="cargarApp()">
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="mdl-tooltip" for="notifications">Notifications</div>
                    </li>
                    <li class="btn-exit" id="btn-exit">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
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
    <!-- navLateral -->
    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i>ADMINISTRACION
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
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; MENÚ</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-view-dashboard"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">HORARIO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="egresos.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-balance"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">GESTION PERFILES</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="ingresos.html" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class="zmdi zmdi-truck"></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">GESTION MATERIAS</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>

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
        </section>
    </section>
</body>

</html>