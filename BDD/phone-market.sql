-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2020 a las 18:45:32
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phone-market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(100) NOT NULL,
  `numeroventa` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `subtotal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, 'Ipad pro 11 pulgadas 64GB	', 'ipad-pro-11-pulgadas.jpg', 17499, 2, 34998),
(2, 1, 'Audifonos SONY AKG 701	', 'AKG-K-701-SONY.jpg', 1700, 1, 1700),
(3, 2, 'Audifonos Inalambricos Skullkandy', 'Skullkandy-Inalambricos.png', 1900, 1, 1900),
(4, 2, 'HUAWEI MATE 30 PRO	', 'huaweimate30.png', 28700, 1, 28700),
(5, 2, 'IPAD X 2019', 'ipad-x.jpg', 21899, 1, 21899),
(6, 3, 'XIAOMI REDMI NOTE 8 PRO	', 'xiaomi-redmi-note-8-pro-128gb-dual-sim-verde.jpg', 4900, 1, 4900),
(7, 4, 'XIAOMI MI 9T PRO	', 'xiaomimi9tpro.png', 7899, 1, 7899),
(8, 5, 'Ipad pro 11 pulgadas 64GB	', 'ipad-pro-11-pulgadas.jpg', 17499, 1, 17499),
(9, 6, 'Audifonos Inalambricos Skullkandy', 'Skullkandy-Inalambricos.png', 1900, 1, 1900),
(10, 7, 'Audifonos Inalambricos Skullkandy', 'Skullkandy-Inalambricos.png', 1900, 1, 1900),
(11, 7, 'Skullkandy HESH', 'Skullkandy-HESH.jpg', 1800, 1, 1800),
(12, 8, 'Skullkandy HESH', 'Skullkandy-HESH.jpg', 1800, 2, 3600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `Lugar` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`Lugar`, `Telefono`, `Correo`, `Direccion`) VALUES
('Orizaba, Veracruz', '2727896541', 'phone-market_orizaba@gmail.com', 'Oriente 9, Emiliano Zapata, 94320 Orizaba, Ver.'),
('Cordoba, Veracruz', '2712345678', 'phone-market_cordoba@gmail.com', 'Calle 1 avenida 3, Colonia Centro, 94500 Cordoba, Ver.'),
('Estados Unidos', '7234534534', 'phone-Market_USA@gmail.com', '401 7TH AVE #1 \r\nNEW YORK NY 10001-3463 \r\nUNITED STATES OF AMERICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Existencias` int(5) NOT NULL,
  `Precio` int(5) NOT NULL,
  `Img` varchar(100) NOT NULL,
  `ImgDt` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Estado` int(3) NOT NULL,
  `Orden` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Descripcion`, `Existencias`, `Precio`, `Img`, `ImgDt`, `Tipo`, `Estado`, `Orden`) VALUES
(2, 'SAMSUNG GALAXI S10', 'GAMA ALTA', 13, 18000, 'samsungs10.png', 'samsungs10128gbtexto.png', 'Celular', 1, 2),
(3, 'XIAOMI MI 9T PRO	', 'GAMA MEDIA ALTA', 43, 7899, 'xiaomimi9tpro.png', 'xiaomimi9tprotexto.png', 'Celular', 1, 3),
(4, 'XIAOMI REDMI NOTE 8 PRO	', 'GAMA MEDIA ALTA', 19, 4900, 'xiaomi-redmi-note-8-pro-128gb-dual-sim-verde.jpg', 'xiaomiredminote8pro128gbdualsimverde texto.jpg', 'Celular', 1, 4),
(5, 'HUAWEI Y9 2019	', 'GAMA MEDIA', 33, 3499, 'y9-2019.png', 'y92019texto.png', 'Celular', 1, 5),
(6, 'MOTO Z4 64GB', 'GAMA ALTA', 19, 7899, 'Motorola-Moto-Z4.jpg', 'MotorolaMotoZ4texto.jpg', 'Celular', 1, 6),
(7, 'MOTOROLA ONE VISION	', 'Gama Media	', 21, 8000, 'moto-one-vision.jpg', 'motoonevisiontexto.jpg', 'Celular', 1, 7),
(8, 'XIAOMI REDMI NOTE 8 PRO	', 'GAMA MEDIA ALTA', 19, 4900, 'xiaomi-redmi-note-8.jpg', 'xiaomiredminote8pro128gbdualsimverde texto.jpg', 'Celular', 1, 8),
(9, 'SAMSUNG GALAXI A80	', 'Gama media alta	', 44, 8999, 'samsung_galaxy_a80_L_1.jpg', 'samsung_galaxy_a80_L_1 texto.jpg', 'Celular', 1, 9),
(10, 'HUAWEI NOVA 3	', 'Gama alta	', 40, 5999, 'huaweinova3.png', 'huaweinova3texto.png', 'Celular', 1, 10),
(11, 'HUAWEI MATE 30 PRO	', 'Gama alta	', 50, 28700, 'huaweimate30.png', 'huaweimate30texto.png', 'Celular', 1, 11),
(12, 'SAMSUNG GALAXI NOTE 10	', 'GAMA ALTA', 50, 29800, 'samsung-note-10.png', 'samsungnote10texto.png', 'Celular', 1, 12),
(13, 'IPHONE 11 PRO MAX 256GB	', 'Gama Alta	', 100, 37400, 'iphone-11-pro-max.jpg', 'iphone11promax256gbtexto.jpg', 'Celular', 1, 13),
(14, 'XIAOMI MI 9 PRO 5G	', 'Gama media alta	', 44, 6780, 'xiaomi-mi-9-pro-5g.jpg', 'xiaomimi9pro5gtexto.jpg', 'Celular', 1, 14),
(15, 'IPHONE 11 64GB MORADO	', 'Gama alta	', 50, 17999, 'iphone-11-morado.png', 'iphone11moradotexto.png', 'Celular', 1, 15),
(16, 'IPHONE 11 PRO-MAX-PLATA	', 'GAMA ALTA', 50, 28999, 'iphone-11-promax-plata-doble.png', 'iphone11promaxplatadobletexto.png', 'Celular', 1, 16),
(17, 'IPHONE 11 64GB AMARILLO	', 'Gama alta	', 55, 21999, 'apple-iphone-11-64gb-amarillo.png', 'appleiphone1164gbamarillotexto.png', 'Celular', 1, 17),
(18, 'IPHONE 11 PRO 256GB	', 'Gama alta	', 64, 41999, 'iphone-11-pro.png', 'iphone11protexto.png', 'Celular', 1, 18),
(19, 'Tablet Alcatel 3T', 'GAMA MEDIA BAJA', 44, 3999, 'Alcatel3T.jpg', 'Alcatel3T_texto.jpg', 'Tablet', 1, 19),
(20, 'Ipad pro 11 pulgadas 64GB	', 'Gama media alta	', 33, 17499, 'ipad-pro-11-pulgadas.jpg', 'ipadpro11pulgadas64gbTEXTO.jpg', 'Tablet', 1, 20),
(21, 'IPAD PRO	', 'Gama alta	', 33, 19899, 'ipad-pro.png', 'ipadprotexto.png', 'Tablet', 1, 21),
(22, 'IPAD X 2019', 'Gama alta', 55, 21899, 'ipad-x.jpg', 'ipadxTEXTO.jpg', 'Tablet', 1, 22),
(23, 'SAMSUNG GALAXI TAB 4', 'Gama media	', 20, 4900, 'samsung-tab-4.jpg', 'samsungtab4TEXTO.jpg', 'Tablet', 1, 23),
(24, 'Audifonos SONY AKG 701	', 'Excelente Sonido', 50, 1700, 'AKG-K-701-SONY.jpg', 'AKGK701SONYtexto.jpg', 'Accesorios', 1, 24),
(25, 'Audifonos Inalambricos Skullkandy', 'Audio limpio,cancelacion de ruido', 60, 1900, 'Skullkandy-Inalambricos.png', 'SkullkandyInalambricostexto.png', 'Accesorios', 1, 25),
(26, 'Skullkandy HESH', 'Sonido envolvente,12Hrs de duracion sin carga', 25, 1800, 'Skullkandy-HESH.jpg', 'SkullkandyHESHtexto.jpg', 'Accesorios', 1, 26),
(27, 'Skullkandy Push True Inalambricos	', 'Sin cables,vive al maximo tu musica,todo en un diseño mas compacto	', 44, 2099, 'Skullkandy-Push-True.jpg', 'SkullkandyPushTruetexto.jpg', 'Accesorios', 1, 27),
(28, 'Xiaomi Amazfit pace', 'Smarwatch', 40, 2099, 'Xiaomi-Amazfit-pace.jpg', 'XiaomiAmazfitpacetexto.jpg', 'Accesorios', 1, 28),
(29, 'Apple watch series 2', 'Innovador y elegante,asi es el nuevo Apple Watch	', 40, 6100, 'apple-watch-series-2.jpg', 'applewatchseries2texto.jpg', 'Accesorios', 1, 29),
(30, 'Apple watch series 3', 'Innovador y elegante,asi es el nuevo Apple Watch	', 30, 8099, 'apple-watch-series3.jpg', 'applewatchseries3text.jpg', 'Accesorios', 1, 30),
(31, 'Auriculares 3.5mm bose', 'Vive tu musica como nunca,alta fidelidad en el audio y una bateria para todo el dia	', 45, 3400, 'bose-In-ear-1.jpg', 'bose-In-ear-1text.jpg', 'Accesorios', 1, 31),
(32, 'Galaxy Active 1	', 'Smartwatch elegante para el hombre	', 34, 3090, 'galaxy-active.png', 'galaxyactivetext.png', 'Accesorios', 1, 32),
(33, 'Galaxy Active 2', 'Lleva todo aquello que te gusta, en tu mano, en el nuevo Smartwtch Active 2	', 55, 5200, 'galaxy-watch-active2.jpg', 'galaxywatchactive2text.jpg', 'Accesorios', 1, 33),
(34, 'Galaxy Active watch 1', 'Smartwatch', 40, 4000, 'galaxy-watch-active.jpg', 'galaxywatchactivetext.jpg', 'Accesorios', 1, 34),
(35, ' Xiaomi mi band 3  ', ' Smartband 3	  ', 40, 550, 'band3.jpg', 'miband3texto.jpg', ' Accesorios  ', 1, 35),
(36, 'Xiaomi mi band 4', 'Smartband 4	', 50, 900, 'band4.jpg', 'miband4texto.jpg', 'Accesorios', 1, 36),
(37, 'Apple watch Series 4', 'Apple Watch 4	', 100, 5000, 'apple-watch-series-4.jpg', 'applewatchseries4texto.jpg', 'Accesorios', 1, 37),
(38, 'Samsung gear sport 1.2', 'Samsung gear sport 1.2 deportivo	', 30, 3490, 'samsung-gear-sport-1.2.png', 'samsunggearsport1.2texto.png', 'Accesorios', 1, 38),
(39, 'Samsung active 2019 r500', 'Deportivo para hombres que les guste sudar en el ejercicio.	', 40, 4690, 'smartwatch-reloj-active.jpg', 'samsunggalaxywatchr500texto.jpg', 'Accesorios', 1, 39),
(40, 'Redmi Note 9s', 'Bateria para todo el dia,vive cada momento con su espectacular camara con IA de 64MP ', 400, 9000, 'Redmi-Note-9s.jpg', '', 'Celular', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(50) NOT NULL,
  `APaterno` varchar(50) NOT NULL,
  `AMaterno` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `APaterno`, `AMaterno`, `Correo`, `Telefono`, `Usuario`, `Contrasena`) VALUES
('Cris', 'Glez', 'Najera', 'cris@gmail.com', 2147483647, 'Cris23', '12345'),
('Gus', 'Q', 'T', 'Gus@gmail.com', 2147483647, 'Gusqt', '12345'),
('Jose', 'Marquez', 'Gracian', 'pepitaTorita@gmail.ccom', 2147483647, 'pepe2020', '12345'),
('Cris', '', 'N', '', 0, '', ''),
('Cristina', 'Glez', 'Najera', '', 2147483647, '', ''),
('s', 's', 's', '', 2147483647, '', ''),
('abc', 'abc', 'abc', 'Gus@gmail.com', 2147483647, 'abc', 'abc'),
('abc', 'abc', 'abc', 'Gus@gmail.com', 2147483647, 'abc', 'abc'),
('', '', '', '', 0, '', ''),
('abc', 'abc', 'abc', 'Gus@gmail.com', 2147483647, 'abcd', 'abcd'),
('', '', '', '', 0, '', ''),
('', '', '', '', 0, '', ''),
('abc', 'abc', 'abc', 'Gus@gmail.com', 2147483647, 'abcde', 'abcde'),
('aaa', 'aaa', 'aaa', 'aaa@gmail.com', 2147483647, 'aaaa', 'aaaa'),
('', '', '', '', 0, '', ''),
('Concepcion', 'Nava', 'Arteaga', 'concepcionNA@gmail.com', 2147483647, 'ConNA', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
