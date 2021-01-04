-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2021 a las 01:09:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) DEFAULT NULL,
  `numDocPrueba` int(8) DEFAULT NULL,
  `tipoPrueba` varchar(45) DEFAULT NULL,
  `fechaPrueba` date DEFAULT NULL,
  `fecharRegistro` date DEFAULT NULL,
  `medioTransporte` varchar(45) DEFAULT NULL,
  `resultado` varchar(45) DEFAULT NULL,
  `estadiaPersona` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuarentena`
--

CREATE TABLE `cuarentena` (
  `id` int(11) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `descripcion` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `numeroHistorial` int(11) DEFAULT NULL,
  `RegistroPersonas_id` int(11) NOT NULL,
  `PruebaCovid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pcovid`
--

CREATE TABLE `pcovid` (
  `id` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fechaRegistro` date DEFAULT NULL,
  `fechaReporte` date DEFAULT NULL,
  `respuestaPersona` varchar(45) DEFAULT NULL,
  `numeroDocumento` int(11) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `tipoDocumento` varchar(20) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `numCelular` int(10) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `ocupacion` varchar(20) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `Usuario_id` int(11) NOT NULL,
  `Cuarentena_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pnp`
--

CREATE TABLE `pnp` (
  `id` int(11) NOT NULL,
  `tipoDocumento` varchar(45) DEFAULT NULL,
  `numDocumento` int(25) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `codPolicia` int(25) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `numCelular` int(10) DEFAULT NULL,
  `Usuario_id` int(11) NOT NULL,
  `RegistroControl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `fechaReporte` date DEFAULT NULL,
  `numeroDocumento` varchar(45) DEFAULT NULL,
  `descripcion` tinytext DEFAULT NULL,
  `prueba` varchar(45) DEFAULT NULL,
  `RegistroPersonas_id` int(11) NOT NULL,
  `RegistroControl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `tipoUsuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuarentena`
--
ALTER TABLE `cuarentena`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pcovid`
--
ALTER TABLE `pcovid`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pnp`
--
ALTER TABLE `pnp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
