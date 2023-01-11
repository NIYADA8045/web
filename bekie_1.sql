-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 12:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `first_name`, `last_name`, `phone`, `email`) VALUES
(26, 'ioot', '123', 'prakan', 'suma', '0996144261', 'b@gmail.com'),
(27, 'prakan@gmail.com', '11', 'sadasd', 'd', '0996144261', 'sdds@gmail.com'),
(33, 'prakan4112', '', 'suma', '09', 'bn@gmail.c', ' 11'),
(35, 'net@g.com', '1234', 'mama', '098212', 'net@g.com', 'net@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `box_width` float NOT NULL,
  `box_height` float NOT NULL,
  `box_long` float NOT NULL,
  `box_weight` float NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `picture`, `detail`, `box_width`, `box_height`, `box_long`, `box_weight`, `seller_id`) VALUES
(29, 'Jordan 1 Retro High White University Blue Black (GS)', 14000, '5dc7a4cda187e188edbff5b5b754f911.jpg', 'The Air Jordan 1 Retro High White University Blue Black GS features a tumbled white leather upper with perforations on the toe box. Overlays are made of University Blue supple suede and the Swoosh and collar are black tumbled leather. The outsole is University Blue with concentric circles in the rubber. The Air midsole is white, the laces are black, and a black Wings logo accents the University Blue suede overlay on the collar. The grade school-sized Air Jordan 1 Retro High White University Blue Black GS, was released on March 6, 2021, at a retail price of $140.', 4.5, 1.2, 6, 0.4, 15),
(32, 'Jordan 4 Low Retro Lightning 2021', 6500, '189a10bab2f92ba38935ba2c655c12db.jpg', 'The 2021 edition of the Air Jordan 4 Retro ‘Lightning’ resurrects a highly coveted colorway that originally launched in 2006 alongside an accompanying ‘Thunder’ colorway, both of which were inspired by Michael Jordan’s Motorsports team. A bright yellow hue floods the nubuck upper, contrasted by black netting and dark grey structural', 1, 2, 3, 4, 15),
(33, 'Jordan Kids Air Jordan 1 Retro High OG BG', 4300, 'c9dffa8d60e1ef48c1f832b28b86bbcd.jpg', 'Supplied by a premier sneaker marketplace dealing with unworn, already sold out, in demand rarities. Each product is rigorously inspected by experienced experts guaranteeing authenticity. What if your favourite Nike pair could come in a tiny size so your kid could match your outfit? Well, your wish, our command - in the shape of these Air Jordan 1 Retro High OG BG sneakers, that is. Wishes do come true. Featuring a round toe, a lace-up front fastening, a logo patch at the tongue, a branded insol', 4, 2, 4, 0.4, 15),
(34, 'Vans Old Skool Shoe ', 2300, 'e88c9c652dde43ec6d6eac94da1e62e7.jpg', 'Vans Old Skool Shoe Features: First known as the Vans #36, the Old Skool debuted in 1977 with a unique new addition: a random doodle drawn by founder Paul Van Doren, and originally referred to as the “jazz stripe.” Today, the famous Vans Sidestripe has become the unmistakable—and instantly recognizable—hallmark of the Vans brand. Constructed with durable suede and canvas uppers in a range of fresh colorways, the Old Skool pays homage to our heritage while ensuring that this low top, lace-up shoe', 2, 4, 2, 1, 15),
(35, 'Vans Classic Slip-On Sneaker - Black', 3200, '205b4d050e0ef2cb652c1b22b7382aaa.jpg', 'Ideal for those always in a hurry, throw on the Vans Classic Slip-On with elastic sides and make the move. Flat waffle outsole provides grip and a secure board feel. Canvas upper Low profile design', 2, 3, 2, 1, 15),
(36, 'Adidas Originals Forum Low Footwear White College Green ', 1200, '92e64f5c137f45c1ba47082fe0aacfe6.jpg', 'ADIDAS ORIGINALS FORUM LOW FOOTWEAR WHITE COLLEGE GREEN GY5835 US 6 Description Since its launch in 1984, basketball-style shoes have been a symbol of self-expression, pushing the boundaries and supporting those who continue to challenge. ', 4, 3, 3, 1, 15),
(37, 'Nike Air Force 1 Low G-Dragon Peaceminusone', 6700, 'e012380719c793210679c06c79f46887.jpg', 'Nike Air Force 1 Low G-Dragon Peaceminusone Para-Noise in black and white', 1, 3, 2, 1, 15),
(38, 'Initial D/Toyota x sneaker Nike SB Dunk Low AE86 White Black', 7800, '8892bc7460f117c249392f533cf1011e.jpg', 'Initial D/Toyota x sneaker Nike SB Dunk Low AE86 White Black-DD1391-107-DUNK LOW-', 2, 2, 1, 1, 15),
(40, 'Travis Scott x Sony Play Station 5 x Nike Air Force 1', 23000, '6a46f2d1d13c097919ed85217f55d3e6.jpg', 'Travis Scott x Sony Play Station 5 x Nike Air Force 1 07 TS PS5 Mid Beige Grey Brown - BQ5828-202 - AIR FORCE 1 MID -', 2, 2, 3, 1, 15),
(41, 'Nike SB Dunk Low Travis Scott (Regular Box)', 24000, 'abd968122f1b52f34f4cd529bf884d48.jpg', 'Nike SB Dunk Low Travis Scott (Regular Box)', 2, 2, 3, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `buy_date` date NOT NULL,
  `total` float NOT NULL,
  `vat` float NOT NULL,
  `shipping_price` float NOT NULL,
  `net_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `customer_id`, `buy_date`, `total`, `vat`, `shipping_price`, `net_price`) VALUES
(13, 26, '2022-12-09', 28000, 1960, 40, 30000),
(14, 26, '2022-12-09', 6500, 455, 40, 6995);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_list`
--

CREATE TABLE `purchase_list` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_list`
--

INSERT INTO `purchase_list` (`purchase_id`, `product_id`, `amount`, `sale_price`, `total`) VALUES
(13, 29, 2, 14000, 28000),
(14, 32, 1, 6500, 6500);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `contace_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `username`, `password`, `shop_name`, `address`, `phone`, `contace_name`, `email`, `website`) VALUES
(15, 'nike@gmail.com', '11', 'Nike', 'thailand', '0806059859', 'prakan', 'a@gmail.com', 'www.netLnwShop.com'),
(22, 'van@gmail.com', '1234', 'Van', 'thailand', '0996144261', 'prakan', 'a@gmail.com', 'www.nike.com'),
(23, 'adidas@gmail.com', '1234', 'Adidas', 'thailand', '0996144261', 'prakan', 'a@gmail.com', 'www.nike.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `purchase_list`
--
ALTER TABLE `purchase_list`
  ADD PRIMARY KEY (`purchase_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_list`
--
ALTER TABLE `purchase_list`
  ADD CONSTRAINT `purchase_list_ibfk_1` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_list_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
