-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2025 a las 18:29:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdarchivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `precio`, `stock`) VALUES
(1, 'Paceña 440ml', 225.00, 10),
(2, 'Paceña 330ml', 195.00, 10),
(3, 'Golden 440ml', 203.00, 10),
(4, 'Baltica 470ml', 200.00, 10),
(5, 'Baltica 330ml', 170.00, 10),
(6, 'Chicha 440ml', 195.00, 10),
(7, 'Blu lata 473ml', 280.00, 10),
(8, 'Snaider 473ml', 190.00, 10),
(9, 'Amster 473ml', 190.00, 10),
(10, 'Quilmes 440ml', 220.00, 10),
(11, 'Burguesa 473ml', 220.00, 10),
(12, 'Bueguesa 330ml', 165.00, 10),
(13, 'Burguesa 269ml', 145.00, 10),
(14, 'Huari lata 440ml', 280.00, 10),
(15, 'Real 473ml', 175.00, 10),
(16, 'Kohlber tinto', 28.00, 10),
(17, 'Kolhber blanco', 28.00, 10),
(18, 'Kolhber rosado', 35.00, 10),
(19, 'Terruño tinto', 28.00, 10),
(20, 'Terruño blanco', 28.00, 10),
(21, 'Terruño oporto', 35.00, 10),
(22, 'Campos tinto', 28.00, 10),
(23, 'Campos blanco', 28.00, 10),
(24, 'Campos oporto', 35.00, 10),
(25, 'Toro botella', 35.00, 10),
(26, 'Toro 3litro', 80.00, 10),
(27, 'Biñas balbo', 35.00, 10),
(28, 'Sangria 3litro', 90.00, 10),
(29, 'Santana rosado', 40.00, 10),
(30, 'Santana tinto', 40.00, 10),
(31, 'Casa real negro', 75.00, 10),
(32, 'Casa real azul', 30.00, 10),
(33, 'Casa real rojo', 45.00, 10),
(34, 'Insignia azul', 30.00, 10),
(35, 'Insignia negro', 75.00, 10),
(36, 'Insignia rojo', 45.00, 10),
(37, 'Parral dorado', 65.00, 10),
(38, 'Parral azul', 29.00, 10),
(39, 'Parral rojo', 35.00, 10),
(40, 'Rujero litro', 50.00, 10),
(41, 'Granada 250ml', 5.00, 10),
(42, 'Granada 500ml', 10.00, 10),
(43, 'Granada 1 litro', 15.00, 10),
(44, 'Jose cuervo', 190.00, 10),
(45, 'Olmeca chocolate', 190.00, 10),
(46, 'Olmeca reposado', 190.00, 10),
(47, 'Rosse', 325.00, 10),
(48, 'Jarana litro', 165.00, 10),
(49, 'Jarana ¾', 150.00, 10),
(50, 'Diputado', 165.00, 10),
(51, 'Coca Cola 3litro', 20.00, 10),
(52, 'Fanta 3 litros', 20.00, 10),
(53, 'Pepsi 3 litro', 14.00, 10),
(54, 'Cascada Pomelo', 14.00, 10),
(55, 'Cascada Frutilla', 14.00, 10),
(56, 'Cascada Piña', 14.00, 10),
(57, 'Coca Cola 2 litro', 14.00, 10),
(58, 'Coca Cola 330ml', 3.00, 10),
(59, 'Oro Papaya 3 litro', 13.00, 10),
(60, 'Oro Piña 3 litro', 13.00, 10),
(61, 'Fanta Papaya 3 litro', 20.00, 10),
(62, 'Fanta Naranja 3 litro', 20.00, 10),
(63, 'Agua 2 litro', 9.00, 10),
(64, 'Agua 3 litro', 10.00, 10),
(65, 'Agua litro', 7.00, 10),
(66, 'Ades litro', 12.00, 10),
(67, 'Tampico 3 litro', 17.00, 10),
(68, 'Tampico 2 litro', 11.00, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cliente`
--

CREATE TABLE `registro_cliente` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Celular` int(12) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro_cliente`
--

INSERT INTO `registro_cliente` (`Id`, `Nombre`, `Apellido`, `Celular`, `Correo`) VALUES
(1, 'asdas', 'asd', 0, 'asd'),
(2, 'asdas', 'asd', 0, 'asd'),
(3, 'sdfsdf', 'sdfsdf', 454456, 'sddf@asdsad.com'),
(4, '', '', 0, ''),
(5, 'Juan', 'Torrez', 65377452, 'torrez@gmail.com'),
(6, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(7, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(8, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(9, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(10, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(11, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(12, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(13, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(14, 'Yoset Arison', 'Yampa', 70350909, 'yosetarison@gmail.com'),
(15, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(16, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(17, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(18, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(19, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(20, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(21, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(22, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(23, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(24, 'Rojas', 'Ramirez', 69256854, 'rojasramirez@gmail.com'),
(25, 'juan', 'ramirez', 658289, ''),
(26, 'juan', 'ramirez', 658289, ''),
(27, 'juan', 'ramirez', 658289, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE `tabla_productos` (
  `Nombre_Produco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_cliente`
--
ALTER TABLE `registro_cliente`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `registro_cliente`
--
ALTER TABLE `registro_cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
