-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2022 a las 03:21:12
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
-- Base de datos: `homeforyou`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `IdCategory` int(10) NOT NULL,
  `IdUser` int(20) DEFAULT NULL,
  `NomCategory` varchar(50) DEFAULT NULL,
  `CategoryImage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`IdCategory`, `IdUser`, `NomCategory`, `CategoryImage`) VALUES
(1, NULL, 'dssdg', NULL),
(2, NULL, 'dddd', ''),
(3, NULL, 'wwww', ''),
(4, NULL, 'ddddd', ''),
(5, NULL, 'hkkjh', NULL),
(6, NULL, 'khkl.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `house`
--

CREATE TABLE `house` (
  `IdHouse` int(10) NOT NULL,
  `IdCategory` int(10) DEFAULT NULL,
  `IdUser` int(20) DEFAULT NULL,
  `Localisation` varchar(500) DEFAULT NULL,
  `Prix` decimal(13,0) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `SurfaceHabitabele` varchar(50) DEFAULT NULL,
  `NumbreDeCharbre` int(10) DEFAULT NULL,
  `NumbreDeSalon` int(10) DEFAULT NULL,
  `Etage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `IdImage` int(20) DEFAULT NULL,
  `IdHouse` int(10) DEFAULT NULL,
  `Image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `IdMessage` int(20) DEFAULT NULL,
  `IdUser` int(20) DEFAULT NULL,
  `IdHouse` int(20) DEFAULT NULL,
  `Message` varchar(10000) DEFAULT NULL,
  `DateMessage` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `IdUser` int(20) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Telephone` int(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Passwoord` varchar(50) DEFAULT NULL,
  `TypeUser` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`IdUser`, `Nom`, `Prenom`, `Telephone`, `Email`, `Passwoord`, `TypeUser`) VALUES
(110, 'mohamed', 'el aribi', 656345, 'mohamed.elaribi.solicode@gmail.com', 'mohamed', 1),
(111, 'mohamed', 'mohamed', 2147483647, 'mohamed', 'mohamed', 0),
(112, 'mohamed', 'mohamed', 123456789, 'moohamed', 'mohamed', 0),
(113, '', '', 0, '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IdCategory`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Indices de la tabla `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`IdHouse`),
  ADD KEY `IdCategory` (`IdCategory`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `IdCategory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `house`
--
ALTER TABLE `house`
  MODIFY `IdHouse` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`);

--
-- Filtros para la tabla `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`IdCategory`) REFERENCES `category` (`IdCategory`),
  ADD CONSTRAINT `house_ibfk_2` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
