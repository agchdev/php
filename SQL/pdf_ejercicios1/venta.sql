-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 12:14:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `cliente` varchar(9) NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` float(5,2) NOT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`cliente`, `producto`, `fecha`, `cantidad`, `estado`) VALUES
('11111111E', 1, '2023-04-20', 0.20, 'p'),
('11111111E', 1, '2023-04-22', 1.20, 'p'),
('11111111E', 1, '2023-04-26', 2.00, NULL),
('11111111E', 1, '2024-11-08', 2.00, NULL),
('11111111E', 2, '2023-04-24', 1.00, NULL),
('11111111E', 3, '2023-04-20', 5.00, NULL),
('11111111E', 4, '2023-04-24', 0.25, NULL),
('11111111E', 5, '2023-04-25', 1.00, 'p'),
('11111111E', 6, '2023-04-21', 12.00, NULL),
('11111111E', 8, '2023-04-22', 2.00, NULL),
('22222222D', 2, '2023-04-20', 1.00, 'p'),
('22222222D', 2, '2023-04-23', 1.00, 'p'),
('22222222D', 5, '2023-04-21', 1.00, 'p'),
('22222222D', 6, '2023-04-25', 21.00, 'p'),
('22222222D', 7, '2023-04-22', 0.15, 'p'),
('33333333V', 1, '2023-04-27', 1.30, 'p'),
('33333333V', 2, '2023-04-20', 2.00, NULL),
('33333333V', 2, '2023-04-22', 2.00, 'p'),
('33333333V', 2, '2023-04-24', 1.00, NULL),
('33333333V', 4, '2023-04-21', 0.25, 'p'),
('33333333V', 6, '2023-04-21', 10.00, NULL),
('33333333V', 6, '2023-04-23', 10.00, NULL),
('33333333V', 6, '2023-04-26', 19.00, 'p'),
('33333333V', 7, '2023-04-26', 0.55, 'p'),
('44444444Z', 2, '2023-04-21', 1.00, 'p'),
('44444444Z', 2, '2023-04-22', 1.00, 'p');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`cliente`,`producto`,`fecha`),
  ADD KEY `producto_venta_fk` (`producto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `cliente_venta_fk` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`nif`) ON DELETE CASCADE,
  ADD CONSTRAINT `producto_venta_fk` FOREIGN KEY (`producto`) REFERENCES `producto` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
