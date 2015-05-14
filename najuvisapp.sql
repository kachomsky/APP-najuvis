-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2015 a las 09:38:14
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `najuvisapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cake_dessign`
--

CREATE TABLE IF NOT EXISTS `cake_dessign` (
`id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname1` varchar(255) NOT NULL,
  `surname2` varchar(255) NOT NULL,
  `dni` varchar(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `entryDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id`, `email`, `name`, `surname1`, `surname2`, `dni`, `phone`, `address`, `entryDate`) VALUES
(18, '', 'alex', 'garcia', 'carballo', '12345678Z', '654321345', 'Address prueba', '2015-05-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `route` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE IF NOT EXISTS `local` (
`id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `price_hour` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`id`, `address`, `state`, `price_hour`, `image`) VALUES
(1, 'Calle de prueba Nº 233', 0, 12, 'images/locals/local1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
`id` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `orderNumber` int(11) NOT NULL,
  `dateOrder` date NOT NULL,
  `deliveryDate` date NOT NULL,
  `totalPrice` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `order_table`
--

INSERT INTO `order_table` (`id`, `idClient`, `orderNumber`, `dateOrder`, `deliveryDate`, `totalPrice`) VALUES
(1, 1, 43123, '0000-00-00', '0000-00-00', 0),
(2, 6, 43123, '0000-00-00', '0000-00-00', 0),
(3, 8, 43123, '0000-00-00', '0000-00-00', 0),
(4, 9, 43123, '0000-00-00', '0000-00-00', 0),
(5, 10, 43123, '2015-05-13', '0000-00-00', 0),
(6, 14, 43123, '2015-05-13', '0000-00-00', 0),
(7, 15, 43123, '2015-05-13', '0000-00-00', 0),
(8, 16, 43123, '2015-05-13', '0000-00-00', 0),
(9, 17, 43123, '2015-05-13', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `type`, `name`, `price`, `description`, `image`) VALUES
(1, 'Tarta', 'Tarta de prueba', 5, 'Esta es una tarta de prueba, solamente para comprobar que funciona.', 'images/products/1.jpg'),
(2, 'Galleta', 'Galleta', 2, 'Esta es una descripcion de prueba para una galleta.', 'images/products/cookies.jpg'),
(3, 'Cupcake', 'Cupcake', 3, 'Esta es la descripcion de un cupcake. Probando.', 'images/products/cupcake.jpg'),
(4, 'Bebida', 'Cafe', 1, 'Esta es la descripcion de un cafe. Solo para probar.', 'images/products/cafe.jpg'),
(5, 'Tarta', 'Tarta de prueba 2', 3, 'Esta es la descripcion para la tarta de prueba 2. Solo para probar.', 'images/products/tarta2.jpg'),
(6, 'Tarta', 'Tarta de prueba 3', 2, 'Esta es la descripcion para la tarta de prueba 3. Solo para probar.', 'images/products/tarta3.jpg'),
(7, 'Galleta', 'Galleta de prueba 2', 1, 'Esta es la descripcion para la galleta de prueba 2. Solo para probar.', 'images/products/galletas2.jpg'),
(8, 'Galleta', 'Galletas de prueba 3', 3, 'Esta es la descripcion para la galleta de prueba 3. Solo para probar.', 'images/products/galletas3.jpg'),
(9, 'Cupcake', 'Cupcake de prueba 2', 3, 'Esta es la descripcion para cupcake de prueba 2. Solo para probar.', 'images/products/cupcake2.jpg'),
(10, 'Cupcake', 'Cupcake de prueba 3', 4, 'Esta es la descripcion para cupcake de prueba 3. Solo para probar.', 'images/products/cupcake3.jpg'),
(11, 'Bebida', 'Cafe de prueba 2', 2, 'Esta es la descripcion para bebida de prueba 2. Solo para probar.', 'images/products/cafe2.jpg'),
(12, 'Bebida', 'Bebida de prueba 3', 2, 'Esta es la descripcion para bebida de prueba 3. Solo para probar.', 'images/products/cafe3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `idProduct` int(11) NOT NULL,
  `idOrder` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_order`
--

INSERT INTO `product_order` (`idProduct`, `idOrder`, `quantity`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raw_material`
--

CREATE TABLE IF NOT EXISTS `raw_material` (
`id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `raw_material`
--

INSERT INTO `raw_material` (`id`, `productName`, `quantity`) VALUES
(1, 'Sal', 1),
(2, 'Levadura', 1),
(3, 'Harina', 1),
(4, 'Leche', 1),
(5, 'Huevos', 1),
(6, 'Azucar', 1),
(7, 'Mantequilla', 1),
(8, 'Azucar glass', 1),
(9, 'Agua', 1),
(10, 'Chocolate en polvo', 1),
(11, 'Fondant', 1),
(12, 'Colorante', 1),
(13, 'Pasta Vainilla Nielsen M.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `entryTime` date NOT NULL,
  `outTime` date NOT NULL,
  `idClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cake_dessign`
--
ALTER TABLE `cake_dessign`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoices`
--
ALTER TABLE `invoices`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_table`
--
ALTER TABLE `order_table`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_order`
--
ALTER TABLE `product_order`
 ADD PRIMARY KEY (`idProduct`,`idOrder`), ADD KEY `idOrder` (`idOrder`);

--
-- Indices de la tabla `raw_material`
--
ALTER TABLE `raw_material`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserve`
--
ALTER TABLE `reserve`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cake_dessign`
--
ALTER TABLE `cake_dessign`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `invoices`
--
ALTER TABLE `invoices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `local`
--
ALTER TABLE `local`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `order_table`
--
ALTER TABLE `order_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `raw_material`
--
ALTER TABLE `raw_material`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `reserve`
--
ALTER TABLE `reserve`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product_order`
--
ALTER TABLE `product_order`
ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`idOrder`) REFERENCES `order_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
