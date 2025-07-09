-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-07-2025 a las 20:27:34
-- Versión del servidor: 10.11.10-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u208889174_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tv_solicitudes`
--

CREATE TABLE `tv_solicitudes` (
  `Id` uuid NOT NULL DEFAULT uuid(),
  `Usuario` varchar(255) NOT NULL,
  `Creditos` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `Adultos` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tv_solicitudes`
--

INSERT INTO `tv_solicitudes` (`Id`, `Usuario`, `Creditos`, `Status`, `Fecha`, `Adultos`) VALUES
('735009a0-59d4-11f0-ad77-2fa19b25e717', 'MHidalgo', 3, 1, '2025-07-05', 0),
('61166617-59d5-11f0-ad77-2fa19b25e717', 'Anabanana', 3, 1, '2025-07-05', 0),
('d4340b0a-59d5-11f0-ad77-2fa19b25e717', 'Joonnas', 6, 2, '2025-07-05', 0),
('197c2f50-59d8-11f0-ad77-2fa19b25e717', 'custodia1', 1, 1, '2025-07-05', 0),
('6d2a0d53-59de-11f0-ad77-2fa19b25e717', 'AIturbide', 3, 1, '2025-07-05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tv_usuarios`
--

CREATE TABLE `tv_usuarios` (
  `Id` uuid NOT NULL DEFAULT uuid(),
  `Usuario` varchar(50) NOT NULL,
  `Pwd` varchar(50) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `ApellidoPaterno` varchar(100) NOT NULL,
  `ApellidoMaterno` varchar(100) DEFAULT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CreatedAt` date NOT NULL DEFAULT current_timestamp(),
  `UpdateAt` date NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `IsVendedor` tinyint(1) NOT NULL,
  `IsCliente` tinyint(1) NOT NULL,
  `SuscripcionTermina` date NOT NULL,
  `SuscripcionActiva` tinyint(1) NOT NULL,
  `Adultos` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tv_usuarios`
--

INSERT INTO `tv_usuarios` (`Id`, `Usuario`, `Pwd`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Telefono`, `Email`, `CreatedAt`, `UpdateAt`, `IsActive`, `IsVendedor`, `IsCliente`, `SuscripcionTermina`, `SuscripcionActiva`, `Adultos`) VALUES
('413181a8-59c4-11f0-ad77-2fa19b25e717', 'Kiratsuki', '4130', 'Fernando', 'Sánchez', 'Beristain', '55 3922 9638', 'fernandoberistain2@hotmail.com', '2025-07-05', '0000-00-00', 1, 1, 1, '2025-07-31', 1, 0),
('460c67fa-59d2-11f0-ad77-2fa19b25e717', 'HuronMarron', '5641', 'Aaron', 'Velasco', 'Agustin', '5626198295', 'aaronvelascovea@aragon.unam.mx', '2025-07-05', '0000-00-00', 1, 1, 1, '2025-10-05', 1, 0),
('5e9e0462-59d2-11f0-ad77-2fa19b25e717', 'Zarco', '1808', 'Kaleb Uriel', 'Miranda', 'Cadena', '5624329732', 'kaleb_uriel@outlook.com', '2025-07-05', '0000-00-00', 1, 1, 1, '2026-01-05', 1, 0),
('734ffbe3-59d4-11f0-ad77-2fa19b25e717', 'MHidalgo', NULL, 'Miguel', 'Hidalgo', 'Costilla', '5599887766', 'mhidalgo@mail.com', '2025-07-05', '0000-00-00', 1, 0, 1, '2025-10-05', 0, 0),
('61165c60-59d5-11f0-ad77-2fa19b25e717', 'Anabanana', NULL, 'Ana', 'Aguilar ', 'Oliver ', '564171789', 'aaronvelasco1993@outlook.com', '2025-07-05', '0000-00-00', 1, 0, 1, '2025-10-05', 1, 0),
('d434011e-59d5-11f0-ad77-2fa19b25e717', 'Joonnas', NULL, 'Jonathan ', 'Velasco', 'Ahustin', '56418188', 'master_mexico@hotmail.com', '2025-07-05', '0000-00-00', 1, 0, 1, '2026-01-05', 0, 0),
('197c243b-59d8-11f0-ad77-2fa19b25e717', 'custodia1', NULL, 'Alberto ', 'Rodríguez ', 'Perez', '1234567891', 'rodrigo@mail.com', '2025-07-05', '0000-00-00', 1, 0, 1, '2025-08-05', 1, 0),
('6d29fe8c-59de-11f0-ad77-2fa19b25e717', 'AIturbide', NULL, 'Agustin', 'Iturbide', 'Hernandez', '5512457812', 'aiturbide@mail.com', '2025-07-05', '0000-00-00', 1, 0, 1, '2025-10-05', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tv_solicitudes`
--
ALTER TABLE `tv_solicitudes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tv_usuarios`
--
ALTER TABLE `tv_usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Usuario` (`Usuario`,`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
