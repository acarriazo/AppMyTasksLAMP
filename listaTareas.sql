-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2020 a las 16:53:16
-- Versión del servidor: 8.0.22
-- Versión de PHP: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaTareas`
--

CREATE TABLE `listaTareas` (
  `idTarea` int NOT NULL,
  `nombreTarea` varchar(30) NOT NULL,
  `comentariosTarea` varchar(255) DEFAULT NULL,
  `fechaTopeTarea` date DEFAULT NULL,
  `completadaTarea` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `listaTareas`
--

INSERT INTO `listaTareas` (`idTarea`, `nombreTarea`, `comentariosTarea`, `fechaTopeTarea`, `completadaTarea`) VALUES
(2, 'Estudiar', 'Repasar para los exámenes', '2020-12-10', 1),
(3, 'Levar el coche al taller', 'Revisión anual y reparación de pérdida de agua', '2020-11-30', 1),
(4, 'Ar al cole', 'Recoger a los niños.', '2021-04-13', 0),
(5, 'Hacer deporte', 'Preparar el maratón', '2021-04-13', 1),
(6, 'Vacaciones', 'Reservar billetes y hotel.', '2020-12-02', 0),
(7, 'Ir al super', 'Comprar leche, pan y servilletas', '2020-12-02', 0),
(8, 'Crear nueva app', 'Diseñar una nueva app moderna y molona', '2020-12-02', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `listaTareas`
--
ALTER TABLE `listaTareas`
  ADD PRIMARY KEY (`idTarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listaTareas`
--
ALTER TABLE `listaTareas`
  MODIFY `idTarea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
