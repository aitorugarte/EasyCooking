-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2017 a las 22:42:53
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `easycooking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `receta_id` int(11) DEFAULT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente`
--

CREATE TABLE `ingrediente` (
  `id` int(11) NOT NULL,
  `nombre` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingrediente`
--

INSERT INTO `ingrediente` (`id`, `nombre`) VALUES
(1, 'Macarrones'),
(2, 'Chorizo'),
(3, 'Queso'),
(4, 'Tomate'),
(5, 'Espaguetis'),
(6, 'Ajo'),
(7, 'Guindilla'),
(8, 'Aceite de oliva'),
(9, 'Sal'),
(10, 'Patata'),
(11, 'Cebolla'),
(12, 'Huevo'),
(13, 'Zanahoria'),
(14, 'Lentejas'),
(15, 'Perejil'),
(16, 'Filete de ternera'),
(17, 'Filete de merluza'),
(18, 'Bechamel'),
(19, 'Laminas para lasaña'),
(20, 'Carne picada'),
(21, 'Jamon Serrano'),
(22, 'Cebolleta'),
(23, 'Harina'),
(24, 'Mantequilla'),
(25, 'Leche'),
(26, 'Pan rallado'),
(27, 'Obleas para empanadillas'),
(28, 'Bonito fresco'),
(29, 'Pimiento verde'),
(30, 'Aceitunas'),
(31, 'Masa de pizza'),
(32, 'Jamon York'),
(33, 'Lechuga'),
(34, 'Atun'),
(35, 'Maiz'),
(36, 'Guisantes'),
(37, 'Mayonesa'),
(38, 'Queso de untar (Philadelphia)'),
(39, 'Cuajada'),
(40, 'Azucar'),
(41, 'Nata de montar'),
(42, 'Galletas maria'),
(43, 'Mermelada'),
(44, 'Canela en rama'),
(45, 'Yemas de huevo'),
(46, 'Maizena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingrediente_receta`
--

CREATE TABLE `ingrediente_receta` (
  `ingrediente_id` int(11) NOT NULL,
  `receta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingrediente_receta`
--

INSERT INTO `ingrediente_receta` (`ingrediente_id`, `receta_id`) VALUES
(1, 1),
(2, 1),
(2, 4),
(3, 1),
(3, 10),
(4, 1),
(4, 7),
(4, 10),
(4, 11),
(5, 2),
(6, 2),
(6, 4),
(6, 7),
(6, 8),
(6, 9),
(7, 2),
(8, 2),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 9),
(9, 11),
(9, 12),
(10, 3),
(10, 4),
(10, 5),
(10, 12),
(11, 3),
(11, 4),
(11, 7),
(11, 9),
(12, 3),
(12, 8),
(12, 11),
(12, 12),
(12, 14),
(13, 4),
(13, 11),
(13, 12),
(14, 4),
(15, 4),
(15, 6),
(15, 8),
(15, 12),
(16, 5),
(17, 6),
(18, 7),
(19, 7),
(20, 7),
(21, 8),
(22, 8),
(22, 9),
(23, 8),
(24, 8),
(24, 13),
(25, 8),
(25, 13),
(25, 14),
(25, 15),
(26, 8),
(27, 9),
(28, 9),
(29, 9),
(30, 9),
(30, 11),
(30, 12),
(31, 10),
(32, 10),
(33, 11),
(34, 11),
(34, 12),
(35, 11),
(36, 12),
(37, 12),
(38, 13),
(39, 13),
(40, 13),
(40, 14),
(40, 15),
(41, 13),
(42, 13),
(43, 13),
(44, 14),
(44, 15),
(45, 14),
(45, 15),
(46, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `id` int(11) NOT NULL,
  `nombre` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`id`, `nombre`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id` int(11) NOT NULL,
  `tipo_plato` int(11) DEFAULT NULL,
  `nombre` longtext COLLATE utf8_unicode_ci NOT NULL,
  `detalles` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `imagen` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id`, `tipo_plato`, `nombre`, `detalles`, `date`, `imagen`) VALUES
(1, 1, 'Macarrones con tomate', 'Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno Macarrones con tomate al horno', '2017-11-08', ''),
(2, 1, 'Espaguetis al ajillo ', 'Espaguetis al ajillo al mas puro estilo tradicional Italiano', '2017-11-10', ''),
(3, 1, 'Tortilla de Patata', 'Tortila de patata española casera con cebolla al punto de sal', '2017-11-11', ''),
(4, 1, 'Lentejas', 'Un buen plato de lentejas acompañado con chorizo o lo que guste para un dia de frio', '2017-10-23', ''),
(5, 2, 'Filete con patatas', 'Filete de ternera con una racion de patatas para acompañar al gusto', '2017-10-28', ''),
(6, 2, 'Merluza en salsa', 'Una porcion de merluza acompañada de una salsa verde', '2017-11-03', ''),
(7, 2, 'Lasaña', 'Una porcion de lasaña rellena de carne picada para saltarse de vez en cuando esas comidas ligeras', '2017-10-26', ''),
(8, 2, 'Croquetas', 'Croquetas rellenas de jamon como apertitivo para empezar una excelente comida', '2017-10-19', ''),
(9, 2, 'Empanadillas', 'Empanadillas rellenas con tomate y atun como acompañante de cualquier comida', '2017-11-23', ''),
(10, 1, 'Pizza de jamon y queso', 'Pizza de jamon y queso de toda la vida y para toda la familia', '2017-11-02', ''),
(11, 1, 'Ensalada mixta', 'Ensalada mixta con variedad de ingredientes al más ppuro estiolo campestre', '2017-09-23', ''),
(12, 1, 'Ensaladilla rusa', 'Ensalada tipica en muchos paises originaria de Rusia', '2017-10-30', ''),
(13, 3, 'Tarta de queso', 'Tarta de queso con mermelada para aportar un toque dulce a la comida', '2017-05-01', ''),
(14, 3, 'Flan de huevo', 'Flan de huevo con caramelo elaborado poco a poco, muy apetecible por los peques de la casa', '2017-11-30', ''),
(15, 3, 'Natillas', 'Se trata de una crema elaborada con leche, yemas de huevo y azúcar', '2017-10-07', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B91E70254F853F8` (`receta_id`);

--
-- Indices de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingrediente_receta`
--
ALTER TABLE `ingrediente_receta`
  ADD PRIMARY KEY (`ingrediente_id`,`receta_id`),
  ADD KEY `IDX_5C9AEABE769E458D` (`ingrediente_id`),
  ADD KEY `IDX_5C9AEABE54F853F8` (`receta_id`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B093494E97F7A48D` (`tipo_plato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingrediente`
--
ALTER TABLE `ingrediente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_4B91E70254F853F8` FOREIGN KEY (`receta_id`) REFERENCES `receta` (`id`);

--
-- Filtros para la tabla `ingrediente_receta`
--
ALTER TABLE `ingrediente_receta`
  ADD CONSTRAINT `FK_5C9AEABE54F853F8` FOREIGN KEY (`receta_id`) REFERENCES `receta` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5C9AEABE769E458D` FOREIGN KEY (`ingrediente_id`) REFERENCES `ingrediente` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `FK_B093494E97F7A48D` FOREIGN KEY (`tipo_plato`) REFERENCES `plato` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
