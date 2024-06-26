<?php
include('../../php/conexion.php');

// Consulta SQL para obtener los valores de la tabla periodo
$query_periodo = "SELECT ID_PERIODO FROM periodo";

try {
    // Preparar y ejecutar la consulta
    $statement_periodo = $conn->prepare($query_periodo);
    $statement_periodo->execute();
    $periodos = $statement_periodo->fetchAll(PDO::FETCH_ASSOC);
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
    <title>Fran Horaria</title>
    <link rel="stylesheet" href="../../css_2/estilos.css">
    <link rel="stylesheet" href="../../css_2/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../css_2/main.css">
    <link rel="stylesheet" href="../../css_2/material.min.css">
    <link rel="stylesheet" href="../../css_2/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../css_2/normalize.css">
    <link rel="stylesheet" href="../../css_2/sweetalert2.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/boton.css">
    <script src="../../js/material.min.js"></script>
    <script src="../../js/sweetalert2.min.js"></script>
    <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/main(1).js"></script>

    <!-- Agregamos una fuente de iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">
    <link href="../../css_2/estipru.css" rel="stylesheet" type="text/css">
</head>

<body onload="cargarApp()">
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="bx bx-menu btn-menu" id="btn-menu"></i>
            <div class="mdl-tooltip" for="btn-menu">Menu</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class="bx bx-bell"></i>
                        <div class="mdl-tooltip" for="notifications">Notifications</div>
                    </li>
                    <li class="btn-exit" id="btn-exit">
                        <a href="salida_sislog.php">
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
    <!-- navLateral -->
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
                        <a href="#" class="full-width">
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
                        <a href="#" class="full-width">
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
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-time-five'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">FRAN.HORARIA</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bxl-flask'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">LABORATORIO</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#" class="full-width">
                            <div class="navLateral-body-cl">
                                <i class='bx bx-news'></i>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">NOVEDADES</div>
                        </a>
                    </li>
                    <li class="full-width divider-menu-h"></li>
                </ul>
            </nav>
        </div>
    </section>

    <section class="full-width pageContent">
        <section class="full-width text-center" style="padding: 40px 0;">
            <h2 class="text-center tittles2" style="color: #31470b;">AGREGAR Franja Horaria</h2>
            <!-- Formulario para agregar nueva materia -->
            <form action="../../php/franja_horac.php" method="post" id="agregarFranjaHorForm">
                <p>
                    <label for="id_periodo">ID Periodo:</label>
                    <br>
                    <select name="id_periodo" id="id_periodo" required>
                        <?php foreach ($periodos as $periodo) : ?>
                            <option value="<?php echo $periodo['ID_PERIODO']; ?>">
                                <?php echo $periodo['ID_PERIODO']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <br>

                    <label for="time">Hora Inicio:</label><br>
                    <input type="time" name="time1" id="time1" required><br>
                    <label for="time2">Hora Final:</label><br>
                    <input type="time" name="time2" id="time2" required><br>
                    <label for="textfield">Dias:</label><br>
                    <input type="text" name="dias" id="dias" required>
                    <br>
                    <br>

                    <input type="submit" value="Agregar Franja Horaria">
                </p>
            </form>
            <button class="logout-button" onclick="location.href='administrador.html'">
                <i class="fas fa-backward fa-2x"></i></button>
        </section>
    </section>
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