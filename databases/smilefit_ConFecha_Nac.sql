-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 10-05-2017 a les 16:45:16
-- Versió del servidor: 10.1.10-MariaDB
-- Versió de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `smilefit`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `cliente`
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
-- Bolcant dades de la taula `cliente`
--

INSERT INTO `cliente` (`Id`, `Nombre`, `Apellidos`, `Edad`, `Email`, `Telefono`, `Foto`, `IdUsuario`) VALUES
(1, 'Marta', 'Garrido Giménez', 27, 'marta.garrido@hotmail.com', 645879524, '', 5),
(2, 'Pablo', 'Forni Requena', 19, 'pablo.forni@hotmail.com', 698564414, '', 6);

-- --------------------------------------------------------

--
-- Estructura de la taula `diadieta`
--

CREATE TABLE `diadieta` (
  `Id` bigint(20) NOT NULL,
  `IdDieta` bigint(20) NOT NULL,
  `Fecha` date NOT NULL,
  `DiaSemana` varchar(9) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `diadieta`
--

INSERT INTO `diadieta` (`Id`, `IdDieta`, `Fecha`, `DiaSemana`) VALUES
(1, 1, '0000-00-00', 'lunes');

-- --------------------------------------------------------

--
-- Estructura de la taula `dieta`
--

CREATE TABLE `dieta` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `dieta`
--

INSERT INTO `dieta` (`Id`, `Descripcion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Ganar peso', '0000-00-00', '0000-00-00'),
(2, 'Perder peso', '0000-00-00', '0000-00-00'),
(3, 'Ganar músculo', '0000-00-00', '0000-00-00'),
(4, 'Dieta Paleo', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de la taula `ejercicio`
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
-- Bolcant dades de la taula `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `Descripcion`, `Series`, `Descanso`, `DuracionRepeticiones`, `IdTipoEjercicio`) VALUES
(1, 'Clase de spining', 0, 0, '45 minutos', 1),
(2, 'Press de banca', 4, 30, '10', 3),
(3, 'Calentamiento en cinta de correr', 0, 0, '20 minutos', 2),
(4, 'Calentamiento en elíptica', 0, 0, '25 minutos', 4),
(5, 'Curl biceps', 4, 30, '8', 3);

-- --------------------------------------------------------

--
-- Estructura de la taula `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) NOT NULL,
  `CIF` char(9) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` char(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `empresa`
--

INSERT INTO `empresa` (`id`, `CIF`, `Nombre`) VALUES
(1, '65478921C', 'SmileFit');

-- --------------------------------------------------------

--
-- Estructura de la taula `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `entrenamiento`
--

INSERT INTO `entrenamiento` (`id`, `Descripcion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Ganar masa muscular', '0000-00-00', '0000-00-00'),
(2, 'Mejorar resistencia', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de la taula `eventos`
--

CREATE TABLE `eventos` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Clase` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Url` varchar(8000) COLLATE latin1_spanish_ci NOT NULL,
  `ClienteId` bigint(20) NOT NULL,
  `TrabajadorId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Bolcant dades de la taula `eventos`
--

INSERT INTO `eventos` (`Id`, `Descripcion`, `FechaInicio`, `FechaFin`, `Clase`, `Url`, `ClienteId`, `TrabajadorId`) VALUES
(1, 'Entrenamiento abdominales', '2017-05-10', '2017-05-10', 'event-warning', 'http://example.com/', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de la taula `fichamedica`
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
-- Bolcant dades de la taula `fichamedica`
--

INSERT INTO `fichamedica` (`Id`, `IdCliente`, `IMC`, `Peso`, `Altura`, `Metabolismo`) VALUES
(1, 1, 20, 57, 169, 'normal'),
(2, 2, 25, 75, 176, 'lento');

-- --------------------------------------------------------

--
-- Estructura de la taula `lineadieta`
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
-- Bolcant dades de la taula `lineadieta`
--

INSERT INTO `lineadieta` (`Id`, `IdDiaDieta`, `IdProducto`, `IdTipoComida`, `Indicacion`, `Cantidad`) VALUES
(1, 1, 1, 1, 'Diluir con agua', 100),
(2, 1, 4, 8, 'Tomar cápsulas', 2);

-- --------------------------------------------------------

--
-- Estructura de la taula `lineasolicitud`
--

CREATE TABLE `lineasolicitud` (
  `Id` bigint(20) NOT NULL,
  `IdSolicitud` bigint(20) NOT NULL,
  `IdTrabajdor` bigint(20) NOT NULL,
  `IdCliente` bigint(20) NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `lineasolicitud`
--

INSERT INTO `lineasolicitud` (`Id`, `IdSolicitud`, `IdTrabajdor`, `IdCliente`, `Descripcion`) VALUES
(1, 1, 2, 1, 'Dieta de mantenimiento'),
(2, 2, 4, 2, 'Ganar masa muscular');

-- --------------------------------------------------------

--
-- Estructura de la taula `noticias`
--

CREATE TABLE `noticias` (
  `Id` bigint(20) NOT NULL,
  `Titulo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `Imagen` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Descripcion` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `Contenido` varchar(8000) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Bolcant dades de la taula `noticias`
--

INSERT INTO `noticias` (`Id`, `Titulo`, `Imagen`, `Descripcion`, `Contenido`) VALUES
(1, 'Meriendas saludables', 'dieta2.jpg', 'Para mantener una alimentación equilibrada es muy importante distribuir bien la ingesta de alimentos durante el día.', 'El horario de trabajo, el tiempo entre la comida y la cena o la actividad física que se realiza por la tarde, son factores que influyen en el tipo de alimentos que debemos incluir en la merienda, una de las 5 comidas del día más olvidadas en los tiempos que corren. Desde "5 al día" queremos dar algunas ideas para que las meriendas sean divertidas y, sobre todo, muy saludables.\r\nAunque es un aspecto que podría cambiar de una persona a otra, la evidencia disponible indica que es prudente hacer tres comidas principales como el desayuno, la comida y la cena, y dos intermedias entre ellas, la merienda de la mañana y la de la tarde.  La merienda y la toma de media mañana son las ingestas necesarias cuando pasan más de 4-5 horas entre el desayuno y la comida o entre ésta y la cena, y especialmente cuando se realiza un actividad física importante ya sea en el trabajo o practicando un deporte. Su aporte será más o menos calórico, dependiendo de estos factores. Sin embargo, estas tomas intermedias, son en ocasiones el momento en el que se ingieren alimentos poco saludables como los aperitivos fritos y salados (ganchitos, patatas fritas, etc.), bollería, golosinas, refrescos, etc. Esto no sólo ocurre con los adultos, sino que los niños y adolescentes son edades en las que esta práctica es muy habitual. Para ello, lo mejor es que los padres y cuidadores ofrezcan ejemplos saludables en la elección de alimentos no solo en las meriendas, sino también en el resto de comidas del día.\r\n\r\nDesde "5 al día" queremos ofrecer algunas ideas sencillas, divertidas y saludables para animar a niños, jóvenes y adultos a apuntarse a la merienda:\r\n\r\nLo más sencillo y saludable, fruta fresca. Uvas, mandarinas, fresas o fruta cortada para los niños siempre es una opción fácil, económica y muy saludable. También una buena opción es la combinación de frutas desecadas con frutos secos sin sal (almendras, nueces o avellanas)\r\n\r\nSnacks de uva y queso fresco\r\n\r\nPodemos preparar muy fácilmente unas "minibrochetas" saludables, insertando en un palillo un taquito de queso y una uva. Una receta rápida y divertida, en la que podemos involucrar a los más pequeños de la casa. Esto también puede hacerse con tomates cherry y queso.\r\n\r\nYogur con frutas\r\n\r\nOtra opción muy adecuada en añadir a un yogur bajo en grasa, la fruta troceada que más nos guste: manzana, pera, piña, fresas, etc.\r\n\r\nBatido de frutas frescas, por ejemplo fresas\r\n\r\nPara preparar un sencillo batido de fresas solo necesitamos triturar 5-6 fresas grandes junto con medio vaso de leche baja en grasa. Si hacemos ejercicio físico, podemos acompañarlo con un puñadito de frutos secos sin sal o un bocadillo pequeño de fiambre magro o queso fresco.\r\n\r\nAlgo salado\r\n\r\nPor ejemplo bocadillo de pan integral con queso tierno, atún, salmán, sardinillas o una loncha de embutido magro junto con brotes tiernos de lechuga, tomate en rodajas o pimiento y unas gotas de aceite de oliva. Muy saludable y ligero. Para acompañar, nada mejor que una fruta fresca y un vaso de agua. \r\n\r\nEstos son algunos ejemplos, aunque hay mil maneras de preparar meriendas o tentempiés sanos y originales. Para no llegar con mucha hambre a la comida o a la cena, es importante tomar un tentempié saludable a media mañana o a media tarde.\r\n\r\nLas meriendas son ingestas que contribuyen a equilibrada la dieta diaria y su composición tiene una realcen directa con nuestro estilo de vida, de modo que a más actividad, más energéticas deben ser y al contrario. En todo caso, la fruta fresca y el agua son elementos básicos en una merienda saludable. Vale la pena planificar nuestras comidas durante la semana para conseguir una alimentación equilibrada. Todo es cuestión de ponerle imaginación y apostar por la vitalidad.');

-- --------------------------------------------------------

--
-- Estructura de la taula `producto`
--

CREATE TABLE `producto` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `producto`
--

INSERT INTO `producto` (`Id`, `Descripcion`) VALUES
(1, 'Protenina 80%'),
(2, 'Aminoacidos ramificados'),
(3, 'Quema grasa'),
(4, 'Colágeno');

-- --------------------------------------------------------

--
-- Estructura de la taula `rol`
--

CREATE TABLE `rol` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `rol`
--

INSERT INTO `rol` (`Id`, `Descripcion`) VALUES
(1, 'Entrenador'),
(2, 'Dietista');

-- --------------------------------------------------------

--
-- Estructura de la taula `solicitud`
--

CREATE TABLE `solicitud` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `solicitud`
--

INSERT INTO `solicitud` (`Id`, `Descripcion`, `Fecha`) VALUES
(1, 'solicitud 1', '0000-00-00'),
(2, 'solicitud 2', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de la taula `tipocomida`
--

CREATE TABLE `tipocomida` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `tipocomida`
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
-- Estructura de la taula `tipoejercicio`
--

CREATE TABLE `tipoejercicio` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `tipoejercicio`
--

INSERT INTO `tipoejercicio` (`Id`, `Descripcion`) VALUES
(1, 'Bicicleta'),
(2, 'Correr'),
(3, 'Pesas'),
(4, 'Eliptica');

-- --------------------------------------------------------

--
-- Estructura de la taula `trabajador`
--

CREATE TABLE `trabajador` (
  `Id` bigint(20) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Foto` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `IdRol` bigint(20) NOT NULL,
  `IdUsuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `trabajador`
--

INSERT INTO `trabajador` (`Id`, `Nombre`, `Apellidos`, `FechaNacimiento`, `Email`, `Telefono`, `Foto`, `IdRol`, `IdUsuario`) VALUES
(1, 'Miguel Ángel', 'Rey Gómez', '1990-03-30', 'miguelangel.rey@smilefit.es', 607586441, '', 1, 2),
(2, 'Javier', 'Iglesias Valencia', '1995-05-10', 'javi.iglesias@smilefit.es', 69874515, '', 2, 1),
(3, 'Alba', 'Casas', '1991-04-18', 'alba.casas@smilefit.es', 698521674, '', 2, 3),
(4, 'Marc', 'Jiménez', '1993-01-22', 'marc.jimenez@smilefit.es', 638246418, '', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario`
--

CREATE TABLE `usuario` (
  `Id` bigint(20) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `UserName` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `usuario`
--

INSERT INTO `usuario` (`Id`, `Descripcion`, `UserName`, `Password`) VALUES
(1, 'Trabajador', 'javi', '1234'),
(2, 'Trabajador', 'miguel', '1234'),
(3, 'Trabajador', 'alba', '1234'),
(4, 'Trabajador', 'marc', '1234'),
(5, 'cliente', 'marta', '1234'),
(6, 'cliente', 'pablo', '1234'),
(7, 'administrador', 'admin', '1234');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Index de la taula `diadieta`
--
ALTER TABLE `diadieta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdDieta` (`IdDieta`);

--
-- Index de la taula `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdTipoEjercicio` (`IdTipoEjercicio`);

--
-- Index de la taula `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Index de la taula `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`id`);

--
-- Index de la taula `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `fichamedica`
--
ALTER TABLE `fichamedica`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Index de la taula `lineadieta`
--
ALTER TABLE `lineadieta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdDiaDieta` (`IdDiaDieta`),
  ADD KEY `IdProducto` (`IdProducto`),
  ADD KEY `IdTipoComida` (`IdTipoComida`);

--
-- Index de la taula `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdSolicitud` (`IdSolicitud`),
  ADD KEY `IdTrabajdor` (`IdTrabajdor`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Index de la taula `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `tipocomida`
--
ALTER TABLE `tipocomida`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  ADD PRIMARY KEY (`Id`);

--
-- Index de la taula `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdRol` (`IdRol`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Index de la taula `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `diadieta`
--
ALTER TABLE `diadieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `dieta`
--
ALTER TABLE `dieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT per la taula `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `entrenamiento`
--
ALTER TABLE `entrenamiento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `eventos`
--
ALTER TABLE `eventos`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `fichamedica`
--
ALTER TABLE `fichamedica`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `lineadieta`
--
ALTER TABLE `lineadieta`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la taula `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `rol`
--
ALTER TABLE `rol`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la taula `tipocomida`
--
ALTER TABLE `tipocomida`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la taula `tipoejercicio`
--
ALTER TABLE `tipoejercicio`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `diadieta`
--
ALTER TABLE `diadieta`
  ADD CONSTRAINT `diadieta_ibfk_1` FOREIGN KEY (`IdDieta`) REFERENCES `dieta` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `ejercicio_ibfk_1` FOREIGN KEY (`IdTipoEjercicio`) REFERENCES `tipoejercicio` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `fichamedica`
--
ALTER TABLE `fichamedica`
  ADD CONSTRAINT `fichamedica_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `lineadieta`
--
ALTER TABLE `lineadieta`
  ADD CONSTRAINT `lineadieta_ibfk_1` FOREIGN KEY (`IdDiaDieta`) REFERENCES `diadieta` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lineadieta_ibfk_2` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lineadieta_ibfk_3` FOREIGN KEY (`IdTipoComida`) REFERENCES `tipocomida` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `lineasolicitud`
--
ALTER TABLE `lineasolicitud`
  ADD CONSTRAINT `lineasolicitud_ibfk_1` FOREIGN KEY (`IdSolicitud`) REFERENCES `solicitud` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lineasolicitud_ibfk_2` FOREIGN KEY (`IdTrabajdor`) REFERENCES `trabajador` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lineasolicitud_ibfk_3` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE;

--
-- Restriccions per la taula `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
