-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2022 a las 05:24:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cabeza_algodon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id_donaciones` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`id_donaciones`, `nombre`, `cantidad`, `fecha`) VALUES
(1, 'Kimberly', 300, '2022-10-27 07:20:43'),
(2, 'Julio', 200, '2022-10-27 07:20:38'),
(3, 'Jorge', 700, '2022-10-27 07:20:30'),
(5, 'Victor', 300, '2022-10-27 07:49:09'),
(6, 'Fernando', 300, '2022-10-29 01:24:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `codigo` int(11) NOT NULL,
  `nombre_especialidad` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL,
  `fecha_creada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`codigo`, `nombre_especialidad`, `estado`, `fecha_creada`) VALUES
(1, 'Dermatología', '1', '2022-10-23 19:11:33'),
(2, 'Cirujia', '1', '2022-10-23 19:16:49'),
(3, 'Dientista', '1', '2022-10-24 04:19:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id` int(11) NOT NULL,
  `fecha_visita` varchar(100) NOT NULL,
  `medico` int(10) NOT NULL,
  `examenes` varchar(100) NOT NULL,
  `resultados` varchar(100) NOT NULL DEFAULT '',
  `diagnostico` varchar(100) NOT NULL,
  `medicamentos` int(10) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha_medica`
--

INSERT INTO `ficha_medica` (`id`, `fecha_visita`, `medico`, `examenes`, `resultados`, `diagnostico`, `medicamentos`, `observaciones`, `id_persona`) VALUES
(1, '2020-05-11', 1, 'Covid', 'Positivo', 'Fuerte Fiebre', 1, 'Reposo Absoluto', 1),
(2, '2020-05-11', 2, 'Cabeza', 'Negativo', 'Migraña', 7, 'Reposo Absoluto', 2),
(5, '2022-10-25', 1, 'Covid', 'Negativo', 'Fuerte Fiebre', 1, 'Reposo Absoluto', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id_gastos` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id_gastos`, `nombre`, `cantidad`, `fecha`) VALUES
(1, '100 Hojas Bond Oficios', 200, '2022-10-27 07:38:16'),
(2, '50 Folder Carta', 25, '2022-10-27 07:44:10'),
(3, '1 Escritorio', 1500, '2022-10-27 07:49:32'),
(4, 'Herramientas de Limpieza', 385, '2022-10-27 07:51:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id_medicamento` int(11) NOT NULL,
  `nombre_medicamento` varchar(100) NOT NULL,
  `estado` char(1) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `nombre_medicamento`, `estado`, `fecha_vencimiento`, `fecha_ingreso`) VALUES
(1, 'Iburpofeno', '1', '2026-06-25', '2022-10-23 19:11:06'),
(2, 'Vital Fuerte', '1', '2028-10-28', '2022-10-23 19:17:05'),
(3, 'Iburpofeno 2', '1', '2025-09-30', '2022-10-23 22:33:07'),
(4, 'Aspirine', '1', '2030-05-26', '2022-10-24 03:49:21'),
(5, 'Omeprazol', '1', '2026-09-30', '2022-10-24 04:19:01'),
(6, 'Aceptaminafeno', '1', '2023-06-25', '2022-10-25 05:42:30'),
(7, 'Sukrol', '1', '2022-05-25', '2022-10-29 01:08:36'),
(8, 'Vital Fuerte 2', '1', '2026-09-10', '2022-10-29 01:16:42'),
(9, 'Vital Fuerte 2', '1', '2026-09-10', '2022-10-29 01:19:49'),
(10, 'Amoxicilina', '1', '2025-09-30', '2022-10-29 01:19:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int(11) NOT NULL,
  `dpi` char(8) NOT NULL,
  `nombre_medico` varchar(50) NOT NULL,
  `apellido_medico` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `sexo` char(15) NOT NULL,
  `telefono` char(9) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado_medico` char(15) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_medico`, `dpi`, `nombre_medico`, `apellido_medico`, `codigo`, `sexo`, `telefono`, `fecha_nacimiento`, `correo`, `direccion`, `estado_medico`, `fecha_creacion`) VALUES
(1, '12345678', 'Julio Fernando', 'Tamup Hernandez', 1, 'Masculino', '4549849', '1985-05-12', 'franciscogarcia@gmail.com', 'Mazatenango Such.', '1', '2022-10-23 19:12:08'),
(2, '31792113', 'Jonathan Daniel', 'Ramirez Fuentes', 2, 'Masculino', '57893165', '1985-06-13', 'jonathangarcia@gmail.com', 'Mazatenango Such.', '1', '2022-10-23 19:18:54'),
(3, '48921649', 'Justo', 'Ramirez Fuentes', 2, 'Masculino', '31668360', '1985-08-20', 'jdeleonr15@miumg.edu.gt', 'Mazatenango Such.', '', '2022-10-23 22:41:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `sintomas` varchar(250) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `edad`, `peso`, `altura`, `sintomas`, `id_persona`) VALUES
(1, '22', '150kg', '1.72 metros', 'Fiebre', 1),
(2, '22', '150kg', '1.72 metros', 'Dolor de Cabeza', 2),
(5, '22', '120kg', '1.65 metros', 'Fiebre', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero_tel` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `dpi` varchar(50) NOT NULL,
  `nit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `correo`, `numero_tel`, `direccion`, `genero`, `dpi`, `nit`) VALUES
(1, 'Juan Cruz', 'Xicay Perez', 'franciscogarcia@gmail.com', '31668360', 'Mazatenango Such.', 'Masculino', '12345678', '10290184'),
(2, 'Gabriel', 'Estrada Gomez', 'franciscogarcia@gmail.com', '31668360', 'Mazatenango Such.', 'Masculino', '12345678', '10290184'),
(5, 'Justo Efrain', 'Ramirez', 'franciscogarcia@gmail.com', '2651619848', 'Mazatenango Such.', 'Masculino', '12345678', '24845749');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contraseña` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contraseña`, `id_cargo`) VALUES
(1, 'Juan', 'Xicay', 'Juan2000', 1),
(2, 'Jose', 'Perez', '123', 2),
(3, 'Justo', 'Efrain', '123', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id_donaciones`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ficha_medica_persona` (`id_persona`),
  ADD KEY `fk_ficha_medica_medico` (`medico`),
  ADD KEY `fk_ficha_medica_medicamentos` (`medicamentos`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gastos`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `fk_medico_especialidad` (`codigo`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paciente_persona` (`id_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cargo_usuario` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id_donaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gastos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `fk_ficha_medica_medicamentos` FOREIGN KEY (`medicamentos`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ficha_medica_medico` FOREIGN KEY (`medico`) REFERENCES `medico` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ficha_medica_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_especialidad` FOREIGN KEY (`codigo`) REFERENCES `especialidad` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_cargo_usuario` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
