-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 00:53:35
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulariosesion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formadmin`
--

CREATE TABLE `formadmin` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formadmin`
--

INSERT INTO `formadmin` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'admin1', 'admin1@gmail.com', '123'),
(2, 'admin2', 'admin2@gmail.com', '12345'),
(3, 'admin3', 'admin3@gmail.com', '123456'),
(4, 'admin4', 'admin4@gmail.com', '123'),
(5, 'admin5', 'admin5@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formagencia`
--

CREATE TABLE `formagencia` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formagencia`
--

INSERT INTO `formagencia` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'agencia1', 'agencia1@gmail.com', '123'),
(2, 'agencia2', 'agencia@gmail.com', '1234'),
(3, 'agencia3', 'agencia3@gmail.com', '12345'),
(4, 'agencia4', 'agencia4@gmail.com', '123456'),
(5, 'agencia5', 'agencia5@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formproductos`
--

CREATE TABLE `formproductos` (
  `id` int(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `transmision` varchar(20) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formproductos`
--

INSERT INTO `formproductos` (`id`, `color`, `marca`, `modelo`, `precio`, `transmision`, `imagen`) VALUES
(1, 'Blanco', 'Audi', 'R8', '10000000', 'automatico', 'https://img.remediosdigitales.com/a6acd6/audi-r8-panther-edition-rwd-2021-15/840_560.jpg'),
(2, 'Blanco', 'BMW', 'i4 M50', '1000000', 'Automatica', 'https://static.motor.es/fotos-noticias/2022/04/primer-contacto-bmw-i4-m50-202286054-1648849356_1.jpg'),
(3, 'Verde', 'Mercedes', 'AMG', '2000000', 'Manual', 'https://www.hibridosyelectricos.com.jpg'),
(4, 'rojo', 'ferrari', 'monza', '30000000', 'automatica', 'image/jpeg;base64,/9j/4AAQSkZJRgABAQA/png'),
(5, 'blanco', 'Audi ', 'RS 3 2023', '1000000', 'manual', 'image/jpeg;base64,/9j/4AAQSkZJ'),
(6, 'verde', 'Lamborghini ', 'SVJ', '50000000', 'automatica', 'lambosvj.png'),
(7, 'rojo', 'Toyota ', 'GR Supra', '5000000', 'manual', 'supra.jpg'),
(8, 'rojo', 'challenger', 'RT Hellcat', '200000', 'automatica', 'hellcat.jpg'),
(9, 'naranja', 'Nissan ', 'GTR', '200000', 'manual', 'gtr.jpg'),
(10, 'amarillo', 'Porsche ', '911 GT', '10000000', 'automatica', 'posche911.png'),
(11, 'azul', 'ford', 'Mustang  GT 500', '400000', 'manual', 'gt500.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formproveedores`
--

CREATE TABLE `formproveedores` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formproveedores`
--

INSERT INTO `formproveedores` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'prov1', 'prov1@gmail.com', '123'),
(2, 'prov2', 'prov2@gmail.com', '1234'),
(3, 'prov3', 'prov3@gmail.com', '123456'),
(4, 'prov4', 'prov4@gmail.com', '123'),
(5, 'prov5', 'prov5@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formusuario`
--

CREATE TABLE `formusuario` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` int(50) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formusuario`
--

INSERT INTO `formusuario` (`id`, `nombre`, `correo`, `telefono`, `sexo`, `contrasena`) VALUES
(1, 'Rodrigo', 'rodri21@gmail.com', 1245211, 'Masculino', 'rodri21'),
(2, 'Alejandro', 'alex@gmail.com', 33312451, 'Masculino', '123'),
(3, 'usuario3', 'usuario3@gmail.com', 2147483647, 'Femenino', '1234'),
(4, 'usuario4', 'usuario4@gmail.com', 33214575, 'Femenino', '123456'),
(5, 'usuario5', 'usuario5@hotmail.com', 33214578, 'Masculino', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formadmin`
--
ALTER TABLE `formadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formagencia`
--
ALTER TABLE `formagencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formproductos`
--
ALTER TABLE `formproductos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formproveedores`
--
ALTER TABLE `formproveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formusuario`
--
ALTER TABLE `formusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formadmin`
--
ALTER TABLE `formadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formagencia`
--
ALTER TABLE `formagencia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formproductos`
--
ALTER TABLE `formproductos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `formproveedores`
--
ALTER TABLE `formproveedores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formusuario`
--
ALTER TABLE `formusuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
