-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2023 a las 18:05:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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
  `cod_estancia` int(11) NOT NULL,
  `estado` enum('libre','ocupado') NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `ubicacion` enum('exterior','interior','azotea') NOT NULL,
  `planta` int(11) NOT NULL,
  `tipo_estancia` enum('lujo','comun','presidencial') NOT NULL,
  `precio` double NOT NULL,
  `descuento` double NOT NULL,
  `localidad` enum('madrid') NOT NULL
) ;

--
-- Volcado de datos para la tabla `estancia`
--

INSERT INTO `estancia` (`cod_estancia`, `estado`, `descripcion`, `ubicacion`, `planta`, `tipo_estancia`, `precio`, `descuento`, `localidad`) VALUES
(8, 'ocupado', 'pepe', 'exterior', 2, 'presidencial', 100, 20, 'madrid'),
(9, 'ocupado', 'estancia nueva creada 1', 'interior', 5, 'presidencial', 444444, 12, 'madrid'),
(10, 'libre', 'estancia nueva creada 2', 'exterior', 1, 'comun', 200, 10, 'madrid'),
(11, 'libre', 'estancia nueva creada 3', 'exterior', 1, 'comun', 200, 10, 'madrid'),
(12, 'libre', 'estancia nueva creada 4', 'exterior', 1, 'comun', 200, 10, 'madrid'),
(13, 'ocupado', 'estancia nueva creada 5', 'interior', 2, 'lujo', 200, 10, 'madrid'),
(14, 'ocupado', 'estancia nueva creada 6', 'interior', 2, 'lujo', 200, 10, 'madrid'),
(15, 'libre', 'estancia nueva creada 7', 'exterior', 3, 'comun', 200, 10, 'madrid'),
(16, 'libre', 'estancia nueva creada 8', 'exterior', 3, 'comun', 200, 10, 'madrid'),
(17, 'ocupado', 'estancia nueva creada 9', 'interior', 4, 'lujo', 200, 10, 'madrid'),
(18, 'ocupado', 'estancia nueva creada 10', 'interior', 4, 'lujo', 200, 10, 'madrid'),
(19, 'libre', 'estancia nueva creada 11', 'exterior', 5, 'presidencial', 200, 10, 'madrid'),
(20, 'libre', 'estancia nueva creada 12', 'exterior', 5, 'presidencial', 200, 10, 'madrid'),
(21, 'ocupado', 'estancia nueva creada 13', 'interior', 6, 'comun', 200, 10, 'madrid'),
(22, 'ocupado', 'estancia nueva creada 14', 'interior', 6, 'comun', 200, 10, 'madrid'),
(23, 'libre', 'estancia nueva creada 15', 'exterior', 7, 'lujo', 200, 10, 'madrid'),
(24, 'ocupado', 'estancia nueva creada 16', 'exterior', 7, 'lujo', 200, 10, 'madrid'),
(25, 'ocupado', 'estancia nueva creada 17', 'azotea', 8, 'presidencial', 600, 10, 'madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(11) NOT NULL,
  `cod_reserva` int(11) NOT NULL,
  `extras` varchar(100) DEFAULT NULL,
  `precio_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `cod_foto` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `cod_habitacion` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `num_camas` enum('1','2') NOT NULL,
  `tipo_bano` enum('bañera','ducha','jacuzzi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`cod_habitacion`, `cod_estancia`, `num_camas`, `tipo_bano`) VALUES
(9, 8, '2', 'jacuzzi'),
(10, 9, '2', 'ducha'),
(11, 10, '1', 'bañera'),
(12, 11, '1', 'bañera'),
(13, 12, '2', 'ducha'),
(14, 13, '2', 'ducha'),
(15, 14, '1', 'jacuzzi'),
(16, 15, '1', 'jacuzzi'),
(17, 16, '2', 'bañera'),
(18, 17, '2', 'bañera'),
(19, 18, '1', 'ducha'),
(20, 19, '1', 'ducha'),
(21, 20, '2', 'jacuzzi'),
(22, 21, '2', 'jacuzzi'),
(23, 22, '1', 'bañera'),
(24, 23, '1', 'bañera'),
(25, 24, '2', 'ducha'),
(26, 25, '2', 'ducha');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`cod_reserva`, `cod_usuario`, `cod_estancia`, `fecha_inicio`, `fecha_fin`, `puntuacion`, `comentario`) VALUES
(1, 3, 19, '2023-04-02', '2023-04-07', '5', 'excelente servicio reserva 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `cod_sala` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `aforo` int(11) NOT NULL,
  `tipo_sala` enum('boda','conferencia','reunion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `telefono`, `correo`, `usuario`, `contraseña`, `rol`) VALUES
(1, 'Tatiana', 'Garcia', 'Alvarez', '655555555', 'tatianaPanchis@gmail.com', 'TatianaGarcias01', '1234', 'admin'),
(3, 'Britany', 'Mendez', 'Gomez', '64444444', 'tatianaPanchis@gmail.com', 'Panchis', '1234', 'admin'),
(4, 'Tatiana', 'Garcia', 'Alvarez', '655555555', 'tatianaPanchis@gmail.com', 'TatianaGarcias01', '1234', 'admin');

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
-- AUTO_INCREMENT de la tabla `estancia`
--
ALTER TABLE `estancia`
  MODIFY `cod_estancia` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `cod_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `cod_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `cod_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
