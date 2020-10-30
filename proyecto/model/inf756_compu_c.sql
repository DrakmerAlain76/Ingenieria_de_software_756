-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-10-2020 a las 03:26:11
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inf756_compu_c`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

DROP TABLE IF EXISTS `accesos`;
CREATE TABLE IF NOT EXISTS `accesos` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `nuser` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_a` date NOT NULL,
  `hora_a` time NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_a`, `nuser`, `fecha_a`, `hora_a`, `tipo`) VALUES
(1, 'jose', '2020-08-19', '21:05:57', 2),
(3, 'marcelo@arias.com', '2020-08-19', '21:12:49', 2),
(4, 'drak@ro.com', '2020-08-20', '19:31:37', 2),
(5, 'drak@ro.com', '2020-08-20', '19:33:45', 2),
(6, 'drak@ro.com', '2020-08-20', '19:34:05', 2),
(7, 'drak@ro.com', '2020-08-20', '19:35:16', 2),
(8, 'drak@ro.com', '2020-08-20', '19:36:29', 2),
(9, 'rodra@gmail.com', '2020-08-20', '20:00:46', 1),
(10, 'drak@ro.com', '2020-08-20', '21:34:57', 2),
(11, 'drak@ro.com', '2020-08-20', '21:38:23', 2),
(13, 'drak@ro.com', '2020-08-20', '21:52:31', 2),
(17, 'drak@ro.com', '2020-08-20', '22:57:44', 2),
(19, 'drak@ro.com', '2020-08-20', '23:01:00', 2),
(29, 'drakm', '2020-08-28', '11:05:59', 2),
(30, 'rodra', '2020-08-28', '11:08:44', 1),
(31, 'marcelo_arias', '2020-08-28', '11:30:44', 2),
(32, 'drakm', '2020-08-28', '13:35:21', 2),
(33, 'rodra', '2020-08-28', '13:37:11', 1),
(34, 'drakm', '2020-08-28', '13:40:33', 2),
(35, 'drakm', '2020-09-02', '05:11:20', 2),
(36, 'rodra', '2020-09-02', '05:21:41', 1),
(37, 'drakm', '2020-09-02', '05:22:06', 2),
(38, 'drakm', '2020-09-02', '05:23:35', 2),
(39, 'rodra', '2020-09-02', '05:23:55', 1),
(40, 'rodra', '2020-09-02', '07:53:16', 1),
(41, 'drakm', '2020-09-02', '09:39:03', 2),
(42, 'rodra', '2020-09-02', '09:41:23', 1),
(43, 'rodra', '2020-09-04', '01:57:43', 1),
(44, 'drakm', '2020-09-04', '02:35:38', 2),
(45, 'rodra', '2020-09-04', '02:35:51', 1),
(46, 'drakm', '2020-09-04', '02:36:10', 2),
(47, 'rodra', '2020-09-04', '02:36:42', 1),
(48, 'drakm', '2020-09-04', '02:38:10', 2),
(49, 'rodra', '2020-09-04', '02:41:08', 1),
(50, 'rodra', '2020-09-04', '20:08:37', 1),
(51, 'drakm', '2020-09-04', '20:59:30', 2),
(52, 'rodra', '2020-09-04', '20:59:47', 1),
(53, 'drakm', '2020-09-05', '02:40:12', 2),
(54, 'drakm', '2020-09-05', '14:14:23', 2),
(55, 'rodra', '2020-09-05', '14:15:14', 1),
(56, 'rodra', '2020-09-08', '23:47:43', 1),
(57, 'drakm', '2020-09-08', '23:59:01', 2),
(58, 'drakm', '2020-09-09', '02:07:33', 2),
(59, 'rodra', '2020-09-09', '02:09:32', 1),
(60, 'rodra', '2020-09-09', '02:12:09', 1),
(61, 'rodra', '2020-09-09', '06:21:08', 1),
(62, 'drakm', '2020-09-09', '06:23:52', 2),
(63, 'rodra', '2020-09-09', '06:58:03', 1),
(64, 'rodra', '2020-09-09', '07:48:26', 1),
(65, 'drakm', '2020-09-09', '07:48:40', 2),
(66, 'rodra', '2020-09-09', '07:51:35', 1),
(67, 'rodra', '2020-09-09', '08:17:44', 1),
(68, 'drakm', '2020-09-09', '10:22:11', 2),
(69, 'rodra', '2020-09-09', '10:23:03', 1),
(70, 'rodra', '2020-09-09', '10:59:20', 1),
(71, 'pedro123', '2020-09-29', '23:47:19', 2),
(72, 'pedro123', '2020-10-04', '16:20:37', 2),
(73, 'pedro123', '2020-10-04', '16:25:53', 2),
(74, 'pedro123', '2020-10-20', '22:25:10', 2),
(75, 'rodra', '2020-10-21', '06:54:34', 1),
(76, 'pedro123', '2020-10-21', '07:29:43', 2),
(77, 'pedro123', '2020-10-21', '07:43:37', 2),
(78, 'Alain76', '2020-10-21', '10:02:36', 2),
(79, 'Alain76', '2020-10-21', '10:45:46', 2),
(80, 'rodra', '2020-10-21', '10:50:23', 1),
(81, 'ped', '2020-10-22', '23:47:57', 2),
(82, 'drakm', '2020-10-23', '00:47:08', 2),
(83, 'rodra', '2020-10-25', '14:46:06', 1),
(84, 'josepe', '2020-10-25', '15:47:49', 2),
(85, 'drakm', '2020-10-25', '22:56:56', 2),
(86, 'rodra', '2020-10-26', '00:37:27', 1),
(87, 'rodra', '2020-10-26', '03:56:21', 1),
(88, 'drakmers', '2020-10-26', '03:56:39', 2),
(89, 'rodra', '2020-10-26', '05:03:06', 1),
(90, 'drakmer', '2020-10-26', '07:12:45', 2),
(91, 'rodra', '2020-10-26', '07:35:30', 1),
(92, 'rodra', '2020-10-26', '07:36:47', 1),
(93, 'drakmer', '2020-10-26', '07:37:24', 2),
(94, 'drakmer', '2020-10-26', '08:52:11', 2),
(95, 'rodra', '2020-10-26', '08:56:53', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graficos`
--

DROP TABLE IF EXISTS `graficos`;
CREATE TABLE IF NOT EXISTS `graficos` (
  `id_grafico` int(11) NOT NULL AUTO_INCREMENT,
  `reservas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `reservas_pagadas` int(11) NOT NULL,
  `cursos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_grafico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `unidad_dis` int(11) NOT NULL,
  `fecha_dis` date NOT NULL,
  `reservas` int(11) NOT NULL,
  `comprado_p` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `marca`, `comentario`, `precio`, `unidad_dis`, `fecha_dis`, `reservas`, `comprado_p`, `image`) VALUES
(43, 'mouse basilisk', 'razer', 'raton de ultima tecnologia el mas rapido y el mejor', 150, 10, '2020-10-26', 1, 0, 'descargar.jpg'),
(44, 'computadora i7', 'HD', 'computadora de ultima generacion con 4 de ram video de 8gb el mejor rendimiento', 1400, 3, '2020-10-27', 0, 0, 'images.jpg'),
(45, 'computadora rycen 7', 'Asus', 'computadora de ultima generaciÃ³n con 12 de ram y video de 8gb perfecto para video juegos y mas uso', 1250, 4, '2020-10-26', 0, 0, 'images (1).jpg'),
(46, 'computadora i3', 'THOSHIBA', 'computadora de escritorio para oficina con un buen rendimiento 4gb de ram 2 de video', 1120, 19, '2020-10-26', 0, 0, 'descargar (4).jpg'),
(47, 'teclado gamer TD rgb', 'redragon', 'teclado enfocado a video juego y entretenimiento con una buena calidad y sensibilidad', 120, 3, '2020-10-26', 0, 0, 'descargar (3).jpg'),
(48, 'impresora canon 12e', 'CANNON', 'impresora de tinta lacer eficente al momento de trabajar mas rapido y menos ruidoso', 124, 8, '2020-10-26', 1, 0, 'descargar (1).jpg'),
(49, 'teclado rowel esr7', 'rowel', 'teclado convencional para uso cotidiano, sin retrasos anti click falso', 20, 7, '2020-10-26', 0, 0, 'descargar.png'),
(50, 'impresora canon 18r', 'CANNON', 'impresora de tinta, para el mas exigente rendimiento el mejor de  la marca calidad y precio', 250, 4, '2020-10-26', 0, 0, 'images (2).jpg'),
(51, 'portail 15in', 'lenovo', 'excelente portatil a bajo costo con un terminado de calidad ', 1200, 9, '2020-10-26', 0, 0, 'images (1).jpg'),
(52, 'portail 18in', 'HD', 'computadora portÃ¡til de excelente calidad 8 de ram 4 de video liviano, no calienta, su baterÃ­a rinde y dura mas   ', 1500, 8, '2020-10-26', 0, 0, 'images (4).jpg'),
(53, 'pantalla lcd', 'HD', 'este producto es de calidad', 1250, 8, '2020-10-26', 0, 0, 'descargar (2).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `producto_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_res` date NOT NULL,
  `hora_res` time NOT NULL,
  `cupos` int(11) NOT NULL,
  `horarios` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `comprado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_res`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_res`, `usuario_res`, `producto_res`, `fecha_res`, `hora_res`, `cupos`, `horarios`, `descuento`, `id_producto`, `comprado`) VALUES
(47, 'drakmer', 'pantalla lcd', '2020-10-26', '07:38:55', 1, 0, 0, 42, 'no'),
(48, 'drakmer', 'mouse basilisk', '2020-10-26', '08:52:33', 1, 0, 0, 43, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

DROP TABLE IF EXISTS `saldo`;
CREATE TABLE IF NOT EXISTS `saldo` (
  `id_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `cash` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `disponible` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_saldo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `cash`, `valor`, `disponible`) VALUES
(1, 'XXXAAAEEE', 1000, 'si'),
(2, 'AAASSSDDD', 2000, 'si'),
(3, 'RRRGGGBBB', 500, 'si'),
(4, 'UUUBBBLLL', 200, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

DROP TABLE IF EXISTS `transaccion`;
CREATE TABLE IF NOT EXISTS `transaccion` (
  `id_transaccion` int(11) NOT NULL AUTO_INCREMENT,
  `dia_compra` date NOT NULL,
  `hora_compra` time NOT NULL,
  `dia_pedido` date NOT NULL,
  `descuento` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_producto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_transaccion`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id_transaccion`, `dia_compra`, `hora_compra`, `dia_pedido`, `descuento`, `nombre_producto`, `costo`, `id_producto`, `id_usuario`) VALUES
(30, '2020-10-26', '08:55:22', '0000-00-00', '0', 'impresora canon 12e', 124, 48, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numero_cell` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `cash` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Fech_Nac` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `tipo`, `cedula`, `pais`, `numero_cell`, `genero`, `cash`, `Fech_Nac`) VALUES
(14, 'drak', 'ro', 'rodra', '$2y$04$ASJcj2DQ5Pz/RZApPQZQ1O77N4lp0cOIZbkRjB6Jz44oNKpBOOZge', 'rodra@gmail.com', 1, '0', '0', '0', '', '0', 0),
(16, 'drakmer', 'rodriguez', 'drakmer76', '$2y$04$ra10/aVt0fh0ZAgGIHyFlOxdJgyKrMIxryS.4J50ircNyT/5GtFPC', 'drak@ro.com', 2, '16513256', 'Bolivia', '75156685', '', '98406', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
