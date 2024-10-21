-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 05:37 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `qty`) VALUES
(5, 61, 'elon@gmail.com', 1),
(6, 62, 'elon@gmail.com', 1),
(25, 76, 'deep@gmail.com', 1),
(26, 28, 'deep@gmail.com', 1),
(27, 17, 'deep@gmail.com', 3),
(28, 3, 'deep@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sr.no` int(15) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sr.no`, `f_name`, `l_name`, `address`, `message`) VALUES
(2, 'deep', 'malasana', 'devaliya', 'your brand is international ?'),
(3, 'deep', 'malsana', 'devaliya', 'your web is so beautiful'),
(4, 'deep', 'malsana', 'devaliya', 'your web is so beautiful'),
(5, 'deep', 'malsana', 'what is this ', 'nefcn'),
(17, 'hardik', 'chavda', 'tikar', 'your brand is international ?'),
(19, 'operator', 'lab', 'halvad', 'bad response foreever'),
(26, 'deep', 'malsana', 'devaliya', 'hiiii'),
(29, 'deepj', 'chavda', 'devaliya', 'aaa'),
(30, 'hardik', 'chavda', 'tikar', 'good'),
(31, 'patel', 'bhautik', 'devaliya', 'awesome');

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`id`, `user`, `total`) VALUES
(1, 'deep@gmail.com', '142'),
(2, 'deep@gmail.com', '865'),
(3, 'deep@gmail.com', '984'),
(4, 'deep@gmail.com', '2753'),
(5, 'deep@gmail.com', '10306'),
(6, 'deep@gmail.com', '11966'),
(7, 'deep@gmail.com', '406');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `image`) VALUES
(1, 'gomma-camo-glossy', 100, 'Bathroom tiles', 'product-img/bathroom-img/gomma-camo-glossy_598x1198-mm-small.jpg'),
(3, 'messa-peanut', 150, 'Bathroom tiles', 'uploads/01_messa-peanut-preview-small.jpg'),
(4, 'mono-grey', 150, 'Bathroom tiles', 'uploads/01_mono-grey-preview-small.jpg'),
(5, 'statuario-eminence', 160, 'Bathroom tiles', 'uploads/01_statuario-eminence,-lustrous-decor-2-preview-small.jpg'),
(6, 'traven-grey', 130, 'Bathroom tiles', 'uploads/01_traven-grey-preview-small.jpg'),
(7, 'copos-black', 120, 'Bathroom tiles', 'uploads/01-copos-black-preview-small.jpg'),
(8, 'pozzolana-gris', 115, 'Bathroom tiles', 'uploads/01-pozzolana-gris-preview-small.jpg'),
(9, 'burberry-dove', 110, 'Bathroom tiles', 'uploads/01_burberry-dove-preview-small.jpg'),
(10, 'Mural-graphic-3d-004', 7999, 'Poster tiles', 'uploads/mural-graphic-3d-004-tile-4x3-1x1-1-247x296.jpg'),
(11, 'Mural-graphic-3d-005', 7890, 'Poster tiles', 'uploads/mural-graphic-3d-005-tile-4x3-1x1-1-247x296.jpg'),
(12, 'Mural-graphic-3d-006', 7999, 'Poster tiles', 'uploads/mural-graphic-3d-006-tile-4x3-1x1-1-247x296.jpg'),
(13, 'Mural-graphic-3d-007', 7999, 'Poster tiles', 'uploads/mural-graphic-3d-007-tile-4x3-1x1-1-247x296.jpg'),
(14, 'Mural-graphic-3d-008', 7899, 'Poster tiles', 'uploads/mural-graphic-3d-008-tile-4x3-1x1-1-247x296.jpg'),
(15, 'Mural-graphic-3d-009', 7980, 'Poster tiles', 'uploads/mural-graphic-3d-009-tile-4x3-1x1-1-247x296.jpg'),
(16, 'Mural-graphic-3d-013', 7960, 'Poster tiles', 'uploads/mural-graphic-3d-013-tile-4x3-1x1-1-247x296.jpg'),
(17, 'Mural-graphic-3d-016', 7990, 'Poster tiles', 'uploads/mural-graphic-3d-016-tile-4x3-1x1-1-247x296.jpg'),
(18, 'Statuario-presto', 301, 'Commercial tiles', 'uploads/01_statuario-presto_preview-small.jpg'),
(19, 'Staturio-nex', 305, 'Commercial tiles', 'uploads/01_staturio-nex-preview-small.jpg'),
(20, 'Silver-chalk', 303, 'Commercial tiles', 'uploads/1-silver-chalk-preview-small.jpg'),
(21, 'White-sand', 309, 'Commercial tiles', 'uploads/1-white-sand-preview-small.jpg'),
(22, 'Cinerea-River', 311, 'Commercial tiles', 'uploads/1609309961_01_Cinerea-River-&-Staturio-Regalia-Preview-small.jpg'),
(23, 'Statuario-Regallia', 306, 'Commercial tiles', 'uploads/1609309974_01_Statuario-Regallia-Preview-small.jpg'),
(24, 'BLACK-BEACH', 307, 'Commercial tiles', 'uploads/1672039221_1-BLACK-BEACH-Preview-small.jpg'),
(25, 'Morta-Slate', 400, 'Commercial tiles', 'uploads/1691410456_01_Morta-Slate-Preview-small.jpg'),
(26, 'Black-Bamboo', 1953, 'Kitchen tiles', 'uploads/01_black-bamboo-preview-small.jpg'),
(28, 'Calacatta-Sun', 1991, 'Kitchen tiles', 'uploads/01_calacatta-sun-preview-small.jpg'),
(29, 'Neo-Slate', 1961, 'Kitchen tiles', 'uploads/01_neo-slate-preview-small.jpg'),
(30, 'Pietra-grey', 1999, 'Kitchen tiles', 'uploads/01_pietra-grey-preview-small.jpg'),
(31, 'Onyx-Beam', 1961, 'Kitchen tiles', 'uploads/1645012827_Onyx-Beam-P-small.jpg'),
(32, 'Golden-silk-white', 1890, 'Kitchen tiles', 'uploads/1651840355_01_golden-silk-white-preview-small.jpg'),
(33, 'Morta-Slate', 1860, 'Kitchen tiles', 'uploads/1691410456_01_Morta-Slate-Preview-small.jpg'),
(34, 'Black-saint-laurent', 1900, 'Kitchen tiles', 'uploads/01_black-saint-laurent-preview-small.jpg'),
(35, 'Armani-sun', 145, 'Livingroom tiles', 'uploads/01_armani-sun_preview-small.jpg'),
(36, 'Bottochino-dove', 169, 'Livingroom tiles', 'uploads/01_bottochino-dove-preview-small.jpg'),
(37, 'Folk-diamond', 163, 'Livingroom tiles', 'uploads/01_folk-diamond-preview-small.jpg'),
(38, 'Michelangelo-rust', 146, 'Livingroom tiles', 'uploads/01_michelangelo-rust_preview-small.jpg'),
(39, 'Passion-grey', 180, 'Livingroom tiles', 'uploads/01_passion-grey-preview-small.jpg'),
(40, 'Royal-taupe', 156, 'Livingroom tiles', 'uploads/01_royal-taupe_preview-small.jpg'),
(41, 'Deep-verde', 123, 'Livingroom tiles', 'uploads/1-deep-verde-preview-small.jpg'),
(42, 'Gueen-mint', 111, 'Livingroom tiles', 'uploads/1-gueen-mint-preview-small.jpg'),
(43, '2018-bm', 141, 'Bedroom tiles', 'uploads/01_2018-bm-preview-small.jpg'),
(44, 'Bianco-dove', 161, 'Bedroom tiles', 'uploads/01_bianco-dove-preview-small.jpg'),
(45, 'Breeze-grey-endless', 161, 'Bedroom tiles', 'uploads/01_breeze-grey-endless-preview-small.jpg'),
(46, 'Crv-1147', 156, 'Bedroom tiles', 'uploads/01_crv-1147-&-1127-preview-small.jpg'),
(47, 'Garden-loop', 123, 'Bedroom tiles', 'uploads/01_garden-loop-preview-small.jpg'),
(48, 'Neatstone', 146, 'Bedroom tiles', 'uploads/01_neatstone_-preview-small.jpg'),
(49, 'Ash-brown', 161, 'Bedroom tiles', 'uploads/1-ash-brown-preview (1)-small.jpg'),
(50, 'Saga-Grey', 168, 'Bedroom tiles', 'uploads/1609995717_01-Saga-Grey-Preview-small.jpg'),
(51, '1661 Moroccan', 100, 'Parking tiles', 'uploads/1661 Moroccan.jpg'),
(52, 'Argila Moroccan', 99, 'Parking tiles', 'uploads/Argila Moroccan.jpg'),
(53, 'Ashy Moroccan', 121, 'Parking tiles', 'uploads/Ashy Moroccan.jpg'),
(54, 'Brown Motiff Moroccan', 111, 'Parking tiles', 'uploads/Brown Motiff Moroccan.jpg'),
(55, 'Hilden Moroccan', 120, 'Parking tiles', 'uploads/Hilden Moroccan.jpg'),
(56, 'Nebra Moroccan', 134, 'Parking tiles', 'uploads/Nebra Moroccan.jpg'),
(57, 'Pirna moroccan', 100, 'Parking tiles', 'uploads/pirna moroccan.jpg'),
(58, 'Segal Moroccan', 103, 'Parking tiles', 'uploads/Segal Moroccan.jpg'),
(59, 'Folk-stars', 140, 'Balcony tiles', 'uploads/01_folk-stars-preview-small.jpg'),
(60, 'Lavagna-grey', 145, 'Balcony tiles', 'uploads/01-lavagna-grey-preview-small.jpg'),
(61, 'Slack-stone-grey', 132, 'Balcony tiles', 'uploads/01-slack-stone-grey-preview-small.jpg'),
(62, 'Slack-stone-natural', 143, 'Balcony tiles', 'uploads/01-slack-stone-natural-preview-small.jpg'),
(63, 'Ash-brown', 150, 'Balcony tiles', 'uploads/1-ash-brown-preview-small.jpg'),
(64, 'White-Sand', 156, 'Balcony tiles', 'uploads/1-white-sand-preview-small.jpg'),
(65, 'Desert-gris', 132, 'Balcony tiles', 'uploads/desert-gris-preview-small.jpg'),
(66, 'Panero-gris', 162, 'Balcony tiles', 'uploads/panero-gris_preview-small.jpg'),
(67, 'CRV-3130', 131, 'Wooden Floor tiles', 'uploads/01_crv-3130-&-crv-3131-decor-&-crv-3131-preview-small.jpg'),
(68, 'CRV-3136', 154, 'Wooden Floor tiles', 'uploads/01_crv-3136-&-crv-3137-decor-&-3137--preview-small.jpg'),
(69, 'CRV-curly-amber', 142, 'Wooden Floor tiles', 'uploads/01_crv-curly-amber_-preview-small.jpg'),
(70, 'CRV-knotty-pine', 123, 'Wooden Floor tiles', 'uploads/01_crv-knotty-pine_preview-small.jpg'),
(71, 'Ironwood-verde', 120, 'Wooden Floor tiles', 'uploads/01_ironwood-verde_preview-small.jpg'),
(72, 'Wood-natural', 127, 'Wooden Floor tiles', 'uploads/01_wood-natural-preview-small.jpg'),
(73, 'Pearl-wash', 117, 'Wooden Floor tiles', 'uploads/crv-pearl-wash-preview-small.jpg'),
(74, 'Ironwood-brown_beige', 119, 'Wooden Floor tiles', 'uploads/ironwood-brown_beige-preview-small.jpg'),
(75, 'Calcutta-livid', 134, 'Stone Cladding tiles', 'uploads/calcutta-livid-p-small.jpg'),
(76, 'Calcutta-prism', 130, 'Stone Cladding tiles', 'uploads/calcutta-prism-p-small.jpg'),
(77, 'Cardo-thunder', 133, 'Stone Cladding tiles', 'uploads/cardo-thunder-p-small.jpg'),
(78, 'Cementi-dove', 123, 'Stone Cladding tiles', 'uploads/cementi-dove-p-small.jpg'),
(79, 'Cementi-verde', 134, 'Stone Cladding tiles', 'uploads/cementi-verde-p-small.jpg'),
(80, 'Cotta-red', 154, 'Stone Cladding tiles', 'uploads/cotta-red-p-small.jpg'),
(81, 'Cotta-varde', 144, 'Stone Cladding tiles', 'uploads/cotta-varde-p-small.jpg'),
(82, 'Crystone-sand', 114, 'Stone Cladding tiles', 'uploads/crystone-sand-p-small.jpg'),
(83, 'Barberino-negro', 100, 'Exterior Wall tiles', 'uploads/01_barberino-negro-preview-small.jpg'),
(84, 'Copos-crema', 102, 'Exterior Wall tiles', 'uploads/01_copos-crema_preview-small.jpg'),
(85, 'Salted-concrete-grey', 108, 'Exterior Wall tiles', 'uploads/01_salted-concrete-grey-preview-small.jpg'),
(86, 'Salted-concrete-rust', 106, 'Exterior Wall tiles', 'uploads/01_salted-concrete-rust-preview-small.jpg'),
(87, 'Salted-concrete-ash', 111, 'Exterior Wall tiles', 'uploads/01-salted-concrete-ash-preview-small.jpg'),
(88, 'slack-stone-grey', 123, 'Exterior Wall tiles', 'uploads/01-slack-stone-grey-preview-small.jpg'),
(89, 'Cocoa-mud', 132, 'Exterior Wall tiles', 'uploads/1-cocoa-mud-preview-small.jpg'),
(90, 'Lime-stoe', 116, 'Exterior Wall tiles', 'uploads/1-lime-stoe-preview-small.jpg'),
(91, 'Majestic Almond Plain', 123, 'Vitrified tiles', 'uploads/Majestic Almond Plain.jpg'),
(92, 'Majestic Beige', 150, 'Vitrified tiles', 'uploads/Majestic Beige.jpg'),
(93, 'Majestic Bianco', 140, 'Vitrified tiles', 'uploads/Majestic Bianco.jpg'),
(94, 'Majestic Copper', 132, 'Vitrified tiles', 'uploads/Majestic Copper.jpg'),
(95, 'Majestic Crema', 127, 'Vitrified tiles', 'uploads/Majestic Crema.jpg'),
(96, 'Majestic Grey', 142, 'Vitrified tiles', 'uploads/Majestic Grey.jpg'),
(97, 'Majestic Kota Plain', 159, 'Vitrified tiles', 'uploads/Majestic Kota Plain.jpg'),
(98, 'VANTA BLACK', 152, 'Vitrified tiles', 'uploads/VANTA BLACK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `sr.no` int(200) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`sr.no`, `f_name`, `l_name`, `address`, `message`) VALUES
(1, 'deep', 'malasana', 'devaliya', 'request for price\r\n'),
(2, 'chavda ', 'hardik', 'tikar', 'price done 1920'),
(3, 'Hardev', 'zala', 'morbi', 'under 300'),
(4, 'Hardeep', 'patel', 'rajkot', 'please deal in 125'),
(5, 'dev', 'patel', 'UAE', 'can you deal under 456'),
(6, 'alex', 'bairstow', 'England', '123'),
(7, 'Virat', 'Kohli', 'Mumbai', 'confirm in 451'),
(8, 'Akshar', 'patel', 'Naliyad ', 'deal confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(55) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `name`, `email`, `address`, `mobile`, `password`) VALUES
(9, 'deep', 'deep@gmail.com', 'jdaskjkds', '8866155650', '123'),
(10, 'hardik', 'hardik12@gmail.com', 'tikar', '1234567890', 'hardik'),
(12, 'deep', 'tiger@gmail.com', 'zoo', '1234567891', '789'),
(13, 'deep', 'tarak@gmail.com', 'dddgdg', '8866155650', '123'),
(16, 'wegwgyf', 'habibia@gmail.com', 'devaloiya', '8866155650', '123'),
(17, 'wehdbhjwb', 'noting@gmail.com', 'morbi', '1234567890', '123'),
(18, 'deep', 'exim@gmail.com', 'morbi', '8866155650', '456'),
(19, 'elon musk', 'elon@gmail.com', 'space', '7894561238', '123'),
(20, 'hardip', 'hardip@gmail.com', 'halvad', '7069271192', '123'),
(21, 'BILL GETS', 'bill@gmail.com', 'usa', '8866155650', '123'),
(22, 'DEEP', 'malasanadeep@gmail.com', 'devaliya ', '8866155650', 'admin'),
(23, 'akshay', 'akshay@gmail.com', 'halvad', '1234566789', '123');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `is_wishlisted` tinyint(1) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `prod_id`, `is_wishlisted`, `user_email`) VALUES
(58, 29, 1, 'elon@gmail.com'),
(59, 30, 1, 'elon@gmail.com'),
(64, 61, 1, 'elon@gmail.com'),
(65, 62, 1, 'elon@gmail.com'),
(68, 98, 1, 'deep@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sr.no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `sr.no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
