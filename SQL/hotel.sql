-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2023 a las 18:04:26
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
(1, 'libre', 'habitacion 1 pruebas', 'exterior', 1, 'lujo', 2000, 1, 'madrid'),
(2, 'libre', 'habitacion 2 pruebas', 'exterior', 1, 'lujo', 2000, 1, 'madrid'),
(3, 'libre', 'habitacion 3 pruebas', 'exterior', 1, 'lujo', 2000, 1, 'madrid'),
(4, 'ocupado', 'estancia creada desde DAO', 'exterior', 1, 'lujo', 200, 10, 'madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `cod_foto` int(11) NOT NULL,
  `cod_estancia` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`cod_foto`, `cod_estancia`, `foto`) VALUES
(1, 1, 'habitacionLujo.jpg'),
(2, 1, 'habitacionLujo1.jpg'),
(4, 2, 'habitacionImperial.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `cod_estancia` int(11) NOT NULL,
  `num_camas` enum('1','2') NOT NULL,
  `tipo_bano` enum('bañera','ducha','jacuzzi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `cod_estancia` int(11) NOT NULL,
  `aforo` int(11) NOT NULL,
  `tipo_sala` enum('boda','conferencia','reunion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`cod_estancia`, `aforo`, `tipo_sala`) VALUES
(2, 200, 'conferencia'),
(3, 250, 'boda');

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
  `correo` varchar(250) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `telefono`, `correo`, `usuario`, `contraseña`) VALUES
(1, 'Mario', 'Martin', 'Martin', '666666666', 'mariomartin@gmail.com', 'marioMM', '1234'),
(2, 'Pedro', 'Martinez', 'Martinez', '666666666', 'pedromartinez@gmail.com', 'pedroMM', '1234'),
(3, ' ', 'Tatiana', 'Garcia', 'Alvarez', '655555555', 'TatianaGarcias01', '1234'),
(4, 'Britany', 'Mendez', 'Gomez', '64444444', 'tatianaPanchis@gmail.com', 'Panchis', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estancia`
--
ALTER TABLE `estancia`
  ADD PRIMARY KEY (`cod_estancia`);

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
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `cod_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `cod_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

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
