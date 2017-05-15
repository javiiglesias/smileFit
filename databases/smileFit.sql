-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2017 a las 12:26:32
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smilefit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `UserName` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nombre` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Edad` int(3) NOT NULL,
  `Email` char(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Foto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `IdUsuario` bigint(20) NOT NULL,
  FOREIGN KEY (IdUsuario) REFERENCES usuario(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichamedica`
--

CREATE TABLE `fichamedica` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `IdCliente` bigint(20) NOT NULL,
  `IMC` double NOT NULL,
  `Peso` double NOT NULL,
  `Altura` double NOT NULL,
  `Metabolismo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  FOREIGN KEY (IdCliente) REFERENCES cliente(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dieta`
--

CREATE TABLE `dieta` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diadieta`
--

CREATE TABLE `diadieta` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `IdDieta` bigint(20) NOT NULL,
  `Fecha` date NOT NULL,
  `DiaSemana` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  FOREIGN KEY (IdDieta) REFERENCES dieta(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoejercicio`
--

CREATE TABLE `tipoejercicio` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` char(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Series` int(3) NOT NULL,
  `Descanso` int(3) NOT NULL,
  `DuracionRepeticiones` int(11) NOT NULL,
  `IdTipoEjercicio` bigint(20) NOT NULL,
  FOREIGN KEY (IdTipoEjercicio) REFERENCES tipoejercicio(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `CIF` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomida`
--

CREATE TABLE `tipocomida` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineadieta`
--

CREATE TABLE `lineadieta` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `IdDiaDieta` bigint(20) NOT NULL,
  `IdProducto` bigint(20) NOT NULL,
  `IdTipoComida` bigint(20) NOT NULL,
  `Indicacion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  FOREIGN KEY (IdDiaDieta) REFERENCES diadieta(Id),
  FOREIGN KEY (IdProducto) REFERENCES producto(Id),
  FOREIGN KEY (IdTipoComida) REFERENCES tipocomida(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Foto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `IdRol` bigint(20) NOT NULL,
  `IdUsuario` bigint(20) NOT NULL,
  FOREIGN KEY (IdRol) REFERENCES rol(Id),
  FOREIGN KEY (IdUsuario) REFERENCES usuario(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasolicitud`
--

CREATE TABLE `lineasolicitud` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `IdSolicitud` bigint(20) NOT NULL,
  `IdTrabajdor` bigint(20) NOT NULL,
  `IdCliente` bigint(20) NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  FOREIGN KEY (IdSolicitud) REFERENCES solicitud(Id),
  FOREIGN KEY (IdTrabajdor) REFERENCES trabajador(Id),
  FOREIGN KEY (IdCliente) REFERENCES cliente(Id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------


