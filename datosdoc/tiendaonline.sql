-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2016 a las 18:08:59
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ADM_ID` int(11) NOT NULL,
  `ADM_NOMBRE` varchar(45) DEFAULT NULL,
  `ADM_USER` varchar(45) DEFAULT NULL,
  `ADM_CLAVE` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ADM_ID`, `ADM_NOMBRE`, `ADM_USER`, `ADM_CLAVE`) VALUES
(1, 'JHONNY JAMI', 'jhonalonjami@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_NOMBRE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CAT_ID`, `CAT_NOMBRE`) VALUES
(1, 'Computadoras'),
(2, 'Audio y Video'),
(3, 'Ropa'),
(4, 'Juguetes'),
(5, 'Utiles Escolares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `COM_ID` int(11) NOT NULL,
  `USU_ID` int(11) DEFAULT NULL,
  `COM_TOTAL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `PRO_ID` int(11) NOT NULL,
  `COM_ID` int(11) NOT NULL,
  `DET_CANTIDAD` int(11) DEFAULT NULL,
  `DET_PRECIO` int(11) DEFAULT NULL,
  `DET_SUB_TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `PRO_ID` int(11) NOT NULL,
  `CAT_ID` int(11) DEFAULT NULL,
  `PRO_NOMBRE` varchar(100) DEFAULT NULL,
  `PRO_DETALLE` varchar(200) DEFAULT NULL,
  `PRO_PRECIO` varchar(40) DEFAULT NULL,
  `PRO_STOCK` varchar(40) DEFAULT NULL,
  `PRO_LIKE` int(11) DEFAULT NULL,
  `PRO_IMAGEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRO_ID`, `CAT_ID`, `PRO_NOMBRE`, `PRO_DETALLE`, `PRO_PRECIO`, `PRO_STOCK`, `PRO_LIKE`, `PRO_IMAGEN`) VALUES
(14, NULL, 'APPLE MACBOOK AIR 128GB 13 PULGADAS MODELO 2015', 'nuevos HD Graphics 5000 de Intel son hasta un 40% más rápidos, y eso salta a la vista cuando juegas o usas aplicaciones con muchos gráficos', '1387.87', '12', NULL, 'comput14.png'),
(15, NULL, 'TOSHIBA SATELLITE 17'' L55-B5177SM INTEL CELERON COLOR SILVER', 'Especificaciones:\r\nConectividad	WIFI, LAN, BLUETOOTH\r\nPantalla	LED HD\r\nTamaño pantalla	15.6 pulgadas', '332.55', '12', NULL, 'comput21.png'),
(16, NULL, 'BEATS AUDÍFONOS BEATS STUDIO RECARGABLES COLOR NEGRO B0500', 'Especificaciones:\r\nTipo de conector	Con cable\r\nTipo	Auricular\r\nColor	NEGRO\r\nConexión	3.5mm', '231.10', '10', NULL, 'audi1.png'),
(17, NULL, ' SONY AUDÍFONO DJ PRO 30MM 1000MW ROJO', 'Especificaciones:\r\nTipo de conector	Jack 3.5mm\r\nTipo	Auricular\r\nColor	ROJO\r\nCompatibilidad	SmartPhones, Tablets, mp3, mp4, iPOD\r\nGénero	Unisex', '25.75', '12', NULL, 'audi2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USU_ID` int(11) NOT NULL,
  `USU_NOMBRE` varchar(30) DEFAULT NULL,
  `USU_APELLIDO` varchar(30) DEFAULT NULL,
  `USU_CORREO` varchar(30) DEFAULT NULL,
  `USU_CLAVE` varchar(30) DEFAULT NULL,
  `USU_LIKE` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USU_ID`, `USU_NOMBRE`, `USU_APELLIDO`, `USU_CORREO`, `USU_CLAVE`, `USU_LIKE`) VALUES
(1, 'JHONNY', 'JAMI', 'jhonnyjami@gmail.com', '123456', NULL),
(2, 'IVAN PATRICIO', 'PILLO GUALA', 'ipguala@gmail.com', '123456', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADM_ID`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `FK_COMPRA_USUARIO` (`USU_ID`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`PRO_ID`,`COM_ID`),
  ADD KEY `FK_COMPRA_DETALLE` (`COM_ID`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`PRO_ID`),
  ADD KEY `FK_CATEGORIA_PRODUCTO` (`CAT_ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`USU_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ADM_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `USU_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_COMPRA_USUARIO` FOREIGN KEY (`USU_ID`) REFERENCES `usuario` (`USU_ID`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `FK_COMPRA_DETALLE` FOREIGN KEY (`COM_ID`) REFERENCES `compra` (`COM_ID`),
  ADD CONSTRAINT `FK_DETALLE_PRODUCTO` FOREIGN KEY (`PRO_ID`) REFERENCES `producto` (`PRO_ID`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_CATEGORIA_PRODUCTO` FOREIGN KEY (`CAT_ID`) REFERENCES `categoria` (`CAT_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
