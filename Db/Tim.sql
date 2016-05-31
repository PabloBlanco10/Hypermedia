-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2016 a las 09:54:16
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Tim`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AssistanceService`
--

CREATE TABLE IF NOT EXISTS `AssistanceService` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Characteristics` varchar(500) NOT NULL,
  `Details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Device`
--

CREATE TABLE IF NOT EXISTS `Device` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` blob NOT NULL,
  `Characteristics` varchar(500) NOT NULL,
  `Price` int(11) NOT NULL,
  `Details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SmartLifeService`
--

CREATE TABLE IF NOT EXISTS `SmartLifeService` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Image` blob NOT NULL,
  `Characteristics` varchar(500) NOT NULL,
  `Price` int(11) NOT NULL,
  `Details` varchar(500) NOT NULL,
  `HowToUse` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `AssistanceService`
--
ALTER TABLE `AssistanceService`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Device`
--
ALTER TABLE `Device`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `SmartLifeService`
--
ALTER TABLE `SmartLifeService`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `AssistanceService`
--
ALTER TABLE `AssistanceService`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Device`
--
ALTER TABLE `Device`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `SmartLifeService`
--
ALTER TABLE `SmartLifeService`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
