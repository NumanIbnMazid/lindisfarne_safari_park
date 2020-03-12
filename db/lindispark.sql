-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 12:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lindispark`
--

-- --------------------------------------------------------

--
-- Table structure for table `gelary`
--

CREATE TABLE `gelary` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gelary`
--

INSERT INTO `gelary` (`id`, `image`, `description`) VALUES
(4, 'baldeagle.jpg', 'The Bald Eagle'),
(5, 'elephant.jpg', 'The Elephant'),
(6, 'giantpandacub.jpg', 'The Giant Panda'),
(7, 'cheetah.jpg', 'The Cheetah'),
(8, 'leopard.jpg', 'The Leopard'),
(9, 'scarletmacaw.jpg', 'The Scarlet Macaw'),
(10, 'siberiantiger.jpg', 'The Siberian Tiger'),
(11, 'egret.jpg', 'The Egret'),
(12, 'seagull.jpg', 'The Seagull');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_total` int(30) NOT NULL,
  `date_of_purchase` varchar(20) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_total`, `date_of_purchase`, `customer_id`) VALUES
(4, 4300, '2017-07-31 12:41:02', 5),
(5, 4700, '2017-07-31 12:41:47', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `order_quantity` int(100) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `unit_price`, `order_quantity`, `subtotal`) VALUES
(4, 4, 4, 800, 1, 800),
(5, 4, 8, 2500, 1, 2500),
(6, 4, 9, 500, 2, 1000),
(7, 5, 4, 800, 2, 1600),
(8, 5, 5, 300, 2, 600),
(9, 5, 6, 1500, 1, 1500),
(10, 5, 9, 500, 2, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(60) NOT NULL,
  `stock_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `stock_quantity`) VALUES
(4, 'Adults', 800, 'adult.png', 'Regular ticket for Adults', 40),
(5, 'Childrens', 300, 'childrens.png', 'Regular ticket for Children', 40),
(6, 'Families', 1500, 'families.png', 'Regular ticket for Families', 40),
(7, 'Old Age Pensioners (OAP)', 700, 'oap.png', 'Regular ticket for Old Age Pensioners (OAP)', 40),
(8, 'VIP', 2500, 'vip.png', 'VIP visit includes Elephant feeding, Off-road Experience', 15),
(9, 'Summer Special', 500, 'summer.png', 'Summer Special offer 30% off', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1' COMMENT '0- Admin, 1-Visitor',
  `name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `gender` varchar(3) NOT NULL,
  `age` int(3) NOT NULL,
  `post_ad` varchar(30) NOT NULL,
  `post_cd` int(10) NOT NULL,
  `more` varchar(70) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `l_name`, `gender`, `age`, `post_ad`, `post_cd`, `more`, `email`, `password`) VALUES
(4, 0, 'Admin', '', '', 0, '', 0, '', 'admin@lindispark.com', '123'),
(5, 1, 'Numan', 'Numan Ibn Mazid', 'M', 22, 'Dhaka', 1205, 'Hi, I am Numan Ibn Mazid', 'numanworkstation@gmail.com', '12345'),
(6, 1, 'Mazid', 'Abdul Mazid', 'M', 55, 'Manikganj', 1800, 'Hi, I am Abdul Mazid', 'mazid@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gelary`
--
ALTER TABLE `gelary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gelary`
--
ALTER TABLE `gelary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
