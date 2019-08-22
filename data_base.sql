-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2019 a las 20:06:12
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Base de datos: `hospital_sd`
--
CREATE DATABASE IF NOT EXISTS `hospital_sd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `hospital_sd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `cedula` int(10) NOT NULL,
  `nombre` varchar(16) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(16) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(16) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `enfermedad` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`cedula`, `nombre`, `apellido`, `contrasena`, `fecha_nacimiento`, `enfermedad`) VALUES
(4567, 'julio', '0953431855', '4567', '2019-08-12', ''),
(4568, 'julio 22', '0953431855', '4568', '2019-08-22', 'esnfermo'),
(944331726, 'Jose Luis', 'Ibarra Castro', '0944331726', '1987-07-23', 'Dolor estomacal'),
(953431855, 'Hugo Bryan', 'Wong Pavon', '0953431855', '1996-04-20', 'Dolor de cabeza'),
(953432978, 'Jose Javier', 'Zambrano Castro', '0953432978', '2003-06-17', 'Dolor de cabeza'),
(954441966, 'Cristian Jayr', 'Silva Galarza', '0954441966', '2004-02-10', 'infeccion estomacal y dolor de cabeza'),
(954441973, 'julio', 'macias', '0954441973', '2019-08-23', 'Gastritis'),
(954441975, 'julio', 'Castro', '0954441975', '2019-08-10', 'Gastriti'),
(954441977, 'pedro', 'pepe', '0954441977', '2019-08-23', 'hkn nk'),
(990716126, 'Kevin Jayr', 'Wong Pavon', '0990716126', '2000-10-05', 'problema en la piel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ritmo_cardiaco`
--

CREATE TABLE `ritmo_cardiaco` (
  `id` int(10) NOT NULL,
  `ritmo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ritmo_cardiaco`
--

INSERT INTO `ritmo_cardiaco` (`id`, `ritmo`) VALUES
(543, 62),
(967, 66),
(944331726, 68),
(953431855, 77),
(953432978, 72),
(954441966, 61),
(954441971, 66),
(954441973, 63),
(954441975, 73),
(954441977, 67),
(990716126, 62),
(4567, 68),
(4568, 75);

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--