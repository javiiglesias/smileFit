-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 14:35:18
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

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
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` bigint(20) NOT NULL,
  `Nombre` char(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Edad` int(3) NOT NULL,
  `Email` char(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Foto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `IdUsuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id`, `Nombre`, `Apellidos`, `Edad`, `Email`, `Telefono`, `Foto`, `IdUsuario`) VALUES
(1, 'Marta', 'Garrido Giménez', 27, 'marta.garrido@hotmail.com', 645879524, '', 5),
(2, 'Pablo', 'Forni Requena', 19, 'pablo.forni@hotmail.com', 698564414, '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diadieta`
--

CREATE TABLE `diadieta` (
  `Id` bigint(20) NOT NULL,
  `IdDieta` bigint(20) NOT NULL,
  `Fecha` date NOT NULL,
  `DiaSemana` varchar(9) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `diadieta`
--

INSERT INTO `diadieta` (`Id`, `IdDieta`, `Fecha`, `DiaSemana`) VALUES
(1, 1, '0000-00-00', 'lunes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dieta`
--

CREATE TABLE `dieta` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `dieta`
--

INSERT INTO `dieta` (`Id`, `Descripcion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Ganar peso', '0000-00-00', '0000-00-00'),
(2, 'Perder peso', '0000-00-00', '0000-00-00'),
(3, 'Ganar músculo', '0000-00-00', '0000-00-00'),
(4, 'Dieta Paleo', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` bigint(20) NOT NULL,
  `Descripcion` char(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Series` int(3) NOT NULL,
  `Descanso` int(3) NOT NULL,
  `DuracionRepeticiones` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `IdTipoEjercicio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `Descripcion`, `Series`, `Descanso`, `DuracionRepeticiones`, `IdTipoEjercicio`) VALUES
(1, 'Clase de spining', 0, 0, '45 minutos', 1),
(2, 'Press de banca', 4, 30, '10', 3),
(3, 'Calentamiento en cinta de correr', 0, 0, '20 minutos', 2),
(4, 'Calentamiento en elíptica', 0, 0, '25 minutos', 4),
(5, 'Curl biceps', 4, 30, '8', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) NOT NULL,
  `CIF` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `CIF`, `Nombre`) VALUES
(1, '65478921C', 'SmileFit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entrenamiento`
--

INSERT INTO `entrenamiento` (`id`, `Descripcion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Ganar masa muscular', '0000-00-00', '0000-00-00'),
(2, 'Mejorar resistencia', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichamedica`
--

CREATE TABLE `fichamedica` (
  `Id` bigint(20) NOT NULL,
  `IdCliente` bigint(20) NOT NULL,
  `IMC` double NOT NULL,
  `Peso` double NOT NULL,
  `Altura` double NOT NULL,
  `Metabolismo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fichamedica`
--

INSERT INTO `fichamedica` (`Id`, `IdCliente`, `IMC`, `Peso`, `Altura`, `Metabolismo`) VALUES
(1, 1, 20, 57, 169, 'normal'),
(2, 2, 25, 75, 176, 'lento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineadieta`
--

CREATE TABLE `lineadieta` (
  `Id` bigint(20) NOT NULL,
  `IdDiaDieta` bigint(20) NOT NULL,
  `IdProducto` bigint(20) NOT NULL,
  `IdTipoComida` bigint(20) NOT NULL,
  `Indicacion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lineadieta`
--

INSERT INTO `lineadieta` (`Id`, `IdDiaDieta`, `IdProducto`, `IdTipoComida`, `Indicacion`, `Cantidad`) VALUES
(1, 1, 1, 1, 'Diluir con agua', 100),
(2, 1, 4, 8, 'Tomar cápsulas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasolicitud`
--

CREATE TABLE `lineasolicitud` (
  `Id` bigint(20) NOT NULL,
  `IdSolicitud` bigint(20) NOT NULL,
  `IdTrabajdor` bigint(20) NOT NULL,
  `IdCliente` bigint(20) NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lineasolicitud`
--

INSERT INTO `lineasolicitud` (`Id`, `IdSolicitud`, `IdTrabajdor`, `IdCliente`, `Descripcion`) VALUES
(1, 1, 2, 1, 'Dieta de mantenimiento'),
(2, 2, 4, 2, 'Ganar masa muscular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Descripcion`) VALUES
(1, 'Protenina 80%'),
(2, 'Aminoacidos ramificados'),
(3, 'Quema grasa'),
(4, 'Colágeno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`Id`, `Descripcion`) VALUES
(1, 'Entrenador'),
(2, 'Dietista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`Id`, `Descripcion`, `Fecha`) VALUES
(1, 'solicitud 1', '0000-00-00'),
(2, 'solicitud 2', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomida`
--

CREATE TABLE `tipocomida` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipocomida`
--

INSERT INTO `tipocomida` (`Id`, `Descripcion`) VALUES
(1, 'Almuerzo'),
(2, 'Desayuno'),
(3, 'Comida'),
(4, '2ª comida'),
(5, 'Merienda'),
(6, 'pre entreno'),
(7, 'post entreno'),
(8, 'cena'),
(9, 'pre dormir');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoejercicio`
--

CREATE TABLE `tipoejercicio` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipoejercicio`
--

INSERT INTO `tipoejercicio` (`Id`, `Descripcion`) VALUES
(1, 'Bicicleta'),
(2, 'Correr'),
(3, 'Pesas'),
(4, 'Eliptica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `Id` bigint(20) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Foto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `IdRol` bigint(20) NOT NULL,
  `IdUsuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`Id`, `Nombre`, `Apellidos`, `Email`, `Telefono`, `Foto`, `IdRol`, `IdUsuario`) VALUES
(1, 'Miguel Ángel', 'Rey Gómez', 'miguelangel.rey@smilefit.es', 607586441, '', 1, 2),
(2, 'Javier', 'Iglesias Valencia', 'javi.iglesias@smilefit.es', 69874515, '', 2, 1),
(3, 'Alba', 'Casas', 'alba.casas@smilefit.es', 698521674, '', 2, 3),
(4, 'Marc', 'Jiménez', 'marc.jimenez@smilefit.es', 638246418, '', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `UserName` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Descripcion`, `UserName`, `Password`) VALUES
(1, 'Trabajador', 'javi', '1234'),
(2, 'Trabajador', 'miguel', '1234'),
(3, 'Trabajador', 'alba', '1234'),
(4, 'Trabajador', 'marc', '1234'),
(5, 'cliente', 'marta', '1234'),
(6, 'cliente', 'pablo', '1234'),
(7, 'administrador', 'admin', '1234'),
(9, 'cliente', 'prueba', '$2y$10$EBL5vNNgD57Tq'),
(10, 'cliente', 'prueba2', '$2y$10$291XWg0P0j5TK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `diadieta`
--
ALTER TABLE `diadieta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdDieta` (`IdDieta`);

--
-- Indices de la tabla `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdTipoEjercicio` (`IdTipoEjercicio`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fichamedica`
--
ALTER TABLE `fichamedica`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `lineadieta`
--
ALTER TABLE `lineadieta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdDiaDieta` (`IdDiaDieta`),
  ADD KEY `IdProducto` (`IdProducto`),
  ADD KEY `IdTipoComida` (`IdTipoComida`);

--
-- Indices de la tabla `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdSolicitud` (`IdSolicitud`),
  ADD KEY `IdTrabajdor` (`IdTrabajdor`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdRol` (`IdRol`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `diadieta`
--
ALTER TABLE `diadieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dieta`
--
ALTER TABLE `dieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fichamedica`
--
ALTER TABLE `fichamedica`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lineadieta`
--
ALTER TABLE `lineadieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`);

--
-- Filtros para la tabla `diadieta`
--
ALTER TABLE `diadieta`
  ADD CONSTRAINT `diadieta_ibfk_1` FOREIGN KEY (`IdDieta`) REFERENCES `dieta` (`Id`);

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `ejercicio_ibfk_1` FOREIGN KEY (`IdTipoEjercicio`) REFERENCES `tipoejercicio` (`Id`);

--
-- Filtros para la tabla `fichamedica`
--
ALTER TABLE `fichamedica`
  ADD CONSTRAINT `fichamedica_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`Id`);

--
-- Filtros para la tabla `lineadieta`
--
ALTER TABLE `lineadieta`
  ADD CONSTRAINT `lineadieta_ibfk_1` FOREIGN KEY (`IdDiaDieta`) REFERENCES `diadieta` (`Id`),
  ADD CONSTRAINT `lineadieta_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`Id`),
  ADD CONSTRAINT `lineadieta_ibfk_3` FOREIGN KEY (`IdTipoComida`) REFERENCES `tipocomida` (`Id`);

--
-- Filtros para la tabla `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  ADD CONSTRAINT `lineasolicitud_ibfk_1` FOREIGN KEY (`IdSolicitud`) REFERENCES `solicitud` (`Id`),
  ADD CONSTRAINT `lineasolicitud_ibfk_2` FOREIGN KEY (`IdTrabajdor`) REFERENCES `trabajador` (`Id`),
  ADD CONSTRAINT `lineasolicitud_ibfk_3` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`Id`);

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`Id`),
  ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
