-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2024 a las 01:14:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_school_quipux`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_subject`
--

CREATE TABLE `register_subject` (
  `id` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `holder` varchar(40) DEFAULT NULL,
  `description` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `register_subject`
--

INSERT INTO `register_subject` (`id`, `cod`, `name`, `holder`, `description`) VALUES
(9, 3425342, 'Artistica', 'Uriel', 'Artes plasticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `register_subject_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `register_user`
--

INSERT INTO `register_user` (`id`, `dni`, `name`, `last_name`, `email`, `phone`, `password`, `register_subject_id`, `role_id`) VALUES
(1, 1036, 'Zawardo', 'do', 'zawardo@gmail.com', 21451, 123, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'teacher'),
(3, 'student');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `register_subject`
--
ALTER TABLE `register_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `one` (`register_subject_id`),
  ADD KEY `two` (`role_id`);

--
-- Indices de la tabla `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `register_subject`
--
ALTER TABLE `register_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `register_user`
--
ALTER TABLE `register_user`
  ADD CONSTRAINT `one` FOREIGN KEY (`register_subject_id`) REFERENCES `register_subject` (`id`),
  ADD CONSTRAINT `two` FOREIGN KEY (`role_id`) REFERENCES `role_id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
