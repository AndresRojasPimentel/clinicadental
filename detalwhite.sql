-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 09:50:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `detalwhite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `cargo` int(11) NOT NULL,
  `caracteristica` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cargo`, `caracteristica`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'dentista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dentistas`
--

CREATE TABLE `dentistas` (
  `id_dentista` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dentistas`
--

INSERT INTO `dentistas` (`id_dentista`, `nombre`, `usuario`, `contraseña`, `especialidad`) VALUES
(1, 'Pierre Fauchard', 'pierre', '640d19b3d85b00894ebdc0b41c43f8eea5704267', 'Periodoncia'),
(3, 'jonas de la fuente', 'jonas24', '35a2c6fae61f8077aab61faa4019722abf05093c', 'Ortopedia'),
(4, 'Salvador del Solar Colorado', 'salvador', '98ac177e5ce7190d101150b0bffa6dca0bd0984b', 'Periodoncia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_dentista` int(11) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_reserva` varchar(50) NOT NULL,
  `telefono_reserva` varchar(9) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `id`, `id_dentista`, `hora`, `fecha`, `nombre_reserva`, `telefono_reserva`, `asunto`, `estado`) VALUES
(2, 9, 1, '13:00hs', '2021-11-19', 'joaquin del barrio', '989875648', 'Endodoncia', 'pendiente'),
(7, 8, 1, '14:00hs', '2021-11-21', 'Jazuri Soledad', '981341965', 'Muela picada', 'pendiente'),
(15, 8, 1, '13:00hs', '2021-11-18', 'johana aquino', '989594975', 'Ortopedia', 'pendiente'),
(16, 29, 3, '11:00hs', '2021-11-20', 'Alberto', '936565898', 'Implante', 'pendiente'),
(17, 8, 3, '16:00hs', '2021-11-18', 'Leonardo Aquino', '989594975', 'Implante dental', 'pendiente'),
(22, 30, 1, '14:00hs', '2021-11-17', 'fabian andres sandoval', '985654499', 'Muela picada', 'pendiente'),
(24, 30, 1, '9:00hs', '2021-11-18', 'fabian andres sandoval', '985654499', 'consulta', 'pendiente'),
(25, 30, 3, '14:00hs', '2021-11-18', 'fabian andres sandoval', '985654499', 'Ortopedia', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `correo`, `nombre`, `telefono`, `cargo`) VALUES
(7, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'disenandres@gmail.com', 'Andres Raul', '932636814', 1),
(8, 'jazurin', 'fcef2b3f48bb9cf7ab2850fbc0dfb2def626ca4a', 'yazuri2176@gmail.com', 'jazuri soledad nolberto', '981341965', 1),
(9, 'pepito', 'e04820372e7f2ebb2d76987433579219b11c2ba5', 'pepito@hotmail.com', 'pepito alfredo', '959694759', 2),
(25, 'andres', '883768b6dd2c42aea0031b24be8a2da40fef4b64', 'andres@gmail.com', 'andres and', '959598974', 2),
(26, 'briones', '74addc29bd4eca502c62d26d5172e462ce9a4ecb', 'briones@gmail.com', 'briones cama', '656449889', 2),
(27, 'elprimo', 'a7ba618cc715c4e670e98943a47d4819ba605032', 'soyelmejor@gmail.com', 'el primo juarez', '987659869', 2),
(29, 'abelardo', '037903ab0cca2c5efb7afbae82f092055d6178a1', 'abel@gmail.com', 'abel quiñonez', '959587784', 2),
(30, 'andres123', '883768b6dd2c42aea0031b24be8a2da40fef4b64', 'andres@gmail.com', 'fabian andres sandoval', '985654499', 2),
(31, 'fabian45', '644850cb8939d255ed752957b7c4458c52900f75', 'fabian@gmail.com', 'fabian andrade ', '949898775', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cargo`);

--
-- Indices de la tabla `dentistas`
--
ALTER TABLE `dentistas`
  ADD PRIMARY KEY (`id_dentista`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id` (`id`),
  ADD KEY `id_dentista` (`id_dentista`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo` (`cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dentistas`
--
ALTER TABLE `dentistas`
  MODIFY `id_dentista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_dentista`) REFERENCES `dentistas` (`id_dentista`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`cargo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
