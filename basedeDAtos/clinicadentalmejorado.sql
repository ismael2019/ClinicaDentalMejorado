-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2017 a las 19:30:13
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinicadentalmejorado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `tratamiento_id` int(11) NOT NULL,
  `costo_total` double NOT NULL,
  `cancelado` double NOT NULL,
  `saldo_por_pagar` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `tratamiento_id`, `costo_total`, `cancelado`, `saldo_por_pagar`, `created`, `modified`) VALUES
(1, 1, 12, 12, 12, '2017-04-24 21:22:39', '2017-04-24 21:22:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiales`
--

CREATE TABLE `historiales` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `problemas_del_corazon` tinyint(1) NOT NULL,
  `presion_sanguinea_alta` tinyint(1) NOT NULL,
  `problemas_circulatorios` tinyint(1) NOT NULL,
  `problemas_nerviosos` tinyint(1) NOT NULL,
  `radioTerapia` tinyint(1) NOT NULL,
  `valvulas_del_corazon_artificiales` tinyint(1) NOT NULL,
  `perdida_de_peso` tinyint(1) NOT NULL,
  `problemas_de_espalda` tinyint(1) NOT NULL,
  `enfermedades_respiratorias` tinyint(1) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `presion_sanguinea_baja` tinyint(1) NOT NULL,
  `epilepsia` tinyint(1) NOT NULL,
  `hepatitis` tinyint(1) NOT NULL,
  `cancer` tinyint(1) NOT NULL,
  `tratamiento_siquiatrico` tinyint(1) NOT NULL,
  `dieta_especial` tinyint(1) NOT NULL,
  `enfermedades_de_la_sangre` tinyint(1) NOT NULL,
  `artitris` tinyint(1) NOT NULL,
  `glandulas_del_cuello_hinchadas` tinyint(1) NOT NULL,
  `fiebre_reumatica` tinyint(1) NOT NULL,
  `VIH` tinyint(1) NOT NULL,
  `embolia_cerebral` tinyint(1) NOT NULL,
  `ulceras` tinyint(1) NOT NULL,
  `enfermedades_venereas` tinyint(1) NOT NULL,
  `hemofilia` tinyint(1) NOT NULL,
  `osteoporosis` tinyint(1) NOT NULL,
  `enfermedades_de_higado` tinyint(1) NOT NULL,
  `diarrea_cronica` tinyint(1) NOT NULL,
  `drogadiccion` tinyint(1) NOT NULL,
  `otros` tinyint(1) NOT NULL,
  `alergias_a_anestesias` tinyint(1) NOT NULL,
  `alergias_a_medicinas` tinyint(1) NOT NULL,
  `alergias_generales` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historiales`
--

INSERT INTO `historiales` (`id`, `paciente_id`, `problemas_del_corazon`, `presion_sanguinea_alta`, `problemas_circulatorios`, `problemas_nerviosos`, `radioTerapia`, `valvulas_del_corazon_artificiales`, `perdida_de_peso`, `problemas_de_espalda`, `enfermedades_respiratorias`, `diabetes`, `presion_sanguinea_baja`, `epilepsia`, `hepatitis`, `cancer`, `tratamiento_siquiatrico`, `dieta_especial`, `enfermedades_de_la_sangre`, `artitris`, `glandulas_del_cuello_hinchadas`, `fiebre_reumatica`, `VIH`, `embolia_cerebral`, `ulceras`, `enfermedades_venereas`, `hemofilia`, `osteoporosis`, `enfermedades_de_higado`, `diarrea_cronica`, `drogadiccion`, `otros`, `alergias_a_anestesias`, `alergias_a_medicinas`, `alergias_generales`, `created`, `modified`) VALUES
(1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, '2017-04-24 21:27:09', '2017-04-24 21:27:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_i` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(100) NOT NULL,
  `telf_o_cel` int(20) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre_completo`, `sexo`, `c_i`, `edad`, `telf_o_cel`, `email`, `ciudad`, `created`, `modified`, `user_id`) VALUES
(1, 'Ismael Valdivia Aranibar', 'masculino', '7933336', 25, 72217540, 'irva2008_@hotmail.com', 'cochabamba', '2017-04-21 20:17:35', '2017-04-21 20:17:35', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `detalle_de_la_receta` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `paciente_id`, `detalle_de_la_receta`, `created`, `modified`) VALUES
(1, 1, 'tomar paracetamol 1g cada horas', '2017-04-21 20:30:50', '2017-04-21 20:30:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telf_o_cel` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sugerencia` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`id`, `nombre`, `apellido`, `email`, `telf_o_cel`, `sugerencia`, `created`, `modified`) VALUES
(1, 'Anita', 'vargas', 'anita@gmail.com', '78545632', 'Me gusta la pagina', '2017-04-08 20:24:06', '2017-04-17 19:35:57'),
(2, 'Jaime', 'vargas', 'vargas@gmail.com', '78954624', 'La pagina esta bien', '2017-04-17 19:19:20', '2017-04-17 19:19:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `caries` tinyint(1) NOT NULL,
  `cantidad_caries` int(11) NOT NULL,
  `conductos` tinyint(1) NOT NULL,
  `cantidad_conductos` int(11) NOT NULL,
  `rehabilitacion_oral` tinyint(1) NOT NULL,
  `extraccion_de_quistes` tinyint(1) NOT NULL,
  `extraccion_dental` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ortodoncia` tinyint(1) NOT NULL,
  `protesis_dental` tinyint(1) NOT NULL,
  `blanqueamiento_dental` tinyint(1) NOT NULL,
  `implantes` tinyint(1) NOT NULL,
  `cantidad_implantes` int(11) NOT NULL,
  `costo_total` double NOT NULL,
  `tipo_pago` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `paciente_id`, `caries`, `cantidad_caries`, `conductos`, `cantidad_conductos`, `rehabilitacion_oral`, `extraccion_de_quistes`, `extraccion_dental`, `ortodoncia`, `protesis_dental`, `blanqueamiento_dental`, `implantes`, `cantidad_implantes`, `costo_total`, `tipo_pago`, `created`, `modified`) VALUES
(1, 1, 1, 2, 0, 2, 0, 0, '2', 0, 0, 0, 0, 2, 2, '2', '2017-04-24 21:22:03', '2017-04-24 21:22:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `c_i` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `photo`, `username`, `email`, `password`, `role`, `c_i`, `created`, `modified`) VALUES
(1, 'leon-selva-sol.jpg', 'Ramiro', 'irva2008_@hotmail.com', '$2y$10$d0GGej0LDNELbNPtrlMAwOAFrD3uiyUkRvkPdmcFP1GVLqYAkF1NW', 'dentista', '7933336', '2017-04-07 21:24:57', '2017-04-18 04:47:06'),
(2, '62b27b03637d07e012b6e6d41fe47bae.jpg', 'Protesista', 'protesista@hotmail.com', '$2y$10$4VEVbG8yQF.ng39TKJWUE.pQFpMvvckrYB0SW2E4BkvIG6rPh.GY2', 'protesista', '7933336', '2017-04-08 19:02:18', '2017-04-08 19:02:18'),
(3, '1.jpg', 'Jaime', 'jaime@gmail.com', '$2y$10$M6PfjfkdSf.gwsYuqpXs7OuX6NGvYX1QoMhYVXCJGAqw7jFMLBk1C', 'dentista', '7933337', '2017-04-21 18:30:42', '2017-04-21 18:30:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historiales`
--
ALTER TABLE `historiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `historiales`
--
ALTER TABLE `historiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
