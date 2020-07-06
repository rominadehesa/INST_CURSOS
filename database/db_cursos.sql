-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2020 a las 22:47:08
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `area`) VALUES
(11, 'Area Administracion'),
(13, 'Area Diseño'),
(31, 'Area Cosmetologia'),
(32, 'Area Tecnologica'),
(33, 'Area Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL,
  `id_curso_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `puntuacion`, `id_usuario_fk`, `id_curso_fk`) VALUES
(73, 'Muy buen curso de administracion! ', 4, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `duracion` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `id_area_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `curso`, `descripcion`, `duracion`, `imagen`, `id_area_fk`) VALUES
(8, 'Auxiliar Contable', ' El curso tiene un perfil práctico por lo cuál los participantes podrán desempeñarse en el área administrativo-contable de una organización. ', 6, 'upload/courses/5f037f0a392701.46171078.jpg', 11),
(32, 'Auxiliar Administrativo', 'Detalles', 12, 'upload/courses/5f037fbaeca973.44565105.jpg', 11),
(33, 'Diseño de Interiores', 'Detalles', 12, 'upload/courses/5f0382295f3514.47979850.jpg', 11),
(34, 'Diseño Grafico', 'Detalles', 12, 'upload/courses/5f03823d19f2d1.87451965.jpg', 11),
(35, 'Taller de Programacion', 'Detalles', 12, 'upload/courses/5f038288536e28.42714958.jpg', 11),
(36, 'Auxiliar en Cosmetologia', 'Detalles', 12, 'upload/courses/5f0382a04a8fa6.83488945.jpg', 11),
(37, 'Asistente Social ', 'Detalles', 12, 'upload/courses/5f038317e3f1b7.08439139.jpg', 11),
(38, 'Psicologia social', 'Detalles', 12, 'upload/courses/5f038d5d8d4b13.21294262.jpg', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `permission` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`, `permission`) VALUES
(1, 'juditmeaca@gmail.com', '$2y$10$CMjMRtKWGJFgu9Uk1bFPMuNTxUVeDI5L/q2Klw9SuBPzofxD12q0y', 1),
(2, 'rominadehesa@gmail.com', '$2y$12$gJXjQBPAJLroKNHVa5XN0eC0EAM5/rKS0W62B2h.13xgTl7IHTqW.', 1),
(36, 'millereugenio@gmail.com', '$2y$10$lCWGI5J/z0UPulXs5ouDAOkXwmM5FbnCv3plft5BVBA/tlmfudl9m', 0),
(37, 'aguirremarcela@gmail.com.ar', '$2y$10$eccbF3/UWJZB172gI8vOheGpVXcpBzDuiydRl6/16gZOLo/d3GXxu', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`),
  ADD KEY `id_curso_fk` (`id_curso_fk`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_area_fk` (`id_area_fk`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_4` FOREIGN KEY (`id_curso_fk`) REFERENCES `cursos` (`id_curso`),
  ADD CONSTRAINT `comentarios_ibfk_5` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_area_fk`) REFERENCES `areas` (`id_area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
