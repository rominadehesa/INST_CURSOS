-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2020 a las 21:35:13
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
-- Estructura de tabla para la tabla `db_areas`
--

CREATE TABLE `db_areas` (
  `id_area` int(11) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_cursos`
--

CREATE TABLE `db_cursos` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `duracion` int(11) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `db_cursos`
--

INSERT INTO `db_cursos` (`id_curso`, `curso`, `descripcion`, `duracion`, `id_area`) VALUES
(1, 'Auxiliar Contable ', 'Detalles', 6, 11),
(3, 'Cuidados en Enfermería', 'Aprenderás: \r\nConceptos fundamentales de enfermería y cuidados en enfermería.\r\nProgramas y actividades de educación sanitaria.\r\nAtención y cuidado de pacientes, asistencia en urgencias.\r\nCuidado de heridas, técnicas de higiene, aplicación de vendajes, entre otros.\r\nConocimientos de todo el material clínico.', 6, 22),
(4, 'Secretariado Médico', 'Aprenderas: \r\nConocer la importancia de la organización y planificación dentro de la empresa.\r\nConocer las técnicas administrativas propias del puesto de secretaria médica.\r\nRealizar gestiones de tipo administrativo de una empresa de acuerdo con las normas de organización interna.\r\nOrganizar, elaborar y transmitir la información necesaria a nivel interno y externo en el lenguaje adecuado.\r\nReconocimientos de programas de informática de uso cotidiano y manipulación de los mismos.', 8, 22),
(5, 'Asistente Terapéutico', 'Aprederas: \r\nHistoria y evolución de la caracterización del acompañamiento terapéutico; las incumbencias y competencias básicas y específicas del Asistente Terapéutico.\r\nLa importancia y los criterios de Observación, registro y Evaluación específicos del del Asistente Terapéutico.\r\nConocer los principios generales de la intervención de urgencia e identificar las nociones y herramientas básicas de psicofarmacología relacionadas al Asistente Terapéutico.\r\nTécnicas y modelos de resolución de conflictos, toma de decisiones y habilidades de comunicación.', 12, 22),
(6, 'Liquidación de sueldos e impuestos', 'La capacitación se fundamenta en los aspectos técnicos-legales (teóricos/prácticos) de la liquidación de haberes e impuestos, aplicando a las tareas netamente operativas del sector contable y de gestión empresarial.', 6, 11),
(7, 'Asistente de Recursos Humanos', 'El propósito de este curso es que los interesados adquieran los aspectos técnicos-legales (teóricos/prácticos) de la gestión de los recursos humanos corporativos, aplicando los conocimientos técnicos en tareas de administración, utilizando la terminología técnica, en pos de una comunicación fluida en el ámbito profesional.', 8, 11),
(8, 'Operador Inmobiliario', 'Aprenderás a desarrollar las actividades de una oficina o empresa inmobiliaria, o en la administración de consorcios, de manera óptima y eficiente.\r\n\r\nObtendrás el conocimiento global y específico de las distintas operaciones inmobiliarias y podrás desarrollar tus tareas asistiendo al profesional inmobiliario.\r\n\r\nAdemás verás fundamentos de Derecho, leyes inmobiliarias, tipos de documentos, contratos, convocatorias, asambleas y herramientas informáticas para la confección de modelos y gestión.', 10, 11),
(9, 'Decoración de Interiores', 'El curso se propone acompañar al alumno para que logre, a partir de los distintos espacios propuestos por el docente, concretar la materialización de manera práctica de las diferentes ideas de la decoración, aplicando los conceptos y herramientas de diseño estudiados en el primer nivel del curso, incorporando nuevos temas, teniendo en cuenta la singularidad de cada proyecto, con la posibilidad de observar y plantear distintas soluciones posibles.', 6, 33),
(10, 'Diseño de Parques y Jardines', 'OBJETIVO: \r\nCapacitar al alumno para resolver los problemas de diseño que presente cada espacio verde en particular. Visualizar los distintos problemas que se plantea en diferentes espacios y saber cómo resolverlos desarrollando un método de diseño basado en el análisis del terreno, de las formas y las necesidades funcionales, utilizando las plantas existentes en la región. Para ello es necesario adquirir dominio de técnicas de representación para poder tomar notas gráficas, plantear y desarrollar un proyecto de jardín y poder expresar en papel como quedará el jardín una vez finalizado.', 6, 33),
(11, 'Cosmetología', 'El curso consiste en conocer a fondo la cosmetología, identificar los diferentes tipos de piel, sus requerimientos para poder brindar tratamientos adecuados a la sintomatología que presenten los pacientes.\r\n\r\nTe ofrece conocimientos que van desde lo básico hasta lo especializado, y te permite tener la experiencia y la certificación para incorporarte en el ámbito laboral de la estética.', 6, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `username`, `password`) VALUES
(1, 'juditmeaca@gmail.com', '$2y$10$CMjMRtKWGJFgu9Uk1bFPMuNTxUVeDI5L/q2Klw9SuBPzofxD12q0y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `db_areas`
--
ALTER TABLE `db_areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `db_cursos`
--
ALTER TABLE `db_cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `db_cursos`
--
ALTER TABLE `db_cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
