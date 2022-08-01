-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 18:27:53
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_sic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radicaciones`
--

CREATE TABLE `radicaciones` (
  `id_radicacion` int(11) NOT NULL,
  `nombre_solicitante` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `asunto` varchar(255) NOT NULL,
  `texto_solicitud` text NOT NULL,
  `fk_usuario_crea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `radicaciones`
--

INSERT INTO `radicaciones` (`id_radicacion`, `nombre_solicitante`, `fecha`, `asunto`, `texto_solicitud`, `fk_usuario_crea`) VALUES
(1, 'Jonathan C', '2022-08-01 14:26:43', 'reclamo', 'este es un texto de solicitud de prueba', 1),
(2, 'Jonathan Cor', '2022-08-01 15:12:55', 'reclamossss', 'este es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(3, 'Jonathan Coro', '2022-08-01 14:27:36', 'reclamo', 'este es un texto de prueba', 1),
(4, 'Jonathan Coro', '2022-08-01 14:27:42', 'reclamo', 'este eseste es un texto de pruebaeste es un texto de pruebaun texto de prueba', 1),
(5, 'Jonathan Coro', '2022-08-01 14:27:53', 'reclamo', 'eeste es un texto de pruebaeste es un texto de pruebaeste es un texto de prueba', 1),
(6, 'Jonathan Coro', '2022-08-01 14:28:05', 'reclamo', 'este es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de prueba', 1),
(7, 'Jonathan Coro', '2022-08-01 16:08:43', 'reclamo', 'este es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de prueba editar log', 1),
(8, 'Jonathan Coro', '2022-08-01 16:08:05', 'reclamo', 'Prueba texto texto texto, edicion de log', 1),
(9, 'Jonathan Coro', '2022-08-01 14:28:54', 'reclamo', 'Prueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto texto', 1),
(10, 'Jonathan Coro', '2022-08-01 14:29:02', 'reclamo', 'Prueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto texto', 1),
(11, 'JONATHAN COR', '2022-08-01 14:29:38', 'DSDASA', 'este es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(12, 'JONATHAN COR', '2022-08-01 15:11:23', 'ALGOOOOO', 'esdasduebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(13, 'JONATHAN COR', '2022-08-01 14:30:05', 'DSDASA', 'este es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(14, 'nom prueb', '2022-08-01 15:24:37', 'sadasd', 'dasdasdasdwe erewrewfvds', 1),
(15, 'sdasd', '2022-08-01 15:29:14', 'sadasd', 'asdsadasdasd', 1),
(16, 'sic sic', '2022-08-01 15:30:09', 'sic creacion', 'prueba de creacion prueba de creacion', 1),
(18, 'Jonathan C', '2022-08-01 15:50:26', 'sdaskj', 'fdsfsddsfsdf', 1),
(19, 'Jonathan Cor', '2022-08-01 15:50:26', 'wqesda', 'sdfsdferwer', 1),
(20, 'Jonathan Coro', '2022-08-01 15:50:26', 'sadwe', 'dfsdfsdfewrewr ewr', 1),
(21, 'Jonathan Coro', '2022-08-01 15:50:26', 'sdaw', ' dfsdf sdfsdf sdf sdf sdfsdfsdf dsf', 1),
(22, 'Jonathan Coro', '2022-08-01 15:50:26', 'trerter', 'sdfkjsdhfklsdjfh sdklfjshdflksjdfh ', 1),
(23, 'Jonathan Coro', '2022-08-01 15:50:26', 'reclamo', 'este es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de prueba', 1),
(24, 'Jonathan Coro', '2022-08-01 15:50:26', 'wetrwrt', 'este es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de pruebaeste es un texto de prueba', 1),
(25, 'Jonathan Coro', '2022-08-01 15:51:07', 'gdfgdter', 'Prueba texto texto texto', 1),
(26, 'Jonathan Coro', '2022-08-01 15:51:07', 'reclamo', 'Prueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto texto', 1),
(27, 'Jonathan Coro', '2022-08-01 15:51:07', 'reclamo', 'Prueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto textoPrueba texto texto texto', 1),
(28, 'JONATHAN COR', '2022-08-01 15:51:07', 'DSDASA', 'este es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(29, 'JONATHAN COR', '2022-08-01 15:51:07', 'rteertert', 'esdasduebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(30, 'JONATHAN COR', '2022-08-01 15:51:07', 'DSDASA', 'este es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de pruebaeste es un texto de solicitud de pruebaes un texto de solicitud de pruebaes un texto de solicitud de prueba', 1),
(31, 'nom prueb', '2022-08-01 15:51:07', 'rterter', 'dasdasdasdwe erewrewfvds', 1),
(32, 'sdasd', '2022-08-01 15:51:07', 'dfgdfgdfg', 'asdsadasdasd', 1),
(33, 'sic sic', '2022-08-01 15:54:04', 'fgdfgdfg', 'prueba de creacion prueba de creacion', 2),
(34, 'prueba creacion', '2022-08-01 16:09:11', 'creacion de prueba', 'prueba prueba prueba pruebazxzxz', 2),
(35, 'radicado de prueba', '2022-08-01 16:07:39', 'creacion de radicado', 'esta es una creación de radicado que va a guardar el log', 1),
(36, 'sdasd', '2022-08-01 16:09:02', 'asdasd', 'asdsadasdsadasdasd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radicaciones_log`
--

CREATE TABLE `radicaciones_log` (
  `id_log` int(11) NOT NULL,
  `tipo_cambio` varchar(50) NOT NULL,
  `fecha_cambio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fk_usuario_realiza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `radicaciones_log`
--

INSERT INTO `radicaciones_log` (`id_log`, `tipo_cambio`, `fecha_cambio`, `fk_usuario_realiza`) VALUES
(1, 'INSERT', '2022-08-01 16:07:39', 1),
(2, 'UPDATE', '2022-08-01 16:08:35', 1),
(3, 'UPDATE', '2022-08-01 16:08:43', 1),
(4, 'INSERT', '2022-08-01 16:09:02', 2),
(5, 'UPDATE', '2022-08-01 16:09:11', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `intentos` int(11) NOT NULL DEFAULT 0,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `nombre`, `password`, `intentos`, `estado`) VALUES
(1, 'jonandres.c@gmail.com', 'Jonathan Coronado', '123456A', 0, 1),
(2, 'pruebasic@prueba.com', 'Prueba Sic', '123456A', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `radicaciones`
--
ALTER TABLE `radicaciones`
  ADD PRIMARY KEY (`id_radicacion`);

--
-- Indices de la tabla `radicaciones_log`
--
ALTER TABLE `radicaciones_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `radicaciones`
--
ALTER TABLE `radicaciones`
  MODIFY `id_radicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `radicaciones_log`
--
ALTER TABLE `radicaciones_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
