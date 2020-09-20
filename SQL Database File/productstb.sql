-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 01:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `productstb`
--

CREATE TABLE `productstb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productstb`
--

INSERT INTO `productstb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(26, 'Men Shirts', 1000, 'm.jpg'),
(27, 'Women Clothes', 1500, 'wom.jpg'),
(28, 'Kids Clothes', 2000, 'k.jpg'),
(29, 'Watches', 5000, 'wa.jpg'),
(30, 'Jazaa Fried Onion - 400g', 153, 'chawal.jpg'),
(31, 'Jazaa Premium Basmati Ric', 216, 'Basmati.jpg'),
(32, 'Mezan Cooking Oil Stand u', 1320, 'Mezan.jpg'),
(33, 'Ahmed Ginger Paste', 180, 'past.jpg'),
(34, 'Cotton Dress Paint Shirt', 1500, 'Casual Men Shirts.jpg'),
(35, 'Cotton Shirts', 2000, 'Cotton.jpg'),
(36, 'Shalwar Qameez', 2000, 'SQ.jpg'),
(37, '3-Piece-Suit-Slim-Fit', 10000, 'QP.jpg'),
(38, 'Snakers Mens Fashion', 7000, 'JOGGERS.jpg'),
(39, 'Shoes-Men-Loafers', 1500, 'ML.jpg'),
(40, 'Men Analog Watch', 1320, 'mw.jpg'),
(41, 'Digital Watch', 3000, 'DW.jpg'),
(42, 'women Suites', 2500, 'WS.jpg'),
(43, 'Women Bridal Dress', 15000, 'BD.jpg'),
(44, 'Shirt-Touser', 2000, 'ST.jpg'),
(45, 'Ajrak Embroidered Three P', 4000, 'AJ.jpg'),
(46, 'Women NIKE Shoes', 1500, 'WNS.jpg'),
(47, 'Female Bages with 5 Piece', 5000, 'WLB.jpg'),
(48, 'Women Wristwatch', 1300, 'WW.jpg'),
(49, 'Women Jewellerys Sets', 10000, 'WJ.jpg'),
(50, 'Toddler Boy Clothes Summe', 1000, 'MSC.jpg'),
(51, 'Children\'s Garment Spring', 1500, 'CGSP.jpg'),
(52, 'Full Set Like Shirt Paint', 2000, 'k.jpg'),
(53, 'Kids Shoes Boys Sports Ma', 5000, 'MSH.jpg'),
(54, 'Baby Dress Girls Clothing', 500, 'GASP.jpg'),
(55, 'Grils Dress Autumn Spring', 700, 'FSF.jpg'),
(56, 'Birthday Female Girls Dre', 2500, 'BFG.jpg'),
(57, 'Kids Shoes Girls 2020 New', 1000, 'GSAN.jpg'),
(58, 'Carrots', 100, 'carrots.jpg'),
(59, 'Onion', 80, 'onion.jpg'),
(60, 'Apple', 250, 'apple.jpg'),
(61, 'Oranges', 100, 'orange.jpg'),
(62, 'Surf Excel', 500, 'se.jpg'),
(63, 'National Tomato Ketchup', 200, 'to.jpeg'),
(64, 'Parfums Franco For Man', 1000, 'MPF.jpg'),
(65, 'Parfums For Female', 1500, 'wop.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productstb`
--
ALTER TABLE `productstb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productstb`
--
ALTER TABLE `productstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
