-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 17:47:56
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
-- Base de datos: `hatunsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_tareas`
--

CREATE TABLE `detalle_tareas` (
  `ID_TAR` int(11) NOT NULL,
  `NOM_TAR` varchar(25) NOT NULL,
  `DES_TAR` varchar(100) DEFAULT NULL,
  `FEC_INI_TAR` date NOT NULL,
  `FEC_FIN_TAR` date DEFAULT NULL,
  `EST_TAR` varchar(15) NOT NULL,
  `POR_TAR` int(11) NOT NULL,
  `ID_PRO_PER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_tareas`
--

INSERT INTO `detalle_tareas` (`ID_TAR`, `NOM_TAR`, `DES_TAR`, `FEC_INI_TAR`, `FEC_FIN_TAR`, `EST_TAR`, `POR_TAR`, `ID_PRO_PER`) VALUES
(1, 'BD', NULL, '2023-06-01', '2023-06-02', 'TERMINADA', 100, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hitos`
--

CREATE TABLE `hitos` (
  `ID_HIT` int(11) NOT NULL,
  `ID_TAR_PER` int(11) NOT NULL,
  `FEC_LIM` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `CED_PER` int(11) NOT NULL,
  `NOM_PER` varchar(15) NOT NULL,
  `APE_PER` varchar(15) NOT NULL,
  `ROL_PER` varchar(20) NOT NULL,
  `DIS_PER` varchar(1) DEFAULT NULL,
  `ID_TAR_PER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`CED_PER`, `NOM_PER`, `APE_PER`, `ROL_PER`, `DIS_PER`, `ID_TAR_PER`) VALUES
(1501256620, 'Taco', 'Tacuaman', 'Desarrollador', 'S', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `ID_PRO` int(11) NOT NULL,
  `NOM_PRO` varchar(25) NOT NULL,
  `DES_PRO` varchar(100) DEFAULT NULL,
  `FEC_INI_PRO` date NOT NULL,
  `FEC_FIN_PRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`ID_PRO`, `NOM_PRO`, `DES_PRO`, `FEC_INI_PRO`, `FEC_FIN_PRO`) VALUES
(1, 'PRUEBAS', NULL, '2023-06-05', '2023-06-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_tareas`
--
ALTER TABLE `detalle_tareas`
  ADD PRIMARY KEY (`ID_TAR`);

--
-- Indices de la tabla `hitos`
--
ALTER TABLE `hitos`
  ADD PRIMARY KEY (`ID_HIT`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`CED_PER`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID_PRO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
