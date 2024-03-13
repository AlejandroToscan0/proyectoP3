-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-03-2024 a las 13:53:27
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto14768`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `ID_CARRERA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_DEP` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NOMBRE_CARRERA` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`ID_CARRERA`, `ID_DEP`, `NOMBRE_CARRERA`) VALUES
('C01', 'D01', 'Ingenieria de Software'),
('C02', 'D02', 'Ingenieria de software'),
('C03', 'D03', 'TICS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_DEP` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NOMBRE_DEP` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ID_DEP`, `NOMBRE_DEP`) VALUES
('D01', 'Ciencias Computa'),
('D02', 'Ciencias Exactas'),
('D03', 'Ciencias Tierra ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `Id_docen` int(11) NOT NULL,
  `nombre_docen` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `cedula_docen` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `correo_docen` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `telefono_docen` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `codi_docen` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` enum('activo','inactivo') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`Id_docen`, `nombre_docen`, `cedula_docen`, `correo_docen`, `telefono_docen`, `codi_docen`, `estado`) VALUES
(1, 'Kleber Aguilar', '1751570142', 'klagui1@espe.edu.ec', '0968756423', 'L00985', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franja_horaria`
--

CREATE TABLE `franja_horaria` (
  `ID_FRANJA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_PERIODO` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `HORA_INICIAL` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `HORA_FINAL` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DIA` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `franja_horaria`
--

INSERT INTO `franja_horaria` (`ID_FRANJA`, `ID_PERIODO`, `HORA_INICIAL`, `HORA_FINAL`, `DIA`) VALUES
('F01', 'P01', '7:00', '9:00', 'Lunes - Miercole'),
('F02', 'P02', '9:00', '11:00', 'Lunes - Miercole'),
('F03', 'P03', '7:00', '9:00', 'Martes - Jueves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `ID_LAB` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NOMBRE_LAB` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`ID_LAB`, `NOMBRE_LAB`) VALUES
('L01', 'H-205'),
('L02', 'G-406'),
('L03', 'G-205');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_MATERIA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_FRANJA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_LAB` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_CARRERA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NOMBRE_MATERIA` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NRC` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DOCENTE_ACARGO` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_MATERIA`, `ID_FRANJA`, `ID_LAB`, `ID_CARRERA`, `NOMBRE_MATERIA`, `NRC`, `DOCENTE_ACARGO`) VALUES
('M01', 'F01', 'L01', 'C01', 'Programacion Web', '14768', ''),
('M02', 'F03', 'L02', 'C02', 'Calculo Vectorial', '14985', ''),
('M03', 'F02', 'L03', 'C03', 'Cultura Ambiental', '16985', ''),
('M04', 'F01', 'L01', 'C01', 'Ecuaciones Diferenciales Ordinar', '14056', 'Ing.Marcillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id_nov` int(11) NOT NULL,
  `novedad` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `doc_responsa` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `laboratorio` varchar(6) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rol` enum('administrador','laboratorista','docente') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cedula` int(10) NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` enum('activo','inactivo') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre`, `usuario`, `password`, `rol`, `correo`, `cedula`, `telefono`, `estado`) VALUES
(8, 'administrador', 'admin', 'YWRtaW4=', 'administrador', 'admin@espe.edu.ec', 1752744224, '', 'activo'),
(16, 'karla lizbeth', 'klcajas1', 'MTIzNDU=', 'docente', 'klcajas1@espe.edu.ec', 1751570142, '', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `ID_PERIODO` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NOMBRE_PERIODO` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ESTADO_PERIODO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`ID_PERIODO`, `NOMBRE_PERIODO`, `ESTADO_PERIODO`) VALUES
('P01', 'PREGRADOS1NOV1', 1),
('P02', 'PREGRADOS2MAR1', 0),
('P03', 'PREGRADOS3MAY2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_REGISTRO` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_MATERIA` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `OBSERVACIONES` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`ID_CARRERA`),
  ADD KEY `FK_DEPAR_CARRERA` (`ID_DEP`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_DEP`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Id_docen`);

--
-- Indices de la tabla `franja_horaria`
--
ALTER TABLE `franja_horaria`
  ADD PRIMARY KEY (`ID_FRANJA`),
  ADD KEY `FK_FRANJA_PERIODO` (`ID_PERIODO`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`ID_LAB`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_MATERIA`),
  ADD KEY `FK_CARRERA_MATERIA` (`ID_CARRERA`),
  ADD KEY `FK_HORARIO` (`ID_FRANJA`),
  ADD KEY `FK_MATERIA_LAB` (`ID_LAB`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id_nov`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`ID_PERIODO`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_REGISTRO`),
  ADD KEY `FK_MATERIA_REGISTRO` (`ID_MATERIA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `Id_docen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `FK_DEPAR_CARRERA` FOREIGN KEY (`ID_DEP`) REFERENCES `departamento` (`ID_DEP`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `franja_horaria`
--
ALTER TABLE `franja_horaria`
  ADD CONSTRAINT `FK_FRANJA_PERIODO` FOREIGN KEY (`ID_PERIODO`) REFERENCES `periodo` (`ID_PERIODO`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `FK_CARRERA_MATERIA` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carrera` (`ID_CARRERA`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_HORARIO` FOREIGN KEY (`ID_FRANJA`) REFERENCES `franja_horaria` (`ID_FRANJA`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MATERIA_LAB` FOREIGN KEY (`ID_LAB`) REFERENCES `laboratorio` (`ID_LAB`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `FK_MATERIA_REGISTRO` FOREIGN KEY (`ID_MATERIA`) REFERENCES `materia` (`ID_MATERIA`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
