-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 18:45:15
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lumin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventory`
--

CREATE TABLE `inventory` (
  `ID_PRODUCT` int(11) NOT NULL,
  `NAME_PRODUCT` varchar(40) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `CANT_STOCK` int(11) DEFAULT NULL,
  `IMG_SOURCE` varchar(80) DEFAULT NULL,
  `CATEGORY` varchar(30) DEFAULT NULL,
  `DESCRPTION` varchar(100) DEFAULT NULL,
  `ISAVAILABLE` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventory`
--

INSERT INTO `inventory` (`ID_PRODUCT`, `NAME_PRODUCT`, `PRICE`, `CANT_STOCK`, `IMG_SOURCE`, `CATEGORY`, `DESCRPTION`, `ISAVAILABLE`) VALUES
(332241, 'Tira TLED', 120, 50, '../img/icono-producto.svg', 'categoryA', 'Tira LED de 120 cm con controlador para cambio de colores', 1),
(600666, 'Lampara de piso TLED', 80, 20, '../img/icono-producto.svg', 'categoryA', 'Lampara para exteriores resistente a humedad y rasguÃ±os, acabados en negro', 1),
(665544, 'luz negra neon', 200, 10, '../img/icono-producto.svg', 'categoryA', 'Luz negra de neon en barrar', 1),
(666551, 'Lampara de techo 7W blanca', 50, 15, '../img/icono-producto.svg', 'categoryA', 'Lampara con acabados de lujo con tres canales de iluminaciÃ³n', 0),
(778899, 'Barra TLED', 90, 50, '../img/icono-producto.svg', 'categoryA', 'Barra luminiscente tipo led para exteriores de 120 cm', 1),
(807060, 'Mini poste liso', 200, 10, '../img/icono-producto.svg', 'categoryA', 'Lampara tipo miniposte de 70cm de altura en acabados de aluminioo', 1),
(807065, 'Poste exterior 65 cm', 300, 5, '../img/icono-producto.svg', 'categoryA', 'Lampara tipo poste de 65 cm en acabados de lujo', 0),
(909090, 'Lampara a Techo TLED', 100, 25, '../img/icono-producto.svg', 'categoryA', 'Lampara empotrada a techo con acabados en aluminio', 1),
(990011, 'lampara para poste', 90, 50, '../img/icono-producto.svg', 'categoryA', 'lampara para poste amarilla', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `ID_SALE` int(11) NOT NULL,
  `USERNAME` varchar(15) DEFAULT NULL,
  `PAID_METHOD` tinyint(4) DEFAULT NULL,
  `TOTAL` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`ID_SALE`, `USERNAME`, `PAID_METHOD`, `TOTAL`) VALUES
(1, 'Laura Alvarez', 0, 120),
(3, 'Laura Alvarez', 0, 1400),
(4, 'Laura Alvarez', 1, 1520),
(5, 'Renato Bravo', 1, 830),
(1010, 'Laura Alvarez', 0, 1680);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_inventory`
--

CREATE TABLE `sales_inventory` (
  `ID_SALE` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL,
  `CANT_ITEMS` int(11) NOT NULL,
  `AMOUNT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sales_inventory`
--

INSERT INTO `sales_inventory` (`ID_SALE`, `ID_PRODUCT`, `CANT_ITEMS`, `AMOUNT`) VALUES
(1, 332241, 1, 120),
(3, 807060, 8, 800),
(3, 909090, 8, 800),
(4, 332241, 1, 200),
(4, 600666, 1, 200),
(4, 665544, 1, 200),
(5, 332241, 7, 630),
(5, 600666, 7, 630),
(5, 990011, 7, 630),
(1010, 332241, 5, 400),
(1010, 600666, 5, 400),
(1010, 665544, 5, 400),
(1010, 778899, 5, 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) DEFAULT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `NAME_` varchar(40) DEFAULT NULL,
  `PASSWRD` varchar(15) DEFAULT NULL,
  `ISADMIN` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID_USER`, `USERNAME`, `NAME_`, `PASSWRD`, `ISADMIN`) VALUES
(1234, 'ADMIN', 'ADMINISTRADOR', '1234', 1),
(213141, 'Angel Lopez', 'angelxd', 'root', 1),
(885544, 'Edgar Castro', 'edgarxd', 'root', 0),
(101010, 'Jesus Fuentes', 'yisusxd', 'root', 1),
(665543, 'Jorge Garcia', 'jorgexd', 'root', 1),
(232323, 'Judith Perez Ma', 'judith', 'root', 1),
(100011, 'Laura Alvarez', 'lauraxd', 'root', 0),
(987654, 'Renato Bravo', 'renatoxd', 'root', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID_PRODUCT`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ID_SALE`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indices de la tabla `sales_inventory`
--
ALTER TABLE `sales_inventory`
  ADD PRIMARY KEY (`ID_SALE`,`ID_PRODUCT`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `users` (`USERNAME`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
