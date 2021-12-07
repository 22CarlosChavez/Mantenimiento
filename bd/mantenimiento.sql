-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2021 a las 20:24:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mantenimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID` int(5) NOT NULL,
  `administrador` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID`, `administrador`, `password`) VALUES
(1, 'Carlos Chavez', 'carlos220798');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombrec` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `domicilio` varchar(20) DEFAULT NULL,
  `dia` int(8) DEFAULT NULL,
  `mes` varchar(3) DEFAULT NULL,
  `anio` varchar(7) NOT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombrec`, `phone`, `email`, `password`, `domicilio`, `dia`, `mes`, `anio`, `rfc`, `ciudad`, `estado`) VALUES
(1, 'cc', '4811155926', 'c949201@gmail.com', 'carlos220798', 'Dunstano gomez no.71', 22, '07', '1998', 'CAMC980722DP1', 'Ciudad Valles', 'SLP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_cliente`
--

CREATE TABLE `solicitud_cliente` (
  `id` int(4) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `entrega` varchar(40) NOT NULL,
  `solicitud` varchar(80) DEFAULT NULL,
  `metodopago` varchar(40) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `asignacion` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `prueba` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud_cliente`
--

INSERT INTO `solicitud_cliente` (`id`, `usuario`, `entrega`, `solicitud`, `metodopago`, `fecha`, `descripcion`, `asignacion`, `estado`, `prueba`) VALUES
(2, 'c949201@gmail.com', 'Dunstano Gomez 712', 'Mantenimiento preventivo', 'Paypal', '2021-11-30', 'Mi computadora no enciende', 'Lucio Reyes', 'En proceso', NULL),
(3, 'c949201@gmail.com', 'asdasd', 'Preventivo', 'transferencia', '2021-11-30', 'asdasd', '', '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud_cliente`
--
ALTER TABLE `solicitud_cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `solicitud_cliente`
--
ALTER TABLE `solicitud_cliente`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
