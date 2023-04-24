-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 21:11:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estancia`
--

CREATE TABLE `estancia` (
  `cod_estancia` int(250) NOT NULL,
  `estado` enum('libre','ocupado') NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `ubicacion` enum('exterior','interior','azotea') NOT NULL,
  `planta` int(11) NOT NULL,
  `tipo_estancia` enum('lujo','comun','presidencial') NOT NULL,
  `precio` double NOT NULL,
  `descuento` double DEFAULT NULL,
  `localidad` enum('madrid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estancia`
--

INSERT INTO `estancia` (`cod_estancia`, `estado`, `descripcion`, `ubicacion`, `planta`, `tipo_estancia`, `precio`, `descuento`, `localidad`) VALUES
(101, 'libre', 'Sisisisisiis', 'interior', 1, 'comun', 230, 0, 'madrid'),
(102, 'libre', 'Extremadamente fea', 'interior', 1, 'comun', 75, 0, 'madrid'),
(103, 'libre', 'Prueba errores', 'interior', 1, 'comun', 75, NULL, 'madrid'),
(107, 'libre', 'Preciosa', 'exterior', 1, 'lujo', 150, 0, 'madrid'),
(201, 'libre', 'nonononononono', 'azotea', 2, 'comun', 150, 0, 'madrid'),
(301, 'libre', 'puedepuedepuedepuede', 'exterior', 3, 'presidencial', 230, 0, 'madrid'),
(401, 'libre', 'xoxoxoxooxox', 'exterior', 4, 'presidencial', 500, 0, 'madrid'),
(501, 'libre', 'PPPPPPPPPppppppppppp', 'exterior', 5, 'lujo', 350, NULL, 'madrid'),
(508, 'libre', 'Estancia Prueba para habitación', 'interior', 5, 'comun', 645, 0, 'madrid'),
(601, 'libre', 'hyhyhyhyhyhyhhyh', 'interior', 6, 'lujo', 355, NULL, 'madrid'),
(701, 'libre', 'gggggggggggggggggggggggggmaiiilllll', 'azotea', 7, 'presidencial', 1500, NULL, 'madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(11) NOT NULL,
  `cod_reserva` int(11) NOT NULL,
  `extras` varchar(100) DEFAULT NULL,
  `precio_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `cod_foto` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `cod_habitacion` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `num_camas` enum('1','2') NOT NULL,
  `tipo_bano` enum('bañera','ducha','jacuzzi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`cod_habitacion`, `cod_estancia`, `num_camas`, `tipo_bano`) VALUES
(1001, 201, '1', 'bañera'),
(2002, 301, '1', 'ducha'),
(3001, 301, '1', 'bañera'),
(4002, 401, '1', 'ducha'),
(5001, 501, '1', 'bañera'),
(5011, 508, '1', 'jacuzzi'),
(6002, 601, '1', 'jacuzzi'),
(7001, 701, '2', 'jacuzzi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `cod_reserva` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `puntuacion` enum('1','2','3','4','5') DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `cod_sala` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `aforo` int(11) NOT NULL,
  `tipo_sala` enum('boda','conferencia','reunion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`cod_sala`, `cod_estancia`, `aforo`, `tipo_sala`) VALUES
(1, 101, 50, 'reunion'),
(2, 201, 250, 'conferencia'),
(3, 301, 500, 'boda'),
(9, 102, 9, 'reunion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `rol` enum('admin','cliente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `telefono`, `correo`, `usuario`, `contraseña`, `rol`) VALUES
(1, 'Administrador', 'Hotel', 'Imperial Retreat', '555-4521', 'contacto@imperialretreat.com', 'admin', '$2y$10$yWCRaSf9K3fLiAzi0HvXz.7MkPhnCVH1By6Jyxi0GuRjQoa46Xrqm', 'admin'),
(11, 'manuela', 'manuela', 'manuela', '66666666', 'manuela@manuela.com', 'manuela', '$2y$10$yWCRaSf9K3fLiAzi0HvXz.7MkPhnCVH1By6Jyxi0GuRjQoa46Xrqm', 'cliente'),
(13, 'Seila', 'Maroño', 'Saez', '654654654', 'seila@gmail.com', 'seila', '$2y$10$M1Wd4tzFTi.izxWnp27/o.A72WZu.GWyaMneb3DHSN.lvFX/3z1I6', 'admin'),
(14, 'Daniel', 'Rodríguez', 'Suárez-Bustillo', '608717825', 'danielrodriguezsuarezbustillo@gmail.com', 'dan', '$2y$10$tR5iTI.Y0O2JYf5nhcDJBO7UQ8QAT5z8WR3CGHhkfhpAHmlN4xBpO', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estancia`
--
ALTER TABLE `estancia`
  ADD PRIMARY KEY (`cod_estancia`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`cod_factura`),
  ADD KEY `fk_cod_factura` (`cod_reserva`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`cod_foto`),
  ADD KEY `fk_cod_estancia` (`cod_estancia`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`cod_habitacion`),
  ADD KEY `fk_cod_estancia_habitacion` (`cod_estancia`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`cod_reserva`),
  ADD KEY `fk_cod_usuario` (`cod_usuario`),
  ADD KEY `fk_cod_estancia_reserva` (`cod_estancia`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`cod_sala`),
  ADD KEY `fk_cod_estancia_sala` (`cod_estancia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `cod_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `cod_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `cod_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_cod_factura` FOREIGN KEY (`cod_reserva`) REFERENCES `reserva` (`cod_reserva`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_cod_estancia` FOREIGN KEY (`cod_estancia`) REFERENCES `estancia` (`cod_estancia`);

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `fk_cod_estancia_habitacion` FOREIGN KEY (`cod_estancia`) REFERENCES `estancia` (`cod_estancia`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_cod_estancia_reserva` FOREIGN KEY (`cod_estancia`) REFERENCES `estancia` (`cod_estancia`),
  ADD CONSTRAINT `fk_cod_usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `fk_cod_estancia_sala` FOREIGN KEY (`cod_estancia`) REFERENCES `estancia` (`cod_estancia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
