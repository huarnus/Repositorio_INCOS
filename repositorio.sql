-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 15:56:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(100) NOT NULL,
  `carnet` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`id`, `nombreCompleto`, `carnet`, `correo`, `estado`, `cargo_id`) VALUES
(1, 'A  Dmin', '1234567', 'admin@gmail.com', '1', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivosinsta`
--

CREATE TABLE `archivosinsta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `estudiante` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `archivosinsta`
--

INSERT INTO `archivosinsta` (`id`, `titulo`, `ruta`, `tipo_documento`, `estudiante`) VALUES
(1, 'PRODUCCIÓN DE CARGADORES PARA MASCOTAS CON CAPACIDAD HASTA 9 KILOS', '../storage_Archivos/', 'CARATULA.pdf', 'Apaza Apaza Janeth Consuelo'),
(2, '', '../storage_Archivos/', 'CARNET.pdf', 'Apaza Apaza Janeth Consuelo'),
(3, '', '../storage_Archivos/', 'carta habilitacion.pdf', 'Apaza Apaza Janeth Consuelo'),
(4, '', '../storage_Archivos/', 'CARTIFICADO NACIMIENTO.pdf', 'Apaza Apaza Janeth Consuelo'),
(5, '', '../storage_Archivos/', 'CERTIFICADO LABORAL.pdf', 'Apaza Apaza Janeth Consuelo'),
(6, '', '../storage_Archivos/', 'notas.pdf', 'Apaza Apaza Janeth Consuelo'),
(7, 'PROPONER UN PLAN DE IMPORTACIÓN DE RESALTADORES KAWAII DESDE ZHEJIANG CHINA HASTA LA CIUDAD DE LA PAZ BOLIVIA PARA SATISFACER LA DEMANDA ACTUAL', '../storage_Archivos/', 'CARATULA.pdf', 'Sardan  Estrada  Laura Andrea '),
(8, '', '../storage_Archivos/', 'CARNET.pdf', 'Sardan  Estrada  Laura Andrea '),
(9, '', '../storage_Archivos/', 'carta habilitacion.pdf', 'Sardan  Estrada  Laura Andrea '),
(10, '', '../storage_Archivos/', 'CARTIFICADO NACIMIENTO.pdf', 'Sardan  Estrada  Laura Andrea '),
(11, '', '../storage_Archivos/', 'CERTIFICADO LABORAL.pdf', 'Sardan  Estrada  Laura Andrea '),
(12, '', '../storage_Archivos/', 'notas.pdf', 'Sardan  Estrada  Laura Andrea '),
(13, 'ELABORACIÓN DE UN MANUAL DE ORGANIZACIÓN Y FUNCIONES PARA EL RENDIMIENTO LABORAL ÓPTIMO EN LA EMPRESA MULTITAREA S.R.L.', '../storage_Archivos/', 'CARATULA.pdf', 'Quispe Calle Vanesa Milenca'),
(14, '', '../storage_Archivos/', 'CARNET.pdf', 'Quispe Calle Vanesa Milenca'),
(15, '', '../storage_Archivos/', 'carta habilitacion.pdf', 'Quispe Calle Vanesa Milenca'),
(16, '', '../storage_Archivos/', 'CARTIFICADO NACIMIENTO.pdf', 'Quispe Calle Vanesa Milenca'),
(17, '', '../storage_Archivos/', 'CERTIFICADO LABORAL.pdf', 'Quispe Calle Vanesa Milenca'),
(18, '', '../storage_Archivos/', 'notas.pdf', 'Quispe Calle Vanesa Milenca'),
(19, 'SISTEMA DE SEGURIDAD EN ARDUINO PARA EL CONTROL DE PUERTAS DE VIVIENDAS UNIFAMILIARES EN LA CIUDAD DE LA PAZ', '../storage_Archivos/', 'CARATULA.pdf', 'Quispe Rojas Victor Bernardo'),
(20, '', '../storage_Archivos/', 'CARNET.pdf', 'Quispe Rojas Victor Bernardo'),
(21, '', '../storage_Archivos/', 'carta habilitacion.pdf', 'Quispe Rojas Victor Bernardo'),
(22, '', '../storage_Archivos/', 'CARTIFICADO NACIMIENTO.pdf', 'Quispe Rojas Victor Bernardo'),
(23, '', '../storage_Archivos/', 'CERTIFICADO LABORAL.pdf', 'Quispe Rojas Victor Bernardo'),
(24, '', '../storage_Archivos/', 'notas.pdf', 'Quispe Rojas Victor Bernardo'),
(31, 'plataforma web para enseñanza dinámica de robótica dirigida a estudiantes de educación primaria', '../storage_Archivos/', 'CARATULA.pdf', 'Ticona Siñani Alejandro Reynaldo'),
(32, '', '../storage_Archivos/', 'CARNET.pdf', 'Ticona Siñani Alejandro Reynaldo'),
(33, '', '../storage_Archivos/', 'carta habilitacion.pdf', 'Ticona Siñani Alejandro Reynaldo'),
(34, '', '../storage_Archivos/', 'CARTIFICADO NACIMIENTO.pdf', 'Ticona Siñani Alejandro Reynaldo'),
(35, '', '../storage_Archivos/', 'CERTIFICADO LABORAL.pdf', 'Ticona Siñani Alejandro Reynaldo'),
(36, '', '../storage_Archivos/', 'notas.pdf', 'Ticona Siñani Alejandro Reynaldo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `estado`) VALUES
(7, 'Estudiante', 1),
(8, 'Egresado', 1),
(9, 'Directora', 1),
(10, 'Secretario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrrera`
--

CREATE TABLE `carrrera` (
  `id` int(11) NOT NULL,
  `nombre_carrera` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrrera`
--

INSERT INTO `carrrera` (`id`, `nombre_carrera`) VALUES
(1, 'Sistemas Informaticos'),
(2, 'Contaduria General'),
(3, 'Comercio Internacional'),
(4, 'Secretariado Ejecutivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombreCompleto` varchar(255) DEFAULT NULL,
  `carnet` varchar(100) NOT NULL,
  `extencion` varchar(100) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `año_egreso` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `tipo_postulante_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombreCompleto`, `carnet`, `extencion`, `celular`, `año_egreso`, `correo`, `estado`, `tipo_postulante_id`, `cargo_id`) VALUES
(1, 'Apaza Apaza Janeth Consuelo', '14069297', 'La Paz', '78855020', '2020', 'janethapaza2798@gmail.com', 1, NULL, 8),
(2, 'Sardan  Estrada  Laura Andrea ', '9899804', 'La Paz', '75852098', '2021', 'sardan.estrada.laura@incoslapaz.org', 1, NULL, 8),
(3, 'Quispe Calle Vanesa Milenca', '10064215', 'La Paz', '63251209', '2021', 'quispe.calle.vanesa@incoslapaz.org', 1, NULL, 8),
(4, 'Quispe Rojas Victor Bernardo', '8350274', 'La Paz', '77724870', '2022', 'quisperojasvictorbernardo@gmail.com', 1, NULL, 8),
(6, 'Ticona Siñani Alejandro Reynaldo', '45323124', 'La Paz', '7666666', '2023', 'ticona.ibanez.alejandro@incoslapaz.org', 1, NULL, 7),
(7, 'Patzi Saire Maria Luisa', '65252525', 'La Paz', '76272727', '2023', 'patsi.marialuis@incoslapaz.org', 1, NULL, 7),
(8, 'Quinteros Bravo Amir Limbert', '13971437', 'La Paz', '7666666', '2023', 'quinteros.bravo.amir@incoslapaz.org', 1, NULL, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas_instancia`
--

CREATE TABLE `etapas_instancia` (
  `id` int(11) NOT NULL,
  `instancia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etapas_instancia`
--

INSERT INTO `etapas_instancia` (`id`, `instancia`) VALUES
(6, 'Predefensa'),
(7, 'Defensa'),
(8, 'Repositorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_proyectos`
--

CREATE TABLE `historial_proyectos` (
  `id_historial` int(11) NOT NULL,
  `titulo` varchar(254) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `estudiante_nombre` varchar(255) NOT NULL,
  `modalidad` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `tipo_proyecto` varchar(255) DEFAULT NULL,
  `etapas_instancia` varchar(255) NOT NULL,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_proyectos`
--

INSERT INTO `historial_proyectos` (`id_historial`, `titulo`, `descripcion`, `tutor`, `gestion`, `fecha_entrega`, `estado`, `estudiante_nombre`, `modalidad`, `carrera`, `tipo_proyecto`, `etapas_instancia`, `fecha_actualizacion`) VALUES
(1, 'SISTEMA WEB PARA LA VERIFICACIÓN Y VALIDACIÓN DE PLANILLAS DE SUELDOS Y SALARIOS', ' El Proyecto de Grado titulado: “Sistema Web para la Verificación y Validación de Planillas de Sueldos y Salarios”, el mismo fue desarrollado para la firma auditora “SGM Consulting Group Ltda”, con el objetivo de brindar una herramienta que agilice tiemposa las tareas de revisión y validación a las planillas de sueldos y salarios pertenecientes a\r\nlos clientes (empresas) con los que trabaja la firma auditora, el mismo también generara reportes por empleados observados respecto a los cálculos de sus bonos, descuentos y por ende a sus líquidos pagables.', 'Lopez Surco Miriam Eugenia', 2023, '2023-11-28', NULL, 'Roger Aguirre Villarroel', 'Proyecto de Grado', 'Sistemas Informaticos', 'Individual', 'Defensa', '2023-11-29 09:26:06'),
(2, 'SISTEMA WEB PARA LA VERIFICACIÓN Y VALIDACIÓN DE PLANILLAS DE SUELDOS Y SALARIOS', ' El Proyecto de Grado titulado: “Sistema Web para la Verificación y Validación de Planillas de Sueldos y Salarios”, el mismo fue desarrollado para la firma auditora “SGM Consulting Group Ltda”, con el objetivo de brindar una herramienta que agilice tiempos a las tareas de revisión y validación a las planillas de sueldos y salarios pertenecientes a los clientes (empresas) con los que trabaja la firma auditora, el mismo también generara reportes por empleados observados respecto a los cálculos de sus bonos, descuentos y por ende a sus líquidos pagables.\r\nEl proyecto está basado en la metodología XP (Programación Extrema), que propone cuatro fases para el ciclo de vida del proyecto, es desarrollado con lenguajes de programación como PHP, Java Script y el framework Laravel, finalizando con algunas conclusiones y recomendaciones para el uso correcto del sistema.', 'Lopez Surco Miriam Eugenia', 2023, '2023-11-29', NULL, 'Roger Aguirre Villarroel', 'Proyecto de Grado', 'Sistemas Informaticos', 'Individual', 'Repositorio', '2023-11-29 09:37:56'),
(3, 'SISTEMA WEB PARA EL SEGUIMIENTO DE DEFENSAS Y PUBLICACIÓN DE PROYECTOS EN UN REPOSITORIO', ' En el marco del proyecto para el Instituto Técnico Comercial Superior de la Nación \"Tte. Armando de Palacios\" INCOS La Paz, se implementará la metodología de prototipado para desarrollar un sistema web. El objetivo principal del sistema es facilitar el seguimiento de defensas y la publicación de proyectos en línea. Los requisitos funcionales incluyen módulos para la inscripción en línea de defensas, revisión y aprobación de proyectos, gestión de usuarios y permisos, búsqueda y listado de proyectos, generación de informes y un seguimiento detallado de las defensas. Además, se permitirá a los estudiantes realizar su preinscripción en línea para las defensas. Los requisitos no funcionales se enfocan en aspectos como seguridad, rendimiento y usabilidad. Las tecnologías a utilizar incluyen HTML, CSS, JavaScript y PHP para el frontend, y MySQL para la base de datos. Las pruebas se llevarán a cabo según criterios específicos de cada módulo. En resumen, el sistema proporcionará una plataforma integral, segura y eficiente para la gestión de proyectos educativos, mejorando significativamente la experiencia para estudiantes, secretarios y directores del Instituto.', 'Velasquez Yupanqui Julio', 2023, '2023-11-29', NULL, 'Quinteros Bravo Amir Limbert', 'Proyecto de Grado', 'Sistemas Informaticos', 'Individual', 'Defensa', '2023-11-29 20:53:31'),
(4, 'PROYECTO DE GRADO SISTEMA WEB PARA EL SEGUIMIENTO DE DEFENSAS Y PUBLICACIÓN DE PROYECTOS EN UN REPOSITORIO', ' En el marco del proyecto para el Instituto Técnico Comercial Superior de la Nación \"Tte. Armando de Palacios\" INCOS La Paz, se implementará la metodología de prototipado para desarrollar un sistema web. El objetivo principal del sistema es facilitar el seguimiento de defensas y la publicación de proyectos en línea. Los requisitos funcionales incluyen módulos para la inscripción en línea de defensas, revisión y aprobación de proyectos, gestión de usuarios y permisos, búsqueda y listado de proyectos, generación de informes y un seguimiento detallado de las defensas. Además, se permitirá a los estudiantes realizar su preinscripción en línea para las defensas. Los requisitos no funcionales se enfocan en aspectos como seguridad, rendimiento y usabilidad. Las tecnologías a utilizar incluyen HTML, CSS, JavaScript y PHP para el frontend, y MySQL para la base de datos. Las pruebas se llevarán a cabo según criterios específicos de cada módulo. En resumen, el sistema proporcionará una plataforma integral, segura y eficiente para la gestión de proyectos educativos, mejorando significativamente la experiencia para estudiantes, secretarios y directores del Instituto.', 'Velasquez Yupanqui Julio', 2023, '2023-11-29', NULL, 'Quinteros Bravo Amir Limbert', 'Proyecto de Grado', 'Sistemas Informaticos', 'Individual', 'Repositorio', '2023-11-29 20:55:56'),
(5, 'PRODUCCIÓN DE CARGADORES PARA MASCOTAS CON CAPACIDAD HASTA 9 KILOS', 'Este proyecto tiene como objetivo la generación de un modelo de desarrollo basado en componentes y requisitos que tenga en cuenta la reutilización. A partir de un método inicial llamado COTSRE utilizado para seleccionar componentes a partir de una serie de requisitos y características se ha diseñado un proceso que abarca todo el ciclo de vida de un componente, al que llamaremos COTSRE+. Para ello se ha estudiado un proceso de desarrollo de componentes existente creado por Chessman y Daniels y hemos ampliado COTSRE a partir de él para obtener COTSRE+. COTSRE+ se ha formalizado utilizando la notación estándar de OMG llamada SPEM y se ha ampliado la selección de componentes definida en COTSRE para que además de los requisitos y características, puedan utilizarse los casos de uso para seleccionar componentes. Para automatizar este proceso de selección y catalogar los requisitos, casos de uso y componentes se ha desarrollado una herramienta de escritorio llamada CotsreApp.  Para la publicación del método se ha desarrollado una web con ayuda de la herramienta EPF Composer de Eclipse. ', NULL, 2023, '2023-11-28', 1, 'Apaza Apaza Janeth Consuelo', 'Emprendimiento Productivo', 'Contaduria General', NULL, 'Predefensa', '2023-11-29 21:21:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciados`
--

CREATE TABLE `licenciados` (
  `id` int(11) NOT NULL,
  `nombre_lice` varchar(255) DEFAULT NULL,
  `carrrera_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `licenciados`
--

INSERT INTO `licenciados` (`id`, `nombre_lice`, `carrrera_id`) VALUES
(1, 'Adriazola Morales Lesli Evert', 2),
(2, 'Andrade Mercado Maria Clotilde', 2),
(3, 'Arcani Jimenez Americo', 2),
(4, 'Arrascaita Mancilla Lindon Alfredo', 2),
(5, 'Barrios Clavel Sergio Eduardo', 2),
(6, 'Bustillos Flores Adolfo Luis', 2),
(7, 'Cabrera Segales Oscar', 2),
(8, 'Choque Arias Miguel Angel', 2),
(9, 'Columba Cossio Maria Elena', 2),
(10, 'Cuenca Ramallo Verónica', 2),
(11, 'Rodriguez Enriquez Hugo', 2),
(12, 'Flores Condori Sugar Carlos', 2),
(13, 'Herrera Vargas Daniel', 2),
(14, 'Isnado Pimentel Edgar', 2),
(15, 'Layme Llanos Magna Rosmery', 2),
(16, 'López Arenas Jorge Valentín', 2),
(17, 'Mamani Cabrera Oscar Alvaro', 2),
(18, 'Mendoza Mendoza Luis Alberto', 2),
(19, 'Tenorio Canahuiri Daniel', 2),
(20, 'Nina Mollo Cesar', 2),
(21, 'Pabon Montaño Marcelo Santiago', 2),
(22, 'Pacheco Quisbert Jaime Javier', 2),
(23, 'Pedraza Fernandez Paz Rossio', 2),
(24, 'Piza Mancilla Blanca Roxana', 2),
(25, 'Quilla Sillerico Hugo', 2),
(26, 'Quinteros Ticona Eddy', 2),
(27, 'Sanchez Zeballos Rigoberto', 2),
(28, 'Siñani Chambi Lidia Ruth', 2),
(29, 'Vasquez Quiñónez Marcus Martín', 2),
(30, 'Vera Velasquez Martha Marina', 2),
(31, 'Aguirre Montalvo Julie Carla', 1),
(32, 'Chavez Duran Grover Marcelo', 1),
(33, 'Lopez Surco Miriam Eugenia', 1),
(34, 'Loza Soliz Madelina', 1),
(35, 'Quina Mamani Luis Carlos', 1),
(36, 'Tola Flores Egberto', 1),
(37, 'Valencia Pinto Ivonne Francisca', 1),
(38, 'Velasquez Yupanqui Julio', 1),
(39, 'Alvarez Flores Lina Mariel', 3),
(40, 'Callizaya Montenegro Paola Andrea', 3),
(41, 'Colque Villca Franz', 3),
(42, 'Gutierrez Chavez Richard Rodrigo', 3),
(43, 'Huanca Gonzales Mario Ismael', 3),
(44, 'Mallea Cossio Guido', 3),
(45, 'Meneses Apaza Ligia Elena', 3),
(46, 'Oros Carrasco Armando', 3),
(47, 'Mendoza Nogales Max Filiberto', 3),
(48, 'Salazar Morales Max', 3),
(49, 'Tindal Felípez Luis Orlando', 3),
(50, 'Sossa Rivera Armando', 3),
(51, 'Barrios Lopez Gaby', 4),
(52, 'Colque Villca Adalid', 4),
(53, 'Condori Fernandez Claudia Gladys', 4),
(54, 'Gutierrez Ochoa Martha', 4),
(55, 'Illanes Zelaya Beatriz', 4),
(56, 'Perez Urquizo Beatriz', 4),
(57, 'Quispe Suxo Santos', 4),
(58, 'Tarquino Enao Ruth Reveca', 4),
(59, 'Zalles Flores Silvia', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(11) NOT NULL,
  `nombreM` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id`, `nombreM`) VALUES
(7, 'Proyecto de Grado'),
(8, 'Emprendimiento Productivo'),
(9, 'Trabajo Dirigido Externo'),
(10, 'Sociocomunitario Productivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_defensa`
--

CREATE TABLE `proyectos_defensa` (
  `id_pro` int(11) NOT NULL,
  `titulo` varchar(254) DEFAULT NULL,
  `estudiantes_id` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `carrrera_id` int(11) DEFAULT NULL,
  `proyectoes_id` int(11) DEFAULT NULL,
  `archivosinsta_id` int(11) DEFAULT NULL,
  `etapas_instancia_id` int(11) DEFAULT NULL,
  `licenciados_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos_defensa`
--

INSERT INTO `proyectos_defensa` (`id_pro`, `titulo`, `estudiantes_id`, `descripcion`, `tutor`, `gestion`, `fecha_entrega`, `estado`, `modalidad_id`, `carrrera_id`, `proyectoes_id`, `archivosinsta_id`, `etapas_instancia_id`, `licenciados_id`) VALUES
(2, 'PROPONER UN PLAN DE IMPORTACIÓN DE RESALTADORES KAWAII DESDE ZHEJIANG CHINA HASTA LA CIUDAD DE LA PAZ BOLIVIA PARA SATISFACER LA DEMANDA ACTUAL', 2, 'Este proyecto tiene como objetivo la generación de un modelo de desarrollo basado en componentes y requisitos que tenga en cuenta la reutilización. A partir de un método inicial llamado COTSRE utilizado para seleccionar componentes a partir de una serie de requisitos y características se ha diseñado un proceso que abarca todo el ciclo de vida de un componente, al que llamaremos COTSRE+. Para ello se ha estudiado un proceso de desarrollo de componentes existente creado por Chessman y Daniels y hemos ampliado COTSRE a partir de él para obtener COTSRE+. COTSRE+ se ha formalizado utilizando la notación estándar de OMG llamada SPEM y se ha ampliado la selección de componentes definida en COTSRE para que además de los requisitos y características, puedan utilizarse los casos de uso para seleccionar componentes. Para automatizar este proceso de selección y catalogar los requisitos, casos de uso y componentes se ha desarrollado una herramienta de escritorio llamada CotsreApp.  Para la publicación del método se ha desarrollado una web con ayuda de la herramienta EPF Composer de Eclipse. ', NULL, 2023, '2023-11-28', 1, 7, 3, 5, 7, 6, 45),
(3, 'ELABORACIÓN DE UN MANUAL DE ORGANIZACIÓN Y FUNCIONES PARA EL RENDIMIENTO LABORAL ÓPTIMO EN LA EMPRESA MULTITAREA S.R.L.', 3, 'Este proyecto tiene como objetivo la generación de un modelo de desarrollo basado en componentes y requisitos que tenga en cuenta la reutilización. A partir de un método inicial llamado COTSRE utilizado para seleccionar componentes a partir de una serie de requisitos y características se ha diseñado un proceso que abarca todo el ciclo de vida de un componente, al que llamaremos COTSRE+. Para ello se ha estudiado un proceso de desarrollo de componentes existente creado por Chessman y Daniels y hemos ampliado COTSRE a partir de él para obtener COTSRE+. COTSRE+ se ha formalizado utilizando la notación estándar de OMG llamada SPEM y se ha ampliado la selección de componentes definida en COTSRE para que además de los requisitos y características, puedan utilizarse los casos de uso para seleccionar componentes. Para automatizar este proceso de selección y catalogar los requisitos, casos de uso y componentes se ha desarrollado una herramienta de escritorio llamada CotsreApp.  Para la publicación del método se ha desarrollado una web con ayuda de la herramienta EPF Composer de Eclipse. ', NULL, 2023, '2023-11-28', 1, 7, 4, 5, 13, 6, 54),
(4, 'SISTEMA DE SEGURIDAD EN ARDUINO PARA EL CONTROL DE PUERTAS DE VIVIENDAS UNIFAMILIARES EN LA CIUDAD DE LA PAZ', 4, 'Este proyecto tiene como objetivo la generación de un modelo de desarrollo basado en componentes y requisitos que tenga en cuenta la reutilización. A partir de un método inicial llamado COTSRE utilizado para seleccionar componentes a partir de una serie de requisitos y características se ha diseñado un proceso que abarca todo el ciclo de vida de un componente, al que llamaremos COTSRE+. Para ello se ha estudiado un proceso de desarrollo de componentes existente creado por Chessman y Daniels y hemos ampliado COTSRE a partir de él para obtener COTSRE+. COTSRE+ se ha formalizado utilizando la notación estándar de OMG llamada SPEM y se ha ampliado la selección de componentes definida en COTSRE para que además de los requisitos y características, puedan utilizarse los casos de uso para seleccionar componentes. Para automatizar este proceso de selección y catalogar los requisitos, casos de uso y componentes se ha desarrollado una herramienta de escritorio llamada CotsreApp.  Para la publicación del método se ha desarrollado una web con ayuda de la herramienta EPF Composer de Eclipse. ', NULL, 2023, '2023-11-28', 1, 7, 1, 5, 19, 6, 32),
(6, 'plataforma web para enseñanza dinámica de robótica dirigida a estudiantes de educación primaria', 6, 'Este proyecto tiene como objetivo la generación de un modelo de desarrollo basado en componentes y requisitos que tenga en cuenta la reutilización. A partir de un método inicial llamado COTSRE utilizado para seleccionar componentes a partir de una serie de requisitos y características se ha diseñado un proceso que abarca todo el ciclo de vida de un componente, al que llamaremos COTSRE+. Para ello se ha estudiado un proceso de desarrollo de componentes existente creado por Chessman y Daniels y hemos ampliado COTSRE a partir de él para obtener COTSRE+. COTSRE+ se ha formalizado utilizando la notación estándar de OMG llamada SPEM y se ha ampliado la selección de componentes definida en COTSRE para que además de los requisitos y características, puedan utilizarse los casos de uso para seleccionar componentes. Para automatizar este proceso de selección y catalogar los requisitos, casos de uso y componentes se ha desarrollado una herramienta de escritorio llamada CotsreApp.  Para la publicación del método se ha desarrollado una web con ayuda de la herramienta EPF Composer de Eclipse. ', NULL, 2023, '2023-11-28', 1, 8, 1, 5, 31, 8, 36);

--
-- Disparadores `proyectos_defensa`
--
DELIMITER $$
CREATE TRIGGER `tr_historial_proyecto` BEFORE DELETE ON `proyectos_defensa` FOR EACH ROW BEGIN
  DECLARE estudiante_nombre VARCHAR(255);
  DECLARE modalidad VARCHAR(255);
  DECLARE carrera VARCHAR(255);
  DECLARE proyectoes VARCHAR(255);
  DECLARE etapas_instancia VARCHAR(255);

  -- Obtener el nombre completo del estudiante
  SELECT nombreCompleto INTO estudiante_nombre
  FROM estudiantes
  WHERE id = OLD.estudiantes_id;
  
   -- Obtener el nombre de la modalidad 
  SELECT nombreM INTO modalidad
  FROM modalidad
  WHERE id = OLD.modalidad_id;
  
   -- Obtener el nombre completo del estudiante
  SELECT nombre_carrera INTO carrera
  FROM carrrera
  WHERE id = OLD.carrrera_id;
  
   -- Obtener el TIPO DE PROYECTO
  SELECT proyectoEs INTO proyectoes
  FROM tipo_proyecto
  WHERE id = OLD.proyectoes_id;
  
  -- obtener la instancia 
   SELECT instancia INTO etapas_instancia
  FROM etapas_instancia
  WHERE id = OLD.etapas_instancia_id;
  

  -- Insertar en el historial
  INSERT INTO historial_proyectos (
    titulo,
    descripcion,
    tutor,
    gestion,
    fecha_entrega,
    estado,
    estudiante_nombre,
    modalidad,
    carrera,
    tipo_proyecto,
    etapas_instancia,
    fecha_actualizacion
  )
  VALUES (
    OLD.titulo,
    OLD.descripcion,
    OLD.tutor,
    OLD.gestion,
    OLD.fecha_entrega,
    OLD.estado,
    estudiante_nombre,
    modalidad,
    carrera,
    proyectoes,
    etapas_instancia,
    NOW()
  );

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_repositorio`
--

CREATE TABLE `proyectos_repositorio` (
  `id_repo` int(11) NOT NULL,
  `titulo` varchar(254) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `autor` char(100) DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `ruta` char(255) DEFAULT NULL,
  `tipo_documento` varchar(255) DEFAULT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `carrrera_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos_repositorio`
--

INSERT INTO `proyectos_repositorio` (`id_repo`, `titulo`, `descripcion`, `autor`, `tutor`, `gestion`, `fecha_publicacion`, `estado`, `ruta`, `tipo_documento`, `modalidad_id`, `carrrera_id`) VALUES
(18, 'SISTEMA WEB PARA LA VERIFICACIÓN Y VALIDACIÓN DE PLANILLAS DE SUELDOS Y SALARIOS', 'El Proyecto de Grado titulado: “Sistema Web para la Verificación y Validación de Planillas de Sueldos y Salarios”, el mismo fue desarrollado para la firma auditora “SGM Consulting Group Ltda”, con el objetivo de brindar una herramienta que agilice tiempos a las tareas de revisión y validación a las planillas de sueldos y salarios pertenecientes a los clientes (empresas) con los que trabaja la firma auditora, el mismo también generara reportes por empleados observados respecto a los cálculos de sus bonos, descuentos y por ende a sus líquidos pagables.\r\nEl proyecto está basado en la metodología XP (Programación Extrema), que propone cuatro fases para el ciclo de vida del proyecto, es desarrollado con lenguajes de programación como PHP, Java Script y el framework Laravel, finalizando con algunas conclusiones y recomendaciones para el uso correcto del sistema.', 'Roger Aguirre Villarroel', 'Lopez Surco Miriam Eugenia', 2023, '2023-11-29', 0, '../repositorio2023/37.pdf', 'Aguirre_Roger_Empastado (1).pdf', 7, 1),
(19, 'PROYECTO DE GRADO SISTEMA WEB PARA EL SEGUIMIENTO DE DEFENSAS Y PUBLICACIÓN DE PROYECTOS EN UN REPOSITORIO', 'En el marco del proyecto para el Instituto Técnico Comercial Superior de la Nación \"Tte. Armando de Palacios\" INCOS La Paz, se implementará la metodología de prototipado para desarrollar un sistema web. El objetivo principal del sistema es facilitar el seguimiento de defensas y la publicación de proyectos en línea. Los requisitos funcionales incluyen módulos para la inscripción en línea de defensas, revisión y aprobación de proyectos, gestión de usuarios y permisos, búsqueda y listado de proyectos, generación de informes y un seguimiento detallado de las defensas. Además, se permitirá a los estudiantes realizar su preinscripción en línea para las defensas. Los requisitos no funcionales se enfocan en aspectos como seguridad, rendimiento y usabilidad. Las tecnologías a utilizar incluyen HTML, CSS, JavaScript y PHP para el frontend, y MySQL para la base de datos. Las pruebas se llevarán a cabo según criterios específicos de cada módulo. En resumen, el sistema proporcionará una plataforma integral, segura y eficiente para la gestión de proyectos educativos, mejorando significativamente la experiencia para estudiantes, secretarios y directores del Instituto.', 'Quinteros Bravo Amir Limbert', 'Velasquez Yupanqui Julio', 2023, '2023-11-29', 1, '../repositorio2023/44.pdf', 'sistema web para elseuimiento de defensas.pdf', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_repositorio22`
--

CREATE TABLE `pro_repositorio22` (
  `id` int(11) NOT NULL,
  `titulo` varchar(254) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `autor` char(100) DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL,
  `gestion` year(4) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `ruta` char(255) DEFAULT NULL,
  `tipo_documento` varchar(255) DEFAULT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `carrrera_id` int(11) DEFAULT NULL,
  `licenciados_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pro_repositorio22`
--

INSERT INTO `pro_repositorio22` (`id`, `titulo`, `descripcion`, `autor`, `tutor`, `gestion`, `fecha_publicacion`, `estado`, `ruta`, `tipo_documento`, `modalidad_id`, `carrrera_id`, `licenciados_id`) VALUES
(1, 'VIDEOJUEGO SOBRE LA GUERRA DEL CHACO PARA ESTUDIANTES DE UNIDADES EDUCATIVAS DE LA PAZ', 'La presente investigación tiene como objetivo desarrollar un videojuego en 2D para niñ@s de 11 a 15 años, sobre la historia boquerón 3 pasos al frente, con el propósito de mejorar la curva de aprendizaje sobre parte de la historia Boliviana mostrando aspectos generales de esta, que ayudará a los estudiantes a comprender parte de la guerra del chaco, e incitara a la investigación y debate. Para la implementación se usó la metodología SUM la cual es una metodología para videojuegos que tiene como objetivos desarrollar videojuegos de calidad en tiempo y costo, así como la mejora continua del proceso para incrementar la eficacia y eficiencia de esta. Pretende obtener resultados predecibles, administrar eficientemente los recursos y riesgos del proyecto, y lograr una alta productividad del equipo de desarrollo, se adaptó la metodología para él un equipo de trabajo de 1 sola persona. Se usaron las siguientes herramientas para el desarrollo de este proyecto, Unity que es un motor de videojuego multiplataforma, también Sony vega para la edición de epílogo y créditos, otra herramienta que se usó es Pixelorama para el modelado 2D en pixel art de los', 'JERALDINE VALERIA ESPINOZA ESPINOZA', 'Tola Flores Egberto', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'Emprendimiento Productivo - Videojuego Educativo.pdf', 8, 1, NULL),
(2, 'FORTALECIMIENTO A LA SEGURIDAD CIUDADANA SOCIOCOMUNITARIA EN HUARINA A TRAVÉS DE LA IMPLEMENTACIÓN DE UN SISTEMA APLICADO PARA LA BÚSQUEDA DE PERSONAS DESAPARECIDAS', 'El presente proyecto sociocomunitario productivo titulado: “Fortalecimiento a la Seguridad Ciudadana Socio comunitaria en Huarina a través de la Implementación de un Sistema Aplicado Para La Búsqueda De Personas Desaparecidas (Convenio Incos – La Paz Municipio De Huarina)” se realizó para ayudar en la ardua tarea de buscar personas desaparecidas utilizando reconocimiento facial, el sistema es capáz de guardar las fotos de las personas desaparecidas en su base de datos y con ese dato poder comparar los nuevos rostros que se pongan delante de la cámara web, en caso de encontrar un rostro que coincida con alguno guardado en la base de datos el sistema nos mandara una alarma de aviso en tiempo real.\r\nEl sistema está desarrollado en el lenguaje de programación Python en el framework Flask para su uso en la web, utiliza el gestor de base de datos MySql, está basado en la metodología XP (eXtreme Programming). El sistema implementa distintas librerías gratuitas para el uso de detección y comparación de rostros, destacando entre ellas OpenCV.', 'Miguel Angel Mamani Villca', 'Chavez Duran Grover Marcelo', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'Miguel_Mamani_Villca.pdf', 10, 1, NULL),
(3, 'SISTEMA WEB ACADÉMICO DE INSCRIPCIÓN Y CONTROL DE PAGOS DE LOS ESTUDIANTES', 'El presente proyecto de grado titulado “Sistema web académico de inscripción y control de pagos de los estudiantes caso: Centro de apoyo académico Becados-Bolivia” cuyo propósito es facilitar el resguardo, registro y acceso a la información primordial que maneja Becados Bolivia razón por la cual ha sido concebido con la idea de mejorar los procesos que se realiza dentro de la empresa. En cuanto al registro de estudiantes, registro personal y control de pagos, se tendrá un mayor índice de rendimiento con tiempos de ejecución mínimos en dichos procesos.', 'Rolando Ramos Ventura', 'Velasquez Yupanqui Julio', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'P.G_RRV.pdf', 7, 1, NULL),
(4, 'PLATAFORMA WEB DE ENSEÑANZA DE MARKETING DIGITAL', 'El presente Proyecto de emprendimiento productivo \"Plataforma web de enseñanza de Marketing Digital\" fue desarrollado viendo Ia necesidad de que en estos tiempos post pandemia del Covid 19 la comerciahzaci6n de productos o sercicios por internet y redes sociales se incrementaron y los emprendedores. negocios y comerciantes buscan aumentar sus ventag y tener presencia online. La plataforma enseñara a crear tu presencia online y a vender productos o servicios por redes sociales enseñando a captar clientes potenciales y de estos Ilegar a nuestro cliente ideal adicionalmente la plataforma perm:tirå a nuestros usuarios poder generar sus propios ingresos ofreciendo y vendiendo nuestra plataforma.', 'Mauricio Ramiro Calderon Ramirez', 'Loza Soliz Madelina', 2023, '2023-11-28', 1, '../storage_Proyectos2022/', 'plataforma web de enseñanza de marketing digital-1.pdf', 8, 1, NULL),
(5, 'SISTEMA PARA LA GESTIÓN DE CONTROL EN ACCESOS A GARAJES PÚBLICOS MEDIANTE RECONOCIMIENTO DE MATRÍCULAS', 'Con el manejo de nuevas tecnologías a nivel mundial, Bolivia ha entrado en un salto tecnológico y ha empezado a buscar la aplicación de estas nuevas tecnologías, entre ellas una de las que más destaca es la inteligencia artificial para reconocimiento. Que se ha empezado a implementar en instituciones como medio de asistencia mediante reconocimiento facial, en carreteras para ver el estado de las mismas, etc. El desarrollo de este proyecto busca utilizar estas herramientas como una oportunidad de inversión que me pueda brindar una ganancia a partir de implementar esta tecnología para un lugar donde no se haya puesto en marcha los parqueos públicos.', 'Paul Steffano Velarde Chuquimia', 'Chavez Duran Grover Marcelo', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'Proyecto de Emprendimiento Paul Steffano Velarde Chuquimia.pdf', 8, 1, NULL),
(6, 'SISTEMA DE DIGITALIZACIÓN Y CONSULTAS DE HISTORIAL ACADÉMICO PARA ESTUDIANTES DE 1980 A 1999', 'El proyecto de grado titulado “Sistema De Digitalización Y Consultas De Historial Académico Para Estudiantes De 1980 A 1999” fue desarrollado para la Dirección Departamental De Educación La Paz (SEDUCA) con el propósito de digitalizar los datos que se encuentran dentro de los centralizadores de calificaciones de estudiantes de 1980 a 1999, y utilizar un módulo de búsqueda con el propósito de agilizar los trámites que requieran de dichos centralizadores. Además de generar reportes de historial académico e impresión de certificados de calificaciones de las gestiones de 1980 a 1999 por estudiante.\r\nEl proyecto fue desarrollado utilizando la metodología XP (Programación Extrema) y se codificó usando los lenguajes de programación PHP, JavaScript. Se utilizó como gestor de base de datos MySQL.', 'Carlos Manuel Paye Torrez', 'Quina Mamani Luis Carlos', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'SISTEMA DE DIGITALIZACIÓN Y CONSULTAS DE HISTORIAL ACADÉMICO PARA ESTUDIANTES DE 1980 A 1999.pdf', 7, 1, NULL),
(7, 'IMPLEMENTACIÓN DEL PLAN DE LOGÍSTICA DE IMPORTACIÓN DE ENVASES DE PLÁSTICO DESDE LA REPÚBLICA DE PANAMÁ HASTA LA CIUDAD DE EL ALTO – LA PAZ- BOLIVIA', 'Un sistema como el que se propone, es una plataforma en línea que permitirá poder registrar, organizar el seguimiento y compartir información en formato digital de los proyectos desarrollados hasta su culminación.\r\n', 'Lopez Condori Milton', 'Colque Villca Franz', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'CARATULA.pdf', 9, 3, NULL),
(8, 'PLAN LOGÍSTICO DE EXPORTACIÓN DE MOCHILAS Y BANDOLERAS DE CUERO DE CALZART BOLIVIA DESDE LA PAZ - BOLIVIA AL MERCADO DE BARCELONA - ESPAÑA', 'Un sistema como el que se propone, es una plataforma en línea que permitirá poder registrar, organizar el seguimiento y compartir información en formato digital de los proyectos desarrollados hasta su culminación.', 'Flores Azucena Yeancarla', 'Salazar Morales Max', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'CARATULA.pdf', 7, 3, NULL),
(9, 'PRODUCCIÓN DE PLANTINES DE CLAVEL BAJO INVERNADERO EN EL MUNICIPIO DE MECAPACA DE LA CIUDAD DE LA PAZ', 'Un sistema como el que se propone, es una plataforma en línea que permitirá poder registrar, organizar el seguimiento y compartir información en formato digital de los proyectos desarrollados hasta su culminación.', 'Chinchero Kori Victoria Modesta', 'Pedraza Fernandez Paz Rossio', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'CARATULA.pdf', 8, 2, NULL),
(10, 'PLAN DE EXPORTACIÓN DE CAFÉ A PARTIR DE UNA PROSPECCIÓN DE MERCADOS INTERNACIONALES', 'Un sistema como el que se propone, es una plataforma en línea que permitirá poder registrar, organizar el seguimiento y compartir información en formato digital de los proyectos desarrollados hasta su culminación.', 'Quispe Laura Lizeth Paola', 'Gutierrez Ochoa Martha', 2022, '2023-11-28', 1, '../storage_Proyectos2022/', 'CARATULA.pdf', 7, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_postulante`
--

CREATE TABLE `tipo_postulante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_postulante`
--

INSERT INTO `tipo_postulante` (`id`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Egresado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_proyecto`
--

CREATE TABLE `tipo_proyecto` (
  `id` int(11) NOT NULL,
  `proyectoEs` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_proyecto`
--

INSERT INTO `tipo_proyecto` (`id`, `proyectoEs`) VALUES
(5, 'Individual'),
(6, 'Grupo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(254) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `estudiantes_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `contraseña`, `estudiantes_id`, `cargo_id`, `estado`) VALUES
(1, 'A  Dmin', 'ADMIN', '$2y$10$HhF1nugXbdQIQVJgXzC8HeqTlGP4U8kI4u7ea.4RAIKeF.ib1q42S', NULL, 9, 1),
(2, 'Apaza Apaza Janeth Consuelo', 'aajanethconsuelo', '$2y$10$2B9MTuVBzvPp7PQk/FVsU.D4WEjqSwvnOa9b8cOcbKNGdRB4eg.FK', 1, 8, 1),
(3, 'Sardan  Estrada  Laura Andrea ', 'selauraandrea', '$2y$10$.PAByI2s/tjAII10lQwb8.VEafdddH7HiKFXs7pvKlu4f8HRLY/w2', 2, 8, 1),
(4, 'Quispe Calle Vanesa Milenca', 'qcvanesamilenca', '$2y$10$4s86gubIbA4jzyXTlhPe6edLBp6xjGD998GpX7H3d5bhNVkKfq0AC', 3, 8, 1),
(5, 'Quispe Rojas Victor Bernardo', 'qrvictorbernardo', '$2y$10$lkWWRBH8AiJH5y1paZnwr.YU93BppSSjM663kPdpZcO2Cn4u4WcWG', 4, 8, 1),
(7, 'Ticona Siñani Alejandro Reynaldo', 'tsalejandroreynaldo', '$2y$10$REAMOsG2YRBZMQfVnZGDG.XNLGFMuT4mzMpBJn1rvIHdw/TzqTkrq', 6, 7, 1),
(8, 'Patzi Saire Maria Luisa', 'psmarialuisa', '$2y$10$9NU1ItSuLSPSXiQ2gbsZXuPH37YLr7jOKBCuScHrwFonaJeRwDeJy', 7, 7, 1),
(9, 'Quinteros Bravo Amir Limbert', 'qbamirlimbert', '$2y$10$YeAc4Y9Yvv0zVUw3H6YqsO2zHBgF.EnjA.CZ1DINICiUcELyO82SG', 8, 7, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_id` (`cargo_id`);

--
-- Indices de la tabla `archivosinsta`
--
ALTER TABLE `archivosinsta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrrera`
--
ALTER TABLE `carrrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estudiantes_tipo_postulante1_idx` (`tipo_postulante_id`),
  ADD KEY `fk_estudiantes_cargo1_idx` (`cargo_id`);

--
-- Indices de la tabla `etapas_instancia`
--
ALTER TABLE `etapas_instancia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial_proyectos`
--
ALTER TABLE `historial_proyectos`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `licenciados`
--
ALTER TABLE `licenciados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_licenciados_carrrera_idx` (`carrrera_id`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos_defensa`
--
ALTER TABLE `proyectos_defensa`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `fk_proyectos_modalidad1_idx` (`modalidad_id`),
  ADD KEY `fk_proyectos_carrrera1_idx` (`carrrera_id`),
  ADD KEY `fk_intancia_proyectos_proyectoes1_idx` (`proyectoes_id`),
  ADD KEY `fk_proyectos_defensa_estudiantes1_idx` (`estudiantes_id`),
  ADD KEY `fk_proyectos_defensa_archivosinsta1_idx` (`archivosinsta_id`),
  ADD KEY `fk_proyectos_defensa_etapas_instancia1_idx` (`etapas_instancia_id`),
  ADD KEY `fk_proyectos_defensa_licenciados1_idx` (`licenciados_id`);

--
-- Indices de la tabla `proyectos_repositorio`
--
ALTER TABLE `proyectos_repositorio`
  ADD PRIMARY KEY (`id_repo`),
  ADD KEY `fk_proyectos_modalidad1_idx` (`modalidad_id`),
  ADD KEY `fk_proyectos_carrrera1_idx` (`carrrera_id`);

--
-- Indices de la tabla `pro_repositorio22`
--
ALTER TABLE `pro_repositorio22`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_proyectos_modalidad1_idx` (`modalidad_id`),
  ADD KEY `fk_proyectos_carrrera1_idx` (`carrrera_id`),
  ADD KEY `fk_pro_repositorio22_licenciados1_idx` (`licenciados_id`);

--
-- Indices de la tabla `tipo_postulante`
--
ALTER TABLE `tipo_postulante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_proyecto`
--
ALTER TABLE `tipo_proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_estudiantes1_idx` (`estudiantes_id`),
  ADD KEY `fk_usuario_cargo1_idx` (`cargo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `archivosinsta`
--
ALTER TABLE `archivosinsta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `carrrera`
--
ALTER TABLE `carrrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `etapas_instancia`
--
ALTER TABLE `etapas_instancia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `historial_proyectos`
--
ALTER TABLE `historial_proyectos`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `licenciados`
--
ALTER TABLE `licenciados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proyectos_defensa`
--
ALTER TABLE `proyectos_defensa`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proyectos_repositorio`
--
ALTER TABLE `proyectos_repositorio`
  MODIFY `id_repo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pro_repositorio22`
--
ALTER TABLE `pro_repositorio22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_postulante`
--
ALTER TABLE `tipo_postulante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_proyecto`
--
ALTER TABLE `tipo_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD CONSTRAINT `administrativos_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estudiantes_tipo_postulante1` FOREIGN KEY (`tipo_postulante_id`) REFERENCES `tipo_postulante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `licenciados`
--
ALTER TABLE `licenciados`
  ADD CONSTRAINT `fk_licenciados_carrrera` FOREIGN KEY (`carrrera_id`) REFERENCES `carrrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos_defensa`
--
ALTER TABLE `proyectos_defensa`
  ADD CONSTRAINT `fk_intancia_proyectos_proyectoes1` FOREIGN KEY (`proyectoes_id`) REFERENCES `tipo_proyecto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_carrrera1` FOREIGN KEY (`carrrera_id`) REFERENCES `carrrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_defensa_archivosinsta1` FOREIGN KEY (`archivosinsta_id`) REFERENCES `archivosinsta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_defensa_estudiantes1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_defensa_etapas_instancia1` FOREIGN KEY (`etapas_instancia_id`) REFERENCES `etapas_instancia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_defensa_licenciados1` FOREIGN KEY (`licenciados_id`) REFERENCES `licenciados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_modalidad1` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos_repositorio`
--
ALTER TABLE `proyectos_repositorio`
  ADD CONSTRAINT `fk_proyectos_carrrera10` FOREIGN KEY (`carrrera_id`) REFERENCES `carrrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_modalidad10` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pro_repositorio22`
--
ALTER TABLE `pro_repositorio22`
  ADD CONSTRAINT `fk_pro_repositorio22_licenciados1` FOREIGN KEY (`licenciados_id`) REFERENCES `licenciados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_carrrera100` FOREIGN KEY (`carrrera_id`) REFERENCES `carrrera` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_proyectos_modalidad100` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_cargo1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_estudiantes1` FOREIGN KEY (`estudiantes_id`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
