-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2024 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TiendaEnLinea`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito_compras`
--

CREATE TABLE `carrito_compras` (
  `id_producto_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrito_compras`
--

INSERT INTO `carrito_compras` (`id_producto_carrito`, `id_usuario`, `id_producto`, `cantidad`) VALUES
(19, 6, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `historial_compras`
--

CREATE TABLE `historial_compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT 1,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historial_compras`
--

INSERT INTO `historial_compras` (`id_compra`, `id_usuario`, `id_producto`, `cantidad`, `total`) VALUES
(1, 6, 5, 2, 699.98),
(2, 3, 6, 1, 299.99),
(3, 3, 9, 1, 199.99),
(4, 3, 4, 1, 199.99),
(5, 3, 4, 1, 199.99),
(6, 3, 4, 1, 199.99),
(7, 3, 4, 1, 199.99),
(8, 3, 2, 3, 899.97),
(9, 3, 3, 1, 399.99),
(10, 3, 2, 2, 599.98),
(11, 3, 3, 1, 399.99),
(12, 3, 3, 1, 399.99),
(13, 3, 7, 1, 349.99),
(14, 3, 9, 1, 199.99),
(15, 3, 13, 1, 199.99),
(16, 3, 1, 1, 100),
(17, 3, 4, 1, 199.99),
(18, 3, 8, 1, 249.99),
(19, 8, 1, 1, 100),
(20, 8, 3, 1, 399.99),
(21, 3, 3, 4, 1599.96),
(22, 3, 2, 4, 1199.96),
(24, 3, 6, 1, 299.99),
(25, 3, 3, 1, 399.99),
(26, 3, 2, 2, 599.98),
(27, 14, 1, 1, 100),
(28, 14, 1, 1, 100),
(29, 14, 2, 1, 299.99),
(30, 15, 2, 1, 299.99),
(31, 15, 3, 1, 399.99),
(32, 15, 51, 1, 190),
(33, 15, 35, 1, 199.99);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `inventario` int(11) DEFAULT NULL,
  `desarrollador` varchar(50) DEFAULT NULL,
  `plataforma` varchar(150) DEFAULT NULL,
  `etiquetas` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_juego`, `nombre`, `descripcion`, `precio`, `foto`, `inventario`, `desarrollador`, `plataforma`, `etiquetas`) VALUES
(1, 'Celeste', '            ', 100.00, 'dbade9943a4d620972c240d77f74f210.jpg', 0, 'Celeste', 'PC', ''),
(2, 'Hollow Knight', '            ', 299.99, '455a06a9e5a47b360ea362a8c7196020.jpg', 98, 'Team Cherry', 'PC', NULL),
(3, 'Hades', '            ', 399.99, 'd1aa41570f9a90ebb0d6a3920fff611b.jpg', 99, 'Supergiant Games', 'PlayStation 5', NULL),
(4, 'Stardew Valley', '            ', 199.99, 'db2b0e02b8ed0cdc8f59cf0b08295edd.jpg', 100, 'ConcernedApe', 'PC', NULL),
(5, 'Cuphead', '            ', 349.99, 'ee09763692efffd433ee2fc1f2dc3245.jpg', 100, 'Studio MDHR', 'Xbox One', NULL),
(6, 'Undertale', '            ', 299.99, '7cf1e97a55f76e0eb238f261c4f89602.jpg', 100, 'Toby Fox', 'PC', NULL),
(7, 'Dead Cells', '            ', 349.99, '9f3014b6e26e9a3acb970e56d62598d6.jpg', 100, 'Motion Twin', 'Nintendo Switch', NULL),
(8, 'Slay the Spire', '            ', 249.99, '348f06b220cbfacf17cbb21768196016.jpg', 100, 'MegaCrit Games', 'PC', NULL),
(9, 'INSIDE', '            ', 199.99, 'b4a417ae901693eebb3e60ee89ffebc3.jpg', 100, 'Playdead', 'PlayStation 4', NULL),
(13, 'Dont Starve', '            ', 199.99, '77afbfecaf5e3b52f6fe8d0208ddc1d0.jpg', 12, 'Klei Entertainment.', 'PC', NULL),
(30, 'Balatro', '            ', 350.00, 'd38c9d4f49314302de9e54cff9b79cb2.jpg', 10, 'Supergiant Games', 'PC', NULL),
(31, 'The Messenger', '            ', 249.99, '72aca5f4bd87163cab10f67ffe0c974c.jpg', 100, 'Sabotage Studio', 'PC', NULL),
(32, 'Oxenfree', '            ', 199.99, 'a180eed5cc671633a42109903671a5b4.jpg', 50, 'Night School Studio', 'Nintendo Switch', NULL),
(33, 'Gris', '            ', 299.99, 'e085d1306a5c33aaa8a63b65c074aeae.jpg', 75, 'Nomada Studio', 'PlayStation 4', NULL),
(34, 'Axiom Verge', '            ', 349.99, '6ae7fd55bbdc9ad965c799ee05d88d48.jpg', 30, 'Thomas Happ Games', 'Xbox One', NULL),
(35, 'Katana ZERO', '            ', 199.99, '95fe60531d6e0b8aab828247cfdc3fc0.jpg', 99, 'Askiisoft', 'PC', NULL),
(36, 'Baba Is You', '            ', 149.99, '9291adceb4a6fb2bbf15909933710a0e.jpg', 20, 'Hempuli', 'Nintendo Switch', NULL),
(37, 'Hyper Light Drifter', '            ', 299.99, '4f706241f73d2b4cac857a9839cd61ce.jpg', 40, 'Heart Machine', 'PC', NULL),
(38, 'Spiritfarer', '            ', 249.99, 'fbbec8b368cd353810c7a906abc298d5.jpg', 60, 'Thunder Lotus Games', 'PlayStation 5', NULL),
(39, 'Children of Morta', '            ', 199.99, '5411ca63ba488f6cfb42784808401dd4.jpg', 100, 'Dead Mage', 'Xbox One', NULL),
(40, 'Moonlighter', '            ', 299.99, 'e3ab4333d8e03c4f3f26e58d9e6a7f12.jpg', 35, 'Digital Sun', 'PC', NULL),
(41, 'Hollow Knight: Silksong', '            ', 399.99, 'a78895f4f687e7f43c2c7a4e8bd9b9c1.jpg', 80, 'Team Cherry', 'Nintendo Switch', NULL),
(42, 'Celeste Classic 2', '            ', 149.99, 'a3f35da2e2d486fbfaedddeaadca7eef.jpg', 100, 'Maddy Makes Games', 'PC', NULL),
(43, 'Slay the Spire: Expansion', '            ', 199.99, 'dc56685201d9c24f36539fe18e9e8491.jpg', 70, 'MegaCrit Games', 'Xbox One', NULL),
(44, 'Ender Lilies', '            ', 299.99, '1f965f259b57e8925552706d42741e8c.jpg', 40, 'Live Wire', 'PlayStation 4', NULL),
(45, 'Loop Hero', '            ', 199.99, '69f5eb6976611cb0066be8b820658d45.jpg', 100, 'Four Quarters', 'PC', NULL),
(46, 'Rogue Legacy 2', '            ', 349.99, '2d7a0c8fe0136280d31e9704cf99fc29.jpg', 50, 'Cellar Door Games', 'PC', NULL),
(47, 'Sable', '            ', 249.99, '5485fc76fa934372e3ea88cc810394cb.jpg', 30, 'Shedworks', 'PlayStation 5', NULL),
(48, 'Deaths Door', '            ', 299.99, 'f9cd190eb2fbf5df03bd5a193385f51c.jpg', 60, 'Acid Nerve', 'Xbox Series X', NULL),
(49, 'Carrion', '            ', 199.99, 'b14be90b60eeadb7ad41fc7d251a78ae.jpg', 80, 'Phobia Game Studio', 'PC', NULL),
(50, 'Skul: The Hero Slayer', '            ', 249.99, '87580187e8d5a391c86abf605e6b1208.jpg', 100, 'SouthPAW Games', 'Nintendo Switch', NULL),
(51, 'Stray', '            ', 190.00, 'aca9c149426f328b74b27cfbc5d48c55.jpg', 9, 'No se', 'PC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `num_tarjeta` bigint(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `correo`, `contrasena`, `fecha_nac`, `num_tarjeta`, `direccion`) VALUES
(3, 'isaiah', 'isaiah.rivasc@gmail.com', '$2y$10$vun5XFGBYXvCcz7TEDl16udpa.P8wUtxJf2D0s/qs3lwiEXTN.im2', '2004-09-23', NULL, 'Avenida Palo Solo 140'),
(6, 'yeshua', 'yeshua@gmail.com', '$2y$10$CWSOjBxP/RK5m/nyu36jqeW3oBg7hU2mpZzEgPJYY91CoHXd7OrPW', '2024-10-31', NULL, '123'),
(7, 'Pepe', 'pp@gmail.com', '$2y$10$Hxq1nALUlwB4vZUpr/N64O018OIl1fcpU7V1JMQtIxa6BeSnrf.ya', '2024-11-01', NULL, 'qwerty'),
(8, 'trinestri', 'trinestri@gmail.com', '$2y$10$yzwK4PtXTR/N/xxu2bA5sez9W53YP2/ndv3O3lsT9B9NONXjHa3yi', '2024-11-22', NULL, 'Avenida Palo Solo 140'),
(9, 'arge', 'argykbral@gmail.com', '$2y$10$Cuky5PmwWyzWp2/EKA4o6eWA1BB3mkQHAhlAw0AK6W5HNFxlsfnmO', '1973-05-15', NULL, 'Avenida Palo Solo 140'),
(10, 'sayi', 'sayi_megaman@hotmail.com', '$2y$10$FwMROuTGbwd1nHLhY6zxrum2XaVJSgIPkIC1JFn1XwB1Xhgfkde2m', '2024-11-14', NULL, 'Tepito'),
(11, 'diego', 'diego@gmail.com', '$2y$10$2EkRtNKW6jQRhef8ZnG4puFi137llrtLPu1wC45EPrERF1UN47zJq', '2024-11-25', NULL, 'Casa de Diego'),
(12, 'Alex', 'alexcayd@gmail.com', '$2y$10$aRNWzNjEbz1yQj1embKO6uhLIQnr7CaJVStF0.X4odFVOVwxFr5j.', '2024-11-25', NULL, 'Aragón'),
(13, '00492395', 'hola1@gmail.com', '$2y$10$Qzhg64nthAr56JbOaC8y3eSlCDiycGPHSUhxuiqruCcE2g2Fwramm', '2024-11-25', NULL, 'awdawd'),
(14, 'prueba', 'prueba@gmail.com', '$2y$10$3o89/iPnvnZoREZKv2eKh.O/.exUazRFcSJmyun6cdOAGDRI9Ldea', '2024-11-25', NULL, 'prueba'),
(15, 'mmendez', 'mmendez@gmail.com', '$2y$10$wPBcAUmotGU8mni4fWAYp.O6LisV4PdXjAHrq/FjxwmwOQQxv63GG', '2024-11-26', NULL, 'mmendez casa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito_compras`
--
ALTER TABLE `carrito_compras`
  ADD PRIMARY KEY (`id_producto_carrito`),
  ADD KEY `fk_usuario_carrito` (`id_usuario`),
  ADD KEY `fk_producto_carrito` (`id_producto`);

--
-- Indexes for table `historial_compras`
--
ALTER TABLE `historial_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_usuario_historial` (`id_usuario`),
  ADD KEY `fk_producto_historial` (`id_producto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_juego`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito_compras`
--
ALTER TABLE `carrito_compras`
  MODIFY `id_producto_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `historial_compras`
--
ALTER TABLE `historial_compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito_compras`
--
ALTER TABLE `carrito_compras`
  ADD CONSTRAINT `fk_producto_carrito` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_juego`),
  ADD CONSTRAINT `fk_usuario_carrito` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `historial_compras`
--
ALTER TABLE `historial_compras`
  ADD CONSTRAINT `fk_producto_historial` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_juego`),
  ADD CONSTRAINT `fk_usuario_historial` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
