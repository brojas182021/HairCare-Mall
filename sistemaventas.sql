-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2024 a las 22:29:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `admi_codigo` int(11) NOT NULL,
  `admi_identificacion` varchar(20) DEFAULT NULL,
  `admi_tipoIdentificacion` varchar(15) DEFAULT NULL,
  `admi_nombre` varchar(50) DEFAULT NULL,
  `admi_apellido` varchar(50) DEFAULT NULL,
  `admi_celular` varchar(15) DEFAULT NULL,
  `admi_direccion` varchar(50) DEFAULT NULL,
  `usua_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`admi_codigo`, `admi_identificacion`, `admi_tipoIdentificacion`, `admi_nombre`, `admi_apellido`, `admi_celular`, `admi_direccion`, `usua_codigo`) VALUES
(1, '1022925', 'CC', 'Emily', 'Suarez', '3102973060', 'carrera9 ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `clie_codigo` int(11) NOT NULL,
  `clie_identificacion` varchar(20) DEFAULT NULL,
  `clie_tipoIdentificacion` varchar(15) DEFAULT NULL,
  `clie_nombre` varchar(50) DEFAULT NULL,
  `clie_telefono` varchar(15) DEFAULT NULL,
  `clie_direccion` varchar(50) DEFAULT NULL,
  `clie_telefono2` varchar(15) DEFAULT NULL,
  `clie_correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `deve_codigo` int(11) NOT NULL,
  `vent_codigo` int(11) DEFAULT NULL,
  `prod_codigo` int(11) DEFAULT NULL,
  `deve_subtotal` float DEFAULT NULL,
  `deve_cantidadPorProducto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `prod_codigo` int(11) NOT NULL,
  `prod_nombre` varchar(50) DEFAULT NULL,
  `prod_precioVenta` float DEFAULT NULL,
  `prod_Stock` float DEFAULT NULL,
  `prod_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`prod_codigo`, `prod_nombre`, `prod_precioVenta`, `prod_Stock`, `prod_descripcion`) VALUES
(1, 'Cintas para peinados', 200000, 9, 'Cinta para hacer de los peinados algo más atractivo .'),
(2, 'Maquina Cortess', 300000, 9, 'Maquina para hacer corte a caballero'),
(3, 'Tijeras Cabello', 8000, 15, 'Producto para corte de cabello.'),
(4, 'Secador', 100000, 5, 'Secador de cabello risado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_copia`
--

CREATE TABLE `producto_copia` (
  `prod_codigo` int(11) NOT NULL,
  `prod_nombre` varchar(50) DEFAULT NULL,
  `prod_precioVenta` float DEFAULT NULL,
  `prod_unidadMedida` varchar(25) DEFAULT NULL,
  `prod_Stock` float DEFAULT NULL,
  `prod_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_copia`
--

INSERT INTO `producto_copia` (`prod_codigo`, `prod_nombre`, `prod_precioVenta`, `prod_unidadMedida`, `prod_Stock`, `prod_descripcion`) VALUES
(3, 'Tijeras', 5000, '5000', 8, 'Tijeras para el corte de cabello ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_eliminado`
--

CREATE TABLE `producto_eliminado` (
  `prod_codigo` int(11) NOT NULL,
  `prod_nombre` varchar(50) DEFAULT NULL,
  `prod_precioVenta` float DEFAULT NULL,
  `prod_unidadMedida` varchar(25) DEFAULT NULL,
  `prod_Stock` float DEFAULT NULL,
  `prod_descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_eliminado`
--

INSERT INTO `producto_eliminado` (`prod_codigo`, `prod_nombre`, `prod_precioVenta`, `prod_unidadMedida`, `prod_Stock`, `prod_descripcion`) VALUES
(3, 'Tijeras', 5000, '5000', 8, 'Tijeras para el corte de cabello ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usua_codigo` int(11) NOT NULL,
  `usua_nombre` varchar(32) DEFAULT NULL,
  `usua_clave` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usua_codigo`, `usua_nombre`, `usua_clave`) VALUES
(1, 'emilysuarezm14@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `vent_codigo` int(11) NOT NULL,
  `vent_fecha` date DEFAULT NULL,
  `vent_cantidad` float DEFAULT NULL,
  `vent_total` float DEFAULT NULL,
  `clie_codigo` int(11) DEFAULT NULL,
  `vend_codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admi_codigo`),
  ADD KEY `usua_codigo` (`usua_codigo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clie_codigo`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`deve_codigo`),
  ADD KEY `vent_codigo` (`vent_codigo`),
  ADD KEY `prod_codigo` (`prod_codigo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`prod_codigo`);

--
-- Indices de la tabla `producto_copia`
--
ALTER TABLE `producto_copia`
  ADD PRIMARY KEY (`prod_codigo`);

--
-- Indices de la tabla `producto_eliminado`
--
ALTER TABLE `producto_eliminado`
  ADD PRIMARY KEY (`prod_codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usua_codigo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`vent_codigo`),
  ADD KEY `clie_codigo` (`clie_codigo`),
  ADD KEY `vend_codigo` (`vend_codigo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`usua_codigo`) REFERENCES `usuario` (`usua_codigo`);

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`vent_codigo`) REFERENCES `venta` (`vent_codigo`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`prod_codigo`) REFERENCES `producto` (`prod_codigo`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`clie_codigo`) REFERENCES `usuario` (`usua_codigo`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`vend_codigo`) REFERENCES `administrador` (`admi_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
